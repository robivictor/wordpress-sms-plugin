<?php
require_once( $_SERVER['DOCUMENT_ROOT'] . '/ArifSMS/wp-load.php');
global $wpdb;

function get_Message(){
    $response = '';
    // get message from SMSsync then save it to database
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/ArifSMS/wp-load.php');
    include_once 'MyDataBase.php';
    global $wpdb;

    $config_table = new MyDataBase('sms_config');
    $result = (array) $config_table->get_by(array('conf_type'=>'Secret'))[0];
    $Secret_Code = $result['conf_value'];

    $from = $_POST['from'];
    $message_to = $_POST['sent_to'];
    $message = $_POST['message'];
    $secret = $_POST['secret'];
    $message_id = $_POST['message_id'];
    $device_id = $_POST['device_id'];

    if($secret == $Secret_Code){
        $message_table = new MyDataBase('sms_messages');
        write_message_to_file(json_encode(array('message_id'=>$message_id,'device_id'=>$device_id,'message_from'=>$from,'message'=>$message,'message_type'=>0)));
        $message_table->insert(array('message_id'=>$message_id,'device_id'=>$device_id,'message_from'=>$from,'message'=>$message,'message_to'=>$message_to,'message_sent'=>1));
        $response = json_encode(["payload"=> ["success"=>false,"error" => false]]);
    }
    send_response($response);
}
function send_instant_message($to,$message)
{
    $config_table = new MyDataBase('sms_config');
    $result = (array) $config_table->get_by(array('conf_type'=>'Secret'))[0];
    $Secret_Code = $result['conf_value'];
    $s = true;
    $reply[0] = ["to" => $to,"message" => $message,"uuid" => "1ba368bd-c467-4374-bf28"];
    // Send JSON response back to SMSsync
    $response = json_encode(["payload"=>[
            "success"=>$s,
            "task"=>"send",
            "secret" => $Secret_Code,
            "messages"=>array_values($reply)]
        ]);
    send_response($response);
}
function send_task(){
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');
    include_once 'MyDataBase.php';
    global $wpdb;
    // Get the secrete code from the database
    $config_table = new MyDataBase('sms_config');
    $result = (array) $config_table->get_by(array('conf_type'=>'Secret'))[0];
    $Secret_Code = $result['conf_value'];

    if (isset($_GET['task']) AND $_GET['task'] == 'send')
    {
        $msgs = array();
        $message_table = new MyDataBase('sms_messages');  // connect to a table that contains messages to be sent
        $Pending_Messages = $result = (array) $message_table->get_by(array('message_sent'=>1));
        foreach($Pending_Messages as $msg){
            $the_msg = (array) $msg;
            array_push($msgs,["to"=>$the_msg['message_to'],"message"=>$the_msg['message'],"uuid" => "1ba368bd-c467-4374-bf268"]);
            $message_table->update(array('message_sent'=>0),array('message_id'=>$the_msg['message_id']));
        }
        //delete all pending messages after sending to SMSSync
        // Send JSON response back to SMSsync
        $response = json_encode(["payload"=>["success"=>true,"task"=>"send","secret" => $Secret_Code,"messages"=>array_values($msgs)]]);
        send_response($response);
    }
}
function send_response($response){
    // Avoid caching
    header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
    header("Content-type: application/json; charset=utf-8");
    echo $response;
}
function write_message_to_file($message)
{
    $myFile = "test.txt";
    $fh = fopen($myFile, 'a') or die("can't open file");
    @fwrite($fh, $message);
    @fclose($fh);
}
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //write_message_to_file(json_encode($_POST));
    get_Message();
}else{
    //write_message_to_file(json_encode($_GET));
    send_task();
}
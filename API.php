<?php
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');
global $wpdb;

function get_Message(){
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');
    include_once 'MyDataBase.php';
    global $wpdb;

    $config_table = new MyDataBase('sms_config');
    $result = (array) $config_table->get_by(array('conf_type'=>'Secret'))[0];
    $Secret_Code = $result['conf_value'];

    $from = $_POST['from'];
    $message = $_POST['message'];
    $secret = $_POST['secret'];
    $message_id = $_POST['message_id'];
    $device_id = $_POST['device_id'];

    if($secret == $Secret_Code){
        if ((strlen($from) > 0) AND (strlen($message) > 0)  AND (strlen($message_id) > 0) AND (strlen($device_id) > 0)){
            $message_table = new MyDataBase('sms_messages');
            $message_table->insert(array('message_id'=>$message_id,'device_id'=>$device_id,'message_from'=>$from,'message'=>$message,'message_type'=>0));
        }
    }
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
function send_task()
{
    /**
     * Comment the code below out if you want to send an instant
     * reply as SMS to the user.
     *
     * This feature requires the "Get reply from server" checked on SMSsync.
     */
    if (isset($_GET['task']) AND $_GET['task'] == 'send')
    {
        $m = "Sample Task Message 33";
        $f = "+251916417951";
        $s = "true";
        $reply[0] = [
            "to" => $f,
            "message" => $m,
            "uuid" => "1ba368bd-c467-4374-bf268"
        ];
        // Send JSON response back to SMSsync
        $response = json_encode(["payload"=>["success"=>$s,"task"=>"send","secret" => "123456","messages"=>array_values($reply)]]);
        send_response($response);
    }
}
function send_response($response)
{
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
    write_message_to_file(json_encode($_POST));
    if(isset($_GET['task']) AND $_GET['task'] === 'result'){
       /// get_sms_delivery_report();
    }else if( isset($_GET['task']) && $_GET['task'] === 'sent'){
       // get_sent_message_uuids();
    }else{
        get_Message();
    }
}else{
    write_message_to_file(json_encode($_GET));
    echo json_encode('dfsfdgdf');
    send_task();
}
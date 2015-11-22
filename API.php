<?php
require_once('../../../wp-load.php');
global $wpdb;
//write_message_to_file(json_encode($_POST));
function get_Message()
{
    // get message from SMSsync then save it to database
    require_once('../../../wp-load.php');
    include_once 'MyDataBase.php';
    global $wpdb;

    $message_id = $_POST['message_id'];
    $device_id = $_POST['device_id'];
    $deleted = '0';
    $msg_from = $_POST['from'];
    $message = $_POST['message'];
    $message_to = $_POST['sent_to'];
    $pending = '0';
    $expire_date = date("Y-m-d h:m:s",time());
    $incoming = '1';
    $created_by = '0';
    $updated_by = '0';
    $update_date = date("Y-m-d h:m:s",time());
    $sent_timestamp = date("Y-m-d h:m:s",$_POST['sent_timestamp']);

    //write_message_to_file(json_encode($update_date));
    $message_table = new MyDataBase('messages');
    $message_table->insert(array('message_id' => $message_id, 'device_id' => $device_id, 'deleted' => $deleted, 'ms_from' => $msg_from, 'message' => $message, 'sent_to' => $message_to, 'pending' => $pending, 'expire_date' => $expire_date, 'incoming' => $incoming, 'created_by' => $created_by, 'updated_by' => $updated_by, 'update_date' => $update_date, 'sent_timestamp' => $sent_timestamp));
    $response = json_encode(["payload" => ["success" => true, "error" => false]]);
    send_response($response);
}

function send_task()
{
    require_once('../../../wp-load.php');
    include_once 'MyDataBase.php';
    global $wpdb;
    // Get the secrete code from the database
   // $config_table = new MyDataBase('sms_config');
   // $result = (array)$config_table->get_by(array('conf_type' => 'Secret'))[0];
   // $Secret_Code = $result['conf_value'];
    $Secret_Code = '123456';
    if (isset($_GET['task']) AND $_GET['task'] == 'send') {
        $msgs = array();
        $message_table = new MyDataBase('messages');  // connect to a table that contains messages to be sent
        $Pending_Messages = $result = (array)$message_table->get_by(array('pending' => 1,'incoming'=> 0));
        foreach ($Pending_Messages as $msg) {
            $the_msg = (array)$msg;
            $Current_Time = date("m-d-y G:i:s");
            if(strtotime($the_msg['expire_date'])>$Current_Time){
                array_push($msgs, ["to" => $the_msg['sent_to'], "message" => $the_msg['message'], "uuid" => $the_msg['message_id']]);
            }
            //delete all pending messages after sending to SMSSync
            $message_table->update(array('pending' => 0), array('message_id' => $the_msg['message_id']));
        }
        // Send JSON response back to SMSsync
        $response = json_encode(["payload" => ["success" => true, "task" => "send", "secret" => $Secret_Code, "messages" => array_values($msgs)]]);
        write_message_to_file($response);
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
    fwrite($fh, $message);
    fclose($fh);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    get_Message();
} else {
    send_task();
}
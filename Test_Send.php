<?php
require_once('../../../wp-load.php');
include_once 'MyDataBase.php';
global $wpdb;

if(isset($_POST) && isset($_POST['Send'])){
    $message_id = '12121';
    $device_id = '22';
    $deleted = '0';
    $msg_from = $_POST['msg_from'];
    $message = $_POST['msg_body'];
    $message_to = $_POST['msg_to'];
    $pending = '1';
    $expire_date = date("Y-m-d h:m:s",time());
    $incoming = '0';
    $created_by = '0';
    $updated_by = '0';
    $update_date = date("Y-m-d h:m:s",time());
    $sent_timestamp = date("Y-m-d h:m:s",time());

    //write_message_to_file(json_encode($update_date));
    $message_table = new MyDataBase('messages');
    $message_table->insert(array('message_id' => $message_id, 'device_id' => $device_id, 'deleted' => $deleted, 'ms_from' => $msg_from, 'message' => $message, 'sent_to' => $message_to, 'pending' => $pending, 'expire_date' => $expire_date, 'incoming' => $incoming, 'created_by' => $created_by, 'updated_by' => $updated_by, 'update_date' => $update_date, 'sent_timestamp' => $sent_timestamp));
    $response = json_encode(["payload" => ["success" => true, "error" => false]]);
    print_r($response);
}

?>
<form method="post" action="">
    Phone:<input type="text" name="msg_to"><br>
    Msg_Body:<input type="text" name="msg_body" value="This is message body"><br>
    Msg_From:<input type="text" name="msg_from" value="0916417951"><br>
    <input type="submit" name="Send" value="Send">
</form>

<?php
require_once('../../../wp-load.php');
include_once 'MyDataBase.php';
global $wpdb;
$message_id = "BENGEPOS";
$message_table = new MyDataBase('messages');
$message_table->insert(array('message_id'=>$message_id,'device_id'=>$message_id,'deleted'=>$message_id,'ms_from'=>$message_id,'message'=>$message_id,'sent_to'=>$message_id,'pending'=>$message_id,'expire_date'=>$message_id,'incoming'=>$message_id,'created_by'=>$message_id,'updated_by'=>$message_id,'update_date'=>$message_id,'sent_timestamp'=>$message_id));
$response = json_encode(["payload"=> ["success"=>false,"error" => false]]);


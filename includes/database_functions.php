<?php
function insert_message($from,$message,$time_stamp,$message_id,$sent_to,$device_id){
    global $wpdb;
    $wpdb->show_errors();
    $wpdb ->array_insert(
        'messages',
        array(
            'phone_number' => $from,
            'message_id' => $message_id,
            'message' => $message,
            'date' => $time_stamp,
            'device_id' => $device_id,
            'sent_to' => $sent_to
        )
    );
}

function insert_user($name,$number){
    global $wpdb;
    //$wpdb->show_errors();
    $wpdb ->array_insert(
        'phone_list',
        array(
            'name' => $name,
            'number' => $number
        ),array(
        '%s',
        '%s'
    )
    );
}
?>
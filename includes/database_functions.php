<?php

function insert_message($from,$message,$time_stamp,$message_id,$sent_to,$device_id){
    global $mpdb;
    $mpdb ->array_insert(
        'messages',
        array(
            'phone_number' => $from,
            'message_id' => $message_id,
            'message' => $message,
            'date' => $time_stamp
        ),
        array(
            '%s',
            '%d'
        )
    );
}

function insert_user($name,$number){
    global $mpdb;
    $mpdb ->array_insert(
        'phone_list',
        array(
            'name' => $name,
            'number' => $number
        ),
        array(
            '%s',
            '%d'
        )
    );
}
?>
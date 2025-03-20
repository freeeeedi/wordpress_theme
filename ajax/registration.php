<?php

function ajax_registration() {
    
    $result = [];
    $userdata = [
        'user_login' => $_POST['login'],
        'user_pass' => $_POST['password'],
        'user_email' => $_POST['email'],
    ];
    
    $user_id = wp_insert_user($userdata);
    $result = $user_id ? 'success' : 'error';

    wp_send_json($result);
}
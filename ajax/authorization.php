<?php

function ajax_authorization() {
    
    $creds = [
        'user_login' => $_POST['login'],
        'user_password' => $_POST['password'],
        'remember' => true
    ];
    
    $user = wp_signon($creds, false);
    $result = is_wp_error($user) ? 'error' : 'success';
    
    wp_send_json($result);
}
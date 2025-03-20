<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    wp_head();
    ?>
</head>
<body>
    <?php
    if (!is_user_logged_in()) {
    ?>
        <div class="header-buttons">
            <a href="/auth" class="login-button">Авторизация</a>
        </div>
    <?php
    }
    ?>
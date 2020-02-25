<?php
    if($_POST['password'] == 'password' && $_POST['username'] == 'username') {
        session_start();
        $_SESSION['username']='username';
        redirect("list.php");
    } else {
        echo 'Login failed';
    }
    function redirect($url) {
        ob_start();
        header('Location: '.$url);
        ob_end_flush();
    die();
    }
?>

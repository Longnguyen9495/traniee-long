<?php
session_start();
    // $_SESSION['name'] = 'nguyễn thành long';
    // echo $_SESSION['name'];
    // session_destroy();
    function put($key, $value){
        return $_SESSION[$key] = $value;
    }
    echo put('long', 'ádasdasd');
?>


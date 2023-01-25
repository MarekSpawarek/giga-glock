<?php
    $conn = mysqli_connect('localhost', 'root', '', 'alarms');

    

    $sql = "select password from users where password = '$passwd';";
    $result = mysqli_query($conn, $sql);


?>
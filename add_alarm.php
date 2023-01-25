<?php
    $conn = mysqli_connect('localhost', 'root', 'siema', 'alarms');

    

    $sql = "select password from users where password = '$passwd';";
    $result = mysqli_query($conn, $sql);


?>
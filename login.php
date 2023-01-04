<?php
    // ini_set('display_errors', 0);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $passwd = sha1($_POST['passwd']);

    $sql = "select password from users where password = '$passwd';";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0)
    {
        $effect = true;
    }
    else
    {
        $effect = false;
        // echo "Invalid password.";
    }
    
?>
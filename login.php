<?php
    $servername = "localhost";
    $username = "root";
    $password = "siema";
    $dbname = "users";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
	    $passwd = sha1($_POST['passwd']);
    	$sql = "select password from users where password = '$passwd';";
    	$result = mysqli_query($conn, $sql);
    	
        if (mysqli_num_rows($result) > 0)
    	{
        	$effect = true;
    	}
    }
    else
    {
        $effect = false;
    }
    
?>

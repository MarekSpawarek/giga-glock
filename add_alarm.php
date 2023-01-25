<?php
    $date = $_POST['dueDate'];
    $time = $_POST['dueTime'];
    
    $conn = mysqli_connect('localhost', 'root', '', 'alarms');  
    $sql = "insert into alarms (due, hms) values ('$date', '$time');";
    $result = mysqli_query($conn, $sql);

    $sql1 = "select lap, hours, minutes, seconds from laps;";
    $result1 = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result1);

    if (mysqli_num_rows($result1) > 0)
    {
        // output data of each row
        while($row = mysqli_fetch_assoc($result1))
        {
            echo "id: " . $row["lap"]. " - time: " . $row["hours"]. ":" . $row["minutes"]. ":" . $row["seconds"]. "<br>";
        }
    }
?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $hours = $_POST['hoursOutput'];
        $minutes = $_POST['minutesOutput'];
        $seconds = $_POST['secondsOutput'];

        $conn = mysqli_connect('localhost', 'root', '', 'stopwatch');
        $sql = "insert into laps (hours, minutes, seconds) values ($hours, $minutes, $seconds);";
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
    }
?>
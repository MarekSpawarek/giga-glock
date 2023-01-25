<?php
    $conn = mysqli_connect('localhost', 'root', '', 'stopwatch');

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $hours = $_POST['hoursOutput'];
        $minutes = $_POST['minutesOutput'];
        $seconds = $_POST['secondsOutput'];

        $sql = "insert into laps (hours, minutes, seconds) values ($hours, $minutes, $seconds);";
    	$result = mysqli_query($conn, $sql);

        $sql = "select id, hours, minutes, seconds from laps;";
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result))

        echo "
            <div id='lapTable' class='container'>
                <table class='table table-dark table-hover'>
                    <thead>
                        <tr>
                            <th>Lap</th>
                            <th>Time</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            $row["id"];
                        </tr>
                        
                        <tr>
                            $row["hours"] : $row["minutes"] : $row["seconds"];
                        </tr>
                    </tbody>
                </table>
            </div>
        ";
    }
?>
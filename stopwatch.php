<?php
    $conn = mysqli_connect('localhost', 'root', 'siema', 'stopwatch');

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $hours = $_POST['hoursOutput'];
        $minutes = $_POST['minutesOutput'];
        $seconds = $_POST['secondsOutput'];

        $sql = "insert into laps (hours, minutes, seconds) values ($hours, $minutes, $seconds);";
    	$result = mysqli_query($conn, $sql);


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
                            $id
                        </tr>
                        
                        <tr>
                            $hours : $minutes : $seconds
                        </tr>
                    </tbody>
                </table>
            </div>
        ";
    }
?>
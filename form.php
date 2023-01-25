<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/stylus.css">
    </head>

    <body>
        <!-- login form -->
        <div class="topbar container-fluid p-2 bg-warning d-flex justify-content-end">
            <form action="index.php" method="post">
                <label class="me-2" for="passwd"> Login: </label><input type="password" name="passwd" class="form">
                <input type="submit" name="login" class="btn btn-primary" value="&#8594">
            </form>
        </div>

        <!-- navbar -->
        <div class="dropdown mt-4 ms-4">
            <button type="button" class="btn btn-outline-warning dropdown-toggle d-flex align-items-center font-open-sans" data-bs-toggle="dropdown">
                <i class="fa fa-bars me-3" aria-hidden="true"></i> MENU
            </button>
            
            <ul class="dropdown-menu">
                <li id="navbarEntryClock"> <a class="dropdown-item"> Clock </a> </li>    
                <li id="navbarEntryAlarm"> <a class="dropdown-item"> Alarm </a> </li>
                <li id="navbarEntryStopwatch"> <a class="dropdown-item"> Stopwatch </a> </li>
            </ul>
        </div>

        <!-- backrgound change buttons -->
        <button class="btn-previous"> <-- </button>
        <button class="btn-next"> --> </button>

        <!-- time and date -->
        <div id="calendar">
            <div class="date"></div>
            <div class="clock"></div>
        </div>
        
        <!-- alarms -->
        <div id="alarms">
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#setAlarmModal"> Add alarm </button>
            <!-- The Modal -->
            <div class="modal fade" id="setAlarmModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"> Set an alarm </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form class="d-flex justify-content-center" action="" method="post">
                                <input type="date" name="" id="">
                                <input type="time" name="" id="">
                                <input type="submit" class="btn btn-success" value="Set">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"> Close </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- stopwatch -->
        <div id="stopwatch">
            <div id="contact-form">
                <form action="stopwatch.php" method="post" name="contact" class="stopwatch-display">
                    <output id="stopwatchBoxHours" name="hoursOutput"></output>
                    <output id="stopwatchBoxMinutes" name="minutesOutput"></output>
                    <output id="stopwatchBoxSeconds" name="secondsOutput"></output>
                    <div class="d-grid"> <input type="submit" value="Lap" class="btn btn-block btn-outline-warning rounded-pill"> </div>
                </form>
            </div>
                    
            <div class="d-flex justify-content-center">
                <button type="button" onclick="timeStart()" class="start-stopwatch btn btn-outline-warning rounded-pill me-3" style="text-align: center;"> start </button>
                <button type="button" onclick="timeStop()" class="pause-stopwatch btn btn-outline-warning rounded-pill me-3" style="text-align: center;"> pause </button>
                <button type="button" onclick="timeReset()" class="reset-stopwatch btn btn-outline-warning rounded-pill" style="text-align: center;"> reset </button>
            </div>
        </div>

        <!-- lap table from stopwatch.php goes here -->

        <!-- js libs -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/get_time_date.js"></script>
        <script src="js/script.js"></script>
        <script src="js/stopwatch.js"></script>
    </body>
</html>
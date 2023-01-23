<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
    </head>

    <body>
        <div class="topbar container-fluid p-2 bg-warning d-flex justify-content-end">
            <form action="index.php" method="post">
                <label class="me-2" for="passwd"> Login: </label><input type="password" name="passwd" class="form">
                <input type="submit" name="login" class="btn btn-primary" value="&#8594">
            </form>
        </div>

        <div class="dropdown mt-4 ms-4">
            <button type="button" class="btn btn-outline-warning dropdown-toggle d-flex align-items-center font-open-sans" data-bs-toggle="dropdown">
                <i class="fa fa-bars me-3" aria-hidden="true"></i> MENU
            </button>
            
            <ul class="dropdown-menu">
                <li id="navbarEntryAlarm" onclick="leaveAlarms()"> <a class="dropdown-item"> Alarm </a> </li>
                <li id="navbarEntryStopwatch" onclick="leaveStopwatch()"> <a class="dropdown-item"> Stopwatch </a> </li>
            </ul>
        </div>

        <div id="calendar">
            <div class="date"></div>
            <div class="clock"></div>
        </div>

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

        <div id="stopwatch">
            <p>stopwatch</p>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/get_time_date.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
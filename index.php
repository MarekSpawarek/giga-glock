<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Gigaclock. </title>

        <link rel="icon" type="image/png" href="img/icon.png">
        <link rel="stylesheet" href="css/style.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.css">

    <body>        
        <div class="dropdown mt-4 ms-4">
            <button type="button" class="btn btn-outline-warning dropdown-toggle d-flex align-items-center font-open-sans" data-bs-toggle="dropdown">
                <i class="fa fa-bars me-3" aria-hidden="true"></i> MENU
            </button>
            
            <ul class="dropdown-menu">
                <li> <a class="dropdown-item" href="index.html"> Clock </a> </li>
                <li> <hr class="dropdown-divider"> </li>
                <li> <a class="dropdown-item" href="stopwatch.html"> Stopwatch </a> </li>
                <li> <a class="dropdown-item" href="timer.html"> Timer </a> </li>
            </ul>
        </div>
        
        <div class="date-time font-open-sans">
            <div class="glassmorphism-div" style="text-align: center;">
                <div> <p class="date h2"></p> </div>
                <div> <h1 class="clock display-1"></h1> </div>
                <div id="timestamp"></div>
            </div>

            <!-- <div class="glassmorphism-div mt-5">
                <p id="trackTitle" class="h3 mb-4"></p>

                <div class="d-flex justify-content-center">
                    <button type="button" onclick="rewindAudio()" class="btn btn-outline-warning rounded-pill me-3" style="text-align: center;"> <i class="fa fa-fast-backward" aria-hidden="true"></i> </button>
                    <button type="button" onclick="unpauseAudio()" class="btn btn-outline-warning rounded-pill me-3" style="text-align: center;"> <i class="fa fa-play" aria-hidden="true"></i> </button>
                    <button type="button" onclick="pauseAudio()" class="btn btn-outline-warning rounded-pill me-3" style="text-align: center;"> <i class="fa fa-pause" aria-hidden="true"></i> </button>
                    <button type="button" onclick="skipAudio()" class="btn btn-outline-warning rounded-pill" style="text-align: center;"> <i class="fa fa-fast-forward" aria-hidden="true"></i> </button>
                </div>

                <p id="playbackState" class="h6 mt-4" style="text-align: center;"></p>
            </div> -->
        </div>
       
        <div class="background-buttons">
            <button type="button" class="btn-previous btn btn-outline-warning rounded-pill" style="width:40px"> <i class="fa fa-angle-left"></i> </button>
            <button type="button" class="btn-next btn btn-outline-warning rounded-pill" style="width:40px"> <i class="fa fa-angle-right"></i> </button>
        </div>

        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/howler.js"></script>
        <script src="js/script.js"></script>
        <script src="js/date_time.js"></script>
        <!-- <script src="js/clock.js"></script> -->
        <!-- <script src="js/date.js"></script> -->

        <?php
            Include('main.php');
            // Include('timestamp.php');
        ?>
    </body>
</html>
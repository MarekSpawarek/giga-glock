<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Gigaclock. </title>
    </head>
    
    <body>
        <div class="topbar">
            <form action="login.php" method="post" target="frame">
                <label for="passwd"> Password: </label><input type="text" name="passwd">
                <input type="submit" value="&#8594">
            </form>
        </div>

        <div class="clock"></div>
        <div class="date"></div>

        <iframe name="frame" frameborder="0" style="display: none;"></iframe>

        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
        <script src="js/get_time_date.js"></script>

        <?php
            // Include('main.php');
        ?>
    </body>
</html>
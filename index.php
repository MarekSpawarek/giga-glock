<?php
    include 'login.php';
    
    if ($effect)
    {
        include 'main.html';
    }
    else
    {
        include 'form.html';
    }
?>
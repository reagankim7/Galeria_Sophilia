<?php

    $con = mysqli_connect("localhost","root","","semester3");

    if(mysqli_connect_error()) {
        die("Can't connect to database".mysqli_connect_error());
    }
?>
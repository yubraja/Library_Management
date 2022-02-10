<?php

    $connection=mysqli_connect('Localhost','root','');
    if(!$connection){
        die("Database connection failed".$mysqli_connect_error($connection));
    }
    else{
        echo"database connected succesfuly";
    }

?>
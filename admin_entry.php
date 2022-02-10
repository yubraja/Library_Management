<?php
    require_once("connect.php");
    $db=mysqli_select_db($connection,"library_management");
    if(isset($db))
    {
        //insert into table
        $query="INSERT INTO admin(email,password)
        VALUES('abc@gmail.com','1234')";
        $query_run=mysqli_query($connection,$query);
        if($query_run)
        {
            echo"successfully inserted";

        }
        else
        {
            echo"error while inserting values";
        }
    }
    else{
        echo"error while selecting database";
    }
    ?>
<?php

    require_once("connect.php");
    
    $db=mysqli_select_db($connection,'library_management');
    if(isset($db))
    {
        //deleting data element from database
        $query="DELETE FROM data WHERE ID='$_POST[uid]' and BOOK_ID='$_POST[ubook_id]'";
        $query_run=mysqli_query($connection,$query);
        if(isset($query_run))
        {
            echo"<script>alert('Deleted')</script>";
            header("Location:make.php?msg=Delted successfully");
        }
        else{
            echo"<script>alert('not deleted')</script>";
            header("Location:make.php");
        }

    }
    else{
        echo"error while selecting database".mysqli_error($connection);
    }
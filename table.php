<?php
require_once("connect.php");

$db=mysqli_select_db($connection,"library_management");

if($db)
{
    $query="INSERT INTO book_book(email , password) VALUES('def@gmail.com','5678')";

    $query_run= mysqli_query($connection,$query);
    if ($query_run)
    {
        echo"table created successfully!";

    }
    else{
        echo "ERROR:".mysqli_error($connection);
    }

}
else
{
    echo"error".mysqli_error($connection);
}
?>
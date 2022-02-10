<?php
    
    require_once("connect.php");

    $db=mysqli_select_db($connection,'library_management');

    if($db)
    {
        $name=$_POST['uname'];
        $id=$_POST['uid'];
        $faculty=$_POST['ufaculty'];
        $sem=$_POST['usem'];
        $book=$_POST['ubook'];
        $book_id=$_POST['ubook_id'];
        $price=$_POST['uprice'];
        
        
        $query="INSERT INTO data(Name,ID,Faculty,Semester,Book_Name,Book_Id,Price) VALUES('$name','$id','$faculty','$sem','$book','$book_id','$price')";
        $query_run=mysqli_query($connection,$query);

        if(isset($query_run))
        {
            echo"!!!!Done!!!!";
            header("Location:make.php?imsg=Inserted successfully");
        }
        else{
            echo"not inserted";
        }

    }

    else{
        echo"error while selecting database".mysqli_error($connection);
    }

?>
<?php
    require_once('connect.php');
    $db=mysqli_select_db($connection,"library_management");
    if (isset($db))
    {
        //fetching data from database of table admin 
        $query="SELECT * FROM user";
        $query_run=mysqli_query($connection,$query);
        if($query_run)
        {
            while($row=mysqli_fetch_assoc($query_run))
            {   
                
                if($row['email']==$_POST['uemail'] && $row['password']==$_POST['upassword'])
                {
                    echo"<script>alert('welcome admin')</script>";
                    header("location:user_page.php");
                }
                else
                {
                    echo"<script>alert('invalid credentials')</script>";
                    header("location:signin.php?error=invalid credentials&email=$ema & pass=$psd");
                }
            }
        }
        else{
            header('Location:signin.php?error=selecting query');
        }
            

    }
    else{
        header('Location:signin.php?msg=error in selecting');
    }
?>
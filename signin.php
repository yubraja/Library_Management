<!DOCTYPE html>
<html>
    <head>
        <title>signin</title>
        <style>
            body{
                background-color: #f2f2f2;
            }
            .container1{
                width: 400px;
                height: 400px;
                background-color: #fff;
                margin-left:200px;
                margin-top: 100px;
                border-radius: 10px;
                box-shadow: 0px 0px 10px #000;
                float:left;
            }
            .container1 h1{
                text-align:center;
                font-size: 30px;
                padding-top:30px;

            }           
            .container1 form{
                text-align:center;
                padding-top: 40px;
                
            }
            .container1 form input{
                
                border-radius: 10px;
                margin-top: 20px;
                cursor:pointer;
                height:2rem;
                
            }
            .container1 span{
                text-align:center;
                font-size: 20px;
                padding-top: 20px;
            }
             #signin{
                background-color: rgb(112, 250, 112);
            }

            

            
        </style>
    </head>
    <body>
        <div class="container1">
            <h1>Login for student</h1>
            <form action="process_user.php" method="post">
                <span>Email:</span><input type="email" name="uemail"  placeholder="email" size="40">
                <br>
            
            <!-- make a user input box -->
                <span>Password:</span><input type="password" name="upassword" placeholder="password" size="38">
                <br>
                <input type="submit" name="usubmit" value="signin" id="signin" size="15">
            </form>
        </div>
        

        <div class="container1">
            <div class="container2">
                <h1>Login for admin</h1>
                <form action="process_admin.php" method="post">
                    <span>Email: </span>
                    <input type="email" name="aemail"  placeholder="email" size="40">
                    <br>
                    <span>Password: </span>
                    <input type="password" name="apassword" placeholder="password" size="37">
                    <br>
                    <input type="submit" name="asubmit" value="signin" id="signin">
                </form>
            </div>

        </div>

    </body>
</html>

    


<html>
    <head>
        <title>make</title>
        <style>
            *{
                margin:0;
                padding:0;
                
            }
            body{
                background-color:wheat;
            }
            .div1,.div2{
                background-color:aquamarine;

                height:65%;
                width:25%;
                margin-top:4rem;
                margin-left:9rem;
                float:left;
                border: 5px solid whitesmoke;
                box-shadow: 0px 0px 10px #000;
                


            }
            .div1 h1,.div2 h1{
                text-align: center;
                font-size: 3rem;
            }
            .div1 p,.div2 p{
                text-align: center;
            }
            .div1 input,.div2 input{
                border-radius: 1rem;
                height:1.7rem;
                width:12rem;
            }
            .div2{
                margin-left:20rem;
            }
           
            
        </style>
    </head>
    <body>
        <h1 style="text-align:center; font-size:3rem;">Add or Delte book details</h1><br><br>
        <h3 style="text-align:center; font-size:2rem;">Hello, admin!!!!!</h3><br>
        
        
        <div class="div1">
            <h1>Add book</h1>
            <br><br>
            <form action="insert.php" method="post">
                <p>
                Name: <input type="text" name="uname" placeholder="name"><br><br>
                ID:   <input type="text" name="uid" placeholder="id"><br><br>
                Faculty: <input type="text" name="ufaculty" placeholder="faculty"><br><br>
                Semester: <input type="text" name="usem" placeholder="semester"><br><br>
                Book: <input type="text" name="ubook" placeholder="book name"><br><br>
                Book id: <input type="text" name="ubook_id" placeholder="book id"><br><br>
                Price: <input type="text" name="uprice" placeholder="price"><br><br>
                <span><input type="submit" value="Add" style="width:4rem;"></span>
                <?php
                    if(isset($_GET['imsg'])){
                        echo $_GET['imsg'];
                    }
                ?>
                <p>
            </form>
        </div>
        <div class="div2">
            <h1>Delete book</h1>
            <br><br>

            <form action="delete.php" method="post">
                <p>
                Name: <input type="text" name="uname" placeholder="enter name"><br><br>
                ID: <input type="text" name="uid" placeholder="id"><br><br>
                Book: <input type="text" name="ubook" placeholder="book name"><br><br>
                Book id: <input type="text" name="ubook_id" placeholder="book id"><br><br>
                <span><input type="submit" value="Delete" style="width:4rem;"></span>
                <?php
                    if(isset($_GET['msg'])){
                        echo $_GET['msg'];
                    }
                ?>
                </p>
            </form>
        </div>
    </body>
</html>
<?php
    session_start();
    error_reporting(1);
    include("connection.php");

    if(isset($_POST['log']))
    { 
        if($_POST['id']=="" || $_POST['pwd']=="")
        { 
            $err="fill your id and password first"; 
        }
        else 
        {
            $d=mysql_query("select * from user where name='{$_POST['id']}' ");
            $row=mysql_fetch_object($d);
            $fid=$row->name;
            $fpass=$row->pass; 

            if($fid==$_POST['id'] && $fpass==$_POST['pwd'])
            {
                $_SESSION['sid']=$_POST['id'];
                header('location:home.php'); 
            }
            else 
            { 
                $er=" your password is not"; 
            }
        }
    }
?>


<!doctype html>
<html lang="en">
    <head>
        <title>Beans Cafe</title>

        <!-- CSS FILES -->                
        <link href="css/style.css" rel="stylesheet">
    </head>
    
    <body>
        <div class="center">
            <h1> Login </h1>
                <form method="post" name="contact" action="#">
                    <div class="txt_field">
                        <input type="text" id="id" name="id" class="required input_field" />
                        <label for="phone">User Name:</label>
                    </div>

                    <div class="txt_field">
                        <input type="password" id="pwd" name="pwd" class="validate-email required input_field" />
                        <label for="email">Password:</label>
                    </div>
              
                    <div class="clear"></div>
                    <input type="submit" name="log"  id="log" value="Log in" class="submit_button" />
                    <br><br><br>
                </form>
        </div>    	        
    </body>
</html>
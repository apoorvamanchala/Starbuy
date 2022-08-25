<?php 
require_once('connect_to_mysql.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['username']) || empty($_POST['password']))
       {
            header("location:login.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from admin where username='".$_POST['username']."' and password='".$_POST['password']."'";
            $result=mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['username'];
                header("location:admin.php");
            }
            else
            {
                $query="select * from user where username='".$_POST['username']."' and password='".$_POST['password']."'";
            $result=mysqli_query($conn,$query);
                
                if(mysqli_fetch_assoc($result))
              {

                $_SESSION['User']=$_POST['username'];
                header("location:home.php");
              }
            
                else{
                     header("location:login.php?Invalid= Please Enter Correct User Name and Password ");
                }
               
            }
       }
    }
    else
    {
        echo 'login Not Working ';
    }

?>
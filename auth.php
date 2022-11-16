<?php
   session_start();

    if(isset($_POST['uname'])&&  isset($_POST['pass']))
    {
        $uname=$_POST["uname"];
        $pass=$_POST["pass"];

        if($uname=="admin" && $pass=="admin")
        {
            $_SESSION['uname']=$uname;
            header("Location:home.php");
        }
        else
        {
            header("Location:login.php?error=Incorrent username or password");
        }
    }
    else
    {
        echo "Enter username or password";
    }
?>

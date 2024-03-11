<?php

function check_login($con)
{ 
    if(isset($_SESSION['biogreenemail']))
    {
        $id =$_SESSION['biogreenemail'];

        $query ="select * from adminlogin where Email='$id' limit 1";

        $result=mysqli_query($con,$query);

        if($result && mysqli_num_rows($result)>0)

        {
        $userdata=mysqli_fetch_assoc($result);
        return $userdata;
        }

    }
    header("Location: pages-login.php");
    die;
}

function random_num($length)
{
    $text="";
    if($length<5)
    {
        $length=5;
    }
    $len=rand(4,$length);
    for ($i=0; $i < $len; $i++) { 
       $text.=rand(0,9); 
    }
    return $text;
}
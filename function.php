<?php
include("connection.php");
function login($con)
{   
    
    if(isset($_SESSION['biogreenlogindata']))
    {   
        $id =$_SESSION['biogreenlogindata'];

        $query ="select * from userlogin where id='$id' limit 1";

        $result=mysqli_query($con,$query);

        if($result && mysqli_num_rows($result)>0)
        {
        $userdata=mysqli_fetch_assoc($result);
        return $userdata;
        }
        else{
            $userdata="NULL";
            return $userdata;
        }
    }
    else{
        $userdata="NULL";
        return $userdata;
    }

}
?>
<?php

	session_start();

	$user=$_POST['user'];

	$pws=$_POST['pswd'];	

	include 'db.php';

	$result=$con->query("select * from admins where username='$user' and password='$pws'");	

	$num=mysqli_num_rows($result);		

	if($num==1)

	{			

		$_SESSION['username']=$user;
        echo "login success";

		//header("location:https://www.google.com/");

		header("location:dash.php");

	}
    else{
        echo "login failed";
    }

?>
<?php
session_start();
include 'connection.php';
$emailErr=$passErr="";
$errCount=1;
$email=$_POST['email'];
$pass=$_POST['password'];


if(isset($_POST['submit']))
{
	if($email=="")
	{
		header('location: signin.php?msg=email_empty');
	}
	elseif($pass=="")
	{
		header('location: signin.php?msg=pass_empty');
	}
	else
	{
		//echo '<script>alert("message successfully sent")</script>';
		$query=mysqli_query(connection(),"SELECT * FROM users WHERE email='$email' AND password='$pass'");
		$rows=mysqli_num_rows($query);
		if($rows==1)
		{
			//echo "<script>alert('done')</script>";
			$_SESSION['email']=$email;
			header('location: userhomepage.php');
		}
		else
		{
			//echo "<script>alert('failed')</script>";
			header('location: signin.php?msg=error');
		}
		//$query=mysqli_query(connection(),"SELECT * FROM users WHERE email='$email'");
		//$rows=mysqli_num_rows($query);
		
//		if($rows==1)
//		{
//			echo '<script>alert("$email successfully sent")</script>';
//			$query=mysqli_query(connection(),"SELECT * FROM users WHERE password='$pass'");
//			$rows=mysqli_num_rows($query);
//			if($rows==1)
//			{
//				header('location: userhomepage.php');
////				$query1=mysqli_query(connection(),"SELECT * FROM customers WHERE email='$email'");
//////				var_dump('fgh',$query1);
//////				echo "<script>alert('$email')</script>";
////				$rows1=mysqli_num_rows($query1);
////				if($rows1==1)
////				{
//////					for($i=0; $row = mysqli_fetch_assoc($query1); ++$i){
////////						echo "<script>alert('text')</script>";
//////						//var_dump($persons[$i]['type']);
//////					}
////					while($row=mysqli_fetch_assoc($query1))  
////					{
////						//$emailErr="hello".$row['id'];
////						//echo "<script>alert('text')</script>";
////						$errCount=0;
////						header('location: userhomepage.php');
////					}	
////				}
//			}
//			else
//			{
//				header('location: signin.php?msg=pass_error');
//				$errCount++;
//			}
//			
//		}
//		else
//		{
//			header('location: signin.php?msg=email_error');
//			$errCount++;
//		}
		if($errCount==0)
		{
			//header("location: userhomepage.php");
		}
	}
}


?>
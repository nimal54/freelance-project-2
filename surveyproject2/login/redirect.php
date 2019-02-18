<?php

session_start(); 
$_SESSION['sessionuser'] = $_POST['UserName']; 
include('../db/connectionI.php');


// username and password sent from form 
if(isset($_POST['login']))
  {
   $username=$_POST['UserName']; 
   $password=$_POST['Password']; 
   $role = $_POST['role'];
   
   //if for admin
   if($role=="admin")
    {
      if($username="admin" and $password =="admin")
      { 
       header("location:../dashboard/dashboard.php");
      }
       else
	   {
		header("location:login.php?a=1");	
	   }
    }
 
   //if for patient
  if($role=="employee")
    {
     $result1 = mysqli_query($con,"SELECT * FROM userlogindetails WHERE Username='$username' and Password ='$password'");
	 $count=mysqli_num_rows($result1); 
	  if($count==1)
	  {
	   $row1=mysqli_fetch_array($result1);
	   session_start();
	   $_SESSION['id']=$row1['id'];
	   $_SESSION['Username']=$row1['Username'];
	   header("location:../dashboarduser/dashboarduser.php");   
	  }
	 else
     {
      header("location:login.php?a=1");
	 }
    }
}
else
{
 header("location:login.php?a=1");
 }
?>

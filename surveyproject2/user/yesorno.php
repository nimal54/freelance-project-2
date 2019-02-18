<?php
include("tableu.php");
include("data_validation.php");
include("../connection.php");
session_start();
$idy=$_SESSION['sessionuserid'];

?>


<?php
$con=mysqli_connect("localhost","root","","surveyproject2");
$resultdata = mysqli_query($con,"SELECT Agree, Disagree FROM userupdate where id='$idy'");
while($row = mysqli_fetch_array($resultdata))
	{      
		$agr= $row['Agree'];
		$dis=$row['Disagree'];
	}


if (isset($_POST['submit']))
 {

  $selected_radio = $_POST['choice'];
  if ($selected_radio == 'agree') 
   {
	   
	   $con=mysqli_connect("localhost","root","","surveyproject2");
	   $que="update userupdate SET Agree= ' ".$agr." ' + 1 where id='$idy'";
      mysqli_query($con,$que) or die("error".mysqli_error($con));

    //mysqli_query("UPDATE userupdate SET Agree= ' ".$agr." ' + 1 WHERE id = '$id'");
    echo "Record updated successfully";
   }
  else if ($selected_radio == 'disagree') 
  {

$con=mysqli_connect("localhost","root","","surveyproject2");
	   $que="update userupdate SET Disagree= ' ".$dis." ' + 1 where id='$idy'";
      mysqli_query($con,$que) or die("error".mysqli_error($con));

   
    echo "Record updated successfully";
  }

}

?>

<a href="../user/attentselect.php">Click here<pre></a> to attent survey . 






</body>
</html>

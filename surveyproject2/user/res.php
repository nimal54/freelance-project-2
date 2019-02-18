<?php
session_start();
$id=$_REQUEST['id'];
$_SESSION['sessionuserid'] = $id; 
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:100,300,400'>

      <link rel="stylesheet" href="css/styleyesorno.css">
      <link rel="stylesheet" href="css/flexboxgrid.min.css">

  
</head>

<body>
  <div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-12">	
				<div class="form">
			
					<form action="yesorno.php" method="post">

						

						<?php
						
						$con=mysqli_connect("localhost","root","","surveyproject2");
						$result = mysqli_query($con,"SELECT * FROM userupdate where id=$id");

while($row = mysqli_fetch_array($result))
	{
	{
		$q= $row['Question'];
		$a= $row['Answer'];
	echo "<h1>Question</h1>";
	echo "<h2>".$q. "</h2>";
	echo "<h1>Answer</h1>";
	echo "<h2>".$a. "</h2>";
	//echo "<p>". $row['Answer'] . "</p>";
	}
	}
	
?> 
						<div>
							<input type="radio" name="choice" class="input password" value="agree">
							<h3>Agree</h3><input type="radio" name="choice" class="input password" value="disagree">
							<h3>Disagree</h3>
						</div>
                        <div align="center"> 
				<input type='submit' value='Submit' name='submit' style="background:#F00;color:#fff;">
									</div>						
							</div>
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>
  
  

    <script  src="js/index.js"></script>




</body>

</html>

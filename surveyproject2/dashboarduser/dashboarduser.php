
<?php
include("../commonuser/menu.php"); 
$sessionusername=$_SESSION['sessionuser'];

	
?>

    <style>
#right
{
	
float:right;	
color:#333;
font-size:12px;
}
</style>

<style>
#right
{
	
float:right;	
color:#333;
font-size:12px;
}
.userd
{
color:#333;	
}
.red
{
background:#FFECF4;
padding:10px;	
}


#right
{
	
float:right;	
color:#333;
font-size:12px;
}
.userd
{
color:#333;	
}
.red
{
background:#F36;
padding:10px;	
}
.table
{
margin-bottom:10px;
background:#E6F4FF;	
}
.sep
{
height:30px;
background:#666;	
}
.h2{
	
	color:#6F9;
	font-family:"MS Serif", "New York", serif;
}
.h3
{text-align:left;
font-family:Tahoma, Geneva, sans-serif;
font-size:9px;
color:#0F3;    
</style>
      
        <div class="content">
            <div class="container-fluid">
                <!--    <div class="card">
                            <div class="header">-->
                                                             
                            
                            <div class="content all-icons">
                                <div class="coloums">
                                <?php
									echo  "<h2>welcome <b> $sessionusername<b></h2>";
									
									?>
                                 <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../user/statusselect.php">    <div class="font-icon-detail"><i class="fa fa-bell fa-2x "></i>
                                      <input type="text" value="Status">
                                    </div></a>
                                  </div>
                                  
                                   <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../user/form.php">    <div class="font-icon-detail"><i class="fa fa-plus fa-2x"></i>
                                      <input type="text" value="Create survey">
                                    </div></a>
                                    
                                  </div> <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../user/attentselect.php">    <div class="font-icon-detail"><i class="fa fa-list fa-2x"></i>
                                      <input type="text" value="Attend survey">
                                    </div></a>
                                  </div>
                                  
                                                             






        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                   
                </nav>
                <p class="copyright pull-right">
                   
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="../assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="../assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

	

</html>
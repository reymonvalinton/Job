<!DOCTYPE html>
<html>
<head>
	<title>PESOMS</title>
	<img src="HOMEPAGE/IMAGE/15.jpg" width="100%">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

        <!-- The fav icon -->
     <link rel="shortcut icon" href="IMAGE/1.png">
</head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #a80a0a;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 28px;
    text-decoration: none;

}

li a:hover, .dropdown:hover .dropbtn {
    background-color: white;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #00acc1;
    min-width: 150px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black1;
    padding: 14px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #EC2525}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>

<body>
<?php

include("configure1.php");

?>
<ul>
                 <li><a href="http://localhost/html/index.php" style="text-decoration: none"><font size= "3">Home</a></li>
                 <li><a href="http://localhost/html/HOMEPAGE/PESO%20Function.php" style="text-decoration: none">P.E.S.O Function</a></li>
		         <li><a href="http://localhost/html/HOMEPAGE/PESO%20Services.php" style="text-decoration: none">P.E.S.O Services</a></li>
                 <li><a href="http://localhost/html/HOMEPAGE/contactus.php" style="text-decoration: none">Contact Us</a></li></font>

		
 
</ul>
<br>
 <div id="" class="box col-md-12">
            <!-- content starts -->
                <div>
        <ul class="">
          
        </ul>
    </div>

<div class="ch-container">
    <div class="row">

        <!-- left menu starts -->
       
	
<div id="content" class="col-lg-12 col-sm-12">
            <!-- content starts -->
<div> 
</div>
 <div class="row" >
        <div class="col-sm-3 col-lg-9">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>JOB OFFERS</h2>

                    <div class="box-icon">
                        
                    </div>
                </div>
                <div class="box-content">
                    <table class="table">
                          <div class="box-content">
						 <div class="alert alert-info">
							<font size="3">This is the list of job vacancy by different company.</font>
						</div>
    <table class=" table table-striped table-bordered bootstrap-datatable datatable responsive ">
	<thead>
    <tr>
        <th>Position</th>
        <th>Vacancy</th>
		<th>Description</th>
        <th>Company</th>
        <th>Job Type</th>
		<th>Date Posted</th>
        <th>Inquire</th>
    </tr>
    </thead>
    <tbody>
<?php
$sql = mysql_query("select * from employer_local ORDER BY date_posted DESC ") or die (mysql_error());

while ($row=mysql_fetch_array($sql)) {
	?>
	
<tr>

<td><?php echo $row['position'];?></td>
<td><?php echo $row['vacancy'];?></td>
<td><?php echo $row['description'];?></td>
<td><?php echo $row['company'];?></td>
<td><?php echo $row['local'];?></td>
<td><?php echo $row['date_posted'];?></td>

       <td class="center">
            <a class="btn btn-success" href="register.php" >
                Inquire Now
            </a>
           
        </td>
<?php
}
?>
                    </table>
                
                </div>
            </div>
        </div>

        <div class="col-sm-3 col-lg-3">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>FOR APPLICANTS ONLY</h2>
                </div>
                <div class="box-content">
                    <table class="table">
                        <thead>
						  <div class="alert alert-info">
							Please login with your Username and Password.
						</div>
            <form class="form-horizontal" action="HOMEPAGE/pasukan.php" method="Get">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" placeholder="Username" name="uname" required>
                    </div>
                    <div class="clearfix"></div><br>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" class="form-control" placeholder="Password" name="psw" required>
                    </div>
					<br>
                    <p class="center col-md-8">
                        <button type="submit" class="btn btn-danger">Login</button>
                    </p>
				</fieldset>
            </form>
			</table>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->
<div class="row">
        <div class="box col-md-3">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>FOR EMPLOYERS ONLY</h2>
                </div>
                <div class="box-content">
					 <div class="alert alert-info">
								Please login with your Username and Password.
					 </div>
                    <table class="table">
                        <thead>
							<form action="HOMEPAGE/employerpage/employpasukan.php" method="Get">
								<fieldset>
								<div class="input-group input-group-lg">
									<span class="input-group-addon"><i class=" glyphicon glyphicon-envelope blue"></i></span>
									<input type="text" class="form-control" placeholder="Username" name="user" required>
								</div>
								<div class="clearfix"></div><br>
								<div class="input-group input-group-lg">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock blue"></i></span>
									<input type="password" class="form-control" placeholder="Password" name="pass" required>
								</div>
								<br>
								<p class="center col-md-8">
									<button type="submit" class="btn btn-primary">Login</button>
								</p>
								<p> Don't have an account ? <br><a href="http://localhost/html/HOMEPAGE/employerpage/employersregister.php"> Register here! </a></p>
								</fieldset>
							</form>
						</thead>
					</table>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>
<hr/>


	<footer >
     <p class="col-md-9 col-sm-9 col-xs-12 copyright"> &copy; Copyright 2017-2018 <br>
	  San Antonio Public Employment Service Office Management System  <br>
	  For thesis purposes only <br>
		Designed by : TeamJOB</p>
    </footer>
	
    
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>
	
</body>
</html>
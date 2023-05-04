<!doctype html>
<html lang="en">
<?php 
include '../constants/settings.php'; 
include 'constants/check-login.php';
include '../constants/db_config.php';
require '../constants/db_config.php';
if ($user_online == "true") {
if ($myrole == "admin") {
}else{
header("location:../");		
}
}else{
header("location:../");	
}
?>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Nasugbu Jobs - View Dashboard<?php echo "$compname"; ?></title>
	<meta name="description" content="Online Job Application System" />
	<meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
	<meta name="author" content="BatState">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Nasugbu Jobs" />
    <meta property="og:description" content="Online Job Application System" />


	<link rel="shortcut icon" href="../images/ico/icon-72.png">
	
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="../css/animate.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/component.css" rel="stylesheet">
	

	<link rel="stylesheet" href="../icons/linearicons/style.css">
	<link rel="stylesheet" href="../icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="../icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="../icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="../icons/rivolicons/style.css">
	<link rel="stylesheet" href="../icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="../icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="../icons/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="../icons/flaticon-ventures/flaticon-ventures.css">


	<link href="../css/style.css" rel="stylesheet">

	
</head>
  <style>
  
    .autofit2 {
	height:80px;
	width:100px;
    object-fit:cover; 
  }
  
  </style>

<body class="not-transparent-header">

	<div class="container-wrapper">

		<header id="header">


			<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

				<div class="container">
					
					<div class="logo-wrapper">
						<div class="logo">
							<a href="../"><img src="../images/nasugbujobs-logo1.png" alt="Logo" /></a>
						</div>
					</div>
					
					<div id="navbar" class="navbar-nav-wrapper navbar-arrow">
					
						<ul class="nav navbar-nav" id="responsive-menu">
						
							<li>
							
								<a href="../">Home</a>
								
							</li>
							
							<li>
								<a href="../job-list.php">Jobs</a>

							</li>
							
							<li>
								<a href="../employers.php">Employers</a>
							</li>
					
						</ul>
				
					</div>

					<div class="nav-mini-wrapper">
						<ul class="nav-mini sign-in">
							<li><a href="../logout.php">logout</a></li>
							<li><a href="./">Profile</a></li>
						</ul>
					</div>
				
				</div>
				
				<div id="slicknav-mobile"></div>
				
			</nav>

			
		</header>

		<div class="main-wrapper">
		
			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list booking-step">
						<li><a href="../">Admin</a></li>
						<li><span>dashboard</span></li>
					</ol>
					
				</div>
				
			</div>
		
	</div>
			<div class="admin-container-wrapper">

				<div class="container">
				
					<div class="GridLex-gap-15-wrappper">
					
						<div class="GridLex-grid-noGutter-equalHeight">
						
							<div class="GridLex-col-3_sm-4_xs-12">
							
								<div class="admin-sidebar">
										
									<div class="admin-user-item">
									<div class="image">	
									
										<?php 
										if ($myavatar == null) {
										print '<center><img class="img-circle autofit2" src="../images/default.jpg" title="'.$myfname.'" alt="image"  /></center>';
										}else{
										echo '<center><img class="img-circle autofit2" alt="image" title="'.$myfname.'"  src="data:image/jpeg;base64,'.base64_encode($myavatar).'"/></center>';	
										}
										?>
										</div>
										<br>
										
										
										<h4><?php echo "$myfname"; ?> <?php echo "$mylname"; ?></h4>
										<p class="user-role"><?php echo "$myrole"; ?></p>
										
									</div>
									
									<div class="admin-user-action text-center">
										
									</div>
									
									<ul class="admin-user-menu clearfix">
										<li  class="">
											<a href="./"><i class="fa fa-user"></i> Profile</a>
										</li>
										<li class="">
										<a href="change-password.php"><i class="fa fa-key"></i> Change Password</a>
										</li>
										
										<li class="active">
											<a href="view-dashboard.php"><i class="fa fa-bar-chart"></i> View Dashboard</a>
										</li>
										<li>
											<a href="view-employers.php"><i class="fa fa fa-building"></i>View Employers</a>
									</li>
									<li class="">
											<a href="view-applicants.php"><i class="fa fa-users"></i>View Applicants</a>
									</li>
										<li>
											<a href="../logout.php"><i class="fa fa-sign-out"></i> Logout</a>
										</li>
									</ul>
									
								</div>

							</div>
							
							<div class="GridLex-col-9_sm-8_xs-12">
							
								<div class="admin-content-wrapper">

									<div class="admin-section-title">
									
										<h2>dashboard</h2>
	
										
									</div>
									
									
									<div class="container-fluid">
										<div class="row">
											<div class="col-md-12 ">
												<div class="col-md-4 mx-2 -	">
													<div class=" card text-center bg-info" >
														<div class="card-body mt-2 text-light bg-primary">
														<div class="card-title h4 mt-2 bg-info">
																TOTAL JOBS
															</div>
																	
																	<?php
																	require '../constants/db_config.php';
																	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
																	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

																	$job=$conn->prepare("SELECT count(*) FROM tbl_jobs");
																	$job->execute();
																	$jobrow = $job->fetch(PDO::FETCH_NUM);
																	$jobcount = $jobrow[0];
																	
																	?>
																		
																		<h2 class="fw-bold"><?php echo "$jobcount"; ?></h2>
																
																	

														</div>
													</div>

												</div>
												
												<div class="col-md-4 ">
													<div class="rounded card text-center " >
														<div class="card-body mt-2 bg-primary">
														<div class="card-title h4 mt-2 bg-info">
																TOTAL EMPLOYERS
															</div>
																	
																	<?php
																	require '../constants/db_config.php';
																	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
																	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

																	$employer=$conn->prepare("SELECT count(*) FROM tbl_users WHERE role='employer'");
																	$employer->execute();
																	$employerrow = $employer->fetch(PDO::FETCH_NUM);
																	$employercount = $employerrow[0];
																	
																	?>
																	
																		<h2 class="fw-bold"><?php echo "$employercount"; ?></h2>
																		
																
																	

														</div>
													</div>

												</div>

												<div class="col-md-4">
													<div class="rounded card text-center " >
														<div class="card-body mt-2 bg-primary">
															<div class="card-title h4 mt-2 bg-info">
																TOTAL APPLICANTS
															</div>
																	
																	<?php
																	require '../constants/db_config.php';
																	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
																	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

																	$employee=$conn->prepare("SELECT count(*) FROM tbl_users WHERE role='employee'");
																	$employee->execute();
																	$employeerow = $employee->fetch(PDO::FETCH_NUM);
																	$employeecount = $employeerow[0];
																	
																	?>
																	
																		<h2 class="fw-bold"><?php echo "$employeecount"; ?></h2>
																
																	

														</div>
													</div>

												</div>
												
											</div>
										</div>

<br>
<br>
										<div class="row">
											<?php
													include '../constants/db_config.php'; 
													$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
													$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

													$stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role = 'employer' ");
													$stmt->execute();
													$result = $stmt->fetchAll();

													$dataPoints = array();

													foreach($result as $row) {
														$companyname = $row['first_name'];
														$title = $row['title'];
														$memberno = $row['member_no'];

														$job_count_query = $conn->prepare("SELECT count(*) FROM tbl_jobs WHERE company = :memberno");
														$job_count_query->bindParam(':memberno', $memberno);
														$job_count_query->execute();
														$job_count = $job_count_query->fetchColumn();

														$dataPoints[] = array("label"=>$companyname,"y"=>$job_count);

														$job_query = $conn->prepare("SELECT job_id FROM tbl_jobs WHERE company = :memberno");
														$job_query->bindParam(':memberno', $memberno);
														$job_query->execute();
														$job_results = $job_query->fetchAll();
														
														$application_count =0;
												   
														foreach($job_results as $job_row) {
															$job_id = $job_row['job_id'];
															$application_count_query = $conn->prepare("SELECT count(*) FROM tbl_job_applications WHERE job_id = :jobid");
															$application_count_query->bindParam(':jobid', $job_id);
															$application_count_query->execute();
															$application_count = $application_count_query->fetchColumn(); 
															$dataPoints2[] = array("label"=>$companyname,"y"=>$application_count);
														}
													}

													?>

													<div class="col-md-12 ">
														<div class="col-md-6 ">
															<script>
	window.onload = function() {
		var chart = new CanvasJS.Chart("chartContainer", {
			theme: "light2",
			animationEnabled: true,
			title: {
				text: "Jobs Distribution"
			},
			data: [{
				type: "doughnut",
				indexLabel: "{symbol} - {y}",
				yValueFormatString: "####.0\"%\"",
				showInLegend: true,
				legendText: "{label} : {y}",
				dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
			}]
		});
		chart.render();

		var chart2 = new CanvasJS.Chart("chartContainer2", {
			theme: "light2",
			animationEnabled: true,
			title: {
				text: "Application Distribution"
			},
			data: [{
				type: "doughnut",
				indexLabel: "{symbol} - {y}",
				yValueFormatString: "####.0\"%\"",
				showInLegend: true,
				legendText: "{label} : {y}",
				dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
			}]
		});
		chart2.render();
	}
</script>
															<div id="chartContainer" style="height: 320px; width: 100%;"></div>
															<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>  
														</div>
														
													
<!-- CHART 2 -->
													<div class="col-md-6 ">
														<script>
															window.onload = function() {
															var chart2 = new CanvasJS.Chart("chartContainer2", {
																theme: "light2",
																animationEnabled: true,
																title: {
																text: "Application Distribution"
																},
																data: [{
																type: "doughnut",
																indexLabel: "{symbol} {y}",
																yValueFormatString: "####.0\"%\"",
																showInLegend: true,
																legendText: "{label} : {y}",
																dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
																}]
															});
															chart2.render();
															}
														</script>
														<div id="chartContainer2" style="height: 320px; width: 100%;"></div>
														<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
															<script>
																window.onload = function() {
																	var chart2 = new CanvasJS.Chart("chartContainer2", {
																		theme: "light2",
																		animationEnabled: true,
																		title: {
																			text: "Application Distribution"
																		},
																		data: [{
																			type: "doughnut",
																			indexLabel: "{symbol} - {y}",
																			yValueFormatString: "####.0\"%\"",
																			showInLegend: true,
																			legendText: "{label} : {y}",
																			dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
																		}]
																	});
																	chart2.render();
																}
															</script>
															
														
													</div>
													
													</div>
											
											</div>
										</div>

									</div>
											
									
									
									/// content end
							</div>
							
						</div>

					</div>

				</div>
			
			</div>
			<footer class="footer-wrapper">
			
				<div class="main-footer">
				
					<div class="container">
					
						<div class="row">
						
							<div class="col-sm-12 col-md-9">
							
								<div class="row">
								
									<div class="col-sm-6 col-md-4">
									
										<div class="footer-about-us">
										<h5 class="footer-title">About Nasugbu Jobs</h5>
										<p>Nasugbu Jobs is an Online job Application System developed by Team Amigos in 2023.</p>
										</div>

									</div>
									
									<div class="col-sm-6 col-md-5 mt-30-xs">
										<h5 class="footer-title">Quick Links</h5>
										<ul class="footer-menu clearfix">
											<li><a href="../">Home</a></li>
											<li><a href="../job-list.php">Job List</a></li>
											<li><a href="../employers.php">Employers</a></li>
											<li><a href="#">Go to top</a></li>

										</ul>
									
									</div>

								</div>

							</div>
							
							<div class="col-sm-12 col-md-3 mt-30-sm">
							
								<h5 class="footer-title">Nasugbu Jobs Contact</h5>
								
								<p>Address : BRGY. BUCANA, APACIBLE BLVD. NASUGBU, BATANGAS</p>
								<p>Email : <a href="mailto:nasugbujobs@gmail.com">nasugbujobs@gmail.com</a></p>
								<p>Phone : <a href="tel:+639999999999">+6399 9999 9999</a></p>


							</div>

							
						</div>
						
					</div>
					
				</div>
				
				<div class="bottom-footer">
				
					<div class="container">
					
						<div class="row">
						
							<div class="col-sm-4 col-md-4">
					
							<p class="copy-right">&#169; Copyright <?php echo date('Y'); ?> Nasugbu Jobs</p>
							</div>
							
							<div class="col-sm-4 col-md-4">
							
								<ul class="bottom-footer-menu">
									
								<li><a >Developed by Team Amigos</a></li>
								</ul>
							
							</div>
							
							<div class="col-sm-4 col-md-4">
								<ul class="bottom-footer-menu for-social">
									<li><a href="<?php echo "$tw"; ?>"><i class="ri ri-twitter" data-toggle="tooltip" data-placement="top" title="twitter"></i></a></li>
									<li><a href="<?php echo "$fb"; ?>"><i class="ri ri-facebook" data-toggle="tooltip" data-placement="top" title="facebook"></i></a></li>
									<li><a href="<?php echo "$ig"; ?>"><i class="ri ri-instagram" data-toggle="tooltip" data-placement="top" title="instagram"></i></a></li>
								</ul>
							</div>
						
						</div>

					</div>
					
				</div>
			
			</footer>
			
		</div>
	

	</div> 

<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>

<script type="text/javascript">
function check_passwords(){
if(frm.password.value == "")
{
	alert("Enter the Password.");
	frm.password.focus(); 
	return false;
}
if((frm.password.value).length < 8)
{
	alert("Password should be minimum 8 characters.");
	frm.password.focus();
	return false;
}

if(frm.confirmpassword.value == "")
{
	alert("Enter the Confirmation Password.");
	return false;
}
if(frm.confirmpassword.value != frm.password.value)
{
	alert("Password confirmation does not match.");
	return false;
}

return true;
}
</script>

<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="../js/bootstrap-modal.js"></script>
<script type="text/javascript" src="../js/smoothscroll.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="../js/wow.min.js"></script>
<script type="text/javascript" src="../js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="../js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="../js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="../js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../js/jquery-filestyle.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.js"></script>
<script type="text/javascript" src="../js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="../js/handlebars.min.js"></script>
<script type="text/javascript" src="../js/jquery.countimator.js"></script>
<script type="text/javascript" src="../js/jquery.countimator.wheel.js"></script>
<script type="text/javascript" src="../js/slick.min.js"></script>
<script type="text/javascript" src="../js/easy-ticker.js"></script>
<script type="text/javascript" src="../js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="../js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="../js/customs.js"></script>

<script type="text/javascript" src="../js/fileinput.min.js"></script>
<script type="text/javascript" src="../js/customs-fileinput.js"></script>


</body>

</html>
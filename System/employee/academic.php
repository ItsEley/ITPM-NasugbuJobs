<!doctype html>
<html lang="en">
<?php 
require '../constants/settings.php'; 
require 'constants/check-login.php';

if ($user_online == "true") {
if ($myrole == "employee") {
}else{
header("location:../");		
}
}else{
header("location:../");	
}

if (isset($_GET['page'])) {
$page = $_GET['page'];
if ($page=="" || $page=="1")
{
$page1 = 0;
$page = 1;
}else{
$page1 = ($page*5)-5;
}					
}else{
$page1 = 0;
$page = 1;	
}
?>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Nasugbu Jobs - <?php echo "$compname"; ?></title>
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
							<a href="../"><img src="../images/nasugbujobs-logo.png" alt="Logo" /></a>
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
								<a href="../employers.php">Companies</a>
							</li>
							
							<li>
								<a href="../contact.php">Contact Us</a>
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
						<li><a href="../">Nasugbu Jobs</a></li>
						<li><span>Academic Qualifications</span></li>
					</ol>
					
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
										<?php echo "$stats";?>
										<p class="user-role"><?php echo "$mytitle"; ?></p>
										
									</div>
									
									<div class="admin-user-action text-center">
									
										<a target="_blank" href="my_cv" class="btn btn-primary btn-sm btn-inverse">View my CV</a>
										
									</div>
									
									<ul class="admin-user-menu clearfix">
										<li>
											<a href="./"><i class="fa fa-user"></i> Profile</a>
										</li>
										<li class="">
										<a href="change-password.php"><i class="fa fa-key"></i> Change Password</a>
										</li>
										<li  >
											<a href="qualifications.php"><i class="fa fa-trophy"></i> Professional Qualifications</a>
										</li>
										<li>
											<a href="language.php"><i class="fa fa-language"></i> Language Proficiency</a>
										</li>
										<li>
											<a href="training.php"><i class="fa fa-gears"></i> Training & Workshop</a>
										</li>
										<li>
											<a href="referees.php"><i class="fa fa-users"></i> Referees</a>
										</li>
										<li class="active">
											<a href="academic.php"><i class="fa fa-graduation-cap"></i> Academic Qualifications</a>
										</li>
										<li>
											<a href="experience.php"><i class="fa fa-briefcase"></i> Working Experience</a>
										</li>
										<li>
											<a href="attachments.php"><i class="fa fa-folder-open"></i> Other Attachments</a>
										</li>
										<li>
											<a href="applied-jobs.php"><i class="fa fa-bookmark"></i> Applied Jobs</a>
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
									
										<h2>Academic Qualifications</h2>
					
										
									</div>
									
									<div class="resume-list-wrapper">
									<?php require 'constants/check_reply.php'; ?>
									<?php
									require '../constants/db_config.php';
									
									try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    $stmt = $conn->prepare("SELECT * FROM tbl_academic_qualification WHERE member_no = '$myid' ORDER BY id LIMIT $page1,5");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();
                                    foreach($result as $row)
                                    {
									 $cbarangay = $row['barangay'];
									 $institution = $row['institution'];
									 $course = $row['course'];
									 $timeframe = $row['timeframe'];
									 $course_id = $row['id'];
									 $level = $row['level'];
									 
									 ?>
									 									<div class="resume-list-item">
										
											<div class="row">
											
												<div class="col-sm-12 col-md-10">
												
													<div class="content">
													
														<a  target="_blank" href="view-certificate-c.php?id=<?php echo $row['id']; ?>" >

															<div class="image">
															<?php 
										                    if ($myavatar == null) {
									                    	print '<center><img src="../images/default.jpg" title="'.$myfname.'" alt="image" width="100" height="100" /></center>';
										                    }else{
										                    echo '<center><img alt="image" title="'.$myfname.'" width="100" height="100" src="data:image/jpeg;base64,'.base64_encode($myavatar).'"/></center>';	
										                    }
										                      ?>
															</div>
															
															<h4><?php echo $row['course']; ?></h4>
															
															<div class="row">
																<div class="col-sm-12 col-md-9">
																	<i class="fa fa-graduation-cap text-primary mr-5"></i><strong class="mr-10"><?php echo $row['institution']; ?></strong> <i class="fa fa-map-marker text-primary mr-5"></i> <?php echo $row['barangay']; ?>.
																</div>
																<div class="col-sm-12 col-md-3 mt-10-sm">
																	<i class="fa fa-calendar  text-primary mr-5"></i> <?php echo $row['timeframe']; ?>
																</div>
															</div>

														</a>
													
													</div>
												
												</div>
												
												<div class="col-sm-12 col-md-2">
													
													<div class="resume-list-btn">
													
														<a data-toggle="modal" href="#edit<?php echo $row['id']; ?>" class="btn btn-primary btn-sm mb-5 mb-0-sm">Edit</a>
									<a href="app/drop-academic.php?id=<?php echo $row['id']; ?>" onclick = "return confirm('Are you sure you want to delete this qualification ?')" class="btn btn-primary btn-sm btn-inverse">Delete</a>
									<div id="edit<?php echo $row['id']; ?>" class="modal fade login-box-wrapper" tabindex="-1" data-width="550" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				                    <div class="modal-header">
					                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					                 <h4 class="modal-title text-center"><?php echo "$course"; ?></h4>
				                    </div>
				
				                    <div class="modal-body">
									<form action="app/update-academic-qualification.php" method="POST" autocomplete="off" enctype="multipart/form-data">
					                <div class="row gap-20">
									<div class="col-sm-12 col-md-12">
												
									<div class="form-group">
									<label>Education Level</label>
									<select name="level" required class="selectpicker show-tick form-control" data-live-search="false">
									<option disabled value="">Select</option>
									<option <?php if ($level == "Advanced Diploma") { print ' selected '; } ?> value="Advanced Diploma">Advanced Diploma</option>
                                    <option <?php if ($level == "Advanced Level (ACSE)") { print ' selected '; } ?>  value="Advanced Level (ACSE)">Advanced Level (ACSE)</option>
                                    <option <?php if ($level == "Certificate") { print ' selected '; } ?>  value="Certificate">Certificate</option>
                                    <option <?php if ($level == "Degree") { print ' selected '; } ?>  value="Degree">Degree</option>
                                    <option <?php if ($level == "Diploma") { print ' selected '; } ?>  value="Diploma">Diploma</option>
                                    <option <?php if ($level == "Master Degree") { print ' selected '; } ?>  value="Master Degree">Master Degree</option>
                                    <option <?php if ($level == "Ordinary Level (CSE)") { print ' selected '; } ?>  value="Ordinary Level (CSE)">Ordinary Level (CSE)</option>
                                    <option <?php if ($level == "PHd") { print ' selected '; } ?>  value="PHd">PHd</option>
                                    <option <?php if ($level == "Post Graduate Diploma") { print ' selected '; } ?>  value="Post Graduate Diploma">Post Graduate Diploma</option>
						         
									</select>
									</div>
													
									</div>
									<div class="col-sm-12 col-md-6">
												
									<div class="form-group">
									<label>barangay</label>
									<select name="barangay" required class="selectpicker show-tick form-control" data-live-search="true">
									<option disabled value="">Select</option>
						            <?php
									$stmtb = $conn->prepare("SELECT * FROM tbl_barangay ORDER BY barangay_name");
                                    $stmtb->execute();
                                    $resultb = $stmtb->fetchAll();

                                    foreach($resultb as $rowb)
                                    {
										?>
										<option <?php if ($cbarangay == $rowb['barangay_name']) { print ' selected '; } ?> value="<?php echo $rowb['barangay_name']; ?>"><?php echo $rowb['barangay_name']; ?></option>
										<?php
		
	                                }

                                   
									 ?>
									</select>
									</div>
													
									</div>

						
						            <div class="col-sm-12 col-md-6">
				
							        <div class="form-group"> 
								    <label>Institution Name</label>
								    <input class="form-control" value="<?php echo "$institution"; ?>" placeholder="Enter institution name" type="text" name="institution" required> 
							        </div>
						
						             </div>
						
						             <div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Course Title</label>
								    <input class="form-control" value="<?php echo "$course"; ?>" placeholder="Enter course name" type="text" name="course" required> 
							        </div>
						
						           </div>
								   
								   	<div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Time Frame</label>
								    <input class="form-control" value="<?php echo "$timeframe"; ?>" placeholder="Eg: 2015 To 2016" type="text" name="timeframe" required> 
							        </div>
						
						           </div>

								   	<div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Certificate <i>(Leave blank if you dont want to update)</i></label>
								    <input class="form-control" accept="application/pdf" type="file" name="certificate"> 
							        </div>
						
						           </div>
								   	<div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Transcript <i>(Leave blank if you dont want to update)</i></label>
								    <input class="form-control" accept="application/pdf" type="file" name="transcript"> 
							        </div>
						
						           </div>
						
					               </div>
				                   </div>
				                   <input type="hidden" name="courseid" value="<?php echo "$course_id"; ?>">
				                   <div class="modal-footer text-center">
				 	               <button type="submit" class="btn btn-primary">Submit</button>
					               <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
				                   </div>
				                   </form>
			                       </div>

													</div>
													
	
													
												</div>
												
											</div>
										
										</div>
										
										
										<?php
		
 
	                                }

					  
	                                }catch(PDOException $e)
                                    {
                                 
                                    }

									
									?>

									<div class="pager-wrapper">
								
						            <ul class="pager-list">
								<?php
								$total_records = 0;
								require '../constants/db_config.php';
								try {
                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $stmt = $conn->prepare("SELECT * FROM tbl_academic_qualification WHERE member_no = '$myid' ORDER BY id");
                                $stmt->execute();
                                $result = $stmt->fetchAll();

                                foreach($result as $row)
                                {
		                        $total_records++;
 
                               	}

					  
	                            }catch(PDOException $e)
                                {
                                echo "Connection failed: " . $e->getMessage();
                                }
	
								$records = $total_records/5;
                                $records = ceil($records);
				                if ($records > 1 ) {
								$prevpage = $page - 1;
								$nextpage = $page + 1;
								
								print '<li class="paging-nav" '; if ($page == "1") { print 'class="disabled"'; } print '><a '; if ($page == "1") { print ''; } else { print 'href="academic.php?page='.$prevpage.'"';} print '><i class="fa fa-chevron-left"></i></a></li>';
					            for ($b=1;$b<=$records;$b++)
                                 {
                                 
		                        ?><li  class="paging-nav" ><a <?php if ($b == $page) { print ' style="background-color:#33B6CB; color:white" '; } ?> href="academic.php?page=<?php echo "$b"; ?>"><?php echo $b." "; ?></a></li><?php
                                 }	
								 print '<li class="paging-nav"'; if ($page == $records) { print 'class="disabled"'; } print '><a '; if ($page == $records) { print ''; } else { print 'href="academic.php?page='.$nextpage.'"';} print '><i class="fa fa-chevron-right"></i></a></li>';
					             }

								
								?>

						            </ul>	
					
					                </div>

										
		
										
									</div>
									
									<div class="mt-30">
									
										<a data-toggle="modal" href="#QualifModal" class="btn btn-primary btn-lg">Add new</a>
										
									</div>
									<div id="QualifModal" class="modal fade login-box-wrapper" tabindex="-1" data-width="550" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				                    <div class="modal-header">
					                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					                 <h4 class="modal-title text-center">Add Academic Qualifications</h4>
				                    </div>
				
				                    <div class="modal-body">
									<form action="app/add-academic-qualification.php" method="POST" autocomplete="off" enctype="multipart/form-data">
					                <div class="row gap-20">
									<div class="col-sm-12 col-md-12">
												
									<div class="form-group">
									<label>Education Level</label>
									<select name="level" required class="selectpicker show-tick form-control" data-live-search="false">
									<option disabled value="">Select</option>
									<option value="Advanced Diploma">Advanced Diploma</option>
                                    <option value="Advanced Level (ACSE)">Advanced Level (ACSE)</option>
                                    <option value="Certificate">Certificate</option>
                                    <option value="Degree">Degree</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="Master Degree">Master Degree</option>
                                    <option value="Ordinary Level (CSE)">Ordinary Level (CSE)</option>
                                    <option value="PHd">PHd</option>
                                    <option value="Post Graduate Diploma">Post Graduate Diploma</option>
						         
									</select>
									</div>
													
									</div>
									
									<div class="col-sm-6 col-md-6">
												
									<div class="form-group">
									<label>Barangay</label>
									<select name="barangay" required class="selectpicker show-tick form-control" data-live-search="true">
									<option disabled value="">Select</option>
						            <?php
									$stmtb = $conn->prepare("SELECT * FROM tbl_barangay ORDER BY barangay_name");
                                    $stmtb->execute();
                                    $resultb = $stmtb->fetchAll();

                                    foreach($resultb as $rowb)
                                    {
										?>
										<option <?php if ($cbarangay == $rowb['barangay_name']) { print ' selected '; } ?> value="<?php echo $rowb['barangay_name']; ?>"><?php echo $rowb['barangay_name']; ?></option>
										<?php
		
	                                }

                                   
									 ?>
									</select>
									</div>
													
									</div>

						
						            <div class="col-sm-6 col-md-6">
				
							        <div class="form-group"> 
								    <label>Institution Name</label>
								    <input class="form-control" placeholder="Enter institution name" type="text" name="institution" required> 
							        </div>
						
						             </div>
						
						             <div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Course Title</label>
								    <input class="form-control" placeholder="Enter course name" type="text" name="course" required> 
							        </div>
						
						           </div>
								   
								   	<div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Time Frame</label>
								    <input class="form-control" placeholder="Eg: 2015 To 2016" type="text" name="timeframe" required> 
							        </div>
						
						           </div>

								   	<div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Attach Certificate</label>
								    <input class="form-control" accept="application/pdf" type="file" name="certificate" required> 
							        </div>
						
						           </div>
								   
								   	<div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Academic Transcript</label>
								    <input class="form-control" accept="application/pdf" type="file" name="transcript" required> 
							        </div>
					
						
					               </div>
				                   </div>
				
				                   <div class="modal-footer text-center">
				 	               <button type="submit" class="btn btn-primary">Submit</button>
					               <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
				                   </div>
				                   </form>
			                       </div>
									
								</div>

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
											<p>Nasugbu Jobs is an Online job Application System developed by BSIT-3101-BA Students for their group project in 2022.</p>
						
										</div>

									</div>
									
									<div class="col-sm-6 col-md-5 mt-30-xs">
										<h5 class="footer-title">Quick Links</h5>
										<ul class="footer-menu clearfix">
											<li><a href="../">Home</a></li>
											<li><a href="../job-list.php">Job List</a></li>
											<li><a href="../employers.php">Employers</a></li>
											<li><a href="../contact.php">Contact Us</a></li>
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
									
								<li><a >Developed by BSIT-3101-BA</a></li>
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
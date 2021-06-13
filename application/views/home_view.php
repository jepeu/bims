<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Bidding Management System | Login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()."assets/"; ?>global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()."assets/"; ?>global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()."assets/"; ?>global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()."assets/"; ?>global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo base_url()."assets/"; ?>admin/pages/css/login.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url()."assets/"; ?>global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()."assets/"; ?>global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()."assets/"; ?>admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()."assets/"; ?>admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo base_url()."assets/"; ?>admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-md login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->

<style>
	.main-container {
		background-image: url(assets/images/testbg2.jpg);
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center;
	}
	a {
		color: #fff;
	}
	a:hover{
		color: #4db3a5;
	}
</style>
<div class="main-container">
	<div class="sub">
			<!-- BEGIN LOGO -->
			<div class="logo">
				<a href="http://localhost/bims/">
				<img src="<?php echo base_url()."assets/"; ?>logo/bims-logo.svg" alt=""/>
				</a>
			</div>
			<div class="form-action btn btn-success uppercase" >
			<a title="Return to BIMS SITE" href="http://localhost/bims/" style="text-decoration:none"
				itemprop="url">
				<i class="fa fa-arrow-left " aria-hidden="true"></i> Back to Main Site</a>
			</div>

			<!-- END LOGO -->
			<!-- BEGIN LOGIN -->
			<div class="content">
				<!-- BEGIN LOGIN FORM -->
				

				<div>
					<form class="login-form" action="<?php echo site_url('loginregister/auth');?>" method="post">
						<h3 class="form-title" style="margin-bottom: 4vh;">Login</h3>
						<?php echo $this->session->flashdata('msg');?>
						<div class="alert alert-danger display-hide">
							<button class="close" data-close="alert"></button>
							<span>
							Enter any username and password. </span>
						</div>
						<div class="form-group">
							<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
							<label class="control-label visible-ie8 visible-ie9">Username</label>
							<input class="form-control form-control-solid placeholder-no-fix" type="email" autocomplete="off" placeholder="Email" name="email" required/>
						</div>
						<div class="form-group">
							<label class="control-label visible-ie8 visible-ie9">Password</label>
							<input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" required/>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-success uppercase">Login</button>
							<label class="rememberme check">
							<input type="checkbox" name="remember" value="remember-me"/>Remember </label>
							<a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
						</div>
						<div class="login-options">
							<h4>Or login with</h4>
							<ul class="social-icons">
								<li>
									<a class="social-icon-color facebook" data-original-title="facebook" href="javascript:;"></a>
								</li>
								<li>
									<a class="social-icon-color twitter" data-original-title="Twitter" href="javascript:;"></a>
								</li>
								<li>
									<a class="social-icon-color googleplus" data-original-title="Goole Plus" href="javascript:;"></a>
								</li>
								<li>
									<a class="social-icon-color linkedin" data-original-title="Linkedin" href="javascript:;"></a>
								</li>
							</ul>
						</div>
						<div class="create-account">
							<p>
								<a href="javascript:;" id="register-btn" class="uppercase">Create an account</a>
							</p>
						</div>
					</form>
					<!-- END LOGIN FORM -->
					<!-- BEGIN FORGOT PASSWORD FORM -->
					<form class="forget-form" action="index.html" method="post">
						<h3>Forget Password ?</h3>
						<p>
							Enter your e-mail address below to reset your password.
						</p>
						<div class="form-group">
							<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
						</div>
						<div class="form-actions">
							<button type="button" id="back-btn" class="btn btn-default">Back</button>
							<button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
						</div>
					</form>
					<!-- END FORGOT PASSWORD FORM -->
				</div>

				<!-- ------------------------------------------------- Register-------------------------------------------------------------------------------------- -->
				<!-- BEGIN REGISTRATION FORM -->
				<!-- Status message -->
				<?php  
					if(!empty($success_msg)){ 
						echo '<p class="status-msg success">'.$success_msg.'</p>'; 
					}elseif(!empty($error_msg)){ 
						echo '<p class="status-msg error">'.$error_msg.'</p>'; 
					} 
				?>
		
				<form id="regformid" class="register-form" method="post" enctype="multipart/form-data">
					<h3 style="margin-bottom: 4vh;">Register</h3>

					<div class="row">
						<div class="col-md-6">
							<p class="hint">	
								Enter your personal details below:
							</p>
							<div class="form-group">
								<label class="control-label visible-ie8 visible-ie9">First Name</label>
								<input class="form-control placeholder-no-fix" type="text" placeholder="First Name"  name="firstname" id="firstname" <?php echo !empty($user['firstname'])?$user['firstname']:''; ?> />
							</div>
							<div class="form-group">
								<label class="control-label visible-ie8 visible-ie9">Last Name</label>
								<input class="form-control placeholder-no-fix" type="text" placeholder="Last Name" name="lastname" id="lastname" <?php echo !empty($user['lastname'])?$user['lastname']:''; ?>/>
							</div>
							<div class="form-group">
								<label class="control-label visible-ie8 visible-ie9">Company Name</label>
								<input class="form-control placeholder-no-fix" type="text" placeholder="Company Name" name="companyname" id="companyname" <?php echo !empty($user['companyname'])?$user['companyname']:''; ?>/>
							</div>
							<div class="form-group">
								<label class="control-label visible-ie8 visible-ie9">Address</label>
								<input class="form-control placeholder-no-fix" type="text" placeholder="Address" name="address" id="address" <?php echo !empty($user['address'])?$user['address']:''; ?>/>
							</div>
							<div class="form-group">
								<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
								<label class="control-label visible-ie8 visible-ie9">Email</label>
								<input class="form-control placeholder-no-fix" type="email" placeholder="Email" name="email" id="email" <?php echo !empty($user['email'])?$user['email']:''; ?>/>
							</div>
							
						</div>

						<div class="col-md-6">
							<p class="hint">
								Enter your account details below:
							</p>
							<div class="form-group">
								<label class="control-label visible-ie8 visible-ie9">Username</label>
								<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" id="username" <?php echo !empty($user['username'])?$user['username']:''; ?>/>
							</div>
							<div class="form-group">
								<label class="control-label visible-ie8 visible-ie9">Password</label>
								<input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"/>
							</div>
							<div class="form-group">
								<label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
								<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword" id="rpassword"/>
							</div>
						</div>
						<div class="col-md-12">
							<p class="hint">
								Upload your PhilGeps certificate below to verify that you are a certified Bidder:
							</p>
							<div class="form-group">
								<label class="control-label visible-ie8 visible-ie9">PhilGeps Certificate</label>
								<input class="form-control form-control-lg" name="file" id="image_file" type="file" />
							</div>

							<div class="form-group margin-top-20 margin-bottom-20">
								<label class="check">
								<input type="checkbox" name="tnc"/> I agree to the <a href="javascript:;">
								Terms of Service </a>
								& <a href="javascript:;">
								Privacy Policy </a>
								</label>
								<div id="register_tnc_error">
								</div>
							</div>
							<div class="form-actions">
								<button type="button" id="register-back-btn" class="btn btn-default">Back</button>
								<button  type="submit" name="signupSubmit" id="register-submit-btn" class="btn btn-success uppercase pull-right">Submit</button>
							</div>
						</div>
					</div>
				</form>
				<!-- END REGISTRATION FORM -->
			</div>

			<div class="copyright">
				2020 © Bidding Information Management System
			</div>
	</div>
</div>
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo base_url()."assets/"; ?>global/plugins/respond.min.js"></script>
<script src="<?php echo base_url()."assets/"; ?>global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?php echo base_url()."assets/"; ?>global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/"; ?>global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/"; ?>global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/"; ?>global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/"; ?>global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/"; ?>global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->



<script>
	$(document).ready(function(){
		$('#regformid').on('submit', function(e) {
		e.preventDefault();
		// var regdata = $(this).serialize();
			$.ajax({
				url: "<?php echo base_url();?>loginregister/registration",
				type: "POST",
				// data: regdata,
				data:new FormData(this),
				processData:false,
				contentType:false,
				cache:false,
				async:false,
				success: function(response){
					alert("success");
					// $('body').html(response);
				}
			});
	
	});
	});
</script>


<script src="<?php echo base_url()."assets/"; ?>global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url()."assets/"; ?>global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/"; ?>admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/"; ?>admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/"; ?>admin/pages/scripts/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Login.init();
Demo.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>

<html>
	<head>
		<title>Student Form</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bstyles.css">
		<script src="js/jquery.min.js"></script>
    	<script src="js/bootstrap.js"></script>
    	<script type="text/javascript">
    	$(function() {

    	$('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
		});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

	});

    	</script>
	</head>
	<body>
	<br><br><br>
	 <div class="container cols-xs-4 cols-md-4">
		<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="#" method="POST" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="regno" id="regno" tabindex="1" class="form-control" placeholder="Register Number" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									
								</form>
								<form id="register-form" action="register.php" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="regno" id="regno" tabindex="1" class="form-control" placeholder="Register Number" value="">
									</div>
									<div class="form-group">
										<input type="text" name="name" id="name" tabindex="2" class="form-control" placeholder="Full Name">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="3" class="form-control" placeholder="Email Address" value="">
									</div>
									
									<div class="form-group">
										<input type="text" name="mobile" id="mobile" tabindex="4" class="form-control" placeholder="Mobile Number">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	  </div>
	</body>
</html>
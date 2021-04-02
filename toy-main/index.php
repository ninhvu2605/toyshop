<?php
$conn = pg_connect("host=ec2-34-225-103-117.compute-1.amazonaws.com port=5432 dbname=dcg72tr1l83dd3 user=eophfavabkrorx password=cada536917ba323da06136f1b0fd36d8eeae9fee194a8d611e249fd04c60fa78");
if(!$conn){echo "Lost Connect";}
if(isset($_POST['login'])){
	$username = $_POST['username'];
 	$password = $_POST['password'];
 	$sql= "SELECT * FROM account WHERE username ='$username' and pass='$password'";
	$result = pg_query($conn, $sql);
	$check = pg_num_rows($result);
	if($check == 1){
		echo "okay";
		header("Location:home.php");
	}
	else{
		echo "sorry";
	}
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title> Login|Register Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container-fluid hq-template">
		<div class="row ">
			<div class="col-lg-6 text-block">
				<div class="welcome">
					<h1>Welcome to <a href="">LOGO</a></h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 col-12 log-reg-block">
				<ul class="nav nav-pills mb-3 justify-content-end" id="pills-tab" role="tablist">
				  <li class="nav-item " role="presentation">
				    <a class="nav-link active nav-btn-1" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
				  </li>
				  <li class="nav-item" role="presentation">
				    <a class="nav-link nav-btn-2" id="pills-register-tab" data-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">Register</a>
				  </li>
				</ul>
				<form method="post">
				<div class="tab-content" id="pills-tabContent">
				    <div class="tab-pane fade show active login-tab" id="pills-login" role="        tabpanel"  aria-labelledby="pills-login-tab">
					  	<h1 class="logo "><a href="">LOGO</a></h1>
					  	<h3 >Sign into your account</h3>
					  	<div class="form-group">
					  		<input type="text" name="username" class="form-control" placeholder="Username">
					  		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-lock" viewBox="0 0 16  16">
							  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
							</svg>
					  	</div>
					  	<div class="form-group ">
					  		<input type="password" name="password" class="form-control" placeholder="Password">
					  		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
							  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
							</svg>
					  	</div>
					  	<div  class="forgot" ><a href="">Forgot your password</a></div>
					  	
					    <button class="login-btn btn btn-primary" name="login" type="submit" value="login">Login</button>
					  	<div class="separator ">
							<hr>
							<p>Or</p>
							<hr>
						</div>
					  	<div class="social-media">
					  		<a href="" class="facebook-bg"><i class="fa fa-facebook"></i></a>
					  		<a href="" class="twitter-bg"><i class="fa fa-twitter"></i></a>
					  		<a href="" class="google-bg"><i class="fa fa-google"></i></a>
					  		<a href="" class="linkedin-bg"><i class="fa fa-linkedin"></i></a>
					  	</div>
				    </div>
				</form>
					<div class="tab-pane fade register-tab" id="pills-register" role="tabpanel" aria-labelledby="pills-register-tab">
				  		<h1 class="logo "><a href="">LOGO</a></h1>
					  	<h3 >Create an account</h3>
					  	<div class="form-group">
					  		<input type="text" name="" class="form-control" placeholder="Full Name">
					  		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
							  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
							</svg>
					  	</div>
					  	<div class="form-group">
					  		<input type="email" name="" class="form-control" placeholder="Email Address">
					  		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
							  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
							</svg>
					  	</div>
					  	<div class="form-group ">
					  		<input type="password" name="" class="form-control" placeholder="Password">
					  		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
							  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
							</svg>
					  	</div>
					  	
					  	<div class="login-btn btn btn-primary"><a href="">Register</a></div>
					  	<p class="terms">By signing up you agree to our <a href="">privacy policy</a>.</p>
					  	<div class="separator ">
							<hr>
							<p>Or</p>
							<hr>
						</div>
					  	<div class="social-media">
					  		<a href="" class="facebook-bg"><i class="fa fa-facebook"></i></a>
					  		<a href="" class="twitter-bg"><i class="fa fa-twitter"></i></a>
					  		<a href="" class="google-bg"><i class="fa fa-google"></i></a>
					  		<a href="" class="linkedin-bg"><i class="fa fa-linkedin"></i></a>
					  	</div>
					</div>
				  
				</div>
				<div class="copyright">
    				<a href="https://www.hqtemplate.com">Developed By HQ Template</a>
				</div>
			</div>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/5118cb3e8d.js" crossorigin="anonymous"></script>

</body>
</html>

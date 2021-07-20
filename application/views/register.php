


<html>
<head>
	<!--Link in a stylesheet to CodeIgniter-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/css/bootstrap.css">
	<!--	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>	<title>home Page</title>

</head>
<body id ="login_body">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<!--	<h1 class="navbar-brand p-3 display-6">Game Review</h1>-->
	<img class="logo pr-5" src="<?php echo base_url();?>application/Images/xbox.png">

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item ">
				<a class ="nav-link "a href="<?php echo base_url();?>index.php">About</a>

			</li>
			<li class="nav-item active ">
				<a class ="nav-link " a href="<?php echo base_url();?>index.php/register">Register</a>
				<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item ">
				<a class ="nav-link " a href="<?php echo base_url();?>index.php/login">Login</a>
				<span class="sr-only">(current)</span></a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>

	</div>
</nav>

<! --- Navigation --->
<!--<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">-->
<!--	<div class="container-fluid">-->
<!--		<a class="navbar-brand"><img class="logo" src="--><?php //echo base_url();?><!--application/Images/xbox.png">-->
<!--		</a>-->
<!--		<button class ="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" >-->
<!--			<span class="navbar-toggler-icon"></span>-->
<!--		</button>-->
<!--		<div class ="collapse navbar-collapse" id="navbarResponsive">-->
<!--			<ul class="navbar-nav ml-auto">-->
<!--				<li class="nav-item">-->
<!--					<a class ="nav-link" a href="--><?php //echo base_url();?><!--index.php">About</a>-->
<!--				</li>-->
<!--				<li class="nav-item">-->
<!--					<a class ="nav-link"a href="--><?php //echo base_url();?><!--index.php/login">Login</a>-->
<!--				</li>-->
<!--				<li class="nav-item">-->
<!--					<a class ="nav-link"a href="--><?php //echo base_url();?><!--index.php/register">Register</a>-->
<!--				</li>-->
<!---->
<!--			</ul>-->
<!--		</div>-->
<!--	</div>-->
<!--</nav>-->

 <div class="modal-dialog text-center">
	<div class="col-sm-8 main-section">
		<div class="modal-content">
			<div class="col-12 user-img">
				<img class="user_img" src="<?php echo base_url();?>application/Images/user.png"">
			</div>
			<form class="col-12" action="./insert_users" method="post">

				<h1 class="bg-light">Please enter detail to register<h1>


				<input placeholder="Enter telephone" class="form-control" type="text"   name="telephone" required >
				<br>
		        <input placeholder="Enter username" class="form-control" type="text"   name="username" maxlength="32" required>
				<br>
				<div class="form-group">
				<input placeholder="Enter password" class="form-control" type="password" id="password"   name="password" maxlength="32" required> <br>
				</div>

				<div class="form-group">
				<input placeholder="Enter first name" class="form-control" type="text"   name="first_name" maxlength="50" required> <br>
				</div>

				<div class="form-group">
				<input placeholder="Enter last name" class="form-control" type="text"   name="last_name" maxlength="50"  required> <br>
				</div>

				<div class="form-group">
				<input placeholder="Enter dob" class="form-control" type="date"  name="dob"  value="" required> <br>
				</div>

				<div class="form-group">
				<input placeholder="Enter email" class="form-control" type="email"   name="email" maxlength="50" value="" required> <br>
				</div>

				<br>

				<button type="submit" class="btn-small"><i class="fas fa-sign-in-alt"></i>register</button>
			</form>
		</div>
	</div>
</div>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4 text-md-left">
				<div class="py-0">
					<h3 class="my-4 white"></h3>
					<p class="footer-links font-weight-bold">
						<a class="text-white" href="#"></a>
						<a class="text-white" href="#"></a>
						<a class="text-white" href="#"></a>
						<a class="text-white" href="#"></a>
						<a class="text-white" href="#"></a>
					</p>
					<p class="text-light py-4"></p>
				</div>
			</div>
			<div class="py-2 my-4">
				<div>
					<p><i class="fa fa-phone mx-2 "></i>&copy;6G5Z2107 - Tobi Adegoroye - 18011328 - 2019/20</p>
				</div>

			</div>
		</div>

</footer>

</body>
</html>


<html>
<head>
	<!--Link in a stylesheet to CodeIgniter-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/css/bootstrap.css">
	<!--	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 	<title>home Page</title>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<!--	<h1 class="navbar-brand p-3 display-6">Game Review</h1>-->
	<img class="logo pr-5" src="<?php echo base_url();?>application/Images/xbox.png">

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class ="nav-link "a href="<?php echo base_url();?>index.php">About</a>

			</li>
			<li class="nav-item ">
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


<!--- Welcome Section -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4"> Game review website</h1>
		</div>
		<hr>
		<div class="col-12">
			<h1 class="lead">On this website you will be able to see the latest game reviews for playstation, Xbox and Nintendo games. Please login in to see the full features of the website</h1>
		</div>
	</div>
</div>



<hr>
<!--- container3 --->

<!--- Latest game reviews -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 display="display-4">Latest game reviews</h1>
			<hr>

		</div>
	</div>
</div>

<!--- Cards -->
<div class="card-group">
	<div class="card m-5 bg-light">
		<img class="imd-top rounded mx-auto d-block p-3" src="<?php echo base_url();?>application/Images/Fifa20.jpeg">
		<div class="card-body">
			<h4 class="card-title text-center">Review 1</h4>
			<p class="card-text text-center">Fifa 20</p>

		</div>
	</div>
	<div class="card m-5 bg-light">
		<img class="imd-top rounded  mx-auto d-block p-3" src="<?php echo base_url();?>application/Images/fallout76.jpeg">
		<div class="card-body">
			<h4 class="card-title text-center">Review2</h4>
			<p class="card-text text-center">Fallout76</p>

		</div>
	</div>
	<div class="card m-5 bg-light">
		<img class="imd-top rounded  mx-auto d-block p-3"  width="900" src="<?php echo base_url();?>application/Images/Pokemon.jpeg">
		<div class="card-body">
			<h4 class="card-title text-center">Review3</h4>
			<p class="card-text text-center">Pokemon Sword</p>

		</div>
	</div>
</div>

    <br>
    <br>
    <br>
    <br>
	<!-- footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4 text-md-left">
						<div class="py-0">
							<h3 class="my-4 white"><span class="mx-2 font-italic text-warning"</span></h3>
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



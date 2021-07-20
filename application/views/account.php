
<html>
<head>
	<!--Link in a stylesheet to CodeIgniter-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/css/bootstrap.css">

	<!--	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>account page</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>



</head>

<body>

<style>
	body.night {
		background: #00151f;
		color: #fff;
	}

	.toggleDarkMode {
		position: absolute;
		top: 290px;
		left: 320px;
		background: #fff;
		border: 2px solid #00151f;
		width: 45px;
		height: 20px;
 		border-radius: 20px;
		transition: 0.3s;
	}

	.toggleDarkMode.active {
		background: #00151f;
		border: 1px solid #fff;
	}

	.toggleDarkMode:before {
		left: 0px;
		content: '';
		position: absolute;
		width: 20px;
		height: 20px;
		background: #00151f;
		border-radius: 50%;
		transition: 0.5s;
	}

	.toggleDarkMode.active:before {
		left: 27px;
		background: #fff;
	}


</style>

<script>
    jQuery(document).ready(function($) {
        $(".toggleDarkMode").click(function() {
            $(".toggleDarkMode").toggleClass("active");
            $("body").toggleClass("night");
            $.cookie("toggleDarkMode", $(".toggleDarkMode").hasClass('active'));
        });

        if ($.cookie("toggleDarkMode") == "true") {
            $(".toggleDarkMode").addClass("active");
            $("body").addClass("night");
        }
    });

</script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<!--	<h1 class="navbar-brand p-3 display-6">Game Review</h1>-->
	<img class="logo pr-5" src="<?php echo base_url();?>application/Images/xbox.png">

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class ="nav-link "a href="<?php echo base_url();?>index.php/account">Account</a>

			</li>
			<li class="nav-item ">
				<a class ="nav-link " a href="<?php echo base_url();?>index.php/review">Review</a>
				<span class="sr-only">(current)</span></a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
		<li class="nav-item ">
			<a <?php echo anchor('Login/logout', 'Logout'); ?>Logout</a>
		</li>
	</div>
</nav>

<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 display="display-4">Account details for: <?php echo $this->input->cookie('username', TRUE); ?> </h1>


			<hr>

		</div>
	</div>
</div>


<div class="modal-dialog text-center pb-0">
	<div class="col-sm-8 main-section">
		<div class="modal-content pb-5">
			<div class="col-12 user-img">
				<img class="user_img" src="<?php echo base_url();?>application/Images/user.png"">
			</div>
			<p  class="text-light">Username: <?php echo $this->input->cookie('username', TRUE); ?></p>

			<h3>DarkMode:</h3> <div class="toggleDarkMode"></div>

		</div>




		</div>
 		</div>
	</div>
</div>

<br>
<br>
<br>
<br>
<br>
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

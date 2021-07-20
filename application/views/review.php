
<html>
<head>
	<!--Link in a stylesheet to CodeIgniter-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/css/bootstrap.css">
<!--	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<title>game review page</title>

</head>
<body>




<div id="app">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<!--	<h1 class="navbar-brand p-3 display-6">Game Review</h1>-->
			 <img class="logo pr-5" src="<?php echo base_url();?>application/Images/xbox.png">

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item ">
				<a class ="nav-link "a href="<?php echo base_url();?>index.php/account">Account</a>

			</li>
			<li class="nav-item active">
				<a class ="nav-link " a href="<?php echo base_url();?>index.php/review">Review</a>
				<span class="sr-only">(current)</span></a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search"  v-model="searchQuery"  aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
		<li class="nav-item ">
			<a <?php echo anchor('Login/logout', 'Logout'); ?>Logout</a>
		</li>
	</div>
</nav>





<! --- Navigation --->
<!--<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">-->
<!--	<div class="container-fluid">-->
<!--		<a class="navbar-brand"><img class="logo" src="--><?php //echo base_url();?><!--application/Images/xbox.png">-->
<!--		</a>-->
<!---->
<!--		<div>-->
<!--			<ul class="navbar-nav ml-auto">-->
<!--				<li class="nav-item">-->
<!--					<a class ="nav-link " a href="--><?php //echo base_url();?><!--index.php/review">Review</a>-->
<!--				</li>-->
<!--				<li class="nav-item">-->
<!--					<a class ="nav-link "a href="--><?php //echo base_url();?><!--index.php/account">Account</a>-->
<!--				</li>-->
<!---->
<!--				<li class="nav-item">-->
<!--					<a --><?php //echo anchor('Login/logout', 'Logout'); ?><!--Logout</a>-->
<!--				</li>-->
<!--				<li>-->
<!--					<div id="search bar">-->
<!--					<form> <label class="bg-dark">search</label> <input type="text"  v-model="search" placeholder="Search games"> <input type="submit"></form>-->
<!--					</div>-->
<!--				</li>-->
<!---->
<!---->
<!--				<li>-->
<!---->
<!--				</li>-->
<!--			</ul>-->
<!--		</div>-->
<!--	</div>-->
<!--</nav>-->


<!--- Welcome Section -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4"> Game review website</h1>
		</div>
		<hr>
		<div class="col-12">
			<h1 class="lead">On this website you will be able to see the latest game reviews for playstation, Xbox and Nintendo games.</h1>
		</div>
	</div>
</div>





	<!--- container2 --->
 <div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-xs-12 col-sm-6 col-md-4">
			<img src="<?php echo base_url();?>application/Images/ps4.png">
			<h3>Ps4</h3>
			<p>This console was made by Sony</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<img src="<?php echo base_url();?>application/Images/xbox-one.png">
			<h3>Xbox one</h3>
			<p>This console was made by Mircosoft </p>
		</div>
		<div class="col-xs-12 col-md-4">
			<img src="<?php echo base_url();?>application/Images/nintendo.png">
			<h3>Nintendo Switch</h3>
			<p>This was made by Nintendo </p>
		</div>

	</div>

</div>
 <hr>
<!--- container3 --->

	<style>
		.picture{
			width: 550px;
			height: 550px;
		}
	</style>
 

<!--- Latest game reviews -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 display="display-4">Latest game reviews</h1>
			<hr>

		</div>
	</div>
</div>
      <?php


	  $base_url = 'base_url';
	  echo '<div class="container">';
	  echo '<div class="row">';

	  foreach ($result as $row) {

		  $image = $row->image;
		  $slug = $row->slug;



		  echo <<<_END
        				<div class="card p-4 ml-5  mb-5" style="width: 500px;">
     					<img class="picture img-fluid "   src="{$base_url('application/' . $row->image)}"/>
 
   							<h4 class="card-title text-center display-3"> $row->title</h4>
 							<p class="card-text text-center  display-3 ">Console: <br>$row->console<br></p>
							<a class="btn  bg-secondary mt-4 display-3 " href="{$base_url('index.php/article/' . $slug)}">See full article</a>
  						</div>
		
_END;

	  }
	?>
</div>
</div>

			<hr>
	 		<div container-fluid>
				<div class="row jumbotron">
					<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
						<p class="lead">To chat about the latest upcoming games in a chat room
						click on the chat button on the right hand side which will automatically
						take you to the directed page,
						 where you can  go and  talk about the latest game and give an honest review about the game</p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2" class="btn btn-outline-secondary btn-lg">
						<div id="server">
							<a href="<?php echo base_url();?>index.php/chatRoom"><button type="button" class="btn btn-outline-secondary btn-lg">Chat room</button></a>
						</div>
					</div>
				</div>
			</div>






	 <!--- footer -->

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

</div>
 </body>

<script src="<?php echo  base_url('application/scripts/CustomVue.js')?>"></script>


</html>


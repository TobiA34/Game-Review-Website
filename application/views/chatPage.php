<html>
<head>
	<script src ="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/css/bootstrap.css">

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
			<li class="nav-item ">
				<a class ="nav-link "a href="<?php echo base_url();?>index.php/account">Account</a>

			</li>
			<li class="nav-item">
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


<div class="modal-dialog  text-center">
	<div class="col-sm-8 main-section">
		<div class="modal-content bg-light">
			<div class="col-12 user-img">
				<img class="user_img" src="<?php echo base_url();?>application/Images/user.png"">
			</div>
			<div id ="enter">
					<h1 class="text-center m-5"> Hello Welcome to the chatroom</h1>

			<form class="col-12">

				<div class="form-group">
					<input placeholder="enter message" type="text" id="message" autocomplete="off">
					<button class="btn-primary ml-4" id ="sendbutton">send</button>

					<div class="text-left mt-5 ml-5">
					<div id="chatspace"></div>
						<p hidden id="user"><?php echo $this->input->cookie('username', TRUE); ?></p>
 					</div>
				</div>

			</form>


		</div>
			<a href="<?php echo base_url();?>index.php/review"><button type="button" class="btn mb-5 btn-outline-secondary btn-lg">Exit</button></a>

		</div>


</div>
</div>

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
<script src="<?php echo base_url('application/scripts/chat.js');?>"></script>

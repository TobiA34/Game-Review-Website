 <html>
 <head>
	 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/css/bootstrap.css">
	 <!--	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
	 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	 <title>article page</title>
 </head>
 <body class="bg-dark">

 <! --- Navigation --->
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
			 <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		 </form>
		 <li class="nav-item ">
			 <a <?php echo anchor('Login/logout', 'Logout'); ?>Logout</a>
		 </li>
	 </div>
 </nav>

 <?php
 foreach ($slug as $rows) {
	 $base_url = 'base_url';

	 $image = $rows->image;

	 echo <<<_END
 
  <h1 class="text-center p-4 text-light">$rows->title</h1>

  
  <img class="mt-2  rounded mx-auto d-block img-fluid" width="850px" src="{$base_url('application/Images/' . $rows->image)}"/>



 <!--- main Article ------>
 <div class="card  m-4 p-4 card-custom mx-2 mb-3 bg-light">
 <p>
	 $rows->paragraph
 
 </p>
 </div>

 
 
 

 <!---
Get The title out of the database
 --->
_END;
   }
?>

 <a href="<?php echo base_url();?>index.php/review" class="btn btn-primary d-block" role="button">Back to home Page</a>


 <!--- comment section ---->
 <div class="modal-dialog text-center">
	 <div class="col-sm-7 ml-4 main-section">
		 <div class="modal-content p-0">
			 <div  style="word-break: break-word; class="col-12">
				 <div id="app">

<!--					 --><?php //$total_comments->text ?>
					 <hr>
					 <ul>
						 <li is="GamePost"  v-for="comment in comments" v-bind:commentpost="comment"></li>
					 </ul>

					 <?php

					 $username = $this->input->cookie('username', TRUE);
					 foreach ($display_comments as $newRows) {



						 echo "<h1 class='text-light   card-text'>".$username. " : " .$newRows->text. "</h1>";


					 }


					 ?>
					 <form class="col-12" action="<?php echo base_url('index.php/set_comments')?>" method="post">
<!--						 <input id="comments" type="text" value="" v-model="newComment"  name="comments" placeholder="Add your comment"><br><br>-->

						    <textarea id="comments" type="text" class="p-4 mt-5" v-model="newComment" name="comments" placeholder="Add your comment"></textarea><br><br>

						 <button type="button" name="save" v-on:click="setComment" class="btn btn-primary">post comment</button>
					 </form>


				 </div>
				 <br>
			 </div>
			 <script type="text/x-template" id="comment-template">
				 <li>

					 <p id="comments" name="comments" class="post-comment mb-5 p-1 d-block  text-white display-4"><p class="text-light display-4 card-text"><?php echo $this->input->cookie('username', TRUE) ?> : {{ commentpost.text }}</p>


				 </li>
		 </script>

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
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>


 <!--- Footer ---->
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

 <script src="<?php echo  base_url('application/scripts/CustomVue.js')?>"></script>

 </html>

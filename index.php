<!DOCTYPE html>
<html>
<?php
	session_start();
	$username = $SESSION['username'];
?>
<head>
	<title>Content Page</title>

	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/styles.css"  media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	
</head>
<body>

	<nav>
    <div class="nav-wrapper">
    <div id="wrapper2">
	    <a href="#" class="brand-logo">Memory Bank</a>
	      <ul id="nav-mobile" class="right hide-on-med-and-down">
	      	<li><a href="sass.html"><strong>Upload</strong></a></li>
	        <li><a class="modal-trigger" href="#modal1">Login</a></li>
	      </ul>
	    </div>
    </div>
  	</nav>

  	  <!-- Modal Structure -->
	  <div id="modal1" class="modal">
	    <div class="modal-content">
	      <div class="row">
	      <div class="col s12">
	        <div class="card-panel green center-align">
	          <span class="white-text"><!--Every bit of memory is precious, private and confidential. That is why keeping them secure is our highest priority.--> Please log in here.
	          </span>
	        </div>
	      </div>
	    </div>
	    <div id="body-wrapper-login"> 
  		<div class="row">
	      <div class="col s6 offset-s3">
	        <div class="card-panel">
	          <div class="row">
			    <form class="col s12" method="POST" action="php/login.php">
			      <div class="row">
			        <div class="input-field col s12">
			          <i class="mdi-action-account-circle prefix"></i>
			          <input id="icon_prefix" type="text" class="validate" name="username" value="">
			          <label for="icon_prefix">Username</label>
			        </div>
			        <div class="input-field col s12">
			          <i class="mdi-action-lock-outline prefix"></i>
			          <input id="password" type="password" class="validate" name="password" value="">
          			  <label for="password">Password</label>
			        </div>
			      </div>
			    </form>
			    <a id="login-btn" class="right waves-effect waves-light btn">Login</a>
			  </div>
	        </div>
	      </div>
	    </div>
	    </div>
	  </div>
	  </div>



  	<div id="body-wrapper">
  		<div class="row">

	      <div class="col s3">
	        <div class="collection">
		        <a href="#!" class="collection-item">Shawn</a>
		        <a href="#!" class="collection-item">Shawn</a>
		        <a href="#!" class="collection-item">Shawn</a>
		        <a href="#!" class="collection-item">Shawn</a>
		    </div>
	      </div>

	      <div class="col s9">
	      <div class="row">
	      <div class="col s12">
	        <div class="card-panel">
	        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id erat augue. Proin non quam at est lobortis volutpat. Donec ac nisl sit amet odio accumsan scelerisque vel a erat. Cras vehicula, nisl a feugiat accumsan, tellus mi malesuada justo, ac elementum leo mi et dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec sed convallis velit. Vestibulum at lacus eget nulla tempus imperdiet. Morbi aliquam libero vel urna consectetur, a eleifend magna porttitor. Nunc in urna nec justo placerat egestas sit amet eu ante. Nullam et justo cursus lacus auctor sagittis in sit amet dui. Pellentesque a neque risus.
	        <br><br>
			Aliquam erat volutpat. Aliquam rhoncus, felis sit amet rutrum convallis, mi diam laoreet sapien, vel vehicula ipsum nulla imperdiet ipsum. Proin finibus blandit nisl. Aliquam eros eros, mattis eget tincidunt nec, feugiat ac mauris. Nam blandit enim vel lacus suscipit, eget gravida lacus vehicula. Proin placerat mi ante, ut ultrices enim dictum quis. Nullam condimentum, erat id sagittis pretium, leo velit varius lorem, sed cursus justo lacus eu metus. Morbi id ex ac lorem eleifend mattis. Aliquam erat volutpat. Donec bibendum felis at lacus vulputate, ut vestibulum ligula consequat. Nulla convallis rhoncus mi eu faucibus. Vestibulum vestibulum libero velit, a malesuada arcu lacinia ac. Proin eget lacinia purus.
			<br><br>
			Suspendisse ut arcu sagittis massa tincidunt dictum. Donec commodo odio sit amet libero congue dapibus. Phasellus faucibus venenatis arcu, vitae posuere ligula vulputate a. Fusce purus erat, varius sit amet sapien maximus, vehicula fermentum est. Nam interdum congue placerat. Pellentesque congue erat quam, ac lacinia erat molestie in. In lacinia turpis eu est dapibus, eget tincidunt massa dictum. Etiam at urna quis sem convallis mollis.
			<br><br>
			Suspendisse et rhoncus arcu. Proin quis orci luctus, congue dolor ac, rutrum felis. Pellentesque odio urna, elementum a luctus at, auctor a purus. Nulla facilisi. Fusce in neque iaculis, lobortis nibh ut, commodo mi. Pellentesque lobortis consectetur leo et placerat. Fusce ultricies nisl sed metus condimentum, at vulputate lacus tincidunt. Nam placerat in nunc eget tincidunt.
			<br><br>
			Maecenas lobortis nisi eu mi egestas, a tempus nisl tempor. Nulla sit amet tellus imperdiet, porttitor arcu ut, ullamcorper quam. In pellentesque congue leo, ultrices maximus est imperdiet non. Praesent cursus pellentesque mauris, vitae tempus massa dictum a. Suspendisse dapibus eu leo in pretium. Duis volutpat, quam nec porttitor gravida, nulla turpis congue nunc, et rutrum enim est quis orci. Donec dignissim dapibus volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae magna velit. In hac habitasse platea dictumst. Nullam vitae finibus ipsum. Vivamus ut arcu nec ante accumsan congue. Aenean maximus laoreet justo vel sollicitudin.
			<br><br>
	      </div>
	      </div>
	      </div>
	      </div>
	
	    </div>
  	</div>


	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>

	<script>
		$(document).ready(function(){
    		  $('.modal-trigger').leanModal();
  		});
    </script>
</body>
</html>
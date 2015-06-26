<!DOCTYPE html>
<html>
<?php
	session_start();
	$username = $SESSION['username'];
?>
<head>
	<title>Sync Page</title>

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
	      	<li><a href="sass.html"><strong>SYNC+</strong></a></li>
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
			    <form class="col s12">
			      <div class="row">
			        <div class="input-field col s12">
			        	<input id="title" type="text" class="validate">
			        	<label for="title">Title</label>
			        </div>
			        <div class="input-field col s12">
			          <textarea id="body" class="materialize-textarea"></textarea>
			          <label for="body">Body</label>
			        </div>
			      </div>
			    </form>
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
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Manado Investments | Contact Us</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="col-md-12"> <!-- START OF CONTAINER -->
  <div class="row">
    <!-- Static navbar -->
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <img src="img/logo-2.png" alt="Manado Investments" class="img-responsive menu-logo">
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" style="padding:40px 25px 20px;">
          <ul class="nav navbar-nav navbar-right" style="border:3px solid #ccc;">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="investing.php">Investing</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li class="active"><a href="contact.php">Contact</a></li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li> -->
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.container-fluid -->
    </nav>
	<div class="container">
		<div class="col-md-12">
			<img src="img/Contact - Laptop.jpg" alt="" class="img-responsive">
		</div>
	</div>
	<div class="col-md-12 gray-background mt70">
		<div class="container mt30 mb40">
			<h5 class="text-center red">highly responsive, undeniably professional</h5>
			<h2 class="text-center red">available 24/7 to answer your queries</h1>
			<p class="text-center"><b>Manado Investments</b> take care of their investors, with a mission to keep them highly knowledgeable with investing.<br />You can send us a message anytime for any questions or concerns</p>
			<div class="form-area col-md-6 col-md-offset-3">  
		        <form role="form" action="mail_handler.php" method="POST">
					<div class="form-group" class="text-center">
						<label for="name">Name</label>
						<input type="text" class="form-control" id="name" name="u_name" placeholder="Name" required>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" id="email" name="u_email" placeholder="Email" required>
					</div>
	                <div class="form-group">
	                	<label for="concerns_questions">Questions or Concern</label>
	                	<textarea class="form-control" type="textarea" name="message" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>                    
	                </div>
		            
		        	<input type="submit" value="Send" name="submit" class="btn btn-primary pull-right">
		        </form>
		       <!--  <form>
				  Name:<br>
				  <input type="text" name="u_name" required><br>
				 
				  Email:
				  <input type="email" name="u_email" required><br>
				 
					Subject:<br>
					  <input type="text" name="subj" required><br>
					 
					Message:<br>
					  <input type="text" name="message" required><br>
					<input type="submit" value="Submit"><br>
				</form> -->
		    </div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="row">
			<img src="img/Footer.jpg" alt="" class="img-responsive full-width">
		</div>
	</div>
<?php include("footer.php"); ?>

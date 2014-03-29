<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Gymkhana Ledgers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Database of all the GC Ledgers">
    <meta name="author" content="SURI & KIKMAK">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  </head>

  <body>
  	
   


    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container" style=" padding-top:25px; height:50px;" >
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="./">Gymkhana Ledgers</a>
          <div class="nav-collapse collapse">
 
            <form class="navbar-form pull-right" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <input class="span2" type="text" placeholder="Email" name="email">
              <input class="span2" type="password" placeholder="Password" name="password">
              <input type="submit" name="submit" class="btn" value="Sign in" />
              <!--<button type="submit" name="submit" class="btn">-->
              <!-- Small modal -->
				<!--<input class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm" name="submit" type="submit" value="enter" />-->
              
            </form>
            
            
            
            
            
            
          </div><!--/.nav-collapse -->
        </div>
      </div>
      
    </div>
	
    
    
    
    <div class="container" style="margin-top:25px;">
		
        <?php
		if(isset($_POST['submit']))
		{
			$email = mysql_real_escape_string($_POST['email']);
			$password = mysql_real_escape_string($_POST['password']);
			
			   if(strlen($email)&& strlen($password))
			   {
				   
				   include 'config.php';
				   $password=md5(mysql_real_escape_string($_POST["password"]));
				   
				
					$login = mysql_query("SELECT * FROM $table1 WHERE (email = '" . mysql_real_escape_string($_POST["email"]) . "') and (password = '$password')");
// Check username and password match
if (mysql_num_rows($login) == 1) {
	$user = mysql_query("SELECT * FROM $table1 WHERE email='".mysql_real_escape_string($_POST["email"])."'");
	$row = mysql_fetch_array($user);
				
					// Set username session variable
					$_SESSION['name'] = $row['name'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['user_id'] = $row['user_id'];
					
					//jump into forum
					header('Refresh: 2; URL=./dashboard.php');
					echo '<div class="alert alert-success">'.'You have successfully been logged'.'</div>';
					}
					else {
					// Jump to login page
					session_destroy();
					
					echo '<div class="alert alert-danger">'.'Please enter Correct name and passsword'.'</div>';
					}
	
				/*echo '<div class="alert alert-danger">'.$_POST['email'].'</div>';
				echo '<div class="alert alert-success">'.$_POST['password'].'</div>';*/
				}
				else
				{
					echo '<div class="alert alert-danger">'.'Enter Email ID &amp; Password'.'</div>';
					session_destroy();	
				}
		}
		else
		{
			session_destroy();
		}
	   ?>
        
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h2>Social &amp; Cultural General Championship</h2>
        <p>Presenting You with all the echos and chaos of Social &amp; Cultural General Championship at one place.</p>
        <p><a href="./dashboard.php" class="btn btn-primary btn-large">Visit Now &raquo;</a></p>
        
      </div>
      
     

      <footer style=" width:inherit; position:absolute; bottom:0; padding-bottom:10px;">
        <hr>
        <p>&copy; Gymkhana IIT Kharagpur 2014</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>

  </body>
</html>

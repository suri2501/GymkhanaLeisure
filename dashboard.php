<?php
session_start();
if(isset($_SESSION['email']))
{
	$user ='';
	$email = $_SESSION['email'];
}
$user_id = $_SESSION['user_id'];
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dashboard of GC Ledgers">
    <meta name="author" content="SURI & KIKMAK">
    <link rel="shortcut icon" href="./assets/ico/favicon.ico">

    <title>Dashboard / GC Ledgers</title>

    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="./assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="dashboard.php">Gymkhana Ledgers</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" style="margin-top:8px; margin-right:0px;">
          <?php
		  if(isset($user))
		  {
		  ?>
            <li><button class="btn btn-primary" data-toggle="modal" data-target="#modal_compose" style="margin-top:0px; margin-right:5px;">Compose</button></li>
            <li><button class="btn btn-primary" data-toggle="modal" data-target="#modal_log" style="margin-top:0px; margin-right:5px;" >Activity Log</button></li>
            <!--<li><button class="btn btn-primary" data-toggle="modal" data-target="#myModal3" style="padding-top:15px;">Profile</button></li>-->
            <li><a href="./logout.php" style="margin-top:-8px; margin-right:0px;">Logout</a></li>
            
            <?php
		  }
		  else
		  {
		  ?>
		  
			<a href="./"><button class="btn btn-primary"  >Home</button></a>
		  <?php
		  }
			?>
           
          </ul>
          
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar " style="padding:10px 0;">
        	
            <div>
			<!---------------------------SEARCH_FORM------------------------------------->
        	<form class="navbar-form navbar-right" style="margin:0; padding:0 5px; width:100%;" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input class="btn btn-primary" type="submit" name="submit_search" value="search" style="margin:6px 0; width:100%;" />
            <br />
          	<select name="year_search" class="form-control" style="margin:6px 0; width:100%;">
              	<option selected style="text-align:center;" value="">YEAR</option>
                
                
                <?php 
				for ($x=2014; $x>=2004; $x--)
				{
                  echo '<option value="'.$x.'-'.($x+1).'">'.$x.'-'.($x+1).'</option>';
				}
				  ?>
            </select>
            <br />
            
            <select name="event_search" class="form-control" style="margin:6px 0; width:100%;">
            <option value="" selected>EVENTS</option>
              <option value="ENGLISH ELOCUTION">ENGLISH ELOCUTION</option>
                                <option value="BENGALI ELOCUTION">BENGALI ELOCUTION</option>
                                <option value="HINDI ELOCUTION">HINDI ELOCUTION</option>
								<option value="DEBATE">DEBATE</option>
                                <option value="WHATS THE GOOD WORD">WHATS THE GOOD WORD</option>
                                <option value="QUIZ">QUIZ</option>
								<option value="WESTERN VOCALS">WESTERN VOCALS</option>
                                <option value="EASTERN VOCALS">EASTERN VOCALS</option>
                                <option value="WESTERN INSTRUMENTALS">WESTERN INSTRUMENTALS</option>
								<option value="EASTERN INSTRUMENTALS">EASTERN INSTRUMENTALS</option>
                                <option value="WESTERN GROUPS">WESTERN GROUPS</option>
                                <option value="EASTERN GROUPS">EASTERN GROUPS</option>
								<option value="HINDI DRAMATICS">HINDI DRAMATICS</option>
                                <option value="BENGALI DRAMATICS">BENGALI DRAMATICS</option>
                                <option value="ENGLISH DRAMATICS">ENGLISH DRAMATICS</option>
								<option value="CHOREOGRAPHY">CHOREOGRAPHY</option>
                                <option value="DUMB-CHARADS">DUMB-CHARADS</option>
                                <option value="SKETCHING">SKETCHING</option>
								<option value="CARTOONING">CARTOONING</option>
                                <option value="POSTERING">POSTERING</option>
                                <option value="COLLAGING">COLLAGING</option>
								<option value="THERMOCOL AND CLAY MODELLING">THERMOCOL AND CLAY MODELLING</option>
            </select>
            <br />
            <select name="tags_search" class="form-control" style="margin:6px 0; width:100%;">
              <option value="" selected>TAGS</option>
			  <?php
				$result = mysql_query("SELECT * FROM `$table3`");
				while($row = mysql_fetch_array($result))
				  {
			  
			  
			  ?>
              <option value="<?php echo $row['tags'] ?>"><?php echo $row['tags']; ?></option>
              <?php
			  }
			  ?>
            </select>
            
            <!--<input type="text" class="form-control" placeholder="Search...">-->
          </form>
          </div>
          
          <div>
          <p>&nbsp;</p>
          <!--<hr style="1px solid rgb(204, 201, 201)" />
          <p style="margin:0px 5px; width:95%;  text-align:center;" class="btn btn-warning">TRICKER</p>
          
          <div style="margin:10px;">
          <p>Last Login : </p>
          <p></p>
          <p>Last Modification : </p>
          <p></p>
          
          </div>-->
          </div>
        
          
          <!--
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>-->
        </div>
        
        
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        	
            <!---------------------SUBMIT_EDIT------------------------->
            <?php
            if(isset($_POST['submit_edit']))
            {	
					$id = $_POST['id'];
					$cup = $_POST['cup'];
					$event = $_POST['event'];
					$judges = strtoupper($_POST['judges']);
					$standing1 = strtoupper($_POST['standing1']);
					$standing2 = strtoupper($_POST['standing2']);
					$standing3 = strtoupper($_POST['standing3']);
					$chaos = strtoupper($_POST['chaos']);
					
					$tags = strtoupper($_POST['tags']);
				
					//$standing = $standing1.' '.$standing2.' '.$standing3;
					date_default_timezone_set("Asia/Kolkata"); 
   					 $date = date('d-m-Y H:i:s'); 
					 $year = $_POST['session']; 
					   
					   
					$result = mysql_query("SELECT * FROM `$table2` WHERE id='$id'");  
					$row = mysql_fetch_array($result);					
					$cup_old = $row['cup'];
					$event_old = $row['event'];
					$judges_old = $row['judges'];
					$year_old = $row['session'];
					$standing1_old = $row['standing1'];
					$standing2_old = $row['standing2'];
					$standing3_old = $row['standing3'];
					$chaos_old = $row['chaos'];				
					$tags_old = $row['tags'];
                
       if(strlen($cup)&& strlen($event)&& strlen($judges)&& strlen($standing1)&& strlen($standing2)&& strlen($standing3)&& strlen($chaos)&& strlen($tags))
                   {
                                      
                        /*$login = mysql_query("UPDATE `$table2` (  `cup` ,  `event` ,  `session` ,  `judges` ,  `standing1` , `standing2` , `standing3` ,  `chaos` ,  `tags`,`time` ) 
VALUES ('$cup', '$event','$year','$judges','$standing1','$standing2','$standing3','$chaos','$tags','$date')");*/

						
						$login = mysql_query("UPDATE `$table2` SET `cup`='$cup',`event`='$event',`session`='$year',`judges`='$judges',`standing1`='$standing1',`standing2`='$standing2',`standing3`='$standing3',`chaos`='$chaos',`tags`='$tags',`time`='$date' WHERE id=$id");
						
						mysql_query("INSERT INTO `log`(`user_id`, `entry_id`, `cup_new`, `cup_old`, `event_new`, `event_old`, `session_new`, `session_old`, `judges_new`, `judges_old`, `standing1_new`, `standing1_old`, `standing2_new`, `standing2_old`, `standing3_new`, `standing3_old`, `chaos_new`, `chaos_old`, `tags_new`, `tags_old`)  VALUES('$user_id','$id','$cup','$cup_old','$event','$event_old','$year','$year_old','$judges','$judges_old','$standing1','$standing1_old','$standing2','$standing2_old','$standing3','$standing3_old','$chaos','$chaos_old','$tags','$tags_old')");
						
						
						
							$counter =  substr_count($tags, ' ');
							$Chunks = explode(" ", $tags);
							for ($x=0; $x<=$counter; $x++)
							  { 
								  $login = mysql_query("SELECT * FROM `$table3` WHERE (tags = '$Chunks[$x]')");
									if (mysql_num_rows($login) == 1) {
															  
									}
									else
									{
										$login1 = mysql_query("INSERT INTO   `$table3` (  `tags` ) 
										VALUES ('$Chunks[$x]')");
										
										}


							  } 
						
    
                        echo '<div class="alert alert-success">'.'Successfully Updated'.'</div>';
                        }
						else
                    	{
                        echo '<div class="alert alert-danger">'.'Enter All Fields'.'</div>';
                            
                    	}
                       
                    }
                    
            
            
            ?>
            
            
            <!-----------------------SUBMIT_COMPOSE------------------------------------------------->
			<?php
            if(isset($_POST['submit_compose']))
            {	
					$cup = $_POST['cup'];
					$event = $_POST['event'];
					$judges = strtoupper($_POST['judges']);
					$standing1 = strtoupper($_POST['standing1']);
					$standing2 = strtoupper($_POST['standing2']);
					$standing3 = strtoupper($_POST['standing3']);
					$chaos = strtoupper($_POST['chaos']);
					
					$tags = strtoupper($_POST['tags']);
				
					//$standing = $standing1.' '.$standing2.' '.$standing3;
					date_default_timezone_set("Asia/Kolkata"); 
   					 $date = date('d-m-Y H:i:s'); 
					 $year = $_POST['session']; 
					   
					   
                
       if(strlen($cup)&& strlen($event)&& strlen($judges)&& strlen($standing1)&& strlen($standing2)&& strlen($standing3)&& strlen($chaos)&& strlen($tags))
                   {
                                      
                        $login = mysql_query("INSERT INTO   `$table2` (  `cup` ,  `event` ,  `session` ,  `judges` ,  `standing1` , `standing2` , `standing3` ,  `chaos` ,  `tags`,`time` ) 
VALUES ('$cup', '$event','$year','$judges','$standing1','$standing2','$standing3','$chaos','$tags','$date')");
						
							$counter =  substr_count($tags, ' ');
							$Chunks = explode(" ", $tags);
							for ($x=0; $x<=$counter; $x++)
						  {
							  
							  $login = mysql_query("SELECT * FROM `$table3` WHERE (tags = '$Chunks[$x]')");
// Check username and password match
if (mysql_num_rows($login) == 1) {
						  
}
else
{
	$login1 = mysql_query("INSERT INTO   `$table3` (  `tags` ) 
	VALUES ('$Chunks[$x]')");
	
	}
						  } 
						
    
                        echo '<div class="alert alert-success">'.'Successfully Entered'.'</div>';
                        }
						else
                    	{
                        echo '<div class="alert alert-danger">'.'Enter All Fields'.'</div>';
                            
                    	}
                       
                    }
                    
            
            
            ?>
        
        
        
          <h1 class="page-header temp2"><a href="#">General Champion Social &amp; Cultural</a></h1>

          <div class="row placeholders">
          
              <div class="btn-group col-xs-6 col-sm-3 placeholder temp1">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="General Champion Social &amp; Cultural">
                          <h4>Literary Cup</h4>
                          <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu" style="left:inherit;">
                
                <li><a href="dashboard.php?event=ENGLISH%20ELOCUTION">ENGLISH ELOCUTION</a></li>
                <li><a href="dashboard.php?event=BENGALI%20ELOCUTION">BENGALI ELOCUTION</a></li>
                <li><a href="dashboard.php?event=HINDI%20ELOCUTION">HINDI ELOCUTION</a></li>
                <li><a href="dashboard.php?event=DEBATE">DEBATE</a></li>
                <li><a href="dashboard.php?event=WHATS%20THE%20GOOD%20WORD">WHATS THE GOOD WORD</a></li>
                <!--<li class="divider"></li>
                <li><a href="#">Separated link</a></li>-->
              </ul>
        	</div>
            
            <div class="btn-group col-xs-6 col-sm-3 placeholder temp1">
              <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="General Champion Social &amp; Cultural">
                          <h4>Dramatics Cup</h4>
                          <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu" style="left:inherit;">
                <li><a href="dashboard.php?event=HINDI%20DRAMATICS">HINDI DRAMATICS</a></li>
                <li><a href="dashboard.php?event=BENGALI%20DRAMATICS">BENGALI DRAMATICS</a></li>
                <li><a href="dashboard.php?event=ENGLISH%20DRAMATICS">ENGLISH DRAMATICS</a></li>
                <li><a href="dashboard.php?event=CHOREOGRAPHY">CHOREOGRAPHY</a></li>
                <li><a href="dashboard.php?event=DUMB-CHARADS">DUMB-CHARADS</a></li>
                
              </ul>
        	</div>
            
            <div class="btn-group col-xs-6 col-sm-3 placeholder temp1">
              <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="General Champion Social &amp; Cultural">
                          <h4>Fine Arts Cup</h4>
                          <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu" style="left:inherit;">
                <li><a href="dashboard.php?event=SKETCHING">SKETCHING</a></li>
                <li><a href="dashboard.php?event=CARTOONING">CARTOONING</a></li>
                <li><a href="dashboard.php?event=POSTERING">POSTERING</a></li>
                
                <li><a href="dashboard.php?event=COLLAGING">COLLAGING</a></li>
                <li><a href="dashboard.php?event=THERMOCOL%20AND%20CLAY%20MODELLING">THERMOCOL AND CLAY MODELLING</a></li>
              </ul>
        	</div>
            
            <div class="btn-group col-xs-6 col-sm-3 placeholder temp1">
              <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="General Champion Social &amp; Cultural">
                          <h4>Entertainment Cup</h4>
                          <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu" style="left:inherit;">
                <li><a href="dashboard.php?event=WESTERN%20VOCALS">WESTERN VOCALS</a></li>
                <li><a href="dashboard.php?event=EASTERN520VOCALS">EASTERN VOCALS</a></li>
                <li><a href="dashboard.php?event=WESTERN%20INSTRUMENTALS">WESTERN INSTRUMENTALS</a></li>         
                <li><a href="dashboard.php?event=EASTERN%20INSTRUMENTALS">EASTERN INSTRUMENTALS</a></li>
                <li><a href="dashboard.php?event=WESTERN%20GROUPS">WESTERN GROUPS</a></li>
                <li><a href="dashboard.php?event=EASTERN%20GROUPS">EASTERN GROUPS</a></li>
              </ul>
        	</div>
            
            <div class="btn-group col-xs-6 col-sm-3 placeholder temp1">
              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="General Champion Social &amp; Cultural">
                          <h4>Illumination &amp; Rangoli</h4>
                          <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu" style="left:inherit;">
                <li><a href="dashboard.php?event=ILLUMINATION">ILLUMINATION</a></li>
                <li><a href="dashboard.php?event=RANGOLI">RANGOLI</a></li>
                
              </ul>
        	</div>
     
          </div>
			
            <?php
			
				
				
				
				if(isset($_GET['event']))
				{
					if(strlen($_GET['event']))
					{
						
					$event=$_GET['event'];
					$result = mysql_query("SELECT * FROM `$table2` WHERE event='$event'");
					
					}
				}
				else
				{
					$result = mysql_query("SELECT * FROM `$table2`");
				}
				if(isset($_POST['submit_search']))
				{
		
					if(strlen($_POST['event_search'])&& strlen($_POST['tags_search'])&& strlen($_POST['year_search']))
					{
							$event=strtoupper($_POST['event_search']);
							$year_new  = strtoupper($_POST['year_search']);
							$tags = '%'.strtoupper($_POST['tags_search']).'%';
							$result = mysql_query("SELECT * FROM `$table2` WHERE (event='$event') AND (session='$year_new') AND tags LIKE '%$tags%'");
						
					}
					else if(strlen($_POST['event_search'])&& strlen($_POST['year_search']))
					{
							
							$event=strtoupper($_POST['event_search']);
							$year_new  = strtoupper($_POST['year_search']);
							$result = mysql_query("SELECT * FROM `$table2` WHERE (event='$event') AND (session='$year_new')");
						
					}
					else if(strlen($_POST['event_search'])&& strlen($_POST['tags_search']))
					{
							
							$event=strtoupper($_POST['event_search']);
							$tags = '%'.strtoupper($_POST['tags_search']).'%';
							$result = mysql_query("SELECT * FROM `$table2` WHERE (event='$event') AND tags LIKE '%$tags%'");
						
					}
					else if(strlen($_POST['year_search'])&& strlen($_POST['tags_search']))
					{
							$event=strtoupper($_POST['event_search']);
							$tags = '%'.strtoupper($_POST['tags_search']).'%';
							$result = mysql_query("SELECT * FROM `$table2` WHERE (event='$event') AND tags LIKE '%$tags%'");
							
					}
					else if((strlen($_POST['event_search'])))
					{
						$event=strtoupper($_POST['event_search']);
						$result = mysql_query("SELECT * FROM `$table2` WHERE event='$event'");
						}
					else if((strlen($_POST['tags_search'])))
					{
							$tags = '%'.strtoupper($_POST['tags_search']).'%';
							$result = mysql_query("SELECT * FROM `$table2` WHERE tags LIKE '%$tags%'");
						}
					else{
						
						$year_new  = strtoupper($_POST['year_search']);
						$result = mysql_query("SELECT * FROM `$table2` WHERE session='$year_new'");
						
						}
				}
				/*
				if($year_new=="YEAR"){
								if($tags=="TAGS"){
									$result = mysql_query("SELECT * FROM `$table2` WHERE event='$event'");
								}
								else{
									$result = mysql_query("SELECT * FROM `$table2` WHERE (event='$event') AND tags LIKE '%$tags%'");
								}
							}
							else{
								if($tags=="TAGS"){
									$result = mysql_query("SELECT * FROM `$table2` WHERE (event='$event') AND (session='$year_new')");
								}
								else{
									$result = mysql_query("SELECT * FROM `$table2` WHERE (event='$event') AND (session='$year_new') AND tags LIKE '%$tags%'");
								}
							}
				*/
				//$result = mysql_query("SELECT * FROM `$table2` WHERE event='ENGLISH ELOCUTION'");
				//$num_rows = mysql_num_rows($result);
			
			?>
          <!--<h2 class="sub-header">Section title</h2>-->

          <div class="table-responsive" style="font-size:13px;">
            <table class="table table-striped">
              <thead>
                <tr>
				
                  <th><?php
		  if(isset($user))
		  { ?>#<?php } ?></th>
                  <th>Cup</th>
                  <th>Event</th>
                  <th>Session</th>
                  <th>Judges</th>
				  <th>Gold</th>
                  <th>Silver</th>
                  <th>Bronze</th>
				  <th>Chaos</th>
				  <th>Last Modified</th>
                </tr>
              </thead>
              <tbody>
				<?php
				while($row = mysql_fetch_array($result))
				  {
				  
				?>
                <tr>
                  <td><?php
		  if(isset($user))
		  { ?>
		  <button class="btn btn-default" data-toggle="modal" data-target="#editModal-<?php echo $row['id'];?>">Edit</button>
		  <?php } ?>
		  </td>
                  <td><?php echo $row['cup']; ?></td>
                  <td><?php echo $row['event']; ?></td>
                  <td><?php echo $row['session']; ?></td>
                  <td><?php echo $row['judges']; ?></td>
                  <td><?php echo $row['standing1']; ?></td>
                  <td><?php echo $row['standing2']; ?></td>
                  <td><?php echo $row['standing3']; ?></td>
                  <td><?php echo $row['chaos']; ?></td>
                  <td><?php echo $row['time']; ?></td>
                </tr>
                <?php
				  }
				?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
    			<div class="modal fade" id="modal_compose" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Compose</h4>
                      </div>
					  <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						<div class="modal-body">
                            	<div class="form-group" style="width:50%; float:left;">
                                <select class="form-control" name="cup">
                                
                                <option value="LITERARY CUP">LITERARY CUP</option>
                                <option value="ENTERTAINMENT CUP">ENTERTAINMENT CUP</option>
								<option value="DRAMATICS CUP">DRAMATICS CUP</option>
								<option value="FINE ARTS CUP">FINE ARTS CUP</option>
                                <option value="ILLUMINATION AND RANGOLI">ILLUMINATION &amp; RANGOLI</option>
                                </select>
                              </div>
                              
                              <div class="form-group" style="width:50%; float:left">
                                <select class="form-control" name="event">
                                <option value="ILLUMINATION">ILLUMINATION</option>
                                <option value="RANGOLI">RANGOLI</option>
                                <option value="ENGLISH ELOCUTION">ENGLISH ELOCUTION</option>
                                <option value="BENGALI ELOCUTION">BENGALI ELOCUTION</option>
                                <option value="HINDI ELOCUTION">HINDI ELOCUTION</option>
								<option value="DEBATE">DEBATE</option>
                                <option value="WHATS THE GOOD WORD">WHATS THE GOOD WORD</option>
                                <option value="QUIZ">QUIZ</option>
								<option value="WESTERN VOCALS">WESTERN VOCALS</option>
                                <option value="EASTERN VOCALS">EASTERN VOCALS</option>
                                <option value="WESTERN INSTRUMENTALS">WESTERN INSTRUMENTALS</option>
								<option value="EASTERN INSTRUMENTALS">EASTERN INSTRUMENTALS</option>
                                <option value="WESTERN GROUPS">WESTERN GROUPS</option>
                                <option value="EASTERN GROUPS">EASTERN GROUPS</option>
								<option value="HINDI DRAMATICS">HINDI DRAMATICS</option>
                                <option value="BENGALI DRAMATICS">BENGALI DRAMATICS</option>
                                <option value="ENGLISH DRAMATICS">ENGLISH DRAMATICS</option>
								<option value="CHOREOGRAPHY">CHOREOGRAPHY</option>
                                <option value="DUMB-CHARADS">DUMB-CHARADS</option>
                                <option value="SKETCHING">SKETCHING</option>
								<option value="CARTOONING">CARTOONING</option>
                                <option value="POSTERING">POSTERING</option>
                                <option value="COLLAGING">COLLAGING</option>
								<option value="THERMOCOL AND CLAY MODELLING">THERMOCOL AND CLAY MODELLING</option>
                                
                                </select>
                              </div>
                                <div style="clear:both;"></div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Judges</label>
                                <input name="judges"  class="form-control" id="exampleInputEmail1" placeholder="Enter Judges Details">
                              </div>
                            
                              <div class="form-group">
                              	<label for="exampleInputPassword1">Standing</label>
                                  <div class="row">
                                  <div class="col-xs-4">
                                    <input name="standing1" type="text" class="form-control" placeholder="Gold">
                                  </div>
                                  <div class="col-xs-4">
                                    <input name="standing2" type="text" class="form-control" placeholder="Silver">
                                  </div>
                                  <div class="col-xs-4">
                                    <input name="standing3" type="text" class="form-control" placeholder="Bronze">
                                  </div>
                                </div>
                               </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Session</label>
                                <input name="session" type="text" class="form-control"  placeholder="2013-2014">
                                </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Chaos</label>
                                <textarea name="chaos" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Tags</label>
                                <input name="tags" type="text" class="form-control"  placeholder="E.g : time,date,place">
                              </div>
                              
                      </div>
                      <div class="modal-footer">
					  <button name="submit_compose" type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        <button type="button" class="btn btn-danger dropdown-toggle" data-dismiss="modal">Close</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                      </div>
                    </div>
                  </div>
                </div>
                
				<!---------------------------------------------- ACTIVITY LOG MODAL ------------------------------------------------------->
                <div class="modal fade " id="modal_log" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" style="width:1200px;">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Change Log</h4>
                      </div>
                      <div class="modal-body">
                        <!----- data ---->
          <div class="table-responsive">
            <table class="table table-striped" style="font-size:13px;'>
              <thead>
                <tr>
				
                  <th>User</th>
				  <th>Time</th>
                  <th>Cup</th>
                  <th>Event</th>
                  <th>Session</th>
                  <th>Judges</th>
				  <th>Gold</th>
                  <th>Silver</th>
                  <th>Bronze</th>
				  <th>Chaos</th>
				  <th>Tags</th>
                </tr>
              </thead>
              <tbody>
				<?php
				$result4 = mysql_query("SELECT * FROM `$table4`");
				while($row = mysql_fetch_array($result4))
				  {
					$user_id = $row['user_id'];
					$user_data = mysql_query("SELECT name FROM `$table1` WHERE user_id=$user_id");
					$user = mysql_fetch_array($user_data);
				?>
                <tr>
                  <td><?php echo $user['name']; ?>		 </td>
				  <td> <kbd> <?php echo $row['time']; ?></kbd>			 </td>
                  <td> <kbd> <?php echo $row['cup_new']; ?>			</kbd> &nbsp; <code><strike><?php echo $row['cup_old']; ?>		</strike></code> </td>
                  <td> <kbd> <?php echo $row['event_new']; ?>		</kbd> &nbsp; <code><strike><?php echo $row['event_old']; ?>	</strike></code> </td>
                  <td> <kbd> <?php echo $row['session_new']; ?>		</kbd> &nbsp; <code><strike><?php echo $row['session_old']; ?>	</strike></code> </td>
                  <td> <kbd> <?php echo $row['judges_new']; ?>		</kbd> &nbsp; <code><strike><?php echo $row['judges_old']; ?>	</strike></code> </td>
                  <td> <kbd> <?php echo $row['standing1_new']; ?>	</kbd> &nbsp; <code><strike><?php echo $row['standing1_old']; ?></strike></code> </td>
                  <td> <kbd> <?php echo $row['standing2_new']; ?>	</kbd> &nbsp; <code><strike><?php echo $row['standing2_old']; ?></strike></code> </td>
                  <td> <kbd> <?php echo $row['standing3_new']; ?>	</kbd> &nbsp; <code><strike><?php echo $row['standing3_old']; ?></strike></code> </td>
                  <td> <kbd> <?php echo $row['chaos_new']; ?>		</kbd> &nbsp; <code><strike><?php echo $row['chaos_old']; ?>	</strike></code> </td>
                  <td> <kbd> <?php echo $row['tags_new']; ?>		</kbd> &nbsp; <code><strike><?php echo $row['tags_old']; ?>		</strike></code> </td>
                </tr>
                <?php
				  }
				?>
                
              </tbody>
            </table>
          </div>		
						<!-- data end -->
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
				if(isset($_GET['event']))
				{
				$result = mysql_query("SELECT * FROM `$table2` WHERE event='$event'");
				}
				else
				{
					$result = mysql_query("SELECT * FROM `$table2`");	
				}
				
				/*if(isset($_POST['submit_search']))
				{
					if(isset($_POST['event_search'])&&isset($_POST['tags_search'])&&isset($_POST['year_search']))
					{
						if(strlen($_POST['event_search'])&& strlen($_POST['tags_search'])&& strlen($_POST['year_search']))
						{
							
							$event=strtoupper($_POST['event_search']);
							$year_new  = strtoupper($_POST['year_search']);
							$tags = '%'.strtoupper($_POST['tags_search']).'%';
							
						$result = mysql_query("SELECT * FROM `$table2`
						WHERE (event='$event') AND (session='$year_new') AND tags LIKE '%$tags%'");
						}
					}
				}*/
				
				while($row = mysql_fetch_array($result))
				  {
				  
				?>
				
				<!-----------------------------------------------EDIT--------------------------------------->
                <div class="modal fade" id="editModal-<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Edit</h4>
                      </div>
					  	<form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="modal-body">
                        
                            	<div class="form-group" style="width:50%; float:left;">
                                <select class="form-control" name="cup">
                                <option value="<?php echo $row['cup']; ?>" selected><?php echo $row['cup']; ?></option>
                                <option value="LITERARY CUP">LITERARY CUP</option>
                                <option value="ENTERTAINMENT CUP">ENTERTAINMENT CUP</option>
								<option value="DRAMATICS CUP">DRAMATICS CUP</option>
								<option value="FINE ARTS CUP">FINE ARTS CUP</option>
                                <option value="ILLUMINATION AND RANGOLI">ILLUMINATION &amp; RANGOLI</option>
                                </select>
                              </div>
                              
                              <div class="form-group" style="width:50%; float:left">
                                <select class="form-control" name="event">
								<option value="<?php echo $row['event']; ?>" selected><?php echo $row['event']; ?></option>
                                <option value="ILLUMINATION">ILLUMINATION</option>
                                <option value="RANGOLI">RANGOLI</option>
                                <option value="ENGLISH ELOCUTION">ENGLISH ELOCUTION</option>
                                <option value="BENGALI ELOCUTION">BENGALI ELOCUTION</option>
                                <option value="HINDI ELOCUTION">HINDI ELOCUTION</option>
								<option value="DEBATE">DEBATE</option>
                                <option value="WHATS THE GOOD WORD">WHATS THE GOOD WORD</option>
                                <option value="QUIZ">QUIZ</option>
								<option value="WESTERN VOCALS">WESTERN VOCALS</option>
                                <option value="EASTERN VOCALS">EASTERN VOCALS</option>
                                <option value="WESTERN INSTRUMENTALS">WESTERN INSTRUMENTALS</option>
								<option value="EASTERN INSTRUMENTALS">EASTERN INSTRUMENTALS</option>
                                <option value="WESTERN GROUPS">WESTERN GROUPS</option>
                                <option value="EASTERN GROUPS">EASTERN GROUPS</option>
								<option value="HINDI DRAMATICS">HINDI DRAMATICS</option>
                                <option value="BENGALI DRAMATICS">BENGALI DRAMATICS</option>
                                <option value="ENGLISH DRAMATICS">ENGLISH DRAMATICS</option>
								<option value="CHOREOGRAPHY">CHOREOGRAPHY</option>
                                <option value="DUMB-CHARADS">DUMB-CHARADS</option>
                                <option value="SKETCHING">SKETCHING</option>
								<option value="CARTOONING">CARTOONING</option>
                                <option value="POSTERING">POSTERING</option>
                                <option value="COLLAGING">COLLAGING</option>
								<option value="THERMOCOL AND CLAY MODELLING">THERMOCOL AND CLAY MODELLING</option>
                                
                                </select>
                              </div>
                                <div style="clear:both;"></div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Judges</label>
                                <input name="judges"  class="form-control" id="exampleInputEmail1" placeholder="Enter Judges Details" value="<?php echo $row['judges'];?>">
                              </div>
							  <input name="id" type="hidden" value="<?php echo $row['id']; ?>" />
                            
                              <div class="form-group">
                              	<label for="exampleInputPassword1">Standing</label>
                                  <div class="row">
                                  <div class="col-xs-4">
                                    <input name="standing1" type="text" class="form-control" placeholder="Gold"  value="<?php echo $row['standing1'];?>">
                                  </div>
                                  <div class="col-xs-4">
                                    <input name="standing2" type="text" class="form-control" placeholder="Silver" value="<?php echo $row['standing2'];?>">
                                  </div>
                                  <div class="col-xs-4">
                                    <input name="standing3" type="text" class="form-control" placeholder="Bronze" value="<?php echo $row['standing3'];?>">
                                  </div>
                                </div>
                               </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Session</label>
                                <input name="session" type="text" class="form-control"  placeholder="2013-2014" value="<?php echo $row['session'];?>">
                                </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Chaos</label>
                                <textarea name="chaos" class="form-control" rows="3"><?php echo $row['chaos'];?></textarea>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Tags</label>
                                <input name="tags" type="text" class="form-control"  placeholder="E.g : time,date,place" value="<?php echo $row['tags'];?>">
                              </div>
                              
                              
                              
                      </div>
                      <div class="modal-footer">
					  <button name="submit_edit" type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                                <?php
				  }
				?>
				<!--------------------------------------PROFILE---------------------------------------------->
                <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Profile</h4>
                      </div>
                      <div class="modal-body">
                        	<form role="form">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Example block-level help text here.</p>
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> Check me out
                                </label>
                              </div>
                              <button type="submit" class="btn btn-default" name="submit">Submit</button>
                            </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="assets/js/bootstrap-transition.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/docs.min.js"></script>
  </body>
</html>

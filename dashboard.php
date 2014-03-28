<?php
session_start();
if(isset($_SESSION['email']))
{
	$user ='';
	$email = $_SESSION['email'];
}
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dashboard of GC Leisures">
    <meta name="author" content="SURI & KIKMAK">
    <link rel="shortcut icon" href="./assets/ico/favicon.ico">

    <title>Dashboard / GC Leisures</title>

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
          <a class="navbar-brand" href="#">Gymkhana Leisures</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          <?php
		  if(isset($user))
		  {
		  ?>
            <li><button class="btn btn-primary" data-toggle="modal" data-target="#myModal1" style="padding-top:15px;">Compose</button></li>
            <li><button class="btn btn-primary" data-toggle="modal" data-target="#myModal2" style="padding-top:15px; margin:0 5px;">Acticity Log</button></li>
            <li><button class="btn btn-primary" data-toggle="modal" data-target="#myModal3" style="padding-top:15px;">Profile</button></li>
            	
                
            
            <?php
		  }
			?>
            <li><a href="./logout.php">Logout</a></li>
          </ul>
          <!--<form class="navbar-form navbar-right">
          	<select class="form-control">
              	<option>YEAR</option>
                  <option>2011</option>
                  <option>2012</option>
                  <option>2013</option>
                  <option>2014</option>
            </select>
            
            <select class="form-control">
              <option>EVENT</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            
            <select class="form-control">
              <option>CHAOS</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            <input type="submit" name="submit" value="search" />
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar " style="padding:10px 0;">
        	
            <div>
        	<form class="navbar-form navbar-right" style="margin:0; padding:0 5px; width:100%;">
            <input class="btn btn-primary" type="submit" name="submit" value="search" style="margin:6px 0; width:100%;" />
            <br />
          	<select class="form-control" style="margin:6px 0; width:100%;">
              	<option style="text-align:center;">YEAR</option>
                <?php 
				for ($x=2004; $x<=2014; $x++)
				{
                  echo '<option value="'.$x.'">'.$x.'</option>';
				}
				  ?>
            </select>
            <br />
            
            <select class="form-control" style="margin:6px 0; width:100%;">
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
                                <option>SKETCHING</option>
								<option>CARTOONING</option>
                                <option>POSTERING</option>
                                <option>COLLAGING</option>
								<option>THERMOCOL AND CLAY MODELLING</option>
            </select>
            <br />
            <select class="form-control" style="margin:6px 0; width:100%;">
              <option>CHAOS</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            
            <!--<input type="text" class="form-control" placeholder="Search...">-->
          </form>
          </div>
          
          <div>
          <p>&nbsp;</p>
          <hr style="1px solid rgb(204, 201, 201)" />
          <p style="margin:0px 5px; width:95%;  text-align:center;" class="btn btn-warning">TRICKER</p>
          
          <div style="margin:10px;">
          <p>Last Login : </p>
          <p></p>
          <p>Last Modification : </p>
          <p></p>
          
          </div>
          </div>
        
          
          <!--
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>-->
        </div>
        
        
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        
			<?php
            if(isset($_POST['submit1']))
            {	
					$cup = $_POST['cup'];
					$event = $_POST['event'];
					$judges = $_POST['judges'];
					$standing1 = $_POST['standing1'];
					echo $standing1;
					$standing2 = $_POST['standing2'];
					$standing3 = $_POST['standing3'];
					$chaos = $_POST['chaos'];
					echo $standing2;
					echo $standing3;
					//$tags = $_POST['tags'];
					$tags = 'suri';
					$standing = $standing1.' '.$standing2.' '.$standing3;    
					   echo $standing; 
                
       if(strlen($cup)&& strlen($event)&& strlen($judges)&& strlen($standing)&& strlen($chaos)&& strlen($tags))
                   {
                                      
                        $login = mysql_query("INSERT INTO   `$table2` (  `cup` ,  `event` ,  `year` ,  `judges` ,  `standing` ,  `chaos` ,  `tags` ) 
VALUES ('$cup', '$event',2013,'$judges','$standing','$chaos','$tags')");
  
    
                        echo '<div class="alert alert-success">'.'You have successfully been logged'.'</div>';
                        }
						else
                    	{
                        echo '<div class="alert alert-danger">'.'Enter Email ID &amp; Password'.'</div>';
                            
                    	}
                       
        
                    /*echo '<div class="alert alert-danger">'.$_POST['email'].'</div>';
                    echo '<div class="alert alert-success">'.$_POST['password'].'</div>';*/
                    }
                    
            
            
            ?>
        
        
        
        
        
        
        
        
        
        
        
        
        
          <h1 class="page-header temp2"><a href="#">General Champion Social &amp; Cultural</a></h1>

          <div class="row placeholders">
          
              <div class="btn-group col-xs-6 col-sm-3 placeholder temp1">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
                          <h4>Literary Cup</h4>
                          <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu" style="left:inherit;">
                <li><a href="./dashboard.php?event=">Elocution</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
        	</div>
            
            <div class="btn-group col-xs-6 col-sm-3 placeholder temp1">
              <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
                          <h4>Dramatics Cup</h4>
                          <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu" style="left:inherit;">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
        	</div>
            
            <div class="btn-group col-xs-6 col-sm-3 placeholder temp1">
              <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
                          <h4>Fine Arts Cup</h4>
                          <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu" style="left:inherit;">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
        	</div>
            
            <div class="btn-group col-xs-6 col-sm-3 placeholder temp1">
              <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
                          <h4>Entertainment Cup</h4>
                          <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu" style="left:inherit;">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
        	</div>
            
            <div class="btn-group col-xs-6 col-sm-3 placeholder temp1">
              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
                          <h4>Illumination &amp; Rangoli</h4>
                          <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu" style="left:inherit;">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
        	</div>
        
            <!--<div class="col-xs-6 col-sm-3 placeholder temp1">
            <a href="#">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Literary Cup</h4>
              <span class="text-muted">Something else</span>
              </a>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder temp1">
            <a href="#">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Dramatics Cup</h4>
              <span class="text-muted">Something else</span>
              </a>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder temp1">
            <a href="#">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Fine Arts Cup</h4>
              <span class="text-muted">Something else</span>
              </a>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder temp1">
            <a href="#">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Entertainment Cup</h4>
              <span class="text-muted">Something else</span>
              </a>
            </div>
           <div class="col-xs-6 col-sm-3 placeholder temp1">
           <a href="#">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Illumination &amp; Rangoli</h4>
              <span class="text-muted">Something else</span>
              </a>
            </div>-->
          </div>

          <h2 class="sub-header">Section title</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
                  <td>nec</td>
                  <td>tellus</td>
                  <td>sed</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>augue</td>
                  <td>semper</td>
                  <td>porta</td>
                  <td>Mauris</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>massa</td>
                  <td>Vestibulum</td>
                  <td>lacinia</td>
                  <td>arcu</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>eget</td>
                  <td>nulla</td>
                  <td>Class</td>
                  <td>aptent</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>taciti</td>
                  <td>sociosqu</td>
                  <td>ad</td>
                  <td>litora</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>torquent</td>
                  <td>per</td>
                  <td>conubia</td>
                  <td>nostra</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                  <td>inceptos</td>
                  <td>himenaeos</td>
                  <td>Curabitur</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
    			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Compose</h4>
                      </div>
                      <div class="modal-body">
                        	<form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            	<div class="form-group" style="width:50%; float:left;">
                                <select class="form-control" name="cup">
                                
                                <option value="LITERARY CUP">LITERARY CUP</option>
                                <option value="ENTERTAINMENT CUP">ENTERTAINMENT CUP</option>
								<option value="DRAMATICS CUP">DRAMATICS CUP</option>
								<option value="FINE ARTS CUP">FINE ARTS CUP</option>
                                </select>
                              </div>
                              
                              <div class="form-group" style="width:50%; float:left">
                                <select class="form-control" name="event">
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
                                <option>SKETCHING</option>
								<option>CARTOONING</option>
                                <option>POSTERING</option>
                                <option>COLLAGING</option>
								<option>THERMOCOL AND CLAY MODELLING</option>
                                
                                </select>
                              </div>
                                <div style="clear:both;"></div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Judges</label>
                                <input name="judges"  class="form-control" id="exampleInputEmail1" placeholder="Enter Juges Deails">
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
                                <label for="exampleInputEmail1">Chaos</label>
                                <textarea name="chaos" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Tags</label>
                                <input name="tags" type="text" class="form-control"  placeholder="E.g : time,date,place">
                              </div>
                              
                              
                              <button name="submit1" type="submit" class="btn btn-primary">Submit</button>
                            </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-dismiss="modal">Close</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                      </div>
                    </div>
                  </div>
                </div>
                
                
                <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Modal title2</h4>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                
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
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/docs.min.js"></script>
  </body>
</html>

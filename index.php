<?php
/* Config */
$Servername ="Servername";
$ip = "https://larisab73.github.io/greenzone/";
$port = "7777";
/* End Config */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $Servername; ?> - Welcome</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<link href="css/pricing.css" rel="stylesheet">
    <link href="css/landing-page.css" rel="stylesheet">
	<link href="css/bootstrap-material-design.css" rel="stylesheet">
	<link href="css/ripples.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php
require("samp_query.php");
$query = new SampQuery($ip, $port);
$Information = $query->GetInfo();
?>
<body>
    <nav class="navbar navbar-info navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#"><i class="fa fa-gamepad fa-fw"></i> <?php echo $Servername; ?> - Startpage</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#"><i class="fa fa-tachometer" aria-hidden="true"></i> Start</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> Forums</a>
                    </li>
                    <li>
                        <a href="#about"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a>
                    </li>
					<li>
                        <a href="#features"><i class="fa fa-check-square-o" aria-hidden="true"></i> Top Features</a>
                    </li>
					<li>
                        <a href="#vip"><i class="fa fa-star" aria-hidden="true"></i> VIP</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1><?php echo $Servername; ?> RP/DM/Whatever</h1>
						<?php if ($query->connect())  
						{ ?>
                        <h3>Currently <?php echo $Information['players'] ?> players are on the server</h3>
						<?php } else { ?>
						<h3>Server is currently offline!</h3>
						<?php } ?>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="samp://<?php echo $ip ?>:<?php echo $port ?>" class="btn btn-info btn-raised btn-lg"><i class="fa fa-gamepad fa-fw"></i> <span class="network-name">Connect to Server</span></a>
                            </li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<a name="about"></a>
    <div class="content-section-a">
        <div class="container">
		<center><h1>About <?php echo $Servername; ?></h1></center><br>
		<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. <br><br> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
	<a name="features"></a>
    <div class="content-section-b">
        <div class="container">
            <center><h1>Top Features</h1><br>
			<div class="row">
				<div class="col-md-4">        
					<div class="card-base">
						<div class="card-icon"><a href="#" id="widgetCardIcon" class="imagecard"><i class="fa fa-star" aria-hidden="true"></i></a>
						<div class="card-data widgetCardData">
						<h2 class="box-title">Feature 1</h2>
						<p class="card-block text-center">Lorem ipsum dolor sit amet, <br> consetetur sadipscing elitr, sed diam nonumy eirmod.</p></div>
					</div>
					<div class="space"></div></div></div>
					<div class="col-md-4">
					<div class="card-base">
						<div class="card-icon"><a href="#" id="widgetCardIcon" class="imagecard"><i class="fa fa-star" aria-hidden="true"></i></a>
						<div class="card-data widgetCardData">
						<h2 class="box-title">Feature 2</h2>
						<p class="card-block text-center">Lorem ipsum dolor sit amet, <br> consetetur sadipscing elitr, sed diam nonumy eirmod.</p></div>
					</div>
					<div class="space"></div></div></div>
					<div class="col-md-4"><div class="card-base">
						<div class="card-icon"><a href="#" id="widgetCardIcon" class="imagecard"><i class="fa fa-star" aria-hidden="true"></i></a>
						<div class="card-data widgetCardData">
						<h2 class="box-title">Feature 3</h2>
						<p class="card-block text-center">Lorem ipsum dolor sit amet, <br> consetetur sadipscing elitr, sed diam nonumy eirmod.</p></div>
					</div>
					<div class="space"></div>
					</div></div>
				</div><br><br>
			<div class="row">
				<div class="col-md-4">        
					<div class="card-base">
						<div class="card-icon"><a href="#" id="widgetCardIcon" class="imagecard"><i class="fa fa-star" aria-hidden="true"></i></a>
						<div class="card-data widgetCardData">
						<h2 class="box-title">Feature 4</h2>
						<p class="card-block text-center">Lorem ipsum dolor sit amet, <br> consetetur sadipscing elitr, sed diam nonumy eirmod.</p></div>
					</div>
					<div class="space"></div></div></div>
					<div class="col-md-4">
					<div class="card-base">
						<div class="card-icon"><a href="#" id="widgetCardIcon" class="imagecard"><i class="fa fa-star" aria-hidden="true"></i></a>
						<div class="card-data widgetCardData">
						<h2 class="box-title">Feature 5</h2>
						<p class="card-block text-center">Lorem ipsum dolor sit amet, <br> consetetur sadipscing elitr, sed diam nonumy eirmod.</p></div>
					</div>
					<div class="space"></div></div></div>
					<div class="col-md-4"><div class="card-base">
						<div class="card-icon"><a href="#" id="widgetCardIcon" class="imagecard"><i class="fa fa-star" aria-hidden="true"></i></a>
						<div class="card-data widgetCardData">
						<h2 class="box-title">Feature 6</h2>
						<p class="card-block text-center">Lorem ipsum dolor sit amet, <br> consetetur sadipscing elitr, sed diam nonumy eirmod.</p></div>
					</div>
					<div class="space"></div>
					</div></div>
				</div>
			</center>
        </div>
    </div>
	<a name="vip"></a>
    <div class="content-section-a">
        <div class="container">
                        <center><h1>Get VIP</h1></center>
			<div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">        
                    <div class="price_table_container">
                        <div class="price_table_heading">Bronze</div>
                        <div class="price_table_body">
                            <div class="price_table_row cost warning-text"><strong>$ 5</strong><span>/MONTH</span></div>
                            <div class="price_table_row">1 House</div>
                            <div class="price_table_row">1 Vehicle</div>
                            <div class="price_table_row">Perm. Ban</div>
                            <div class="price_table_row">Free Kick</div>
                            <div class="price_table_row">Something</div>
                            <div class="price_table_row">Else Here</div>                                                
                        </div>
                        <a href="#" class="btn btn-warning btn-lg btn-raised btn-block">Buy</a>
                    </div>
                </div>
        
                <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">        
                    <div class="price_table_container">
                        <div class="price_table_heading">Silver</div>
                        <div class="price_table_body">
                            <div class="price_table_row cost primary-text"><strong>$ 10</strong><span>/MONTH</span></div>
                            <div class="price_table_row">1 House</div>
                            <div class="price_table_row">1 Vehicle</div>
                            <div class="price_table_row">Perm. Ban</div>
                            <div class="price_table_row">Free Kick</div>
                            <div class="price_table_row">Something</div>
                            <div class="price_table_row">Else Here</div>                                                
                        </div>
                        <a href="#" class="btn btn-primary btn-lg btn-raised btn-block">Buy</a>
                    </div>
                </div>
        
                <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">                           
                    <div class="price_table_container">
                        <div class="price_table_heading">Gold</div>
                        <div class="price_table_body">
                            <div class="price_table_row cost success-text"><strong>$ 15</strong><span>/MONTH</span></div>
                            <div class="price_table_row">1 House</div>
                            <div class="price_table_row">1 Vehicle</div>
                            <div class="price_table_row">Perm. Ban</div>
                            <div class="price_table_row">Free Kick</div>
                            <div class="price_table_row">Something</div>
                            <div class="price_table_row">Else Here</div>                                                
                        </div>
                        <a href="#" class="btn btn-success btn-lg btn-raised btn-block">Buy</a>
                    </div>
                </div>
        
                <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">        
                    <div class="price_table_container">
                        <div class="price_table_heading">Platin</div>
                        <div class="price_table_body">
                            <div class="price_table_row cost info-text"><strong>$ 20</strong><span>/MONTH</span></div>
                            <div class="price_table_row">1 House</div>
                            <div class="price_table_row">1 Vehicle</div>
                            <div class="price_table_row">Perm. Ban</div>
                            <div class="price_table_row">Free Kick</div>
                            <div class="price_table_row">Something</div>
                            <div class="price_table_row">Else Here</div>                                                  
                        </div>
                        <a href="#" class="btn btn-info btn-lg btn-raised btn-block">Buy</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
			<center><p class="copyright text-muted small">&copy; Copyright 2017 <?php echo $Servername; ?>. All Rights Reserved - Made by <a href="https://vomau.de" target="_blank">Vomau</a></p></center>
        </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/ripples.min.js"></script>
	<script src="js/material.min.js"></script>
</body>
</html>

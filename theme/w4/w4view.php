
<?php
session_start();
include('../../config.php');
	?>

<?php 

	if(isset($_GET['delete_id']))
	{
	
		// it will delete an actual record from db
        $stmt_delete = $DB_con->prepare('DELETE FROM tbl_users WHERE user_id =:user_id');
		$stmt_delete->bindParam(':user_id',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: index.php");
	}

?>

<?php
	
  

	//$stmt = $DB_con->prepare('SELECT * FROM tbl_users ORDER BY userID DESC limit 0,1');
    // echo 'SELECT * FROM tbl_users INNER JOIN users ON tbl_users.userID=users.id';
     



  $stmt = $DB_con->prepare("SELECT * FROM tbl_users INNER JOIN users ON tbl_users.user_id= users.id WHERE users.id ='".$_SESSION['sessData']['userID']."' order by tbl_users.id DESC limit 1") ;




	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />



	
    <title>Your Wedding </title>
	
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
	<!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="fonts/stylesheet.css">
	<link href="css/mb-comingsoon-iceberg.css" rel="stylesheet" />
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- jQuery and Modernizr-->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="js/modernizr.custom.97074.js"></script>


</head>

<body class="index-page">
	
	<!-- /////////////////////////////////////////Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<a class="navbar-brand page-scroll" href="#page-top">Your Wedding</a>
            </div>
			
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav nav-justified ">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="active">
                        <a class="page-scroll" href="index.html">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="archive.html">Blog</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="single.html">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Jason</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#">Sophie</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<!-- Navigation -->
	
	<header>

		<!-- Carousel -->
    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			    <div class="item active">
			    	<img src="images/1.jpg" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <div class="logo">
								<a href="#">
									<div class="name t-right"><?php echo $groom_name ?></div><div class="and">&amp;</div><div class="name t-left"> <?php echo $bride_name ?> </div>
								</a>
                            </div>
                            
                          
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	<img src="images/2.jpg" alt="Second slide">
			    	<!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                             <div class="logo">
								<a href="#">
									<div class="name t-right"><?php echo $groom_name ?></div><div class="and">&amp;</div><div class="name t-left"> <?php echo $bride_name ?> </div>
								</a>
							</div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	<img src="images/3.jpg" alt="Third slide">
			    	<!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <div class="logo">
								<a href="#">
									<div class="name t-right"><?php echo $groom_name ?></div><div class="and">&amp;</div><div class="name t-left"><?php echo $bride_name ?></span></div>
								</a>
							</div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		    	<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		    	<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div><!-- /carousel -->

	</header>
	<!-- /Section: intro -->
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content">
	
		<!-- ////////////Content Box 01 -->
		
			<div class="container">
				<div class="row">
					<div class="col-sm-6 ">
						<div class="box-item">
							<a href="#"><img src="<?php echo '../../wedding1/images/'.$groom_photo; ?>" width="100%" height="100%"  title="" media-simple="true"/> </a>
                            <h3><?php echo $groom_name ?></h3>
                          
						
						</div>
			 		</div>
			 		<div class="col-sm-6 ">
						<div class="box-item">
							<a href="#"><img src="<?php echo '../../wedding1/images/'.$bride_photo; ?>" width="100%" height="100%"  title="" media-simple="true"/></a>
                            <h3><?php echo $bride_name ?></h3>
							
						</div>
			 		</div>
				</div>
			</div>
		</section>
		
		<!-- ////////////Content Box 02 -->
		<section class="box-content box-2 box-style-1">
			<div class="container">
				<div class="row heading">
					 <div class="col-lg-12">	
	                    <h2>HAVE BEEN MARRIED SINCE</h2>
						<hr class="line">
                    	<div class="intro">Lorem ipsum dolor sit amet</div>
	                </div>
				</div>
				<div class="row">
					<div class="box-item">
						<div class="centered text-center" id="myCounter"></div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- ////////////Content Box 03 -->
		<section class="box-content box-3">
			<div class="container">
				<div class="row heading">
					<div class="col-lg-12">	
	                    <h2>PHOTO GALLERY</h2>
						<hr class="line">
                    	<div class="intro">Lorem ipsum dolor sit amet</div>
	                </div>
				</div>
				<div class="row box-item">
					<ul id="da-thumbs" class="da-thumbs">
						<li>
							<a href="#">
								<img src="images/4.jpg" />
								<div><span>Lorem ipsum dolor sit amet</span></div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/5.jpg" />
								<div><span>Consectetur adipisicing elit</span></div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/6.jpg" />
								<div><span>Tempor incididunt ut</span></div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/7.jpg" />
								<div><span>Sed do eiusmod tempor</span></div>
							</a>
						</li>
						<li>	
							<a href="#">
								<img src="images/8.jpg" />
								<div><span>Labore et dolore magna aliqua</span></div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/9.jpg" />
								<div><span>Eiusmod tempor incididunt ut</span></div>
							</a>
						</li>
						
					</ul>
				</div>
			</div>
		</section>
		
		<!-- ////////////Content Box 04 -->
		<section class="box-content box-4 box-style-2">
			<div class="container">
				<div class="row">
					<div class="box-item">
						<blockquote><p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet vultatup duista.</p></blockquote>
					</div>
				</div>
			</div>
		</section>
		
		<!-- ////////////Content Box 05 -->
		<section class="box-content box-5">
			<div class="container">
				<div class="row heading">
					<div class="col-lg-12">	
	                    <h2>BRIDESMAID & GROOMSMEN</h2>
						<hr class="line">
                    	<div class="intro">Lorem ipsum dolor sit amet</div>
	                </div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="row box-item">
							<div class="col-md-3 center">
								<img src="images/ava-1.jpg" class="img-circle"/>
							</div>
							<div class="col-md-9">
								<div class="wrapper">
									<h3>The title on the article</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. Morbi rutrum vulputate est sed faucibus.</p>
									<a class="btn btn-skin" href="#">Read More</a>
								</div>
							</div>
						</div>
						<div class="row box-item">
							<div class="col-md-3 fix-right center">
								<img src="images/ava-3.jpg" class="img-circle"/>
							</div>
							<div class="col-md-9">
								<div class="wrapper">
									<h3 class="fix-right">The title on the article</h3>
									<p class="fix-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. Morbi rutrum vulputate est sed faucibus.</p>
									<a class="btn btn-skin fix-right" href="#">Read More</a>
								</div>
							</div>
						</div>
						<div class="row box-item">
							<div class="col-md-3 center">
								<img src="images/ava-1.jpg" class="img-circle"/>
							</div>
							<div class="col-md-9">
								<div class="wrapper">
									<h3>The title on the article</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. Morbi rutrum vulputate est sed faucibus.</p>
									<a class="btn btn-skin" href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row box-item">
							<div class="col-md-3 center">
								<img src="images/ava-2.jpg" class="img-circle"/>
							</div>
							<div class="col-md-9">
								<div class="wrapper">
									<h3>The title on the article</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. Morbi rutrum vulputate est sed faucibus.</p>
									<a class="btn btn-skin" href="#">Read More</a>
								</div>
							</div>
						</div>
						<div class="row box-item">
							<div class="col-md-3 fix-right center">
								<img src="images/ava-4.jpg" class="img-circle"/>
							</div>
							<div class="col-md-9">
								<div class="wrapper">
									<h3 class="fix-right">The title on the article</h3>
									<p class="fix-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. Morbi rutrum vulputate est sed faucibus.</p>
									<a class="btn btn-skin fix-right" href="#">Read More</a>
								</div>
							</div>
						</div>
						<div class="row box-item">
							<div class="col-md-3 center">
								<img src="images/ava-5.jpg" class="img-circle"/>
							</div>
							<div class="col-md-9">
								<div class="wrapper">
									<h3>The title on the article</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. Morbi rutrum vulputate est sed faucibus.</p>
									<a class="btn btn-skin" href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- ////////////Content Box 06 -->
		<section class="box-content box-6">
			<div class="container">
				<div class="row heading">
					<div class="col-lg-12">	
	                    <h2>OUR STORIES</h2>
						<hr class="line">
                    	<div class="intro">Lorem ipsum dolor sit amet</div>
	                </div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="box-item">
							<img src="images/12.jpg" class="img-responsive"/>
							<div class="content">
								<h3>Planning Our Honeymoon</h3>
								<p>Suspendisse porttitor sapien ac lectus euismod imperdiet. Curabitur nec nibh at massa pellentesque accumsan eu id nibh. Donec accumsan ut mi et tincidunt. Aliquam eget metus nec leo tempor bibendum. Phasellus tincidunt lobortis metus. Duis euismod lorem turpis, viverra feugiat ipsum volutpat vitae. Fusce justo turpis, sodales sed placerat non, suscipit at diam.</p>
								<span>MAY 21, 2014 BY VAFPRESS</span>
							</div>
						</div>
						<div class="box-item">
							<img src="images/13.jpg" class="img-responsive"/>
							<div class="content">
								<h3>Brainstorming Wedding Ideas</h3>
								<p>Suspendisse porttitor sapien ac lectus euismod imperdiet. Curabitur nec nibh at massa pellentesque accumsan eu id nibh. Donec accumsan ut mi et tincidunt. Aliquam eget metus nec leo tempor bibendum. Phasellus tincidunt lobortis metus. Duis euismod lorem turpis, viverra feugiat ipsum volutpat vitae. Fusce justo turpis, sodales sed placerat non, suscipit at diam.</p>
								<span>MAY 21, 2014 BY VAFPRESS</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="box-item">
							<img src="images/10.jpg" class="img-responsive"/>
							<div class="content">
								<h3>She Said Yes!</h3>
								<p>Nunc eu velit metus. Donec in massa libero. Donec bibendum orci a lorem scelerisque luctus. Aliquam et ante quis erat semper pretium. Pellentesque vitae aliquam ipsum. Cras tempor sit amet odio sit amet porttitor. Integer consectetur bibendum tempus. Fusce egestas sed mi a vehicula.</p>
								<span>MAY 21, 2014 BY VAFPRESS</span>
							</div>
						</div>
						<div class="box-item">
							<img src="images/11.jpg" class="img-responsive"/>
							<div class="content">
								<h3>Met Dovey???s Parents in Chicago</h3>
								<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed varius fringilla tortor at euismod. Cras volutpat vehicula libero, nec faucibus urna bibendum id. Duis a commodo lectus. Morbi id purus nec purus feugiat vestibulum. Suspendisse sapien ante, bibendum ac quam quis, imperdiet bibendum sem. Curabitur nibh magna, tristique et convallis???</p>
								<span>MAY 21, 2014 BY VAFPRESS</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="box-item">
							<img src="images/14.jpg" class="img-responsive"/>
							<div class="content">
								<h3>Choosing The Bridesmaids and Groomsmen</h3>
								<p>Suspendisse porttitor sapien ac lectus euismod imperdiet. Curabitur nec nibh at massa pellentesque accumsan eu id nibh. Donec accumsan ut mi et tincidunt. Aliquam eget metus nec leo tempor bibendum. Phasellus tincidunt lobortis metus. Duis euismod lorem turpis, viverra feugiat ipsum volutpat vitae. Fusce justo turpis, sodales sed placerat non, suscipit at diam.</p>
								<span>MAY 21, 2014 BY VAFPRESS</span>
							</div>
						</div>
						<div class="box-item">
							<img src="images/15.jpg" class="img-responsive"/>
							<div class="content">
								<h3>A Sweet Escape to Paris</h3>
								<p>Proin lobortis mattis odio non ornare. Sed tempor nisi eu hendrerit luctus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras et velit id sem tincidunt convallis ac eget quam. Vestibulum posuere porttitor sapien et fringilla. Donec laoreet ultricies sagittis. Suspendisse potenti.</p>
								<span>MAY 21, 2014 BY VAFPRESS</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- ////////////Content Box 07 -->
		<section class="box-content box-7">
			<div class="clearfix">
				<div class="heading">	
					<h2>OUR WEDDING LOCATION</h2>
					<hr class="line">
					<div class="intro">Lorem ipsum dolor sit amet</div>	                
				</div>
				<div class="box-item">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.289259162295!2d-120.7989351!3d37.5246781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8091042b3386acd7%3A0x3b4a4cedc60363dd!2sMain+St%2C+Denair%2C+CA+95316%2C+Hoa+K%E1%BB%B3!5e0!3m2!1svi!2s!4v1434016649434" height="400px" width="100%" frameborder="0" style="border:0"></iframe>
				</div>
			</div>
		</section>
		
	</div>
	
	<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="copyright">Copyright &copy; Your Website <br/>Designed by <a href="https://www.365bootstrap.com">365BOOTSTRAP</a></div>
					</div>
					<div class="col-md-4">
						<ul class="list-inline social-buttons">
							<li><a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="list-inline quicklinks">
							<li><a href="#">Privacy Policy</a>
							</li>
							<li><a href="#">Terms of Use</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

    <!-- Core JavaScript Files -->  	 
    <script src="js/bootstrap.min.js"></script>

	<!-- Plugin JavaScript -->

	<script src="js/classie.js"></script>
	<script src="js/cbpAnimatedHeader.js"></script>
	
	<!-- Countdown -->
    <script src="js/jquery.mb-comingsoon.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $('#myCounter').mbComingsoon({ expiryDate: new Date(2016, 0, 1, 9, 30), speed:100 });
            setTimeout(function () {
                $(window).resize();
            }, 200);
        });
    </script>
	
	<!-- Img Hover -->
	<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
	<script type="text/javascript">
		$(function() {
		
			$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

		});
	</script>
	
</body>

</html>




			<?php
		}
	}
	else
	{
		?>
        <div class="col-xs-12">
        	<div class="alert alert-warning">
                <span class="glyphicon glyphicon-info-sign"></span> &nbsp; 
                

<div class="jumbotron">

<h1> Plzz Create theme </h1>
    </div>

            </div>
        </div>
        <?php
	}
	
?>
</div>	



<?php
session_start();
include('../config.php');
	?>


<?php 

	if(isset($_GET['delete_id']))
	{
	
		// it will delete an actual record from db
        $stmt_delete = $DB_con->prepare('DELETE FROM tbl_users WHERE user_id =:user_id');
		$stmt_delete->bindParam(':user_id',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: ../index.php");
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
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.4.1, #test1 -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.4.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/c4-240x187.jpg" type="image/x-icon">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise-gallery/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">


  
</head>
<body>


<section class="menu cid-qBNmvkaWe6" once="menu" id="menu2-1" data-rv-view="273">

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="#test1">
                        <img src="assets/images/c4-240x187.jpg" alt="Mobirise" title="" media-simple="true" style="height: 4.4rem;">
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="#test1">
                        Home
                    </a>
                </li><li class="nav-item"><a class="nav-link link text-white display-4" href="#test2">
                        Bride & Groom &amp; 
                    </a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="#test3">
                        Invitation
                    </a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="#test4">
                        Card
                    </a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="#test5">
                        Functions
                    </a></li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="#test6">
                        Family </a>
                </li><li class="nav-item"><a class="nav-link link text-white display-4" href="#test8">
                        Contact Info </a></li>
						<li class="nav-item"><a class="nav-link link text-white display-4" href="#test7">
                        Rsvp</a></li></ul>
            
        </div>
    </nav>
</section>



<section class="engine"><a href="#">free website software</a></section><section class="cid-qBNm0isxRr mbr-parallax-background" id="header2-0" data-rv-view="267">
 <div class="container align-center" id="test1">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-2"><span style="font-weight: normal; color:black ">
                    <br></span><br><span style="font-weight: normal;"><br></span><span style="font-weight: normal;"></span>
                    <?php echo $bride_name ?>  WEDS &nbsp; <?php echo $groom_name ?>
               
                
                <p class="mbr-text pb-3 mbr-fonts-style display-5">We inviting you and your family on <?php echo $time ?>
                </p>
                
            </div>
        </div>
    </div>
    
</section>

<section class="countdown2 cid-qBNmSJ3DP3" id="countdown2-2" data-rv-view="270">
<div class="container">   </div>
    <div class="container pt-5 mt-2">
        <div class=" countdown-cont align-center p-4">
          <h2>  <?php echo $time ?> <h2>
            <div class="countdown align-center py-2" data-due-date="2018/01/01">
            </div>
            <div class="daysCountdown" title="Days"></div>
            <div class="hoursCountdown" title="Hours"></div>
            <div class="minutesCountdown" title="Minutes"></div>
            <div class="secondsCountdown" title="Seconds"></div>
            
        </div>

        
    </div>
</section>

<section class="mbr-section content4 cid-qBNof0x31T" id="content4-3" data-rv-view="275">

    

        <div class="container" id="test2">
        <div class="media-container-row">
        <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2"><?php echo $bride_name ?>&amp; <?php echo $groom_name ?></strong></h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">|| Shri Ganeshaya Namah || 
        <div>&nbsp;Smt. <?php echo $groomfather_name ?> cordially request the pleasure of your gracious presence on the auspicious occasion of the marriage ceremony of their Grand Daughter/Son</div></h3>
         </div>
        </div>
    </div>
</section>

<section class="features2 cid-qBNoJwHiMl" id="features2-5" data-rv-view="277">

 <div class="container">
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="<?php echo 'images/'.$bride_photo; ?>" width="100%" height="100%"  title="" media-simple="true"/>
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-5"><em><?php echo $bride_name ?> </em></h4>
                        <p class="mbr-text mbr-fonts-style display-7">D/o , S/o <?php echo $bridefather_Name ?> </p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="card-img">
                          <img src="<?php echo 'images/'.$groom_photo; ?>" width="100%" height="100%"  title="" media-simple="true"/>
                    </div>
                    <div class="card-box ">
                        <h4 class="card-title pb-3 mbr-fonts-style display-5"><em><?php echo $groom_name ?></em></h4>
                        <p class="mbr-text mbr-fonts-style display-7">D/o , S/o <?php echo $groomfather_name ?></p>
                    </div>
                </div>
            </div>
   
        </div>
    </div>
</section>

<section class="header3 cid-qBNqOExo45 mbr-parallax-background" id="header3-6" data-rv-view="280">

    <div class="container"id="test3">
        <div class="media-container-row">
            <div class="mbr-figure" style="width: 100%;">
                <img src="assets/images/engagement-party-1-370x300.jpg" alt="Mobirise" title="" media-simple="true">
            </div>

            <div class="media-content">
                <h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-2">Wedding Invitation</h1>
                
                <div class="mbr-section-text mbr-white pb-3 ">
                    <p class="mbr-text mbr-fonts-style display-7">
                        We request the honor of your presence at the wedding ceremony of our daughter Name with the Name. We request for your warm presence to bless the united couple for their happier married life.<br><br>Sincerely,<br>Smt. <?php echo $groomfather_name ?>&nbsp;&amp;&nbsp;Sh. <?php echo $groommother_name ?><br>
                    </p>
                </div>
                
            </div>
        </div>
    </div>

</section>

<section class="mbr-section content4 cid-qBNy5Q8qzx" id="content4-g" data-rv-view="283">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">Adress</h2>
                <h5 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">&nbsp;<?php echo $marriage_placeaddress ?>
<div><?php echo $marriage_place ?>
</div><div><?php echo $phone_one?>
<br>
<?php echo $phone_two ?>
</div>
                </div></h5>
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section content4 cid-qBNtaxFCpy" id="content4-b" data-rv-view="285">

    

    <div class="container" id="test4">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">Invitation Card</h2>
                
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-gallery mbr-slider-carousel cid-qBNsOlCftS" id="gallery1-a" data-rv-view="287" >

    

    <div class="container">
        <div><!-- Filter --><!-- Gallery -->
            <div class="mbr-gallery-row">
                <div class="mbr-gallery-layout-default">
                    <div><div><div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Awesome">
                        <div href="#lb-gallery1-a" data-slide-to="0" data-toggle="modal">


                            <img src="<?php echo 'images/'.$card_upload ; ?>" width="100%" height="216px"  title="">
                            <span class="icon-focus"></span></div>



                        </div><div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Awesome">
                        <div href="#lb-gallery1-a" data-slide-to="1" data-toggle="modal">


                           <img src="<?php echo 'images/'.$card_img2 ; ?>" width="100%" height="216px%"  title="" media-simple="true">
                            <span class="icon-focus"></span></div></div>

                            <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Responsive">

                                <div href="#lb-gallery1-a" data-slide-to="2" data-toggle="modal">

                                    <img src="<?php echo 'images/'.$card_img3 ; ?>" width="100%" height="216px%"  title="" media-simple="true">
                                    <span class="icon-focus"
                                >
                            </span></div></div><div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Animated">
                                <div href="#lb-gallery1-a" data-slide-to="3" data-toggle="modal">

                                 
                                     <img src="<?php echo 'images/'.$card_img4 ; ?>" width="100%" height="216px%"  title="" media-simple="true">

                                    <span class="icon-focus"></span></div></div></div></div>

                                    <div class="clearfix"></div></div></div><!-- Lightbox -->

                                    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery1-a">
                                        <div class="modal-dialog"><div class="modal-content">
                                            <div class="modal-body"><div class="carousel-inner">


                                                <div class="carousel-item">  <img src="<?php echo 'images/'.$card_upload ; ?>" width="100%" height="100%"  title="" media-simple="true"></div>

                                                <div class="carousel-item">     <img src="<?php echo 'images/'.$card_img2 ; ?>" width="100%" height="216px%"  title="" media-simple="true">


                                                </div><div class="carousel-item">    <img src="<?php echo 'images/'.$card_img3 ; ?>" width="100%" height="216px%"  title="" media-simple="true">


                                               </div><div class="carousel-item active">    <img src="<?php echo 'images/'.$card_img; ?>" width="100%" height="216px%"  title="" media-simple="true">

                                        </div>
                                    </div>
                                    <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery1-a">
                                        <span class="mbri-left mbr-iconfont" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span></a>
                                        <a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery1-a"><span class="mbri-right mbr-iconfont" aria-hidden="true">
                                        </span><span class="sr-only">Next</span></a>
                                        <a class="close" href="#" role="button" data-dismiss="modal">
                                            <span class="sr-only">Close</span></a></div></div></div></div></div>
    </div>

</section>

<section class="features16 cid-qBNsgQoP5p" id="features16-9" data-rv-view="306">
    
    
    
    <div class="container align-center"  id="test5">
        <h2 class="pb-3 mbr-fonts-style mbr-section-title display-2">Functions</h2>
        
        <div class="row media-row">
            
        <div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                     <img src="<?php echo 'images/'.$function_photo ; ?>" width="100%" height="255px%"  title="" media-simple="true">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-5">
						<?php echo $function_title ?>
                        </p>
                    </div>
                    <div class="item-role px-2">
                        <p></p>
                    </div>
                    
                </div>
            </div><div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="<?php echo 'images/'.$function_photo2 ; ?>" width="100%" height="255px%"  title="" media-simple="true">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-5">
                          <?php echo $function2  ?>
                        </p>
                    </div>
                    <div class="item-role px-2">
                         <p> </p>
                    </div>
                    
                </div>
            </div><div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                  <img src="<?php echo 'images/'.$function_photo3 ; ?>" width="100%" height="255px%"  title="" media-simple="true">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-5">
                     <?php echo $function3  ?>
                        </p>
                    </div>
                    <div class="item-role px-2">
                      <p> </p>
                    </div>
                    
                </div>
            </div><div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
              <img src="<?php echo 'images/'.$function_photo4; ?>" width="100%" height="255px%"  title="" media-simple="true">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-5">
                          <?php echo $function4  ?>
                        </p>
                    </div>
                    <div class="item-role px-2">
                        <p></p>
                    </div>
                    
                </div>
            </div></div>    
    </div>
</section>

<section class="testimonials1 cid-qBNuKgFc1V" id="testimonials1-d" data-rv-view="318">

    

    
    <div class="container" id="test6">
        <div class="media-container-row">
            <div class="title col-12 align-center">
                <h2 class="pb-3 mbr-fonts-style display-2">
                    Family
                </h2>
                
            </div>
        </div>
    </div>

    <div class="container pt-3 mt-2">
        <div class="media-container-row">
            <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                <div class="panel-item p-3">
                    <div class="card-block">
                        
                        <p class="mbr-text mbr-fonts-style display-7">
                          Name of members
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">
                           <?php echo $familymember_title ?>
                          
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                <div class="panel-item p-3">
                    <div class="card-block">
                        
                        <p class="mbr-text mbr-fonts-style display-7">
                      Name of members
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">
                          <?php echo $family_members2 ?>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                <div class="panel-item p-3">
                    <div class="card-block">
                        
                        <p class="mbr-text mbr-fonts-style display-7">
                          Name of members
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">
                             <?php echo $family_members3 ?>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                <div class="panel-item p-3">
                    <div class="card-block">
                        
                        <p class="mbr-text mbr-fonts-style display-7">
                            Name of members
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">
                               <?php echo $family_members4 ?>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                <div class="panel-item p-3">
                    <div class="card-block">
                        
                        <p class="mbr-text mbr-fonts-style display-7">
                               Name of members
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">
                            <?php echo $family_members5 ?>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                <div class="panel-item p-3">
                    <div class="card-block">
                        
                        <p class="mbr-text mbr-fonts-style display-7">
                          Name of members
                    </p></div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">
                           <?php echo $familymember6 ?>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>   
</section>

<section class="mbr-section form1 cid-qBNwgnORrj mbr-parallax-background" id="form1-e" data-rv-view="321">

    

    
    <div class="container" id="test8">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2"><strong>
                    RSVP
                </strong></h2>
                
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                    <div data-form-alert="" hidden="">Thanks for filling out the form!</div>
            
                    <form class="mbr-form" action="#test1/" method="post" data-form-title="Mobirise Form"><input type="hidden" data-form-email="true" value="NRK+TGZ+9Nv62aLTXguZo8wMAm9G2Ge5oXNCoWgBuuNqJVNjh3fmBXeeH00Kb7F02semNBdiHBU5L0KaM3v8wckF5wdGO74wTkBz/OLaGHqJAIJFqnqY0IeloWVWJROF">
                        <div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" data-for="name">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><strong>Name</strong></label>
                                    <input type="text" class="form-control" name="name" data-form-field="Name" required="" id="name-form1-e">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="email">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="email-form1-e">Address</label>
                                    <input type="email" class="form-control" name="email" data-form-field="Email" required="" id="email-form1-e">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="phone">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-e">Phone</label>
                                    <input type="tel" class="form-control" name="phone" data-form-field="Phone" id="phone-form1-e">
                                </div>
                            </div>
                        </div>
                        
            
                        <span class="input-group-btn">
                            <button href="" type="submit" class="btn btn-primary btn-form display-4">SEND FORM</button>
                        </span>
                    </form>
            </div>
        </div>
    </div>
</section>

<section class="cid-qBNwJlhjBK" id="footer2-f" data-rv-view="324">

    

    

    <div class="container" id="test7">
        <div class="media-container-row content mbr-white">
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <p class="mbr-text">
                    <strong>Address  <?php echo $marriage_placeaddress ?></strong>
                    <br>
                    <br>Email: <?php echo $email ?>
                    <br>City, <?php echo $marriage_place ?>
                    <br>
                    <br>
                    <br><strong>Contacts</strong>
                    <br>
                    <br>Email: <?php echo $email ?>
                    <br>Phone: <?php echo $phone_one ?>
                    <br>Fax: Email: <?php echo $phone_two ?>
                </p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <p class="mbr-text"><br>
                    <br><strong>Thankyou</strong><br>
                    <br><br></p>
            </div>
            <div class="col-12 col-md-6">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJn6wOs6lZwokRLKy1iqRcoKw" allowfullscreen=""></iframe></div>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        domain.com Copyright ©2017. All rights reserved
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<a class="btn btn-danger" href="?delete_id=<?php echo $row['user_id']; ?>" title="click for delete" onclick="return confirm('sure to delete ?')">
              <span class="glyphicon glyphicon-remove-circle"></span> Delete</a>

 <!--<a  class="btn btn-primary"  href="../wedding1/buy.php?id=<?php print $id ?>">Free Lunch It</a> -->
           
 <a  class="btn btn-primary"  href="../wedding1/payment.php">Buy it</a>

<br>
<br>              
<br>
<br>
        
              
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/jarallax/jarallax.min.js"></script>
  <script src="assets/countdown/jquery.countdown.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/jquery-mb-vimeo_player/jquery.mb.vimeo_player.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/mobirise-gallery/player.min.js"></script>
  <script src="assets/mobirise-gallery/script.js"></script>
  <script src="assets/mobirise-slider-video/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>


  
</body>
</html>	


		

			<?php
		}
	}
	else
	{
		?>
        <div class="col-xs-12"  "jumbotron">
        	<div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; 
            </div>
        </div>
        <div class="container">
  <div class="jumbotron">
    <h4>     firstly fill the form then view the card theme</h4> 

</div>
        <?php
	}
	
?>
</div>	


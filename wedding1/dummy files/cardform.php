<?php session_start(); 
     if(!empty($_SESSION)){?>
     <input type='hidden' id='u' value='<?php echo $_SESSION['sessData']['userID'];?>'> 
     <?php }?>




<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.4.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/bday-255x255.png" type="image/x-icon">
  <meta name="description" content="">

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
  <style type="text/css">



#myModal .modal-dialog {
    max-width: 90%;
    top: 50px;s
}



</style>

</head>
<body>


 <form  id="form1" method="post"  enctype="multipart/form-data" class="form-horizontal"> 
	    
	<table class="table table-bordered table-responsive">

   <h2> BRIDE SECTION </h2>
		
   <tr>
    	<td><label class="control-label">Wedding Date</label></td>
        <td>  <input type="date" size="60" name="WeddingDate" id="WeddingDate" placeholder="Date"/  > </td>
         
    </tr>

	<tr>
    	<td><label class="control-label">Bride Name</label></td>
        <td><input class="form-control" type="text"   id="Bridename" name="Bridename" placeholder="Bridename"  /></td>
    </tr>
	
	
    <tr>
    	<td><label class="control-label">Bride Image</label></td>
        <td><input  class="input-group" type="file" name="files[]" id="files" multiple accept="image/*" /> </td>
    </tr>

    <tr>
    	<td><label class="control-label">Father Name</label></td>
        <td><input class="form-control" type="text" name="brideFatherName" id="brideFatherName" placeholder="Father Name" /></td>
    </tr>
	
	<tr>
    	<td><label class="control-label">Mother Name</label></td>
        <td><input class="form-control" type="text" name="brideMotherName"  id="brideMotherName" placeholder="Mother Name"  /></td>
    </tr>
    
	<tr>
    	<td><label class="control-label">Grand Father Name</label></td>
        <td><input class="form-control" type="text" name="brideGrandFatherName"id="brideGrandFatherName" placeholder="Grand Father Name" /></td>
    </tr>

	<tr>
    	<td><label class="control-label">Grand Mother Name</label></td>
        <td><input class="form-control" type="text" name="brideGrandMotheName" id="brideGrandMotheName"placeholder="Grand Mother Name"  /></td>
    </tr>
    
	<tr>
    	<td><label class="control-label">From</label></td>
        <td><input class="form-control" type="text" name="bridegroomFrom"id="bridegroomFrom" placeholder="From"  /></td>
    </tr>
    


	<tr>  
	<td><label class="control-label">  <h2> GROOM SECTION</h2></label></td>

</tr>
<tr>
    	<td><label class="control-label">Groom Name</label></td>
        <td><input class="form-control" type="text" name="GroomName"id="GroomName" placeholder="groom section" /></td>
    </tr>
    


	<tr>
    	<td><label class="control-label">Groom Image</label></td>
        <td><input class="input-group" type="file" name="GroomImage"id="GroomImage" accept="image/*" /></td>
    </tr>




	<tr>
    	<td><label class="control-label"> Father Name</label></td>
        <td><input class="form-control" type="text" name="FatherName" id="FatherName"placeholder="Father Name" /></td>
    </tr>
    
	<tr>
    	<td><label class="control-label">Mother Name</label></td>
        <td><input class="form-control" type="text" name="MotherName"id="MotherName" placeholder="Mother Name" /></td>
    </tr>
    
	<tr>
    	<td><label class="control-label">Grand Father Name</label></td>
        <td><input class="form-control" type="text" name="GrandFatherName" id="GrandFatherName"placeholder="Grand Father Name"  /></td>
    </tr>
    <tr>
        <td><label class="control-label">Grand Mother Name</label></td>
        <td><input class="form-control" type="text" name="GrandmotherName"id="GrandmotherName" placeholder="Grand Father Name"  /></td>
    </tr>

	<tr>
    	<td><label class="control-label">From</label></td>
        <td><input class="form-control" type="text" name="From" id="From"placeholder="From"  /></td>
    </tr>


<tr>  
	<td> <h2>Card Details<h2></td>

</tr>
	<tr>
    	<td><label class="control-label">Banner Message</label></td>
        <td><input class="form-control" type="text" name="BannerMessage" id="BannerMessage"placeholder="Banner Message"  /></td>
    </tr>

	<tr>
    	<td><label class="control-label">God Title</label></td>
        <td><input class="form-control" type="text" name="GodTitle"id="GodTitle" placeholder="God Title"  /></td>
    </tr>

	<tr>
    	<td><label class="control-label">Parent message</label></td>
        <td><input class="form-control" type="text" name="Parentmessage"id="Parentmessage" placeholder="Parent message"  /></td>
    </tr>

	<tr>
    	<td><label class="control-label">Invitation Message</label></td>
        <td><input class="form-control" type="text" name="InvitationMessage"id="InvitationMessage" placeholder="InvitationMessage"  /></td>
    </tr>


	<tr>
    	<td><label class="control-label">Marriage Place</label></td>
        <td><input class="form-control" type="text" name="MarriagePlace"id="MarriagePlace"placeholder="Marriage Place"  /></td>
    </tr>
    

	<tr>
    	<td><label class="control-label">Marriage Place Address</label></td>
        <td><input class="form-control" type="text" name="MarriagePlaceaddress"id="MarriagePlaceaddress" placeholder="Marriage Place Address"  /></td>
    </tr>
    

	<tr>
    	<td><label class="control-label">Phone No.</label></td>
        <td><input class="form-control" type="text" name="Phonetwo"id="Phonetwo" placeholder="Phone No."  /></td>
    </tr>
    

	<tr>
    	<td><label class="control-label">Phone No.</label></td>
        <td><input class="form-control" type="text" name="Phoneone" id="Phoneone"placeholder="Phone No."  /></td>
    </tr>
    

    <tr>
    	<td><label class="control-label">CardUpload</label></td>
        <td><input class="input-group" type="file" name="CardUpload" accept="image/*" /></td>
    </tr>
	
	



	<tr>
    	<td><label class="control-label">Fucntion Photo</label></td>
        <td><input class="input-group" type="file" name="FucntionPhoto" id="FucntionPhoto"accept="image/*" /></td>
    </tr>
	

    <tr>
        <td><label class="control-label">Function Title1</label></td>
        <td><input class="form-control" type="text" name="FunctionTitle1" id="FunctionTitle1"placeholder="FunctionTitle"  /></td>
    </tr>



    <tr>
        <td><label class="control-label">Function Title2</label></td>
        <td><input class="form-control" type="text" name="FunctionTitle2"id="FunctionTitle2"placeholder="FunctionTitle"  /></td>
    </tr>
    


    <tr>
        <td><label class="control-label">Function Title3</label></td>
        <td><input class="form-control" type="text" name="FunctionTitle3"id="FunctionTitle3" placeholder="FunctionTitle"  /></td>
    </tr>
    


    <tr>
        <td><label class="control-label">Function Title4</label></td>
        <td><input class="form-control" type="text" name="FunctionTitle4"id="FunctionTitle4" placeholder="FunctionTitle"  /></td>
    </tr>
    
    
	<tr>
    	<td><label class="control-label">Day and date </label></td>
        <td><input class="form-control" type="text" name="Dayandate" id="Dayandate"placeholder="Dayandate "  /></td>
    </tr>


	<tr>
    	<td><label class="control-label">Time</label></td>
        <td><input class="form-control" type="text" name="time" id="time"placeholder="Time"/></td>
    </tr>
    
	<tr>
    	<td><label class="control-label">Fuctnion Address</label></td>
        <td><input class="form-control" type="text" name="FuctnionAddress"id="BridenFuctnionAddressame"placeholder="Fuctnion Address"  /></td>
    </tr>
    
	<tr>
    	<td><label class="control-label">Home Address</label></td>
        <td><input class="form-control" type="text" name="HomeAddress"id="HomeAddress" placeholder="Home Address" /></td>
    </tr>

	<tr>
    	<td><label class="control-label">Family Member Title</label></td>
        <td><input class="form-control" type="text" name="FamilyMemberTitle" id="FamilyMemberTitle"placeholder="Family Member Title" /></td>
    </tr>
    
	<tr>
    	<td><label class="control-label">Family Member1</label></td>
        <td><input class="form-control" type="text" name="FamilyMember1"id="FamilyMember1" placeholder="Family Member1"  /></td>
    </tr>
	
	
	<tr>
    	<td><label class="control-label">Family Member2</label></td>
        <td><input class="form-control" type="text" name="FamilyMember2" id="FamilyMember2"placeholder="Family Member2"  /></td>
    </tr>
    

	<tr>
    	<td><label class="control-label">Family Member3</label></td>
        <td><input class="form-control" type="text" name="FamilyMember3"id="FamilyMember3" placeholder="Family Member3"  /></td>
    </tr>
    

	<tr>
    	<td><label class="control-label">Family Member4</label></td>
        <td><input class="form-control" type="text" name="FamilyMember4"id="BriFamilyMember4dename" placeholder="Family Member4" /></td>
    </tr>
    
	<tr>
    	<td><label>Family Members5</label></td>
        <td><input class="form-control" type="text" name="FamilyMember5"id="FamilyMember5" placeholder="Family Members" /></td>
    </tr>

      <tr>
        <td><label>Family Member6</label></td>
        <td><input class="form-control" type="text" name="FamilyMember6" id="FamilyMember6"placeholder="Family Members" /></td>
    </tr>


    
	<tr>
    	<td><label class="control-label">Email</label></td>
        <td><input class="form-control" type="text" name="Email" id="Email" placeholder="Email"  required /></td>
    </tr>


 
    <tr>
        <td colspan="2">
            <!-- <input type="button" name="submit" class="btn btn-default" value='submit' id='btn_submit'> -->
            <input type="submit" name="submit" class="btn btn-default" value='submit' id='btn_submit'>
            <input type="button" name="submit_name" id="btn_name" value="Submit by Name" onclick="submit_by_name()"  data-toggle="modal" data-target="#myModal"        />
            <input type="button"  class="btn btn-default" value='PREVIEW' onclick="get_val();"/>
        </button>
        </td>
    </tr>
    </table>
    
</form>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
       

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
                        Bride &amp; Groom
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
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-2"><span style="font-weight: normal;"><br></span><br><span style="font-weight: normal;"><br></span><span style="font-weight: normal;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span>Bride &nbsp; Weds Groom</h1>
                
                <p class="mbr-text pb-3 mbr-fonts-style display-5">We inviting you and your family on 29th November 2017
                </p>
                
            </div>
        </div>
    </div>
    
</section>

<section class="countdown2 cid-qBNmSJ3DP3" id="countdown2-2" data-rv-view="270">
<div class="container">   </div>
    <div class="container pt-5 mt-2">
        <div class=" countdown-cont align-center p-4">
            
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

    

    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  


<!-- Latest compiled and minified JavaScript -->
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

 <script >
   

//Submit form with name function
function submit_by_name(){
    // alert('hi');
    // return false;
    var WeddingDate = document.getElementById("WeddingDate").value;

    var Bridename = document.getElementById("Bridename").value; 

    var brideFatherName = document.getElementById("brideFatherName").value;

    var brideMotherName = document.getElementById("brideMotherName").value;


  var brideGrandFatherName = document.getElementById("brideGrandFatherName").value;

  var brideGrandMotheName = document.getElementById("brideGrandMotheName").value;

  var bridegroomFrom = document.getElementById("bridegroomFrom").value;

  //bride



  var GroomName = document.getElementById("GroomName").value;
  var FatherName = document.getElementById("FatherName").value;
  var MotherName = document.getElementById("MotherName").value;
  var GrandFatherName = document.getElementById("GrandFatherName").value;
  var From = document.getElementById("From").value;





$("#bdate").html(WeddingDate);
$("#bname").html(Bridename);
$("#bfname").html(brideFatherName);
$("#bmname").html(brideMotherName);
$("#bgfname").html(brideGrandFatherName);
$("#bgmname").html(brideGrandMotheName);
$("#bfrom").html(bridegroomFrom);

 }


  </script> 


 <script>

    $(document).ready(function(e) {
        $("#form1").on('submit', (function(e) {
            e.preventDefault();
            $.ajax({
                url: 'wedding1/insert.php',
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    //window.location.reload();
                },

            });

            alert('Saved Successfully');

        }));
    });



    </script>


<script type="text/javascript">
function get_val(){

    var user = $('#u').val();
   // alert(user);
    if(typeof user === "undefined"){
        window.open('../wedding1/login/index.php',"_self");
    }else{
        window.open('../wedding1/view.php',"_self");
    }
}
</script>
</body>
</html>	


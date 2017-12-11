<?php
session_start();

$servername = "localhost";
$username = "webdeqgk_event";
$password = "webdesky@2017";
$dbname = "webdeqgk_event";

//bride image
$file_bride = $_FILES['bride_image']['name'];
$file_size =$_FILES['bride_image']['size'];
$file_tmp =$_FILES['bride_image']['tmp_name'];
move_uploaded_file($file_tmp,"images/".$file_bride);

//groom image

$file_groom = $_FILES['GroomImage']['name'];
$file_size =$_FILES['GroomImage']['size'];
$file_tmp =$_FILES['GroomImage']['tmp_name'];
move_uploaded_file($file_tmp,"images/".$file_groom);

//invition card images

$file_card1 = $_FILES['CardUpload1']['name'];
$file_size =$_FILES['CardUpload1']['size'];
$file_tmp =$_FILES['CardUpload1']['tmp_name'];
move_uploaded_file($file_tmp,"images/".$file_card1);


$file_card2= $_FILES['CardUpload2']['name'];
$file_size =$_FILES['CardUpload2']['size'];
$file_tmp =$_FILES['CardUpload2']['tmp_name'];
move_uploaded_file($file_tmp,"images/".$file_card2);


$file_card3 = $_FILES['CardUpload3']['name'];
$file_size =$_FILES['CardUpload3']['size'];
$file_tmp =$_FILES['CardUpload3']['tmp_name'];
move_uploaded_file($file_tmp,"images/".$file_card3);


$file_card4 = $_FILES['CardUpload4']['name'];
$file_size =$_FILES['CardUpload4']['size'];
$file_tmp =$_FILES['CardUpload4']['tmp_name'];
move_uploaded_file($file_tmp,"images/".$file_card4);



///function .............//////////// images


$file_function1 = $_FILES['FucntionPhoto1']['name'];
$file_size =$_FILES['FucntionPhoto1']['size'];
$file_tmp =$_FILES['FucntionPhoto1']['tmp_name'];
move_uploaded_file($file_tmp,"images/".$file_function1);


$file_function2= $_FILES['FucntionPhoto2']['name'];
$file_size =$_FILES['FucntionPhoto2']['size'];
$file_tmp =$_FILES['FucntionPhoto2']['tmp_name'];
move_uploaded_file($file_tmp,"images/".$file_function2);



$file_function3 = $_FILES['FucntionPhoto3']['name'];
$file_size =$_FILES['FucntionPhoto3']['size'];
$file_tmp =$_FILES['FucntionPhoto3']['tmp_name'];
move_uploaded_file($file_tmp,"images/".$file_function3);


$file_function4 = $_FILES['FucntionPhoto4']['name'];
$file_size =$_FILES['FucntionPhoto4']['size'];
$file_tmp =$_FILES['FucntionPhoto4']['tmp_name'];
move_uploaded_file($file_tmp,"images/".$file_function4);

$WeddingDate = htmlentities($_POST['WeddingDate']);
         //$today = date("F j, Y, g:i a");   

 $date = date('j F, Y', strtotime($WeddingDate));
         
$brideName = $_POST['Bridename'];
$bridemother = $_POST['brideMotherName'];
$bridefather = $_POST['brideFatherName'];
$birdegrandfather = $_POST['brideGrandFatherName'];
$bridegrandmother = $_POST['brideGrandMotheName'];
$bridefrom = $_POST['bridegroomFrom'];



//groom 

            $groomname = $_POST['GroomName'];
	    	$groomfathername = $_POST['FatherName'];
		    $groommothername = $_POST['MotherName'];
	        $groomgrandmother = $_POST['GrandFatherName'];
	     	$groomgrandfather = $_POST['GrandmotherName'];
	        $groomfrom = $_POST['From'];



//others section

		    $bannermessage = $_POST['BannerMessage'];

		    $goodtitle = $_POST['GodTitle'];

	        $parntmessage = $_POST['Parentmessage'];


		    $InvitationMessage = $_POST['InvitationMessage'];
		    $MarriagePlace = $_POST['MarriagePlace'];

            $MarriagePlaceAddress = $_POST['MarriagePlaceaddress'];
		    $Phoneone = $_POST['Phoneone'];
	   	    $Phonetwo = $_POST['Phonetwo'];


            $functionAddress = $_POST['FuctnionAddress'];
            $HomeAddress = $_POST['HomeAddress'];


		   $FunctionTitle1 = $_POST['FunctionTitle1'];
           $FunctionTitle2 = $_POST['FunctionTitle2'];
           $FunctionTitle3 = $_POST['FunctionTitle3'];
           $FunctionTitle4 = $_POST['FunctionTitle4'];


         $FamilyMemberTitle = $_POST['FamilyMemberTitle'];
		 $FamilyMember1 = $_POST['FamilyMember1'];
         $FamilyMember2 = $_POST['FamilyMember2'];
         $FamilyMember3 = $_POST['FamilyMember3'];
         $FamilyMember4 = $_POST['FamilyMember4'];
         $FamilyMember5 = $_POST['FamilyMember5'];
         $FamilyMember6 = $_POST['FamilyMember6'];

         $Email = $_POST['Email'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 







$sql ="INSERT INTO tbl_users(user_id,time,bride_name ,bridefather_Name ,bridemother_name,bridegrand_mothername ,  bridegrand_fathername,  bride_from, groom_name,groomfather_name , 
groommother_name ,grand_fathername,groomgrand_mothername ,groom_from, banner_message, god_title,parent_message,invitation_message,marriage_place,marriage_placeaddress,
phone_one,phone_two,function_address,home_address,   familymember_title,family_member1,
family_members2,family_members3,family_members4,
family_members5,email,function_title, 	function2,function3,function4,familymember6,bride_photo ,groom_photo, card_upload , card_img2,  card_img3,card_img4 ,function_photo, function_photo2,  function_photo3,  function_photo4 )

value('".$_SESSION['sessData']['userID']."','$date' ,'$brideName','$bridefather' ,'$bridemother' ,'$bridegrandmother' ,'$birdegrandfather','$bridefrom' 
,'$groomname','$groomfathername' ,'$groommothername' ,'$groomgrandfather','$groomgrandmother','$groomfrom' 
,'$bannermessage','$goodtitle' ,'$parntmessage' ,'$InvitationMessage','$MarriagePlace' ,'$MarriagePlaceAddress' ,'$Phoneone','$Phonetwo' 
,'$functionAddress' ,'$HomeAddress' ,'$FamilyMemberTitle','$FamilyMember1' ,'$FamilyMember2','$FamilyMember3' ,'$FamilyMember4' ,'$FamilyMember5'
,'$Email' ,'$FunctionTitle1' ,'$FunctionTitle2','$FunctionTitle3' ,'$FunctionTitle4',
'$FamilyMember6','$file_bride' ,'$file_groom' , '$file_card1','$file_card2','$file_card3','$file_card4'
,'$file_function1' ,'$file_function2' ,'$file_function3' ,'$file_function4')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>





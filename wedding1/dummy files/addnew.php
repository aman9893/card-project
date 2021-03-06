<?php

	error_reporting( ~E_NOTICE ); // avoid notice
	
	require_once 'dbconfig.php';
	
	if(isset($_POST['btnsave']))
	{
		$username = $_POST['user_name'];// user name
		$userjob = $_POST['user_job'];// user email
		$groomname = $_POST['groomname'];// user groom
		
		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
		
		
		if(empty($username)){
			$errMSG = "Please Enter Username.";
		}
		else if(empty($userjob)){
			$errMSG = "Please Enter Your Job Work.";
		}
		else if(empty($imgFile)){
			$errMSG = "Please Select Image File.";
		}
		else
		{
			$upload_dir = 'user_images/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
			$userpic = rand(1000,1000000).".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
				if($imgSize < 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}
		}
		
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('INSERT INTO tbl_users(userName,userProfession,userPic,groomname) VALUES(:uname, :ujob, :upic, :ugroomname)');
			$stmt->bindParam(':uname',$username);
			$stmt->bindParam(':ujob',$userjob);
			$stmt->bindParam(':upic',$userpic);
			$stmt->bindParam(':ugroomname',$groomname);
			
			if($stmt->execute())
			{
				$successMSG = "new record succesfully inserted ...";
				header("refresh:5;index.php"); // redirects image view page after 5 seconds.
			}
			else
			{
				$errMSG = "error while inserting....";
			}
		}
	}
?>
<!DOCTYPE html >
<html 
<head>


<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

</head>
<body>



<div class="container">


	<div class="page-header">
    	<h1 class="h2">FILL THE FORM <a class="btn btn-default" href="index.php"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; Fill All INFORMATION </a></h1>
    </div>
    

	<?php
	if(isset($errMSG)){
			?>
            <div class="alert alert-danger">
            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
            </div>
            <?php
	}
	else if(isset($successMSG)){
		?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
	}
	?>   

<form method="post" enctype="multipart/form-data" class="form-horizontal">
	    
	<table class="table table-bordered table-responsive">


   <h2> Bride section </h2>
	
    <tr>
    	<td><label class="control-label">Bride Name</label></td>
        <td><input class="form-control" type="text" name="user_name" placeholder="Enter Username" value="<?php echo $username; ?>" /></td>
    </tr>
	
	


    <tr>
    	<td><label class="control-label">Bride Image</label></td>
        <td><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
    </tr>

    <tr>
    	<td><label class="control-label">Father Name</label></td>
        <td><input class="form-control" type="text" name="user_job" placeholder="Your Profession" value="<?php echo $userjob; ?>" /></td>
    </tr>
	
	






	<tr>
    	<td><label class="control-label">Mother Name</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    






	<tr>
    	<td><label class="control-label">Grand Father Name</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    



	<tr>
    	<td><label class="control-label">Grand Mother Name</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    







	<tr>
    	<td><label class="control-label">From</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    


	<tr>  
	<td><label class="control-label">  <h2> groom section</h2></label></td>

</tr>
<tr>
    	<td><label class="control-label">Groom Name</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    


	<tr>
    	<td><label class="control-label">Groom Image</label></td>
        <td><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
    </tr>




	<tr>
    	<td><label class="control-label"> Father Name</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    



	
	<tr>
    	<td><label class="control-label">Mother Name</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    




	
	<tr>
    	<td><label class="control-label">Grand Father Name</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    



	<tr>
    	<td><label class="control-label">From</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
	
	

<tr>  
	<td> <h2>Card Details<h2></td>

</tr>


	<tr>
    	<td><label class="control-label">Banner Message</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    









	<tr>
    	<td><label class="control-label">God Title</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    




	<tr>
    	<td><label class="control-label">Parent message</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    



	<tr>
    	<td><label class="control-label">Invitation Message</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    





	<tr>
    	<td><label class="control-label">Marriage Place</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    




	<tr>
    	<td><label class="control-label">Marriage Place Address</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    


	<tr>
    	<td><label class="control-label">Phone No.</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    

	<tr>
    	<td><label class="control-label">Phone No.</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    

    <tr>
    	<td><label class="control-label">Card Upload</label></td>
        <td><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
    </tr>
	
	



	<tr>
    	<td><label class="control-label">Fucntion Photo</label></td>
        <td><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
    </tr>
	
	

	<tr>
    	<td><label class="control-label">Function Title</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    




	<tr>
    	<td><label class="control-label">Day and date </label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    





	<tr>
    	<td><label class="control-label">Time</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    





	<tr>
    	<td><label class="control-label">Fuctnion Address</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    






	<tr>
    	<td><label class="control-label">Home Address</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    









	<tr>
    	<td><label class="control-label">Home Address</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    
	<tr>
    	<td><label class="control-label">Family Member Title</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    
	<tr>
    	<td><label class="control-label">Family Member1</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
	
	
	<tr>
    	<td><label class="control-label">Family Members2</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    

	<tr>
    	<td><label class="control-label">Family Members3</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    

	<tr>
    	<td><label class="control-label">Family Members4</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    



	<tr>
    	<td><label class="control-label">Family Members5</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    



	<tr>
    	<td><label class="control-label">Email</label></td>
        <td><input class="form-control" type="text" name="groomname" placeholder="Your Profession" value="<?php echo $groomname; ?>" /></td>
    </tr>
    











	
    <tr>
        <td colspan="2"><button type="submit" name="btnsave" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; save
        </button>
        </td>
    </tr>
    
    </table>
    
</form>




    

</div>



	


<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>
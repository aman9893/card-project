<?php
session_start();
include('../config.php');
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
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
<form class="form-horizontal" role="form">
  <fieldset>
  
 
    <legend>  <a href="../index.php">Home</a></legend>
    
     <legend>Payment</legend>
    <div class="form-group">
      <label class="col-sm-3 control-label" for="card-holder-name">Name on Card</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="card-holder-name" id="card-holder-name" placeholder="Card Holder's Name">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label" for="card-number">Card Number</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="card-number" id="card-number" placeholder="Debit/Credit Card Number">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label" for="expiry-month">Expiration Date</label>
      <div class="col-sm-9">
        <div class="row">
          <div class="col-xs-3">
            <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
              <option>Month</option>
              <option value="01">Jan (01)</option>
              <option value="02">Feb (02)</option>
              <option value="03">Mar (03)</option>
              <option value="04">Apr (04)</option>
              <option value="05">May (05)</option>
              <option value="06">June (06)</option>
              <option value="07">July (07)</option>
              <option value="08">Aug (08)</option>
              <option value="09">Sep (09)</option>
              <option value="10">Oct (10)</option>
              <option value="11">Nov (11)</option>
              <option value="12">Dec (12)</option>
            </select>
          </div>
          <div class="col-xs-3">
            <select class="form-control" name="expiry-year">
              <option value="13">2013</option>
              <option value="14">2014</option>
              <option value="15">2015</option>
              <option value="16">2016</option>
              <option value="17">2017</option>
              <option value="18">2018</option>
              <option value="19">2019</option>
              <option value="20">2020</option>
              <option value="21">2021</option>
              <option value="22">2022</option>
              <option value="23">2023</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label" for="cvv">Card CVV</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Security Code">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-3 col-sm-9">
        <button type="button" class="btn btn-success">Pay Now</button>

        <a  class="btn btn-primary"  href="../wedding1/buy.php?id=<?php print $id ?>">Free Lunch It</a>



      </div>

      
    </div>
  </fieldset>
</form>
</div>		

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
    <h1> firstly fill the form then view the card theme</h1> 

</div>
        <?php
	}
	
?>
</div>	
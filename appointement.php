<?php
$con=mysqli_connect('localhost','u497964957_shringaar','Ecv@199496','u497964957_saloon') or die('error in connection');
if (isset($_POST['enter']))
  {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$service=$_POST['service'];
	$stylist=$_POST['stylist'];

	$ret=mysqli_query($con,"SELECT `date`,`time` FROM `apointment` WHERE `date`='$date' && `time`='$time'");
	$q=mysqli_fetch_array($ret);
	if ($q > 0) {
		?>
         <script type="text/javascript">
         	alert('time slot booked plz choose other one');
         </script>
		<?php
	}else{
               $qry="INSERT INTO `apointment`(`name`, `email`, `phone`, `date`, `time`, `service`, `stylist`) VALUES ('$name','$email','$phone','$date','$time','$service','$stylist')";
    $res=mysqli_query($con,$qry);
    if ($res) {
      	?>
        <script type="text/javascript">
        	alert('Appointement Booked successfully');
        </script>
      	<?php
      }else{
      	?>
          <script type="text/javascript">
          	alert('sorry try after some time');
          </script>
      	<?php
      }  
  }
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-db0f9f92-4780-45c4-a5b1-bdd8cebab47c"></div>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 class="text-center">Saloon Appointment</h1>
      <a href="index.php">back</a>
    <form action="" method="post">
      <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Name" required="">
    </div>
            <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" required="">  
            </div>
          <div class="form-group">
        <input class="form-control" type="text" name="phone" placeholder="Phone Number" required="">    
          </div>
          <div class="form-group">
            <input  class="form-control" name="date" type="date" placeholder="Booking Date &" required="">
          </div>
          <div class="form-group">
            <input type="time"  name="time" class="form-control" placeholder="Time" required="">
          </div>
             <div class="form-group">
				<select class="form-control" name="service">
					<option value="">Services</option>
					<option value="Hair">Hair</option>
					<option value="Skin">Skin</option>
					<option value="Hand & Feet">Hand & Feet</option>
					<option value="Facial">Facial</option>
					<option value="Wax">Wax</option>
					<option value="Bleach">Bleach</option>
				</select>
			</div>
			<div class="form-group">
				<select class="form-control" name="stylist">
					<option value="">Stylist</option>
					<option value="First Available">First Available</option>
					<option value="Brian Davis">Brian Davis</option>
					<option value="Frances Nazario">Frances Nazario</option>
					<option value="Natalya Stoyanova">Natalya Stoyanova</option>
					<option value="Dawn Daniels">Dawn Daniels</option>
					<option value="Sandi Turner">Sandi Turner</option>
					<option value="Tori Voller">Tori Voller</option>
				</select>
			</div>
        <button class="btn btn-primary" name="enter">Book Appointment</button>
    </form>
        </div>
    </div>
  </div>
</body>
</html>
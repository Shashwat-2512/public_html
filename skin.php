
<?php   
  // session_start();
  // require "admin/includes/functions.php";
  // require "admin/includes/db.php";
    
?>

<?php
include ('header.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta content="Author" name="WebThemez">
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet"> 

  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-db0f9f92-4780-45c4-a5b1-bdd8cebab47c"></div>
</head>
<body>

<section id="services" class="sec-padding">
      <div class="container">
        <div class="section-header">
          <h2>SERVICES</h2>
          <p>Your hairstyle says a lot about your personality. It is the basic yet essential way to make your appearance stand out from the crowd. However creating a style statement with your hairstyle is a task of its own.

The often heard statement, "Bad Hair Day" makes you feel less confident and want to hide your hair in a stall or a cap. But why stop yourself from exploring different hairstyles that would bring out the unique personality and even express your thoughts? Over the years, Looks Salon has always been experimenting with the latest trends and hairstyles to bring out the best personality of the person.</p>
        </div>

    <div class="row">
         
        <div class="col-lg-4">
         <div class="card wow fadeInLeft" style="width: 18rem;">
           <img src="img/services/2.jpg" alt="" class="card-img-top">  
          <div class="card-body">
          <h5 class="card-title">SKIN</h5> 
          </div>
        </div>
        </div>
        <div class="col-lg-2">

        </div>
        <div class="col-lg-6">
          <ul>
            <li> Full Face & Neck De-tan Pack.............................Rs. 399-499/-</li>
            <li>Full Arm De-tan Pack...........................................Rs. 350-550/-</li>
            <li>Full Leg De-tan Pack.............................................Rs. 499-599/-</li>
            <li>Front De-tan Pack.................................................Rs. 399-499/-</li>
            <li>Back De-tan pack..................................................Rs. 399-499/-</li>
            <li>Full Body De-tan Pack..........................................Rs. 1499-1599/-</li>
          </ul>
           <div>
        <button style="margin-left:auto;background-color:black;border:none;border:5px solid yellow;"><a href="appointement.php">Book Appointment</a></button>
      </div>
        </div>
         
    </div>
        

      </div>
      <!-- <div>
        <h2 class="text-center" id="pricee">Price list</h2>
      </div> -->
<!-- <table align="center" width="80%" border="1" style="background-color: black;"><br>
    <tr style="background-color: black;color:white;">
        <th>Id</th>
        <th>Service Name</th>
        <th>Price(INR)</th>
        <th>Image</th>
    </tr>
    <?php
    @$get_recent = $db->query("SELECT * FROM `service` LIMIT 100");
    if(@$get_recent->num_rows) {
    $count=0;
    while($row = $get_recent->fetch_assoc()) {
    $count++;
    ?>

    <tr>
         <td><?php echo $count;?></td>
         <td><?php echo $row['name']; ?></td>
         <td><?php echo $row['price']; ?></td>
         <td>  <img src="admin/services/<?php echo $row['filename'];?>" width="100px" height="80px"></td>
    </tr>

       <?php
    }
    
   }else{
    
   }  
?>
</table> -->
    </section>

</body>
</html>
<?php
include ('footer.php');
?>
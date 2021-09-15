<?php
include ('header.php');
  // require "admin/includes/functions.php";
  // require "admin/includes/db.php";
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet"> 

  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-db0f9f92-4780-45c4-a5b1-bdd8cebab47c"></div>
</head>
<body>
<section id="portfolio" class="wow fadeInUp sec-padding">
      <div class="container">
        <div class="section-header">
          <h2>Our Portfolio</h2>
          <p>One of the best salon in the city is here.</p>
        </div>
      </div>
      <div class="row">
     <table align="center" width="80%" border="1" style="background-color: black;"><br>
    <tr style="background-color: black;color:white;">
        <!-- <th>Image</th>
        <th>Name</th>
        <th>Position</th> -->
    </tr>
    <?php
    @$get_recent = $db->query("SELECT * FROM `portfolio` LIMIT 100");
    if(@$get_recent->num_rows) {
    while($row = $get_recent->fetch_assoc()) {
    ?>

          <div class="col-lg-3 col-md-6">
            <div class="portfolio-item wow fadeInUp">
               <img src="admin/img/<?php echo $row['filename'];?>">  
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"><?php echo $row['text']; ?></h2></div>
                </div> 
            </div>
          </div> 

       <?php
    }
    
   }else{
    
   }  
?>
</table>
        </div>

      </div>
    </section>

</body>
</html>
<?php
include ('footer.php');
?>
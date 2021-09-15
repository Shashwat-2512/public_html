
<?php 

include('header.php');
  // require "admin/includes/functions.php";
  // require "admin/includes/db.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
  <title>Shringaar</title>
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
   <!--==========================
      Our Team Section
    ============================-->
    <section id="team" class="wow fadeInUp sec-padding">
      <div class="container">
        <div class="section-header">
          <h2>Our Team</h2>
        </div>
        <div class="row">
         

        <table align="center" width="80%" border="1" style="background-color: black;"><br>
    <tr style="background-color: black;color:white;">
        <!-- <th>Image</th>
        <th>Name</th>
        <th>Position</th> -->
    </tr>
    <?php
    @$get_recent = $db->query("SELECT * FROM `team` LIMIT 100");
    if(@$get_recent->num_rows) {
    while($row = $get_recent->fetch_assoc()) {
    ?>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="admin/team/<?php echo $row['filename'];?>" width="auto" height="auto"></div>
              <div class="details">
                <h4><?php echo $row['name']; ?></h4>
                <span><?php echo $row['position']; ?></span>
               
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
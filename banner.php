<?php
include ('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>
	banner	
	</title>
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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    
    <div class="table-responsive" style="margin-top:50px;">
                  <table align="center" class="table" width="80%" border="2" style="background-color: transparent;"><br>
    <tr style="background-color: black;color:white;">
    </tr>
    <?php
    @$get_recent = $db->query("SELECT * FROM `banner` LIMIT 100");
    if(@$get_recent->num_rows) {
    while($row = $get_recent->fetch_assoc()) {
    ?>
         <tr>
             <td><img src="admin/banner/<?php echo $row['filename'];?>"  width="80%" height="auto" style="margin-left:45px;"> </td>

         </tr>
       <?php
    }
    
   }else{
    
   }  
?>
</table>
        </div>

</body>
</html>
<?php   
  session_start();
  require "admin/includes/functions.php";
  require "admin/includes/db.php";
  
?>


<?php
    @$get_recent = $db->query("SELECT * FROM `service` LIMIT 100");
    if(@$get_recent->num_rows) {
    while($row = $get_recent->fetch_assoc()) {
    ?>  

        <div class="col-lg-4" style="margin-bottom: 20px;">
         <div class="card wow fadeInLeft" style="width: 18rem;">
           <a href="services.php"><img src="admin/services/<?php echo $row['filename'];?>" alt="" class="card-img-top"></a>  
          <div class="card-body">
          <h5 class="card-title"><?php echo $row['name']; ?></h5> 
          </div>
        </div>
        </div> 

       <?php
    }
    
   }else{
    
   }  
?>
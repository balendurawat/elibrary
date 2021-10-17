

<?php
include_once 'header.php';
include_once 'connection.php';
?>
<!-- book store -->





  <div class="row container-fluid" > 
  
  <?php foreach($query as $q){?>
    <div class="my-2 mx-2 card " style="width: 18rem;">
                    <div class="card-body">
                    <?php  echo '<img src="data:image;base64,'.base64_encode($q['img']).'" style="width:100px;height:100px;"'   ?>
                    <hr>
                        <h5 class="card-title"><?php echo $q['name']?></h5>
                        <p class="card-text"> <?php echo $q['author']?></p>
                        <a href="details.php?id=<?php echo $q['sno'] ?>   " class="btn btn-primary">View More Details</a>
                    </div>
                    </div>
                    <?php } ?> 
             


  </div>
   



  

<?php
include_once 'header.php';
?>
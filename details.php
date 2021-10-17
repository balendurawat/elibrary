<?php 
   
    include_once 'connection.php';
    include_once 'header.php';
?>




<?php foreach($result as $q){?>
<div class="card" style="width: 100vw;">
      <?php  echo '<img id="popupimage" src="data:image;base64,'.base64_encode($q['img']).'" style="width:20%;height:20%;">'   ?>
  <div class="card-body">
   
    <p class="card-text"><?php echo $q['details']?></p>
  </div>
</div>
<?php } ?> 






<div class="popupimg">
        <div class="modalimgcontent">
            <div class="closebtn">+</div>
            <?php  echo '<img id="popupimage" src="data:image;base64,'.base64_encode($q['img']).'" style="width:100%;height:100%;">'   ?>
        </div>
    </div>




<script>
  document.getElementById("popupimage").addEventListener('click',
    function(){
        document.querySelector('.popupimg').style.display = "flex";
    }
);
document.querySelector('.closebtn').addEventListener('click',
    function(){
        document.querySelector('.popupimg').style.display = "none";
    }
);
  
</script>


</body>
</html>



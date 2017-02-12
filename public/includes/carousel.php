
<?php
  require('functions.php');
?>
<div class="swiper-container s1">
  <div class="swiper-wrapper">
      <?php
        foreach($images as $image){
      ?>
        <div class='swiper-slide' style='background: url(<?php echo "$image"; ?>) no-repeat center center;'></div>
      <?php
        }
      ?>
  </div>
</div>

<div class="swiper-container s2">
  <div class="swiper-wrapper">
    <!-- implode json predefined data  -->
    <?php extractJSON($json); ?>
    <a href="#" class="btn-sharp">Read More</a>
  </div>
  <div class="swiper-pagination"></div>
</div>


<?php
  require('functions.php');
?>
<div class="swiper-container s1">
  <span class="vignette"></span>
  <div class="swiper-wrapper">
      <?php
        foreach($images as $image){
      ?>
        <div class='swiper-slide' style='background: url(<?php echo "$image"; ?>) no-repeat center center; background-size: cover;'></div>
      <?php
        }
      ?>
  </div>
</div>

<div class="swiper-container s2">
  <div class="swiper-wrapper">
    <!-- implode json predefined data  -->
    <?php extractJSON($json); ?>
  </div>
  <div class="swiper-pagination"></div>
</div>

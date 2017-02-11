
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
    <!-- foreach item in our json file loop swiper slide div 3 times to implode appropriate data -->
    <?php foreach($json['slides'] as $slide) { ?>
      <div class="swiper-slide">
        <div class="spacing">
          <?php echo "<h2 class='h2'>" . $slide['h2'] . "</h2>"; ?>
          <?php echo "<h1 class='h1'>" . $slide['h1'] . "</h1>"; ?>
          <?php echo "<p class='p-heading'>" . $slide['paragraph'] . "</p>"; ?>
        </div>
      </div>
    <?php } ?>
  </div>
  <div class="swiper-pagination"></div>
</div>

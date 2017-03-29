<?php
  include('includes/header.php');
?>

<!-- carousel -->
<div id="swiper-wrapper">
    <?php include("includes/carousel.php"); ?>
</div>

<!-- Other Sections -->
<div class="content-wrapper">
  <?php include("includes/about.php"); ?>
</div>

<!-- Showcase -->
<div class="showcase">
  <div class="content-wrapper">
    <h3 class="h3 underlined__black">Showcase</h3>
    <div class="tile-spacing">
      <?php include("includes/showcase.php"); ?>
    </div>
  </div>
</div>

<?php
  include('includes/footer.php');
?>

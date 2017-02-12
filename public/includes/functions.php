<?php
  // image interpolation
  $dirname = "images/";
  $images = glob($dirname."*.jpg");
  $jsondata = file_get_contents("resources.json");
  $json = json_decode($jsondata, true);
?>

<?php
  function extractJSON($json) {
    foreach($json['slides'] as $slide) {
?>
  <div class="swiper-slide">
    <div class="spacing">
      <?php echo "<h2 class='h2'>" . $slide['h2'] . "</h2>"; ?>
      <?php echo "<h1 class='h1'>" . $slide['h1'] . "</h1>"; ?>
      <?php echo "<p class='p-heading'>" . $slide['paragraph'] . "</p>"; ?>
      <a href="#" class="btn-sharp">Read More</a>
    </div>
  </div>
<?php }
  }
?>

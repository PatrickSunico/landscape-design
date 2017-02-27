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

<?php 

  function displayImages(){
    $showcaseDirName = "images/showcase/";
    $showcaseImages = glob($showcaseDirName."*.jpg");
    $maxWidth = 1072;
    $minWidth = 508;
    $countMax = 0;
    $countMin = 0;

      foreach($showcaseImages as $showcaseImage) {
        list($width, $height) = getimagesize($showcaseImage);
        echo $width . " x " . $height . "<br>";
        echo "<br>";
        // Count how many images there are with different dimensions
        if($width >= $maxWidth) {
          
          $countMax++;

        } elseif($width <= $minWidth) {

          $countMin++;
        }
      }
        echo $countMax . "image(s)" . "\n";
        echo $countMin . "image(s)". "\n";
  }

?>




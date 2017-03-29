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
  require("includes/showcase_logic.php");
  function displayImages(){
    $showcaseDirName = "./images/showcase/";
    $showcaseImages = glob($showcaseDirName."*.jpg");
    $maxWidth = 1072;
    $minWidth = 508;
    $counter = 0;
    $rows = 3;

      foreach($showcaseImages as $key=>$showcaseImage) :
        list($width, $height) = getimagesize($showcaseImage);
        if ($counter % $rows == 0): 
          echo '<div class="tile is-ancestor">';
        endif; 
?>
<?php 
        // sorting logic
        sortImages($width, $minWidth, $maxWidth, $showcaseImage, $counter, $rows);
?>          
<?php
          // if result of modulo results 2, close the row
          if($counter % $rows == 2) :    
            echo "</div>";
          endif;
          // counter variable
          $counter++;
      endforeach;
    }
?>




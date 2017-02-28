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
    $showcaseDirName = "./images/showcase/";
    $showcaseImages = glob($showcaseDirName."*.jpg");
    $maxWidth = 1072;
    $minWidth = 508;
    $counter = 0;
    $ancestor = "<div class='tile is-ancestor'>";
    $maxImg = count($showcaseImages);

    // Set number of rows for the grid
    $rows = 3;

    // echo count($showcaseImages) . " images " . "\n";
      foreach($showcaseImages as $key=>$showcaseImage) {
        list($width, $height) = getimagesize($showcaseImage);
        
?>
<?php

        if($counter % 3 == 0) {
          echo "<div class='tile is-ancestor'>";
        }
        // first 3 rows with small images        
        // if($counter == $rows) {
        //   echo $ancestor;
        // }
        //   if($width <= $minWidth && $counter <= $rows){
        //       echo '<div class="tile is-parent">';
        //         echo '<article class="tile is-child box">';       
        //           echo '<figure class="image">';
        //             echo '<img src="'.  $showcaseImage . '" alt="">';
        //           echo '</figure>';
        //         echo "</article>";
        //       echo '</div>';
        //   }
        // if($counter == $rows){
        //   echo "</div>";
        // }

        // else if($width <= $minWidth || $width >= $maxWidth && $counter >= 3) {         
        //     echo '<div style="background:aqua;" class="">';
        //       echo "<li>";
        //         echo $showcaseImage;
        //       echo "</li>";
        //     echo '</div>';
        // }
      $counter++;
    }
  }
?>




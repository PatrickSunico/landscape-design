
<!--if image width is less than $minwidth small images-->

<?php 

  function sortImages($width, $min, $max, $showcaseImage, $counter, $rows) {
    $width = $width;
    $minWidth = $min;
    $maxWidth = $max;
    $showcaseImage = $showcaseImage;
    $counter = $counter;
    $rows = $rows;
    if($width <= $minWidth) : 
?> 

    <div class="tile is-parent">
      <div class="tile is-child box">
        <figure class="image">
          <img src="<?php echo $showcaseImage; ?>" alt="">
        </figure>
      </div>
    </div>

<?php 
    elseif($width >= $maxWidth) : 
?>  
      <div class="tile is-parent is-8">
        <div class="tile is-child box">
          <figure class="image">
            <img src="<?php echo $showcaseImage; ?>" alt="">
          </figure>
        </div>
    </div>

<?php
    endif;
  }
?>

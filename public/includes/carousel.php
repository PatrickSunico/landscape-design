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
      <div class="swiper-slide">
        <div class="spacing">
          <h2 class="h2">枯山水</h2>
          <h1 class="h1">The Art of Zen Landscaping</h1>
          <p class="p-heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <div class="button-position">
            <a href="#" class="btn-sharp"> Read More </a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>
  </div>
  <div class="swiper-pagination"></div>
</div>

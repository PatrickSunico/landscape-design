<?php
  // image interpolation
  $dirname = "images/";
  $images = glob($dirname."*.jpg");


  $jsondata = file_get_contents("resources.json");
  $json = json_decode($jsondata, true);

  // Extract JSON DATA
  // function extractJSON() {


    // // $output = "<div class='spacing'>";
    // foreach($json['slides'] as $slide) {
    //   $output .= "<h2>" . $slide['h2'] . "</h2>";
    //   $output .= "<h1>" . $slide['h1'] . "</h1>";
    //   $output .= "<p class='p-heading'>" . $slide['paragraph'] . "</p>";
    // }
    // // $output .= "</div>";
    // echo $output;
  // }





  // Test Code
  // function data() {
  //   $food = array(
  //     'name' => 'Bob',
  //     'Fish' => array(
  //       'Salmon',
  //       'Pike',
  //       'Bass'
  //     )
  //   );
  //   $objList = json_decode(json_encode($food), false);
  //   print_r($objList);
  //
  //   foreach($objList as $key => $value) {
  //     // echo $value[0] . " \n";
  //     if(is_array($value)) {
  //       // foreach($value as $v){
  //       //   echo $value[0];
  //       // }
  //       for($i = 0; $i < count($value); $i++){
  //         echo $value[$i];
  //       }
  //     }
  //   }
  // }

  // function data(){
  //   $data = array(
  //     'slide-1' => array(
  //       'h2-heading' => '枯山水',
  //       'h1-heading' => 'The Art of Zen Landscaping',
  //     )
  //   );
  // }
?>

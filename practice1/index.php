<?php

echo 'hello world';

echo '<p>today '.date('l').'</p>';
//echo '<p>time : ' .time().'</p>';
echo date('l', 1);
echo date('l', mktime(3, 35, 32, 2, 28, 2018));

for($x=0; $x<=50; $x+=5) {
  echo "<p>$x</p>";
}

for($x=0; $x<=6; $x++) {
  echo "<h$x>Title level $x</h$x>";
}

/*
for($colorRed=0; $colorRed<=255; $colorRed+=30){
  for($colorGreen=0; $colorGreen<=255; $colorGreen+=30){
    for($colorBlue=0; $colorBlue<=255; $colorBlue+=30){
      $strColor = "rgb($colorRed, $colorGreen, $colorBlue)";
      echo "<p style=\"color: $strColor\">$strColor</p>";
    }
  }
}
*/

$x=2;
if($x>1){
  echo "<p>Variable $x is greater than 1</p>";
}
if (date('m') == 3){
  echo "Now is spring";
} elseif(date('m') < 3 || date('m') > 11) {
  echo "Now is winter";
} else {
  echo "I don't know what is the season now";
}

$fruitList = "apples, pears, bananas, oranges, limons";
$arrFruits = explode(",", $fruitList);

echo "<p>Fruit 3 - ".$arrFruits[2]."<?p>"; 


function EnglishDateTime($date){
  $arrDay = array("Monday", "Tuesday", "Wedbesdat", "Thursday", "Fridsy", "Saturday", "Sunday");

  $arrMonth = array("", "Jenuary", "February", "March", "April", "May", "June", "Jult", "Augest", "September", "October", "November", "December");

  $EnglishDateTime = $arrDay[date("w", $date)].",".date("d", $date);
  $EnglishDateTime = $EnglishDateTime.",".$arrMonth[date("n",$date)]." ".date("Y", $date);
  $EnglishDateTime = $EnglishDateTime.",".date("H", $date).": ".date("i", $date); 

  return $EnglishDateTime;
}



?>
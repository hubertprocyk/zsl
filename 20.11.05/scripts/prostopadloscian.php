<?php
function pole($a, $b, $c){
  return round(2 * ($a * $b + $a * $c + $b * $c), 2);
}

function objetosc($a, $b, $c){
  return round($a * $b * $c, 2);
}

function przekatna($a, $b, $c){
  return round(sqrt(pow($a, 2) + pow($b, 2) + pow($c, 2)), 2);
}
?>
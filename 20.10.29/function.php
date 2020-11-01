<!-- Hubert Procyk 3B3T -->
<?php
function add($x, $y){
  return $x + $y;
}
function subtract($x, $y){
  return $x - $y;
}
function multiply($x, $y){
  return $x * $y;
}
function divide($x, $y){
  if($y == 0){
    return 'Nie można dzielić przez 0!';
  } else {
    return $x / $y;
  }
}
?>
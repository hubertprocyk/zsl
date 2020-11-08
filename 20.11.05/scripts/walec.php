<?php
function polepodstawy($r, $h){
  return round(M_PI * pow($r, 2), 2);
}

function polepowbocznej($r, $h){
  return round(2 * M_PI * $r * $h, 2);
}

function polepowcalkowitej($r, $h){
  return round(2 * M_PI * $r * ($r + $h), 2);
}

function objetosc($r, $h){
  return round(M_PI * pow($r, 2) * $h, 2);
}
?>

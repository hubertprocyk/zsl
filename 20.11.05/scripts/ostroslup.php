<?php
function pole($a, $H)
{
  $h = sqrt(pow($a / 2, 2) + pow($H, 2));
  return round((pow($a, 2) + 2 * $a * $h), 2);
}

function objetosc($a, $H)
{
  return round((pow($a, 2) * $H) / 3, 2);
}
?>
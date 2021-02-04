<?php 
  $students = array(
    array('Jan', 'Nowak', 'Poznań'),
    array('Jan'),
    array('Janina', 'Nowak', 'Poznań', 20),
    array('Jan')
  );

  print_r($students);
  echo '<br>';
  print_r($students[0]);
  echo '<br>';
  print_r($students[2]);
  echo $students[2][3];
  echo '<hr>';

  for($i = 0; $i < count($students); $i++) {
    for($j = 0; $j < count($students[$i]); $j++){
      echo $students[$i][$j], " ";
    }
    echo '<br>';
  }
  echo '<br>';

  foreach($students as $student) {
   foreach($student as $value) {
     echo "$value ";
   }
   echo '<br>';
  }
?>
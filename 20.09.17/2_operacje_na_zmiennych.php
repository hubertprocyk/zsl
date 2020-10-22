<?php
  //wersja PHP 7.49
  echo PHP_VERSION,'<br>';
  //echo phpinfo();

  $pow = 2**8;
  echo $pow; //256
  echo '<br>';

  echo 'a', 'b', 'c'; //abc
  echo '<br>';
  echo 'a'. 'b'. 'c'; //a+b+c => abc

  //operatory bitowe
  //and &, or |, xor ^, nor ~, <<, >>
  $x = 0b1010;
  echo "<hr>$x<br>";
  $x = $x << 2; //101000(2) -> 8+32 = 40
  echo "$x<br>";
  $x = $x >> 1; //10100(2) -> 4+16 = 20
  echo "$x<br>";

  //porównanie <=>
  $x = 10;
  $y = 10;
  $result = $x <=> $y;
  echo $result;

  //if
  $x = 1;
  $y = 1.0;
  if ($x==$y){
    echo 'Zmienne są równe<br>';
  } else {
    echo 'Zmienne są różne<br>';
  }

  echo gettype($x); //integer
  echo gettype($y); //double

  ################################
  /*
  preinkrementacja ++$x
  predekrementacja --$x
  postinkrementacja ++$x
  postdekrementacja --$x
  */

  $x = 1;
  $x = $x++;
  echo "<br>$x"; //1
  $x = ++$x;
  echo "<br>$x"; //2
  $y = $x++;
  echo "<br>$x"; //3
  echo "<br>$y"; //2
  $y = ++$x*2-1;
  echo "<br>$x"; //4
  echo "<br>$y"; //7

  echo "<br>";
  $x = 2;
  echo $x++; //2
  echo ++$x; //4
  echo $x;   //4
  $y = $x++;
  echo $y;   //4
  $y = ++$x;
  echo $y;   //6
  echo ++$y; //7
  echo "<br>";

  //operatory rzutowania
  //bool, int, float, string, array, object, unset
  $test = '123abc';
  $test1 = 0;
  $test2 = 20;
  $x = (int)$test;
  echo "$x ";
  echo gettype($x), "<br>";
  $x = (bool)$test1;
  echo "$x ";
  echo gettype($x);
?>
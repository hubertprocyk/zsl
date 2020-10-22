<?php
    $text = <<< T
        zsl - Zespół 
        Szkół 
        Łączności <br>
T;
    echo $text;
    echo nl2br($text);

    //zamiana na małe litery
    $name = 'jaNUsZ';
    $name = strtolower($name); //janusz
    echo $name, "<br>";
    
    //zamiana na duże litery
    $name = 'krysTYna';
    echo strtoupper($name), "<br>"; //KRYSTYNA
    
    //zamiana pierwszej litery na dużą
    $name = 'aNNa noWaK';
    echo ucfirst($name), "<br>"; //ANNa noWaK
    
    //zamiana wszystkich pierwszych liter na duże
    $name = 'aNNa noWaK';
    echo ucwords($name), "<br>"; //ANNa NoWaK

    //zad.1
    //zamień $name, aby wyglądała w następujący sposób: Anna Nowak
    $name = 'aNNa noWaK';
    echo ucwords(strtolower($name)), "<br>";

    //lorem upsum
    $lorem = <<< LOREM
    Loerm ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.
LOREM;
    echo $lorem;
    $col = wordwrap($lorem, 40, '<br>');
    echo $col;

    //czyszczenie zawartości bufora
    ob_clean();

    //usuwanie białych znaków
    $name = 'Anna';
    $name1 = '  Anna ';
    echo 'Długość $name: ',strlen($name); //4
    echo 'Długość $name1: ',strlen($name1); //7

    echo strlen(ltrim($name1)); //5
    echo strlen(rtrim($name1)); //6 
    echo strlen(trim($name1)); //4
    echo strlen($name1); //7
    $name1 = trim($name1);
    echo strlen($name1); //4

    //przeszukiwanie ciągów znaków
    $address = "Poznań, ul. Polna 2, tel. (61)123-45-67";
    $search = strstr($address, 'tel');
    echo "<br>$search<br>"; //tel. (61)123-45-67

    $address = "Poznań, ul. Polna 2, tel. (61)123-45-67";
    $search = strstr($address, 'tel', true);
    echo '<br>Długość $search: ', strlen($search); //22(poslkie są x2)
    echo "<br>$search<br>"; //Poznań, ul. Polna 2, 

    $address = "Poznań, ul. Polna 2, tel. (61)123-45-67";
    $search = stristr($address, 'Tel');
    echo "<br>$search<br>"; //tel. (61)123-45-67

    echo strstr('zsl@gmail.com', '@'); //@gmail.com
    echo strstr('zsl@gmail.com', 64); //@gmail.com
    $domena = substr(strstr('zsl@gmail.com', '@'), 1);
    echo $domena; //gmail.com
?>
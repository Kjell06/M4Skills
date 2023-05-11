<?php

$leeg = "<h2></h2>";
$html = "<h2>HTML</h2>";

echo $html;


/*opdracht1*/

$string = array("Kaas", "Banaan", "Aardbei", "Kip", "Appel");
$integer = array(2, 4, 6, 8, 10);
$mixed = array("Twee", "Peren", "Tien", "Noedels", "Acht");
$niks = array(" ", " ", " ", " ", " ",);

echo $string;
echo $leeg;



echo $integer;
echo $leeg;


echo $mixed;
echo $leeg;

echo $niks;
echo $leeg;


/*opdracht2*/

$array= array(" ",
             0=>"Kaas",
             1=>"Banaan", 
             2=>"Aardbei", 
             3=>"Kip", 
             4=>"Appel", 
             5=>"Peer",
             6=>"Noedel",
             18=>2,
             19=>4;
             20=>6,
             21=>8;
             22=>10;
             23=>12;
             24=>14;
             25=>16;)

$length=count($array);

for($i=0;$i<$length;$i++){
    echo "$i=>".$array[$i]; 

echo $length;







<?php
/*
1. Given the matrix below,
develop the code you need to show the city and its assigned IES each one in one different line
exemple of what is expected in the screen:
Manacor: IES Manacor
......
*/
$citiesIES=array( "Manacor"=>"IES Manacor", "Palma"=>"IES Borja Moll",
"Inca"=> "IES Pau de Cases Noves", "Porto Cristo"=>"IES Porto Cristo de la Mar",
"Calvia"=>"IES Son Ferrer");

  foreach ($citiesIES as $value1 => $value2) {
    echo "$value1: $value2<br>";
  }

echo "<hr>";
/*
2. Orden in alphabetical order the array of the exercise 1 using the php function
asort($array);
Show the same info than in exercise 1 but in alphabetical order
*/

asort($citiesIES);
foreach ($citiesIES as $value1 => $value2) {
  echo "$value1: $value2<br>";
}

echo "<hr>";
/*
3. Transform the exercise 1 into a matrix using the structure of Associative matrixes:
$array['stringKey']=elementvalue;
and show the same info than in exercise 1
*/

$citiesIESS["Manacor"]="IES Manacor";
$citiesIESS["Palma"]="IES Borja Moll";
$citiesIESS["Inca"]="IES Pau de Cases Noves";
$citiesIESS["Porto Cristo"]="IES Porto Cristo de la Mar";
$citiesIESS["Calvia"]="IES Son Ferrer";

foreach ($citiesIESS as $Value1 => $Value2 ) {
  echo "$Value1: $Value2<br>";
}

 ?>

<?php
/*Nicolau Martí Bover Armstrong*/
  /*Totes les variables creades*/
  $vector1[]="Madrugada";
  $vector1[]="Mañana";
  $vector1[]="Mediodia";
  $vector1[]="Tarde";
  $vector1[]="Noche";

  $contador1=sizeof($vector1);

  $vector2[]="Carne con salsa de setas";
  $vector2[]="Spaghetti carbonara";
  $vector2[]="Tortilla Española";

  $contador2=sizeof($vector2);

  $vector3=array("8", "12", "14", "16", "20");

  $contador3=sizeof($vector3);

  $vector4=array("PC", "Mouse", "Keyboard", "i3core", "8GB RAM", "1TB");

  $contador4=sizeof($vector4);
  /*1. Vector: window time of a day*/
  echo "<b>1. Vector: window time of a day</b> </br>";
  echo "Numero de elementos: $contador1 </br>";

  foreach ($vector1 as $value1)
    {
      echo "$value1<br>";
    }

  echo "<br>";

  /*2. Vector: some dishes of a restaurant*/

  echo "<b>2. Vector: some dishes of a restaurant</b> </br>";
  echo "Numero de elementos: $contador2 </br>";

  foreach ($vector2 as $value2)
    {
      echo "$value2<br>";
    }

  echo "<br>";

  /*3. Vector: the times when an alarm sounds*/

  echo "<b>3. Vector: the times when an alarm sounds</b> </br>";
  echo "Numero de elementos: $contador3 </br>";

  foreach ($vector3 as $value3)
    {
      echo "$value3</br>";
    }

  echo "<br>";

  /*4. Vector: the list of components*/

  echo "<b>4. Vector: the list of components</b> </br>";
  echo "Numero de elementos: $contador4 </br>";

  foreach ($vector4 as $value4)
    {
      echo "$value4</br>";
    }

?>

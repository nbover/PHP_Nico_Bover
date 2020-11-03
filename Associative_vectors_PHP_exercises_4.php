<?php
/*Nicolu Marti Bover Armstrong*/
  /*1. Associative array: January month days*/
    echo "<b>1. Associative array: January month days</b><br>";
    echo "<b>String key:</b> January<br>";
    $vector1['January']=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);

    foreach ($vector1 as $value_1){
      $counts1=sizeof($value_1);
      echo "<b>Number of elements:</b> $counts1<br>";
      foreach ($value_1 as $value_2){
        echo "$value_2 <br>";
      }
    }
    echo "</br>";
  /*2. Associative array: Menu*/
    echo "<b>2. Associative array: Menu</b><br>";
    echo "<b>String key:</b> Menu<br>";
    $vector2['Menu']=array("Beef with mushroom sauce","Spaghetti carbonara","Spanish omelette");

    foreach ($vector2 as $value_1){
      $counts2=sizeof($value_1);
      echo "<b>Number of elements:</b> $counts2<br>";
      foreach ($value_1 as $value_2){
        echo "$value_2 <br>";
      }
    }
    echo "</br>";
  /*3. Associative array: Alarm times*/
    echo "<b>3. Associative array: Alarm times</b><br>";
    echo "<b>String key:</b> Alarm times<br>";
    $vector3['Alarm times']=array(8,12,14,16,20);

    foreach ($vector3 as $value_1){
      $counts3=sizeof($value_1);
      echo "<b>Number of elements:</b> $counts3<br>";
      foreach ($value_1 as $value_2){
        echo "$value_2 <br>";
      }
    }
    echo "</br>";
  /*4. Associative array: Product 123*/
    echo "<b>4. Associative array: Product 123</b><br>";
    echo "<b>String key:</b> Product 123<br>";
    $vector4['Product 123']=array("PC","Mouse","Keyboard","i3core","8GB RAM","1TB");

    foreach ($vector4 as $value_1){
      $counts4=sizeof($value_1);
      echo "<b>Number of elements:</b> $counts4<br>";
      foreach ($value_1 as $value_2){
        echo "$value_2 <br>";
      }
    }
?>

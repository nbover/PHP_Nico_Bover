<?php
  echo "<h2>Nicolau Martí Bover Armstrong</h2>";

    echo "<hr>";

    $nom="Nicolau Martí Bover Armstrong";
    function fullNameSplit($nom){
      return explode (" ",$nom); }
      $var=fullNameSplit($nom);
      foreach ($var as $var1){
        echo $var1, "<br>";}

    echo "<hr>";

    function pwd_hash ($variable){
      return password_hash($variable, PASSWORD_DEFAULT);
    }

    echo pwd_hash ("hola1234");

?>

<?php
  //Nicolau Martí Bover Armstrong
    echo "<hr><h3>Nicolau Martí Bover Armstrong</h3>";
    // Funció del missatge
      echo "<hr><h2>Funció del missatge</h2><br>";
      function missatge($argumento)
      {
        echo "$argumento<br>";
      }
      missatge("Aquest es el resultat de la funció MISSATGE");

    // Funció de la suma
      echo "<hr><h2>Funció de la suma</h2><br>";
      function suma($valor1, $valor2)
      {
        return ($valor1 + $valor2);
      }
      echo suma(80, 135);

    // Funció de la resta
      echo "<hr><h2>Funció de la resta</h2><br>";
      function resta($valor1, $valor2)
      {
        return ($valor1 - $valor2);
      }
      echo resta(150, 72);

    // Funció de la multiplicació
      echo "<hr><h2>Funció de la multiplicació</h2><br>";
      function multiplicar($valor1, $valor2)
      {
        return ($valor1 * $valor2);
      }
      echo multiplicar(9, 9);

    // Funció de la divisió
      echo "<hr><h2>Funció de la divisió</h2><br>";
      function dividir($valor1, $valor2)
      {
        return ($valor1 / $valor2);
      }
      echo dividir(49, 7);

    //Funció del md5
      echo "<hr><h2>Funció del md5</h2><br>";
      $nom = 'Nico';

      echo ("La codificació md5 de $nom és:<br>");
      echo md5($nom);
      echo "<hr>";
?>

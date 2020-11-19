<?php
  //Nicolau Martí Bover Armstrong
    echo "<hr><h3>Nicolau Martí Bover Armstrong</h3><hr>";
      echo "<h2>Funció del filter_var</h2>";
        function emailValidation ($variable){
          return filter_var($variable, FILTER_VALIDATE_EMAIL);
        }

        if (emailValidation ('nbover.07@gmail.com')){
          echo 'VALID';
        } else {
          echo 'NOT VALID';
        }
      echo "<hr><h2>Funció del strcmp</h2>";
        function passwordValidation ($variable1,$variable2){
            if (strcmp($variable1,$variable2) !== 0)
              return False;
            return True;
        }

        echo passwordValidation ("Hola","Hola");


?>

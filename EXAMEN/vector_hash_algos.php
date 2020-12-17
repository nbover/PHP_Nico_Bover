<?php
//visusi corrections - Be attentive to solution in class
/*
Donada la funcio de php hash_algos()
1-Mostra amb un bucle for each tots els seus elements
2- de manera ordenada alfabeticament
3- I mostra amb accés directe per posició als elements amb els valors:
    sha256
    md5
mes informació al link:
https://www.php.net/manual/en/function.hash-algos.php
......
*/
//1.
print_r(hash_algos());
echo "<hr>";
//2.
$prova = hash_algos();
asort($prova);
print_r($prova);
echo "<hr>";
//3.
foreach ($prova as $val1 => $val2) {
  echo "$val2<br>";
}
 ?>

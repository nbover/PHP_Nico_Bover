<?php
//viusi corrections - see comments below amd rubric in moodle
//calcular el preu del tipus d'habitació i retornar un valor numeric
//si es single el preu es 30
//si es double el preu es 50
//en cas contrari el preu es 0
//emprar la funcio strcmp vista als exercicis de classe
function typePriceCalculation($type){

  if (strcmp($type,'single') ==0)
    return 30;
  elseif (strcmp($type,'double') ==0)
    return 50;
  else
    return 0;
}

//calcular el preu segons el genere d'habitació i retornar un valor numeric
//si es female o male el preu es 10
//si es mixed el preu es 5
//en cas contrari el preu es 0
//emprar la funcio strcmp vista als exercicis de classe
function genderPriceCalculation($gender){//visusi corrections - Be attentive to solution in class
  if (strcmp($gender,'female') !==1) 
    return 10;
  elseif (strcmp($gender,'male') !==1)
    return 10;
  elseif (strcmp($gender,'mixed') !==1)
    return 5;
  else
    return 0;
}

//calcular el preu segons les vistes d'habitació i retornar un valor numeric
//si s'ha marcat amb vistes (yes) el preu es 15
//en cas contrari el preu es 0
//emprar la funcio strcmp vista als exercicis de classe
function viewsPriceCalculation($views){
  if (strcmp($views,'yes') !==1)//visusi corrections - Be attentive to solution in class
    return 15;
  else
    return 0;
}

//calcular el preu segons els serveis d'habitació seleccionats i retornar un valor numeric
//per cada servei seleccionat el preu s'incrementa 20
//example: si s'han seleccionat 3 serveis de restauració el preu es 20 multiplicat per 3
//si no s'ha seleccionat cap el preu es 0
//emprar una de les dues funcions vistes a classe per a saber quants elements hi ha a un array

function foodServicesPriceCalculation($foodServices){
  return (sizeof($_GET['foodServices'])*20);
}

?>

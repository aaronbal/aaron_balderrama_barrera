
<?php
///Validar tiempo

function validTime($time){

  ///validamos si la hora es valida
  
  if (strtotime($time) === false) { echo 'false'; }else{
    echo 'true';
  } 
  
  }
  
  print_r(validTime('25:51'));
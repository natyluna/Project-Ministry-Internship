<?php 
 function validaRequerido($valor){
    if(trim($valor) == ''){
       return false;
    }else{
       return true;
    }
 }

 function validarCant($valor, $cant){
   if(strlen($valor) < $cant){
      return false;
   }else{
      return true;
   }
}


function soloLetras($valor) {
$patron= "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$/";

   if( preg_match($patron, $valor))
   {
      return true;
   }else{
      return false;
   }
}

 function validaEmail($valor){
    if(filter_var($valor, FILTER_VALIDATE_EMAIL) === FALSE){
       return false;
    }else{
       return true;
    }
 }
?>
<?php
if(!isset($_POST['enviar']))
{
   //--> creamos el array
   $ejemplo[]="Hola";
   $ejemplo[]="Buenas";
   $ejemplo[]="Hasta Luego";
   $ejemplo[]="Hasta Pronto";
   $ejemplo[]="Adios";
   $n = count($ejemplo);
   $j = 0;
   echo"<big><big><strong>RESULTADO ANTES DE ENVIAR POR FORMULARIO<br></strong></big></big>";
   while($j<$n)
   {
       echo"Posicion $j: $ejemplo[$j]<br>";
       $j++;
   }//fin while
   echo"<br><br>Hacemos lo propio con PRINT R:<br>";    
   print_r ($ejemplo);
   
   //-->FUNCION PARA SERIALIZAR EL ARRAY
   function array_envia($variable) 
   {
       $tmp = serialize($variable);
       return $tmp;
   }//fin funcion
   $ejemplo=array_envia($ejemplo); //-->LO SERIALIZAMOS
   
   ?>
   <form action="arrayejemplop1.php" method="post" name="form" id="form">
   <?php
   //-->PASAMOS EL ARRAY POR HIDDEN
   echo"<input type='hidden' name='ejemplo' value='$ejemplo'>";
   echo"<br><br><input type='submit' name='enviar' value='Enviar'><br>";
   echo"</form>";
   
   //-->DES-SERIALIZAMOS PARA COMPROBAR QUE LO HACE BIEN ANTES DE ENVIAR
   function array_recibe($url_array) 
   {
       $tmp = unserialize($url_array);
          return $tmp;
   }//fin funcion
   $ejemplo=array_recibe($ejemplo); 
   
   //-->VOLVEMOS A RECORRERLO PARA VER SI EXACTAMENTE DA EL MISMO RESULTADO
   echo"<br><br><br>";
   $n = count($ejemplo);
   $j = 0;
   while($j<$n)
   {
       echo"Posicion $j: $ejemplo[$j]<br>";
       $j++;
   }//fin while
   echo"<br><br>Hacemos lo propio con PRINT R:<br>";    
   print_r ($ejemplo);
   
}//fin existe enviar
else
{
   echo"<big><big><strong>RESULTADO DESPUES DE ENVIAR POR FORMULARIO<br></strong></big></big>";
   //-->RECIBIMOS POR POST EL ARRAY
   $ejemplo=$_POST['ejemplo'];
   //-->DES-SERIALIZAMOS PARA COMPROBAR QUE LO HACE BIEN TRAS RECIBIR
   function array_recibe($url_array) 
   {
       $tmp = unserialize($url_array);
          return $tmp;
   }//fin funcion
   $ejemplo=array_recibe($ejemplo); 
   
   //-->VOLVEMOS A RECORRERLO PARA VER SI EXACTAMENTE DA EL MISMO RESULTADO
   echo"<br><br><br>";
   $n = count($ejemplo);
   $j = 0;
   while($j<$n)
   {
       echo"Posicion $j: $ejemplo[$j]<br>";
       $j++;
   }//fin while
   echo"<br><br>Hacemos lo propio con PRINT R:<br>";    
   print_r ($ejemplo);
   print_r ("<br>El valor de count es: " . $n);
   ?><br /><br /><input type="button" value="Volver" onClick=" window.location.href='arrayejemplop1.php' "><?php
   
}//fin no existe enviar

?>
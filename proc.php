<?php

include 'conexion.php';


$q=$_POST['q'];


$con=conexion();

$sql="select * from personas where nombre LIKE '".$q."%' LIMIT 0 , 5";
$res=mysql_query($sql,$con);

if(mysql_num_rows($res)==0){

 echo '<b>No hay sugerencias</b>';

}else{


 while($fila=mysql_fetch_array($res)){

  echo '<div class="sugerencias" onclick="myFunction2('.$fila["cod"].')">'.$fila['nombre'].'</div>';

 }


}

?>
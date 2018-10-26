<?php
function connect(){
  try{
    $connection= new PDO("mysql:dbname=examen;host=localhost", "root","");
    return $connection;
  }catch(PDOException $e){
    echo 'Error al conectarse con la base de datos';
    return false;
  }
}
function disconnect($conexion) {
  mysqli_close($conexion);
}
function inserts ($query, $values){
   $con= connect();
   $con->query("SET NAMES 'utf-8'");
   if($con){
     $affectedRows=$con->prepare($query)->execute($values);
     if($affectedRows !== false){
       $result=$con->lastInsertId();//result es igual a lo que se afecto
     }else{
       $result= false;
     }
     $con=NULL;
     return $result;
   }
   return false;
 }
?>

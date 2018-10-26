<?php
  require_once("accessDataBase.php");

  if(isset($_POST["nombre"]) && $_POST["nombre"]!=""){
$query= 'INSERT INTO usuario (nombre,aPaterno,aMaterno) VALUES (?,?,?)';
$values= [
    $_POST['nombre'],
    $_POST['aPaterno'],
    $_POST['aMaterno'],
  ];

      if(inserts($query,$values) !== false){

          header("location: ../index.php");
      }
  }

  header("location: ../index.php");
 ?>

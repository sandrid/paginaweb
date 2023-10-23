<?php

include ("nexus.php");

$con = connection () ;

$id = null;
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email= $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO club VALUES ('$id','$nombre','$apellido','$email','$telefono','$mensaje')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: contacto.php");
}else{
    echo "Error al insertar usuario";
}


?>
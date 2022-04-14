<?php 

    include('conexion.php');

    $id= $_POST['id'];
    $nom= $_POST['nombre'];
    $apa= $_POST['apaterno'];
    $ama= $_POST['amaterno'];

    $sql = "UPDATE vendedores set nombre='$nom', apaterno='$apa',amaterno ='$ama' WHERE id='$id'";

    $resultado=mysqli_query($conn,$sql);

    if (!$resultado){
        die('Error al modificar los datos del proovedor');
    }

    echo 'Registro modificado de forma satisfactoria';
    echo 'si entra';


?>
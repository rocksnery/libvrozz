<?php 

include('conexion.php');

    if (isset($_POST['nombre'])){

        $nom= $_POST['nombre'];
        $apa= $_POST['apaterno'];
        $ama= $_POST['amaterno'];

        $sql = "INSERT INTO vendedores(nombre,apaterno,amaterno) VALUES ('$nom','$apa','$ama')";

        $resultado=mysqli_query($conn,$sql);

        if (!$resultado){
            die('Error al insertar los datos del proveedor');
        }

        echo 'Registro agregado de forma satisfactoria';
    }

?>
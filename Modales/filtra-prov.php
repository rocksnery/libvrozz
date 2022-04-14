<?php 

include('conexion.php');

    $id = $_POST['id'];
    
    $sql = "SELECT * FROM vendedores WHERE id=$id";

    $resultado=mysqli_query($conn,$sql);
    if (!$resultado){
        die('Error en la consulta'.mysqli_error($conn));
    }

    $json=array();
    while($row =mysqli_fetch_array($resultado)){
        $json[]=array(
            'id'=>$row['id'],
            'nombre'=>$row['nombre'],
            'ap'=>$row['apaterno'],
            'am'=>$row['amaterno']
        );
    }

    $jsonString=json_encode($json[0]);
    echo $jsonString;

?>
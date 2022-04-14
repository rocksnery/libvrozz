<?php 

    include('conexion.php');

    $sql= "SELECT * FROM vendedores";

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
    $jsonString=json_encode($json);
    echo $jsonString;

?>
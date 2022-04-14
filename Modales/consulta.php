<?php 

include('conexion.php');

$buscar = isset($_POST['buscar'])?$_POST['buscar']:null;

if(!empty($buscar)){

    $query="SELECT * FROM vendedores WHERE nombre like '$buscar%';";
    $result=mysqli_query($conn,$query);
    if(!$result){
        die('Error en la consulta:\n'.mysqli_error($conn));
    }
    $json=array();
    while($row =mysqli_fetch_array($result)){
        $json[]=array(
            'id'=>$row['id'],
            'nombre'=>$row['nombre'],
            'ap'=>$row['apaterno'],
            'am'=>$row['amaterno']
        );
    }
    //print 'putamadremarch'.$row;
    $jsonString = json_encode($json);
    echo $jsonString;
}
?>
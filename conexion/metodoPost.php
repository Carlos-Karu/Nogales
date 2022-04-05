<!-- Llama la conexión con la base de datos. -->
<?php
require_once '../conexion/conexion.php';
?>

<!-- METODO POST PARA EL USUARIO. -->
<?php
//Inicia la información enviada por el formulario en la primera parte.
if(isset($_POST['insertar'])){ 
    $fecha=$_POST['fecha'];
    $nombre=$_POST['nombre'];
    $puesto=$_POST['puesto'];
    $departamento=$_POST['departamento'];
    $correo =$_POST['correo'];
    $extension = $_POST['extension'];
    $telefono = $_POST['telefono'];
//Termina la información enviada por el formulario en la primera parte.

//Inicia la inserción de datos en la base de datos.
    $sql = "insert into datos_req(fecha,nombre,puesto,departamento,correo,extension,telefono)
                values(:fecha,:nombre,:puesto,:departamento,:correo,:extension,:telefono)";

    $sql = $conexion->prepare($sql);

    $sql->bindParam(':fecha',$fecha,PDO::PARAM_STR);
    $sql->bindParam(':nombre',$nombre,PDO::PARAM_STR, 250);
    $sql->bindParam(':puesto',$puesto,PDO::PARAM_STR, 250);
    $sql->bindParam(':departamento',$departamento,PDO::PARAM_STR, 250);
    $sql->bindParam(':correo',$correo,PDO::PARAM_STR, 250);
    $sql->bindParam(':extension',$extension,PDO::PARAM_STR, 10);
    $sql->bindParam(':telefono',$telefono,PDO::PARAM_STR, 11);

    $sql->execute();
    $id_req = $conexion->lastInsertId();
//Termina el envio de datos a la base de datos. 
}
?>

<?php
//Inicia la información enviada por el formulario en la segunda parte.
if(isset($_POST['insertar'])){
    $cantidad=$_POST['cantidad'];
    $unidad=$_POST['unidad'];
    $descripcion=$_POST['descripcion'];
    $detalles=$_POST['detalles'];

    foreach ($cantidad as $index => $cantidades) {
        $s_cantidad = $cantidades;
        $s_unidad = $unidad[$index];
        $s_descripcion=$descripcion[$index];
        $s_detalles=$detalles;
        $s_id_req=$id_req;

        $sql = "insert into pedidos(cantidad, unidad, descripcion, detalles, id_req) values ('$s_cantidad','$s_unidad','$s_descripcion','$s_detalles','$s_id_req')";
        $sql = $conexion->prepare($sql);

        $sql->execute();
    }
    
    if($sql){
        header("location:../public/statusUsuario.php");
        } else echo 'Problemas con el navegador. ';
}
//Termina la información enviada por el formulario en la segunda parte.
?>
<?php
include('../conexion/conexion.php');
include('../conexion/metodoPost.php');

$id_req = $_GET['id_req'];

$query = $conexion->prepare("SELECT * FROM datos_req WHERE id_req = :id_req");
$query->execute(['id_req' => $id_req]);
$row = $query->fetch(PDO::FETCH_ASSOC);

$query2 = $conexion->prepare("SELECT * FROM pedidos WHERE id_req = :id_req");
$row2 = $query2->fetch(PDO::FETCH_ASSOC);
$query2->execute(['id_req' => $id_req]);

$query3 = $conexion->prepare("SELECT detalles FROM pedidos WHERE id_req = :id_req GROUP BY id_req");
$row3 = $query3->fetch(PDO::FETCH_ASSOC);
$query3->execute(['id_req' => $id_req]);
?>


<!-- METODOPOST PARA EL ADMINISTRADOR DEL DEPARTAMENTO DE INVENTARIO. -->
<?php
//Inicia la información enviada por el formulario en la primera parte.
if(isset($_POST['upd_uno'])){
    ////// Informacion enviada por el formulario /////
    $id_req=trim($_GET['id_req']);
    $requi=trim($_POST['requi']);
    ////// Fin informacion enviada por el formulario ///
    
    ////////////// Actualizar la tabla /////////
    $consulta = "UPDATE datos_req SET `requi`= :rqui WHERE `id_req`= :id_req";
    $sql = $conexion->prepare($consulta);
    $sql->bindParam(':requi',$requi,PDO::PARAM_STR, 15);
    $sql->bindParam(':id_req',$id_req,PDO::PARAM_INT);
    
    $sql->execute();

    if($sql->rowCount() > 0){
    $count = $sql -> rowCount();
    echo "<div class='content alert alert-primary' >
    Gracias: $count registro ha sido actualizado </div>";
    header("location:../public/statusUsuario.php");
    }
    else{
    echo "<div class='content alert alert-danger'> No se pudo actulizar el registro </div>";
    print_r($sql->errorInfo()); 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tailwind.css">
    <title>Formato de requisición</title>
</head>

    <body class="mx-24 my-10" >
    <form action="" method="POST">
        <header>
            <div class="p-1">
                    <div class="flex mb-5">
                        <!-- mt-10 mx-14 -->
                        <div class="w-1/2">   
                            <div class="w-48">
                                <img src="../imagenes/Nogales.png" alt="Logo de Nogales">
                            </div>
                        </div>
                        <div class="w-1/2">
                            <div class="flex mb-3">
                                <div class="w-48 text-right">
                                    <h1>Fecha de Solicitud:</h1>
                                </div>
                                <div class="w-60 ml-1 border-b-1 border-black">
                                    <?php echo $row['fecha']; ?>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="w-48 text-right">
                                    <h1 for="requi">Número de requisición:</h1>
                                </div>
                                <div class="w-60 ml-1 border-b-2 border-black">
                                    <input type="text" name="requi" placeholder="Escriba el número de requisición" 
                                    required="" style="width: 100%;">
                                </td>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </header>

        <!-- Aquí inicia la primera tabla del formato. -->
        <main> 
            <section>
                <div class="">
                    <table class="w-full border-2 border-black">
                        <tr class="h-16 bg-slate-400">
                            <th colspan="4" class="border-2 border-black">FORMATO DE REQUISICIÓN</th>
                        </tr>
                        <tr>
                            <td for="nombre" class=" w-53 px-2 border-2 border-black" width="25%">
                                NOMBRE DEL SOLICITANTE:
                            </td>
                            <td colspan="4" class="border-2 border-black" width="75%">
                                <?php echo $row['nombre']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td for="puesto" class="px-2 border-2 border-black" width="25%">
                                PUESTO:
                            </td>
                            <td colspan="4" class="border-2 border-black" width="75%">
                                <?php echo $row['puesto']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td for="departamento" class="px-2 border-2 border-black" width="25%">
                                DEPARTAMENTO:
                            </td>
                            <td colspan="4" class="border-2 border-black" width="75%">
                                <?php echo $row['departamento']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td for="correo" class="px-2 border-2 border-black" width="25%">
                                CORRERO ELECTRONICO:
                            </td>
                            <td colspan="4" class="border-2 border-black" width="75%">
                                <?php echo $row['correo']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td for="extension" class="px-2 border-2 border-black" width="25%">
                                EXTENSION:
                            </td>
                            <td class="border-2 border-black" width="25%">
                                <?php echo $row['extension']; ?>
                            </td>
                            <td for="telefono" class="w-32 px-2 border-2 border-black" width="25%">
                                CELULAR:
                            </td>
                            <td class="border-2 border-black" width="25%">
                                <?php echo $row['telefono']; ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </section><br>
        <!-- Aquí termina la primera tabla del formato. -->

        <!-- Aquí inicia la segunda tabla del formato. -->
            <section>
            <?php while($row2 = $query2->fetch(PDO::FETCH_ASSOC)){?>
                <div class="flex justify-center">
                    <div class="main-form grid grid-cols-4 gap-x-4 w-full h-auto p-1 border-b-2 border-stone-300">
                        <div class="grid grid-rows-2">
                            <label for=""><b>Cantidad</b></label>
                            <input type="text" name="cantidad[]" class="border-b-2 border-gray-400" 
                            value="<?php echo $row2['cantidad']; ?>" disabled>
                        </div>
                        <div class="grid grid-rows-2">
                            <label for=""><b>Unidad</b></label>
                            <input type="text" name="unidad[]" class="border-b-2 border-gray-400" 
                            value="<?php echo $row2['unidad']; ?>" disabled>
                        </div>
                        <div class="grid grid-rows-2">
                            <label for=""><b>Descripción</b></label>
                            <input type="text" name="descripcion[]" class="border-b-2 border-gray-400" 
                            value="<?php echo $row2['descripcion']; ?>" disabled>
                        </div>
                        <div class="grid grid-rows-2">
                            <label for=""><b>Existencia</b></label>
                            <input type="text" name="existencia[]" placeholder="Escriba YES o NO según sea el caso." 
                            class="border-b-2 border-gray-400" 
                                required>
                        </div>
                    </div>
                </div>
                <div class="paste-new-forms"></div>
                <div>
                    <h1 class="font-bold">*Anotar especificaciones completas de Herramienta y/o Equipo</h1>
                </div>
                <?php }?>    
            </section><br>
        <!-- Aquí termina la segunda tabla del formato. -->

        <!-- Aquí inicia la tercera tabla del formato. -->
            <section>
            <?php while($row3 = $query3->fetch(PDO::FETCH_ASSOC)){?>
                <div class="mb-10">
                    <table class="w-full border-2 border-black">
                        <tr>
                            <th class="border-2 border-black bg-gray-400">DETALLES DE LOS INSUMOS O SERVICIOS SOLICITADOS (INCLUIR NOMBRE DEL EVENTO)</th>
                        </tr>
                        <tr>
                            <td height="100px">
                                <?php echo $row3['detalles']; ?>
                                                                
                            </td>
                        </tr>
                        
                    </table>
                </div>
            <?php }?>   
            </section>
        <!-- Aquí termina la tercera tabla del formato. -->

        <!-- Aquí se anotan los nombres de solicitante y autorizador. -->
            <section>
                <div class="flex mb-10">
                    <div class="w-1/2 ml-6">
                        <div>
                            <span class="inline-block">C.</span>
                            <input type="text" name="nombre" placeholder="Nombre solicitante" 
                             required="" style="width: 75%;" class="border:none border-b-2 border-black" 
                             value="<?php echo $row['nombre']; ?>" disabled>
                        </div>
                        <div class="ml-44 mt-2">
                            <h1>SOLICITA</h1>
                        </div>
                    </div>
                    <div class="w-1/2 ml-6">
                        <div class="ml-28">
                            <div>
                                <span class="inline-block">C.</span>
                                <input type="text" name="autorizador" placeholder="Escriba su nombre" 
                                 required="" style="width: 95%;" class="border:none border-b-2 border-black" disabled>
                            </div>
                            <div class="ml-44 mt-2">
                                <h1 for="autorizador">AUTORIZA</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
        <!-- Aquí se encuentran los botones del formato. -->
            <section>
                <div>
                    <div class="flex justify-center">
                        <button name="upd_uno" type="submit" class="px-4 py-0 rounded-full border-4 bg-green-600 border-green-600">
                            Guardar
                        </button>
                        </a>
                            <button class="px-4 py-0 rounded-full border-4 bg-red-700 border-red-700">
                        <a href="statusUsuario.php">Regresar</a>
                        </button>
                    </div>
                </div>
            </section>
        </main> 
    </form>

    </body>
    </html>
    
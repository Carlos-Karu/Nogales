<?php
include '../conexion/conexion.php';
// consulta
$consultar = "SELECT * FROM datos_req";
$guardar = $conexion->query($consultar);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tailwind.css">
    <title>Status requisiciones</title>
</head>

<body class="p-4"> 
    <main>
        <section>
            <div class="text-center text-lg">
                <div class="shadow-lg shadow-slate-800/50 py-4 bg-gray-400 rounded-full">
                    <h1 class="font-bold text-black">
                        Requisiciones pendientes
                    </h1>
                </div>
            </div>
        </section><br>

        <h1 class="text-center">NOTA: Recuerda que todas las requisiones pendientes te saldrán aquí.</h1><br>
        <h2 class="text-center">Recuerda, una vez que has puesto el número de requisición no olvides pulsar en el botón "Enviar".</h2><br>

        <section>
            <div class="shadow-lg shadow-slate-800/50">
                <table class="border-2 border-black w-full">
                    <tr>
                        <th width="20%" class="border-2 border-black bg-gray-400">
                            Solicitud
                        </th>
                        <th width="20%" class="border-2 border-black bg-gray-400">
                            Solicitante
                        </th>
                        <th width="20%" class="border-2 border-black bg-gray-400">
                            Departamento
                        </th>
                        <th width="20%" class="border-2 border-black bg-gray-400">
                            Teléfono
                        </th>
                        <th width="20%" colspan="2" class="border-2 border-black bg-gray-400">
                            Acción
                        </th>
                    </tr>
                    <?php while($row = $guardar->fetch(PDO::FETCH_ASSOC)){?>
                    <tr>
                        <td class="border-2 border-black text-center">
                            <?php echo $row['id_req']; ?>
                        </td>
                        <td class="border-2 border-black text-center">
                            <?php echo $row['nom_soli']; ?>
                        </td>
                        <td class="border-2 border-black text-center">
                            <?php echo $row['depa_soli']; ?>
                        </td>
                        <td class="border-2 border-black text-center">
                            <?php echo $row['tel_soli']; ?>
                        </td>
                        <td width=10% class="border-2 border-black text-center">
                            <a href="inventarioContador.html" ><strong>Completar documento</strong></a>
                        </td>
                        <td width=10% class="border-2 border-black text-center">
                            <a href="" ><strong>Eliminar</strong></a>
                        </td>
                    </tr>
                    <?php }?>
                </table>
            </div>
        </section><br>

        <section>
            <div class="">
                <div class="flex justify-center">
                    <button class="px-4 py-0 rounded-full border-4 bg-red-700 border-red-700">Regresar</button>
                </div>
            </div>
        </section>

        <footer>

        </footer>
    </main>

</body>
</html>
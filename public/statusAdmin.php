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

        <h1 class="text-center">NOTA: Aquí saldrán las requisiciones enviadas, espera tu turno.</h1><br>
        <h2 class="text-center">No desesperes, espera a que revisen tu solicitud de requisición.</h2><br>

        <section>
            <div class="shadow-lg shadow-slate-800/50">
                <table class="border-2 border-black w-full">
                    <tr>
                        <th width="20%" class="border-2 border-black bg-gray-400">
                            Solicitud
                        </th>
                        <th width="20%" class="border-2 border-black bg-gray-400">
                            Fecha de creación
                        </th>
                        <th width="20%" class="border-2 border-black bg-gray-400">
                            Solicitante
                        </th>
                        <th width="20%" class="border-2 border-black bg-gray-400">
                            Teléfono
                        </th>
                        <th width="20%" class="border-2 border-black bg-gray-400">
                            Acción
                        </th>
                    </tr>
                    <?php while($row = $guardar->fetch(PDO::FETCH_ASSOC)){?>
                    <tr>
                        <td class="border-2 border-black text-center">
                            <?php echo $row['id_req']; ?>
                        </td>
                        <td class="border-2 border-black text-center">
                            <?php echo $row['fecha']; ?>
                        </td>
                        <td class="border-2 border-black text-center">
                            <?php echo $row['nombre']; ?>
                        </td>
                        <td class="border-2 border-black text-center">
                            <?php echo $row['telefono']; ?>
                        </td>
                        <td class="border-2 border-black text-center">
                            <a href="inventarioAdmin.php?id_req=<?php echo $row['id_req']; ?>" class="text-cyan-700"><b>Completar documento</b></a>
                        </td>
                    </tr>
                    <?php }?>
                </table>
            </div>
        </section><br>

        <section>
            <div class="">
                <div class="flex justify-center">
                    <button class="px-4 py-0 rounded-full border-4 bg-red-700 border-red-700">
                        <a href="">Regresar</a>
                    </button>
                </div>
            </div>
        </section>
    </main>

</body>
</html>
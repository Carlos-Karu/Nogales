<?php
include('../conexion/conexion.php');
include('../conexion/metodoPost.php');
?>

<!-- Se inicia la obtención de la fecha del sistema -->
<?php 
date_default_timezone_set('America/Mexico_city');
$fecha=date('Y-m-d');
?>
<!-- Se termina la obtención de la fecha del sistema --> 

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
    <form action="../conexion/metodoPost.php" method="POST">
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
                                <input type="datetime" name="fecha" value="<?= $fecha?>" required="" 
                                 class="ml-3">
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-48 text-right">
                                <h1 for="requi">Número de requisición:</h1>
                            </div>
                            <div class="w-60 ml-1 border-b-1 border-black">
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
                                <input type="text" name="nombre" placeholder="Escriba su nombre" required="" style="width: 100%;">
                            </td>
                        </tr>
                        <tr>
                            <td for="puesto" class="px-2 border-2 border-black" width="25%">
                                PUESTO:
                            </td>
                            <td colspan="4" class="border-2 border-black" width="75%">
                                <input type="text" name="puesto" placeholder="Escriba su puesto" required="" style="width: 100%;">
                            </td>
                        </tr>
                        <tr>
                            <td for="departamento" class="px-2 border-2 border-black" width="25%">
                                DEPARTAMENTO:
                            </td>
                            <td colspan="4" class="border-2 border-black" width="75%">
                                <input type="text" name="departamento" placeholder="Escriba su departamento" required="" style="width: 100%;">
                            </td>
                        </tr>
                        <tr>
                            <td for="correo" class="px-2 border-2 border-black" width="25%">
                                CORRERO ELECTRONICO:
                            </td>
                            <td colspan="4" class="border-2 border-black" width="75%">
                                <input type="text" name="correo" placeholder="Escriba su correo" required="" style="width: 100%;">
                            </td>
                        </tr>
                        <tr>
                            <td for="extension" class="px-2 border-2 border-black" width="25%">
                                EXTENSION:
                            </td>
                            <td class="border-2 border-black" width="25%">
                                <input type="text" name="extension" placeholder="Escriba la extensión" required="" style="width: 100%;">
                            </td>
                            <td for="telefono" class="w-32 px-2 border-2 border-black" width="25%">
                                CELULAR:
                            </td>
                            <td class="border-2 border-black" width="25%">
                                <input type="text" name="telefono" placeholder="Escriba su teléfono" required="" style="width: 100%;">
                            </td>
                        </tr>
                    </table>
                </div>
            </section><br>
        <!-- Aquí termina la primera tabla del formato. -->

        <!-- Aquí inicia la segunda tabla del formato. -->
            <section>
                <div class="flex justify-center">
                    <div class="main-form grid grid-cols-4 gap-x-4 w-full h-auto p-1 border-b-2 border-stone-300">
                        <div class="grid grid-rows-2">
                            <label for=""><b>Cantidad</b></label>
                            <input type="text" name="cantidad[]" class="border-b-2 border-gray-400" required>
                        </div>
                        <div class="grid grid-rows-2">
                            <label for=""><b>Unidad</b></label>
                            <input type="text" name="unidad[]" class="border-b-2 border-gray-400" required>
                        </div>
                        <div class="grid grid-rows-2">
                            <label for=""><b>Descripción</b></label>
                            <input type="text" name="descripcion[]" class="border-b-2 border-gray-400" required>
                        </div>
                        <div class="grid grid-rows-2">
                            <label for=""></label>
                            <a href="javascript:void(0)" class="add-more-form flex justify-center
                            text-cyan-700">
                                <b>Agregar campo</b>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="paste-new-forms"></div>
                <div>
                    <h1 class="font-bold">*Anotar especificaciones completas de Herramienta y/o Equipo</h1>
                </div>
            </section><br>
        <!-- Aquí termina la segunda tabla del formato. -->

        <!-- Aquí inicia la tercera tabla del formato. -->
            <section>
                <div class="mb-10">
                    <table class="w-full border-2 border-black">
                        <tr>
                            <th class="border-2 border-black bg-gray-400">DETALLES DE LOS INSUMOS O SERVICIOS SOLICITADOS (INCLUIR NOMBRE DEL EVENTO)</th>
                        </tr>
                        <tr>
                            <th height="100px">
                                <textarea name="detalles" id="" cols="1" rows="1"
                                class="w-full h-24">
                                </textarea>
                            </th>
                        </tr>
                        
                    </table>
                </div>
            </section>
        <!-- Aquí termina la tercera tabla del formato. -->

        <!-- Aquí se anotan los nombres de solicitante y autorizador. -->
            <section>
                <div class="flex mb-10">
                    <div class="w-1/2 ml-6">
                        <div>
                            <span class="inline-block">C.</span>
                            <input type="text" name="nombre" placeholder="Nombre solicitante" 
                             required="" style="width: 75%;" class="border:none border-b-2 border-black" disabled>
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
                        <button name="insertar" type="submit" class="px-4 py-0 rounded-full border-4 bg-green-600 border-green-600">
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

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        
        $(document).ready(function() {

            $(document).on('click', '.remove-btn', function () {
               $(this).closest('.main-form').remove();
            });
        
            $(document).on('click', '.add-more-form', function() {
                $('.paste-new-forms').append('<div class="main-form grid grid-cols-4 gap-x-4 w-full h-auto p-1 border-b-2 border-stone-300">\
                        <div class="grid grid-rows-2">\
                            <label for=""><b>Cantidad</b></label>\
                            <input type="text" name="cantidad[]" class="border-b-2 border-gray-400" required>\
                        </div>\
                        <div class="grid grid-rows-2">\
                            <label for=""><b>Unidad</b></label>\
                            <input type="text" name="unidad[]" class="border-b-2 border-gray-400" required>\
                        </div>\
                        <div class="grid grid-rows-2">\
                            <label for=""><b>Descripción</b></label>\
                            <input type="text" name="descripcion[]" class="border-b-2 border-gray-400" required>\
                        </div>\
                        <div class="grid grid-rows-2">\
                            <label for=""></label>\
                            <button type="button" class="remove-btn text-red-600">Eliminar</button>\
                        </div>\
                    </div>');
            });
        });
    </script>

    </body>
    </html>
    
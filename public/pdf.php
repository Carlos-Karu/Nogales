<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REQUISICION</title>
</head>

<body>
  <style>
    .img{
      padding-left: 0%;
      width: 150px;
      height: 80px;
    }
    body {
      margin:0;
      font-size: inherit;
      font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    }

    h1 {
      font-size: inherit;
    }

    .border1 {
      border: 1px solid #000000;
      border-collapse: collapse;
    }

    .border2 {
      border-right: 1px solid #000000;
    }

    .container {
      padding: 0.25rem;
    }

    .center {
      text-align: center;
    }

    .left {
      display: flex;
    }

    .w1 {
      width: 22%;
    }

    .w2 {
      width: 235px;
    }

    .none {
      border: none;
    }

    .padding {
      padding: 5px;
    }

    .inline {
      display: inline;
    }

    .inlineBlock {
      display: inline-block;
    }

    .m1 {
      margin-top: 2px;
    }

    .m2 {
      margin-bottom: 15px;
    }

    .w100 {
      width: 100%;
    }

    .floatRight {
      float: right;
    }

    /* Aquí empieza la segunda tabla :D */
    .tabla{
	    width: 100%;
	    border-collapse: collapse;
    }

    .tabla th{
      padding:5px 15px;
      border:1px solid black;
      text-align: center;
      font-size:16px;
    }

    .tabla td{
      padding:1px 15px;
      border:1px solid black;
      text-align: center;
      font-size:13px;
    }

    .tabla th{
	    background-color: #424949;
	    color:#ffffff;
    }

    .tabla tbody tr:nth-child(even){
	    background-color: #f5f5f5;
    }

    .tabla .detalles{
      padding:80px 15px;
      border:1px solid black;
      text-align: center;
      font-size:13px;
    }

    .names{
      padding: 0 1rem;
      width: 100%;
      max-width: 850px;
      margin-left: auto;
      margin-right: auto;
    } 

    .names label{
      margin-right: 5px;
      font-size: .9rem;
    }

    .names input{
      font-size: 1rem;
      height: 20px;
      width: 300px;
      padding: .2rem;
      border: 0px;
      /* border: 2px solid black;
      border-radius: 5px; */
    }

    .names .soli{
      display: flex;
      flex-direction: column;
      margin-top: 1px;
      text-align: center;
    }

    .botones{
      display: flex;
      justify-content: center;
    }
    
    .botones .save{
      margin: 10px;
      padding: 10px;
      background-color: #28B463;
      font-size: large;
    }

    .botones .cancel{
      margin: 10px;
      padding: 10px;
      background-color: #CB4335;
      font-size: large;
    }

  </style>

    <header>
      <div class="container">
        <div class="inlineBlock">
          <img class="img" src="../imagenes/Nogales.png" alt="">
        </div>
        <div class="inlineBlock floatRight">
          <div>
            <h1>FECHA DE SOLICITUD:</h1>
          </div>
          <div class="m2">
            <h1>NUMERO DE FOLIO</h1>
          </div>
        </div>
      </div>
    </header>

    <main> <!-- Tabla 1 -->
      <table class="tabla">
        <thead> <!-- Columnas de la tabla -->
          <tr>
           <th colspan="4">FORMATO DE REQUISICION</th>
          </tr>
        </thead>
        <tbody> <!-- Filas de la tabla -->
            <tr>
                <td width="25%">NOMBRE DEL SOLICITANTE</td>
                <td width="75%" colspan="3">C</td>
            </tr>
   
            <tr>
                <td width="25%">PUESTO</td>
                <td width="75%" colspan="3">C</td>
            </tr>
   
            <tr>
                <td width="25%">DEPARTAMENTO</td>
                <td width="75%" colspan="3">C</td>
            </tr>

            <tr>
                <td width="25%">CORREO ELECTRONICO</td>
                <td width="75%" colspan="3">C</td>
            </tr>

            <tr>
              <td width="50%">EXTENSION</td>
              <td width="50%">C</td>
              <td width="50%">CELULAR</td>
              <td width="50%">C</td>
            </tr>

        </tbody>
      </table>
    </main><br>

    <main> <!-- Tabla 2 -->
      <table class="tabla">
        <thead> <!-- Columnas de la tabla -->
          <tr>
           <th>Cantidad</th> 
           <th>Unidad</th>
           <th>Descripcion</th>
           <th>Existencia</th>
           <th>Autorizo</th>
          </tr>
        </thead>
        <tbody> <!-- Filas de la tabla -->
            <tr>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
            </tr>
   
            <tr>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
            </tr>
   
            <tr>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
            </tr>
   
            <tr>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
            </tr>

            <tr>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
            </tr>

            <tr>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
            </tr>

            <tr>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
            </tr>

            <tr>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
            </tr>

            <tr>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
            </tr>

            <tr>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
            </tr>

            <tr>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
            </tr>

            <tr>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
            </tr>

            <tr>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
            </tr>

            <tr>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
            </tr>

            <tr>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
                <td>C</td>
            </tr>
        </tbody>
      </table>
      <h1>*Anotar especificaciones completas de Herramienta y/o Equipo</h1>
    </main>

    <main> <!-- Tabla 3 -->
      <table class="tabla">
        <thead> <!-- Columnas de la tabla -->
          <tr>
           <th>DETALLES DE LOS INSUMOS O SERVICIOS SOLICITADOS (INCLUIR NOMBRE DEL EVENTO)</th>
          </tr>
        </thead>
        <tbody> <!-- Filas de la tabla -->
            <tr>
                <td class="detalles">C</td>
            </tr>
        </tbody>
      </table>
    </main> <br><br>

    <div class="names"> <!-- Apartado de firmas -->
      <div class="inlineBlock">
        <label>C.</label>
        <input type="text" name="nom_sol" required>
        <label class="soli">SOLICITANTE</label>
      </div>
      <div class="inlineBlock floatRight">
        <label>C.</label>
        <input type="text" name="nom_aut" required>
        <label class="soli">AUTORIZO</label>
      </div>
    </div>  
    
    <!-- <div class="botones">
      <button class="save">Guardar</button>
      <button class="cancel">Cancelar</button>
    </div> -->

</body>

</html>

<?php

$html = ob_get_clean();
require_once "../dompdf/autoload.inc.php";

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$options->setIsHtml5ParserEnabled(true);
$dompdf->setOptions($options);

$dompdf->setPaper('Letter', 'portrait');

$dompdf->loadHTML(utf8_decode($html));

$dompdf->render();

$dompdf->stream("archivo_.pdf", array("Attachment" => false));
?>
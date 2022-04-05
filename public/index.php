<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/tailwind.css" rel="stylesheet">
  </head>

  <body class="mx-24 my-10">

    <form action="index.php" method="POST">
      <h1>
        Inicia tu sesión.
      </h1>
      <label for="txt1">Usuario</label>
      <input class="border-2 border-black" type="" name="t1" required><br>
      <label for="txt1">Password</label>
      <input class="border-2 border-black" type="" name="t2" required><br>
      <input class="border-2" type="submit" name="" value="Ingregar">
    </form>

  </body>

  <?php
  if($_POST){
    session_start();
    require('../conexion/conexion.php');
    $u = $_POST['t1'];
    $p = $_POST['t2'];
    $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $conexion ->prepare("SELECT * FROM sesion WHERE usuario= :u AND pass = :p");
    $query->bindParam(":u", $u);
    $query->bindParam(":p", $p);
    $query->execute();
    $usuario = $query->fetch(PDO::FETCH_ASSOC);
    if($usuario['privilegio']==1){
      $_SESSION['usuario'] = $usuario["usuario"];
      header("location:inventarioUsuario.html");
    } elseif($usuario['privilegio']>=4) {
      header("location:inventarioUsuario.html");
    } elseif($usuario['privilegio']==2) {
      header("location:statusContador.php");
    } elseif($usuario['privilegio']==3) {
      header("location:statusAdmin.php");
    }
  }
  ?>
</html>
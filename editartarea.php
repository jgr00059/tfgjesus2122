<?php
    require 'bbdd.php';

    $id=$_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Editar tarea</h1>

    <?php
        $infotarea=$conexionbbdd->prepare("SELECT * FROM tareas WHERE idtarea='$id'");
        $infotarea->execute();
        $inforesult=$infotarea->get_result();
        $resultadoinfo=$inforesult->fetch_array();
    ?>

    <form action="modificartarea.php" method="POST" id="formularioeditartarea">
        <input type="text" name="titulo" id="titulo" placeholder="Titulo" value="<?php echo $resultadoinfo['titulo'] ?>">
        <input type="text" name="descripcion" id="descripion" placeholder="descripcion" value="<?php echo $resultadoinfo['descripcion'] ?>">
        <input type="datetime-local" name="fechainicio" id="fechainicio" placeholder="Fecha de inicio" value="<?php echo $resultadoinfo['fechainicio'] ?>">
        <input type="datetime-local" name="fechafin" id="fechafin" placeholder="Fecha de fin" value="<?php echo $resultadoinfo['fechafin'] ?>">
        <a href="modificartarea.php?id=<?php echo $id;?>">
            <input type="submit" value="Enviar">
        </a>
        <a href="usermain.php">
            <input type="button" value="Cancelar">
        </a>
    </form>
</body>
</html>
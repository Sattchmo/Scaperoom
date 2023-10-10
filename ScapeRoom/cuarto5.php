<?php 
    if (count($_POST) == 0){
        $respuesta = "vfv";
    } else {
        $respuesta = $_POST['hiddenRespuesta'];
        if ($respuesta == ($_POST['pregunta1'].$_POST['pregunta2'].$_POST['pregunta3'])) {
            header('Location: cuarto6.php');
            exit();
        }
    }
?>

<html>
<head>
    <title>Cuarto 5</title>
</head>
    <body style="background-image: url('img/louvreMonaR5.jpg'); background-size: 1575px 750px; background-repeat: no-repeat;">
    <h1 align="center" style="background-color:white; margin-left:650px; margin-right:650px;">Cuarto 5</h1>
    <p align="center" style="background-color:white; margin-left:500px; margin-right:500px;">1ra pregunta: ¿El Museo del Louvre fue construido originalmente como una fortaleza?</p>
    <p align="center" style="background-color:white; margin-left:500px; margin-right:500px;">2da pregunta: ¿Ha estado La Mona Lisa siempre expuesta en el Louvre?</p>
    <p align="center" style="background-color:white; margin-left:500px; margin-right:500px;">3ra pregunta: ¿El Louvre cubre 15 acres de area?</p>
    <form align="center" method="post">
        <input type="hidden" name="hiddenRespuesta" value="<?php echo $respuesta?>"/>
        <input type="text" name="pregunta1" placeholder="Pregunta 1 (v/f)" autocomplete="off">
        <input type="text" name="pregunta2" placeholder="Pregunta 2 (v/f)" autocomplete="off">
        <input type="text" name="pregunta3" placeholder="Pregunta 3 (v/f)" autocomplete="off">
        <input type="submit" value="responder"/>
    </form>

    </body>
</html>
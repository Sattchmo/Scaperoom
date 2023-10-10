<?php 
    session_start();

    if (count($_POST) == 0){
        $_SESSION['intentos'] = 3;
    } else {
        $respuesta = $_POST['respuesta'];
        if ($respuesta == 26) {
            header('Location: enhorabuena.php');
            exit();
        } else {
            $_SESSION['intentos']--;
            if ($_SESSION['intentos'] == 0) {
                header('Location: notBigSurprise.php');
                exit();
            }
        }
    }
?>

<html>
<head>
    <title>Cuarto Final</title>
</head>
    <body style="background-image: url('img/louvreFinalR6.jpg'); background-size: 1575px 750px; background-repeat: no-repeat;">
    <h1 align="center" style="background-color:white; margin-left:650px; margin-right:650px;">Cuarto Final</h1>
    <p align="center" style="background-color:white; margin-left:500px; margin-right:500px;">Esta es tu prueba final, cuenta todas las "caras" que puedes ver en la habitacion</p>
    <form align="center" method="post">
        <input type="number" name="respuesta" placeholder="Tu respuesta">
        <input type="submit" value="Responder"/>
    </form>

    <?php
    if(isset($_POST['respuesta'])) {
        if($_SESSION['intentos'] > 0) {
            echo "<p align='center' style='background-color:white; margin-left:600px; margin-right:600px;'>Incorrecto. Te quedan " . $_SESSION['intentos'] . " intentos.</p>";
        } else {
            echo "<p align='center' style='background-color:white; margin-left:600px; margin-right:600px;'>Has agotado tus intentos.</p>";
        }
    }
    ?>

    </body>

</html>
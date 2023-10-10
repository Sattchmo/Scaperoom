<?php

$solucion = 895;
$solucionSecreta = 777;

// checkea si esta el usuario trata de meter una combinacion
if(isset($_POST['combinacion'])) {
    $combinacion = $_POST['combinacion'];

    // Checkea si la combinacion es correcta
    if($combinacion == $solucion) {
        // mover al proximo cuarto
        header('Location: cuarto2.php');
        exit();
    } else if ($combinacion == $solucionSecreta) {
        //mover al cuarto 3
        header('Location: cuarto3.php');
        exit();
    } else {
        // mensaje combinacion fallida
        $message = "No es correcto, intente de nuevo";
    }
}

?>

<html>
<head>
    <title>Cuarto 1</title>
</head>
<body style="background-image: url('img/louvreInsideR1.jpg'); background-size: 1575px 750px; background-repeat: no-repeat;">
    <h1 align="center" style="background-color:white; margin-left:650px; margin-right:650px;">Cuarto 1</h1>
    
    <p align="center" style="font-size:20px; background-color:white; margin-left:500px; margin-right:500px;">
        Encuentra la combinacion correcta para abrir la puerta</p>
    <p align="center" style="font-size:25px; background-color:white; margin-left:500px; margin-right:500px;">
        La respuesta esta mas cerca de lo que piensas</p>

    <?php if(isset($message)) echo "<p align='center' style='background-color:white; margin-left:600px; margin-right:600px;'>$message</p>"; ?>

    <form method="post" align="center">
        <input type="text" name="combinacion" autocomplete="off">
        <input type="submit" value="responder"><br>
        <input type="button" value="pista" style="position: absolute; bottom:50;" onclick="mostrarPista()">
    </form>
    <br><br><br>
    <p id="pista" align="center" style="font-size:20px; background-color:white; margin-left:650px; margin-right:650px; display:none;">
            pinturas a la izquierda, derecha y los bancos. <br> Eso o tener muy buena suerte
    </p>

</body>

<script>
    function mostrarPista() {
        var pista = document.getElementById('pista');
        pista.style.display = (pista.style.display === 'none' || pista.style.display === '') ? 'block' : 'none';
    }
</script>

</html>

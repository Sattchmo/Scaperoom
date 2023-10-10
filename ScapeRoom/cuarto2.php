<html>
<head>
    <title>Cuarto 2</title>
</head>
<body style="background-image: url('img/louvreStatuesR2.jpg'); background-size: 1575px 750px; background-repeat: no-repeat;">
    <h1 align="center" style="background-color:white; margin-left:650px; margin-right:650px;">Cuarto 2</h1>

    <p align="center" style="font-size:20px; background-color:white; margin-left:500px; margin-right:500px;">
        ¿Qué es lo que no está ni dentro ni fuera de la casa, pero que es necesario para cualquier hogar? (museos tambien)
    </p>
    <form method="post" align="center">
        <div style="background-color:white; margin-right:700px; margin-left:700px;">
            <input type="radio" name="respuesta" value="1"> Pinturas <br>
            <input type="radio" name="respuesta" value="2"> Escaleras <br>
            <input type="radio" name="respuesta" value="3"> Estatuas <br>
            <input type="radio" name="respuesta" value="4"> Ventanas <br>
            <input type="radio" name="respuesta" value="5"> Refrigerador <br>
        </div><br>
        <input type="submit" value="responder">
        <input type="button" value="pista" style="position: absolute; bottom:50; left:750;" onclick="mostrarPista()">
    </form>

    <p id="pista" align="center" style="font-size:20px; background-color:white; margin-left:650px; margin-right:650px; display:none;">
            Convendria mirar hacia arriba
    </p

    <?php
    if(isset($_POST['respuesta'])) {
        $respuesta = $_POST['respuesta'];

        // revisa si la respuesta es correcta
        if($respuesta == 4) {
            // mover al cuarto siguiente
            header('Location: cuarto4.php');
            exit();
        } else {
            echo "<p align='center' style='background-color:white; margin-left:600px; margin-right:600px;'>Respuesta incorrecta, intentalo de nuevo</p>";
        }
    }
    ?>

</body>

<script>
    function mostrarPista() {
        var pista = document.getElementById('pista');
        pista.style.display = (pista.style.display === 'none' || pista.style.display === '') ? 'block' : 'none';
    }
</script>

</html>

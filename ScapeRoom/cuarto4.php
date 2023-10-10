<?php 
    if (count($_POST) == 0){
        $respuesta = "auditoriumlouvregroupesdenon";
    } else {
        $respuesta = $_POST['hiddenRespuesta'];
        if ($respuesta == ($_POST['texto1'] . $_POST['texto2'] . $_POST['texto3'] . $_POST['texto4'])) {
            header('Location: cuarto6.php');
            exit();
        }
    }
?>

<html>
<head>
    <title>Cuarto 4</title>
</head>
<body style="background-image: url('img/louvreStairsR4.jpg'); background-size: 1575px 750px; background-repeat: no-repeat;">
    <h1 align="center" style="background-color:white; margin-left:650px; margin-right:650px;">Cuarto 4</h1>
    <p align="center" style="background-color:white; margin-left:500px; margin-right:500px;">Al entrar notas lo que parecia a la distancia ser otras personas, al acercarte te das cuenta que las victimas pasadas de quien te ha puesto en esta situacion, pareces estar cerca del final</p>
    <p align="center" style="background-color:white; margin-left:450px; margin-right:450px;">Cuando hablas con una de ellas, te dice que no sabe que hacer para poder ayudarte a progresar pero que ya habia pasado tanto tiempo ahi que pensaba que se volveria loco porque "las palabras en las paredes le hablan"</p>
    <form align="center" method="post">
        <input type="hidden" name="hiddenRespuesta" value="<?php echo $respuesta?>"/>
        <input type="text" name="texto1" autocomplete="off">
        <input type="text" name="texto2" autocomplete="off">
        <input type="text" name="texto3" autocomplete="off">
        <input type="text" name="texto4" autocomplete="off">
        <input type="submit" value="responder"/>
        <input type="button" value="formato" style="position: absolute; bottom:50; left:750;" onclick="mostrarformato()">
    </form>

    <p id="formato" align="center" style="font-size:12px; background-color:white; margin-left:650px; margin-right:650px; display:none;">
            ultima palabra, todo en minuscula.
    </p>
</body>

<script>
    function mostrarformato() {
        var formato = document.getElementById('formato');
        formato.style.display = (formato.style.display === 'none' || formato.style.display === '') ? 'block' : 'none';
    }
</script>s

</html>

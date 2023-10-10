<?php 
        var_export($_POST);

        if (count($_POST)==0){
            $respuesta=122;
        }else {
            $respuesta=$_POST['hiddenRespuesta'];
            if ($respuesta==($_POST['palabra1'].$_POST['palabra2'].$_POST['palabra3'])){
                header('Location: cuarto5.php');
                exit();
            }
        }

    ?>

<html>
<head>
    <title>Cuarto 3</title>
</head>
    <body style="background-image: url('img/louvreInsideR3.jpg'); background-size: 1575px 750px; background-repeat: no-repeat;">
        <h1 align="center" style="background-color:white; margin-left:650px; margin-right:650px;">Cuarto 3</h1>
        <p align="center" style="background-color:white; margin-left:500px; margin-right:500px;"> que suerte haz tenido, gracias a eso, aqui tienes una facil: que pintura es la mas famosa de este museo?</p>
        <form align= "center" method="post">
        <input type="hidden" name="hiddenRespuesta" value="<?php echo $respuesta?>"/>
            <select name="palabra1">
                <option value="0">El</option>
                <option value="1">La</option>
                <option value="2">Nuestra</option>
            </select>
            <select name="palabra2">
                <option value="0">señora</option>
                <option value="1">nacimiento</option>
                <option value="2">Mona</option>
            </select>
            <select name="palabra3">
                <option value="0">de Venus</option>
                <option value="1">del Carmen</option>
                <option value="2">Lisa</option>
            </select>
        <input type="submit" value="responder"/>
        </form>
    </body>
</html>
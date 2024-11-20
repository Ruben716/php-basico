<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div>
        <h6>Formulario</h6>
        <hr>
        <form method="POST" action="">
            <label for="numero">Ingresar numero</label>
            <input type="number" name="numero" id="numero">
            <button type="submit">Enviar</button>
        </form>

        <hr>
        <?php


        if (isset($_GET["precio"])) {
            echo $_GET["precio"];
        }
        if (isset($_GET["fruta"])) {
            echo $_GET["fruta"];
        }


        if (isset($_POST["numero"])) {
            echo "el numero es " . $_POST["numero"];
        }








        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
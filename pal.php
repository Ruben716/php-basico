<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Bulma</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
</head>

<body>
    <!-- Sección de presentación -->
    <section class="section">
        <div class="container">
            <h1 class="title">
                Ruben daniel 
            </h1>

        </div>
    </section>
    <h3>php basico
        <ul>
            <ol>1. operadores con String </ol>
            <ol>2. operadores aritmeticos</ol>
            <ol>3. tipos de datos</ol>
            <ol>4. operadores con array </ol>
            <ol>5. condicionales </ol>
            <ol>6. Ciclos </ol>
        </ul>
    </h3>
    <!-- Sección del formulario -->
    <section class="section">
        <div class="container">
            <h2 class="title">Formulario</h2>
            <form method="POST" action="">
                <div class="field">
                    <label class="label" for="numero">Ingresar número</label>
                    <div class="control">
                        <input class="input is-link" type="number" name="numero" id="numero" placeholder="Escribe un número">

                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <button class="button is-white">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- PHP para mostrar los datos -->
    <section class="section">
        <div class="container">
            <?php

            include "./OperadoresLogicos.php";

            if (isset($_POST["numero"])) {
                echo "<p class='notification is-success'>El número ingresado es: " . htmlspecialchars($_POST["numero"]) . "</p>";
            }
            if (isset($_GET["precio"])) {
                echo "<p class='notification is-info'>Precio: " . htmlspecialchars($_GET["precio"]) . "</p>";
            }
            if (isset($_GET["fruta"])) {
                echo "<p class='notification is-warning'>Fruta: " . htmlspecialchars($_GET["fruta"]) . "</p>";
            }



            $ol = new OperadoresLogicos ();
            $ol->saludar();
            $ol->Operadores();
            











            ?>
        </div>
    </section>
</body>

</html>
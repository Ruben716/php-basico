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

            include "./operacionesString.php";
            include "./operadoresaritmeticos.php";
            include "./tipostados.php";
            include "./operadoresconarray.php";
            include "./condisionales.php";
            include "./ciclos.php";
           

          

            if(isset($_POST["numero"])){
                $opcion = $_POST["numero"];
                switch($opcion){
                case 1:
                    $lo = new operacionesString();
                    
                    echo "</br>";
                    echo "1. operadores con String";
                    echo "<p class='notification is-success'>El número ingresado es: ".$lo->funcionesString() . htmlspecialchars($_POST["numero"]) . "</p>";
                    echo "</br>";
                    
                    
                    break;

                case 2:
                    $ll = new operacionesAritmeticos();
                    $ll->funcionesaridmeticas();
                    echo "</br>";
                    echo "2. operadores aritmeticos";
                    echo"<p class='notification is-success'>El número ingresado es: ".$lo->funcionesString() . htmlspecialchars($_POST["numero"]) . "</p>";
                    echo "</br>";
                    break;

                case 3:
                    $lll = new tiposdatos();
                    
                    echo "</br>";
                    echo "3. tipos de datos";
                    echo"<p class='notification is-success'>El número ingresado es: ".$lll->tipodatos() . htmlspecialchars($_POST["numero"]) . "</p>";
                    echo "</br>";
                    break;
                    
                case 4:
                    $llll = new operadoresconarray();
                    
                    echo "</br>";
                    echo "4. operadores con array";
                    echo"<p class='notification is-success'>El número ingresado es: ".$llll->oparray() . htmlspecialchars($_POST["numero"]) . "</p>";
                    echo "</br>";
                    break;
                    
                case 5:
                    $lllll = new condisionales();
                    
                    echo "</br>";
                    echo "5. condicionales";
                    echo"<p class='notification is-success'>El número ingresado es: ".$lllll->loscondicionales() . htmlspecialchars($_POST["numero"]) . "</p>";
                    echo "</br>";
                    break;
                    
                case 6:
                    $llllll = new ciclos();
                    
                    echo "</br>";
                    echo "6. Ciclos";
                    echo "<p class='notification is-success'>El número ingresado es: ".$llllll->siclo() . htmlspecialchars($_POST["numero"]) . "</p>";
                    echo "</br>";
                    break;
                    
                

                default:
                
                    echo "</br>";
                    echo "<p class='notification is-success'>El numero que ingreso no es correcto " . htmlspecialchars($_POST["numero"]) . "</p>";;
                    echo "</br>";
                    break;
            }  
        }



         
            
            











            ?>
        </div>
    </section>
</body>

</html>
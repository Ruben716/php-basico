<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Ruben Daniel </p>
    <!--etiquetas de php--> 
    
    <?php
    echo "imprimendo de PHP </br> ";
    $dato1 = 1;
    $dato2 = 2;


    $resultado = $dato1 + $dato2;

    echo "el resultado es". $resultado."</br>" ;

    echo "incremento: ". $dato1+1 ."</br>";

    if ($dato1 == 1) {
        echo "el numero es igual </br>";
    }elseif($dato1==100){
        echo "el numero no es igial a 100 </br>";
    }
    
    //

    
// 1. Entero (Integer)
$entero = 10;

// 2. Flotante (Float)
$flotante = 3.14;

// 3. Cadena de texto (String)
$cadena = "Hola, Mundo!";

// 4. Booleano (Boolean)
$esActivo = true;
$esValido = false;

// 5. Arreglo (Array)
$colores = array("rojo", "verde", "azul");  // Arreglo indexado
$persona = array("nombre" => "Juan", "edad" => 25);  // Arreglo asociativo

// 6. Objeto (Object)
class Persona {
    public $nombre;
    public $edad;

    function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
}

$juan = new Persona("Juan", 25);

// 7. Nulo (NULL)
$variableNula = null;

// Mostrar los valores
echo "Entero: $entero<br>";
echo "Flotante: $flotante<br>";
echo "Cadena: $cadena<br>";
echo "Es activo: " . ($esActivo ? "true" : "false") . "<br>";
echo "Es válido: " . ($esValido ? "true" : "false") . "<br>";
echo "Colores: " . implode(", ", $colores) . "<br>";
echo "Persona: Nombre - $juan->nombre, Edad - $juan->edad<br>";
echo "Variable Nula: " . ($variableNula ?? "null") . "<br>";




echo "Colores: ";
for ($i = 0; $i < count($colores); $i++) {
    echo $colores[$i];
    if ($i < count($colores) - 1) echo ", ";  
}
echo "<br>";


foreach($persona as $item){
    echo $item."<br>";
};



// Ruben daniel nuñez
$numeros = range(1, 12);

foreach ($numeros as $numero) {
    echo "Tabla del $numero:<br>";

    foreach ($numeros as $i) {
        echo "$numero x $i = " . ($numero * $i) . "<br>";
    }

    echo "<br>"; 
}





?>






    
</body>
</html>
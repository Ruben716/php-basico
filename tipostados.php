<?php

class tiposdatos{



    public function tipodatos() {
        echo <<<'EOT'
        <pre>
            int: Representa números enteros.
            float: Representa números con decimales.
            string: Representa cadenas de texto.
            bool: Representa valores de verdad (true o false).
            array: Representa una colección de valores.
            object: Representa instancias de clases.
            null: Representa una variable sin valor.
            resource: Representa recursos externos, como conexiones a bases de datos.
        </pre>
        EOT;

}
}
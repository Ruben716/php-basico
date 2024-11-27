<?php

include "./padre.php";

class operacionesString extends padre{
    public function llamarpadre(){
        $this->saludo();
    } 
    
    
    public function funcionesString() { 
        echo <<<'EOT'
        <pre>
            strlen(): Devuelve la longitud de una cadena.
            strtolower(): Convierte una cadena a minúsculas.
            strtoupper(): Convierte una cadena a mayúsculas.
            substr(): Extrae una parte de una cadena según la posición y longitud especificadas.
            strpos(): Encuentra la posición de la primera aparición de una subcadena en una cadena.
            str_replace(): Reemplaza todas las apariciones de una subcadena por otra en una cadena.
            trim(): Elimina los espacios en blanco (u otros caracteres) del inicio y final de una cadena.
            explode(): Divide una cadena en un array utilizando un delimitador.
            implode(): Une elementos de un array en una cadena con un delimitador especificado.
            strrev(): Invierte el orden de los caracteres de una cadena.

        </pre>
        EOT;
    

}
}

<?php

class operadoresconarray {

    public function oparray() { 
        echo <<<'EOT'
        <pre>
            array_push(): Agrega uno o más elementos al final de un array.
            array_pop(): Elimina y devuelve el último elemento de un array.
            array_shift(): Elimina y devuelve el primer elemento de un array.
            array_unshift(): Agrega uno o más elementos al inicio de un array.
            array_merge(): Combina dos o más arrays en uno solo.
            array_slice(): Extrae una parte de un array desde una posición específica.
            array_splice(): Elimina o reemplaza elementos de un array en una posición determinada.
            array_search(): Busca un valor en un array y devuelve su clave si lo encuentra.
            in_array(): Verifica si un valor existe dentro de un array.
            array_keys(): Devuelve todas las claves de un array.
        </pre>
        EOT;
    

}
}

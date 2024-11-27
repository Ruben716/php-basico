<?php

class condisionales {

    public function loscondicionales() { 
        echo <<<'EOT'
        <pre>
           if: Ejecuta un bloque de código si se cumple una condición.
            else: Ejecuta un bloque alternativo si la condición no se cumple.
            elseif: Agrega condiciones adicionales a un bloque if.
            switch: Evalúa una expresión y ejecuta el bloque correspondiente a su valor.
            ?: (ternario): Evalúa una expresión en una línea, retornando un valor si es verdadero y otro si es falso.
        </pre>
        EOT;
    

}


}

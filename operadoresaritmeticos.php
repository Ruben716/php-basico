<?php

class operacionesaritmeticos{
    

    public function funcionesaridmeticas(){
        echo <<<'EOT'
        <pre>
            +: Suma dos valores.
            -: Resta un valor de otro.
            *: Multiplica dos valores.
            /: Divide un valor entre otro.
            %: Calcula el módulo (resto de una división).
            **: Realiza la potenciación.
            ++: Incrementa en 1 el valor de una variable.
            --: Decrementa en 1 el valor de una variable.
        </pre>
        EOT;
    }
}

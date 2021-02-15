<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprint 6</title>
    <style>
    body {background-color: silver;}
        .contenedor {width: 1000px; margin: 0 auto; padding: 20px; background-color: #fff; }
        pre { border: 1px solid silver; padding: 1rem; background-color: #f1f1f1; width: 50%}
    </style>
</head>
<body>
    <div class="contenedor">
        <h1>Sprint 6</h1>
        <h2>Nivell 1</h2>
        <h3>- Exercici 1</h3>
        <p>Programa la funció "resta" que, donats dos paràmetres ens retorni la resta dels dos números.</p>

        <?php
            function resta($valor1, $valor2) {

                $resultadoResta = $valor1 - $valor2;
                echo $resultadoResta;

            }
            echo "<pre>";
            resta(42,34);
            echo "</pre>";
         ?>


        <h3>- Exercici 2</h3>
        <p>Programa una lògica que, donat un número qualsevol(per exemple,la teva edat) ens digui si és parell o imparell mitjançant un missatge per pantalla.</p>
        <?php
            $edad =11;
            $operacion = $edad % 2;
            if($edad == 0) {
                echo "<pre>Ummm, lo damos como bueno, $edad es par</pre>";
            } else if ($operacion == 0 ){
                echo "<pre>Has puesto: $edad y por tanto tu edad es par</pre>" ;
            }
            else {
                echo "<pre>Has puesto: $edad y por tanto es impar</pre>";
            }

        ?>

        <h3>- Exercici 3</h3>
        <p>Agafa la lògica de l'exercici 2 i encapsulala en una funció de nom parell_o_imparell. Invoca aquesta funció per a comprovar que funciona correctament.</p>

        <?php
            function parell_o_imparell($edad) {

                $operacion = $edad % 2;
                if($edad == 0) {
                    echo "<pre>Ummm, lo damos como bueno, $edad es par</pre>";
                } else if ($operacion == 0 ){
                    echo "<pre>Has puesto: $edad y por tanto tu edad es par</pre>" ;
                }
                else {
                    echo "<pre>Has puesto: $edad y por tanto es impar</pre>";
                }
            }

            echo parell_o_imparell(25);

         ?>


        <h3>- Exercici 4</h3>
        <p>Programa un bucle que compti fins a 10, mostrant cada  número per pantalla.</p>


            <?php
                echo "<pre>";
                for ($i=1; $i <= 10; $i++) {
                    echo  $i . "<br>";
                }
                echo "</pre>";
             ?>


        <h2>Nivell 2</h2>
        <h3>- Exercici 1</h3>
        <p>Per jugar a "l'amagatall"  se'ns ha demanat un programa que compti fins a 10. Però la persona que comptarà és una mica tramposa y ho farà comptant de dos en dos. Crea una funció que compti fins a 10, de 2 en 2, mostrant cada número del compte per pantalla.</p>


            <?php
                echo "<pre>";
                for ($i=0; $i <= 10; $i++) {

                    echo  $i . "<br>";
                    $i++;
                }
                echo "</pre>";
             ?>




        <h3>- Exercici 2</h3>
        <p>Imagina't que volem que conti fins a un número diferent de 10. Programa la funció per a que el final del compte estigui parametritzat.</p>


            <?php

                function miCuenta( $numeroTotal ) {
                    echo "<pre>";
                    for ($i=0; $i <= $numeroTotal; $i++) {

                        echo  $i . "<br>";
                        $i++;
                    }
                    echo "</pre>";
                }

                echo micuenta(22);
             ?>


        <h3>- Exercici 3</h3>
        <p>Per a prevenir oblits al utilitzar la nostra meravellosa funció "amagatall" establirem un paràmetre per defecte a 10 en la funció que s'encarrega de fer aquest compte. </p>
        <?php

            function miCuentaControlada( $numeroTotal = 10 ) {
                echo "<pre>";
                for ($i=1; $i <= $numeroTotal; $i++) {

                    echo  $i . "<br>";

                }
                echo "</pre>";
            }

            echo miCuentaControlada(22);
            echo miCuentaControlada();
         ?>

        <h2>Nivell 3</h2>
        <h3>- Exercici 1</h3>
        <p>Ens han demanat un llistat amb tots els anys on es van produir jocs olímpics desde 1960(Roma) inclós fins al 2016(Río de Janeiro,també inclós). Programa un bucle que mostri per pantalla els anys olímpics dins de l'interval esmentat.</p>

            <?php

                    echo "<pre>";
                    for ($i=1960; $i <= 2016; $i++) {
                        echo  $i . "<br>";
                        $i =$i+3;
                    }
                    echo "</pre>";
             ?>


        <h3>- Exercici 2</h3>
        <p>Imagina que som a una botiga on es ven:</p>

        <ul>
            <li>Xocolata: 1 euro</li>
            <li>Xiclets: 0.50 euros</li>
            <li>Carmels: 1.50 euros</li>
        </ul>
        <p>Implementa un programa que permeti afegir càlculs a un total de compres d'aquest tipus. Per exemple, que si comprem:</p>

        <p>2 xocolates, 1 de xiclets i 1 de carmels, tinguem un programa que permeti anar afegint els subtotals a un total, tal que així,</p>

        <p>funció(2 xocolates) + funció(1 de xiclets) + funció(1 de carmels) = 2+0.5+1.5
Sent per tant el total, 4.</p>

            <?php
                // Inicializamos las variables
                $xocolates = 1;
                $xiclets = 0.5;
                $caramels = 1.5;

                //Xoxolate
                function xocolate( $cantidad_xoco ) {
                    //La vvariable pasa a ser global
                    global $xocolates;
                    $total_xoco = $cantidad_xoco * $xocolates;
                    return $total_xoco;
                }
                //echo xocolate(2);

                // xiclets
                function xiclets( $cantidad_xiclets ) {
                    //La vvariable pasa a ser global
                    global $xiclets;
                    $total_xiclets = $cantidad_xiclets * $xiclets;
                    return $total_xiclets;
                }
                //echo xiclets(1);

                // carmels
                function carmels( $cantidad_carmels ) {
                    //La vvariable pasa a ser global
                    global $caramels;
                    $total_carmels = $cantidad_carmels * $caramels;
                    return $total_carmels;
                }
                //echo carmels(1);

                // total
                function total( $t_xoco, $t_xiclets, $t_carmels ) {
                    $precio_total = xocolate($t_xoco) + xiclets($t_xiclets) + carmels($t_carmels) ;
                    return $precio_total;
                }
                echo "<pre>" . total( 2,1,1 ) . "</pre>";
              ?>

        <h3>- Exercici 2</h3>
        <p>La criba d'Eratóstenes és un algoritme pensat per a trobar nombres primers dins d'un interval donat. Basats en l'informació de l'enllaç adjunt, implementa la criba d'Eratóstenes dins d'una funció, de tal forma que poguem invocar la funció per a un número concret.</p>


            <?php
            //Criba de Eratóstenes

            //Total de números a evaluar
            $total = 30;

            for( $i=2; $i<$total; $i++ ) {
              $numeros[$i]=true;
            }
            //Hacer el número 2 el primer número primo
            $numeros[2]=true;

            //Recorrer los números y para cada uno
            for ($n=2;$n<$total;$n++)
            {
              //Si es primo recorrer los múltiplos y marcarlos como no primo
              if ($numeros[$n])
              {

                for ($i=$n*$n;$i<$total;$i+=$n)
                {

                   $numeros[$i] = false;

                }
              }
            }

            //Muestro la lista de los primos
            echo "Número primos: ";
            for ($n = 2; $n < $total; $n++)
            {
              if ($numeros[$n])
              {
                echo $n." ";
              }
            }
        ?>

            <p>Fin </p>
    </div>
</body>
</html>

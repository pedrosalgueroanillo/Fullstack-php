<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {background-color: silver;}
        .contenedor {width: 1000px; margin: 0 auto; padding: 20px; background-color: #fff; }
        pre { border: 1px solid silver; padding: 1rem; background-color: #f1f1f1; width: 50%}
    </style>
</head>
<body>
    <div class="contenedor">
        <h1>Sprint 5</h1>
        <h2>Nivell 1</h2>
        <h3>- Exercici 1</h3>
        <p>Defineix una variable de cada tipus: integer, double, string i boolean. Després, imprimeix-les per pantalla.</p>

           <?php
                $variable_integer   = 12;           // variable tipo entero
                $variable_double    = 12.28;        // variable tipo double
                $variable_string    = "Ole";        // variable tipo string
                $variable_boolean   = true;         // variable tipo boleeana

                // Imprimimos las variables
                echo "<pre>";
                    echo $variable_integer . "<br>";
                    echo $variable_double . "<br>";
                    echo $variable_string . "<br>";
                    echo $variable_boolean . "<br>";
                echo "</pre>";
            ?>

        <h3>- Exercici 2</h3>
        <p>Crea una altra variable string. Després:</p>
        <ul>
            <li>Imprimeix per pantalla el tamany(longitud) del dos strings.</li>
            <li>Imprimeix per pantalla el dos strings però en ordre invers de caràcters.</li>
            <li>Imprimeix la concatenació dels dos strings. </li>
        </ul>
            <?php
                // Creamos una nueva variable
                    $nueva_variable = "Tijuana";

                // Imprimimos la longitud de los dos stings
                    $texto_1 = strlen($variable_string);
                    $ttexto_2 = strlen($nueva_variable);
                    $longitud_total_strings = $texto_1 + $ttexto_2;
                    echo "<pre>";
                        echo $longitud_total_strings;

                    // Imprimimos los dos strings en orden inverso
                        echo '<br>';
                        $orden_inerso = $variable_string . " " . $nueva_variable;
                        echo strrev ($orden_inerso);

                    // Concatenamos los dos strings
                        echo "<br>";
                        echo $variable_string . " " . $nueva_variable;
                    echo "</pre>";



            ?>

        <h3>- Exercici 3</h3>

        <p>Crea una constant que inclogui el teu nom i imprimeix-la per pantalla. </p>

            <?php
            // Definimos constante NOMBRE
                define ( "NOMBRE" , "Pedro Salguero Anillo" );
                echo "<pre>";
                    echo NOMBRE;
                echo "</pre>";
            ?>



        <h2>Nivell 2</h2>
        <h3>- Exercici 1</h3>
        <p>Crea dos arrays, un que inclogui 5 integers, i un altre que inclogui 3 integers.</p>

            <?php
            // Creamos dos arrays
                $array_01 = array( 1, 2, 3, 4, 5 );
                $array_02 = array( 22, 33, 44 );
            ?>
        <h3>- Exercici 2</h3>
        <p>Afegeix un valor més a l'array que conté 3 integers.</p>
            <?php
            // Añadimos un valor más
            $array_02[] = 11;

            //otro métddo
            //array_push($array_02, 565);

            //Comprovación
            //print_r($array_02);
            ?>

        <h3>- Exercici 3</h3>
        <p>Mescla els dos arrays i imprimeix el tamany de l'array resultant per pantalla.</p>

        <?php
        //unimos los dos arrays
        $unir_array = array_merge($array_01, $array_02);
        //var_export($unir_array);
        //mezclamos los dos arrays
        shuffle($unir_array);

        //Imprimimos por pantalla
        $total_array = count($unir_array);
        echo "<pre>";
            echo $total_array;
        echo "</pre>";

        // otras formas de contar los elementos
        //$total_array2 = sizeof($unir_array);
        //echo $total_array2;

        // otra forma
        //print_r(count($unir_array));




        // No funciona. Da un true. Consular a Nancy
        //$mezclar_arrays = shuffle($unir_array);
        //var_export($mezclar_arrays);
         ?>

        <h2>Nivell 3</h2>
        <h3>- Exercici 1</h3>

        <p>Imprimeix per pantalla(valor a valor) l'array resultant del nivell anterior.</p>
        <?php
            //imprimimos cada valor del array
            echo "<pre>";
                foreach ($unir_array as $key) {

                    echo "<br>";
                    echo $key;
                }
            echo "</pre>";




        ?>

        <h3>- Exercici 2</h3>

        <p>Escriure un programa PHP que realitzi lo següent: </p>

        <p>declarar dues variables X e Y de tipus int, dues variables N i M de tipous double i assigna a cada una un valor. A continuació, mostra per pantalla, per a X e Y:</p>
        <ul>
            <li>El valor de cada variable
            <li>La suma</li>
            <li>La resta </li>
            <li>El producte </li>
            <li>La divisió </li>
            <li>El mòdul</li>
        </ul>

            <?php
            // declaramos variable "x" e "y"
            $X = 2;
            $Y = 4;
            // declaramos variable "N" e "M"
            $N = 3.33;
            $M = 5.55;

            // mostramos en pantalla "X" e "Y"
            echo "<pre>";
                echo $X;
                echo "<br>";
                echo $Y;
            echo "</pre>";
            // mostramos en pantalla la suma
            echo "<pre>";
                echo $X + $Y;
            echo "</pre>";
            // mostramos en pantalla la resta
            echo "<pre>";
            echo $X - $Y;
            echo "</pre>";
            // mostramos en pantalla el producto
            echo "<pre>";
            echo $X * $Y;
            echo "</pre>";
            // mostramos en pantalla la división
            echo "<pre>";
            echo $X / $Y;
            echo "</pre>";
            // mostramos en pantalla el módulo
            echo "<pre>";
            echo $X % $Y;
            echo "</pre>";
            ?>
            <li>
                per a N i M, lo mateix.
            </li>

            <?php
            // mostramos en pantalla "X" e "Y"
            echo "<pre>";
                echo $N;
                echo "<br>";
                echo $M;
            echo "</pre>";

            // mostramos en pantalla la suma
            echo "<pre>";
                echo $N + $M;
            echo "</pre>";
            // mostramos en pantalla la resta
            echo "<pre>";
            echo $N - $M;
            echo "</pre>";
            // mostramos en pantalla el producto
            echo "<pre>";
            echo $N * $M;
            echo "</pre>";
            // mostramos en pantalla la división
            echo "<pre>";
            echo $N / $M;
            echo "</pre>";
            // mostramos en pantalla el módulo
            echo "<pre>";
            echo $N % $M;
            echo "</pre>";
            ?>
            <p>I per a totes les variables(X,Y,N,M):</p>
            <ul>
                <li>El doble de cada variable</li>
                <li>La suma de totes les variables</li>
                <li>El producte de totes les variables</li>
            </ul>
            <?php
               // mostramos el doble de cada variable
                echo "<pre>";
                    echo ($X * 2) . "<br>";
                    ecHo ($Y * 2) . "<br>";
                    echo ($N * 2) . "<br>";
                    echo ($M * 2) . "<br>";
                echo "</pre>";

                // mostramos la suma de todas las variables
                echo "<pre>";
                    echo $X + $Y + $N + $M;
                echo "</pre>";

                // mostramos el producto de todas las variables
                echo "<pre>";
                    echo $X * $Y * $N * $M;
                echo "</pre>";

            ?>
    </div>
</body>
</html>

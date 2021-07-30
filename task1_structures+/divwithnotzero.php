<html> 
    <head>
        <title>
            <?php
                echo "Estucturas selectivas";
            ?>
        </title>
    </head>
    <body>
        <?php
            
            echo "<h1>Ejercicio # 5</h1>";
            
            echo "<h3>Lea dos números, calcule el cociente de dividir el primero por el segundo. Imprima el cociente. Pero 
            recuerde que antes de hacer la división debe evaluar que el divisor no sea igual a cero (0). Porque en este 
            caso debe imprimir 'la división no es posible'.</h3><br>";

            function doRead () {
                $x = $_POST['x'];
                $y = $_POST['y'];
                if ($y != 0) {
                    $result = $x/$y;
                    echo "<br>Resultado: $result<br>";
                } else {
                    echo "<br>La división no es posible.";
                }
            }
        ?>

        <form action="#" method="post">
        <label>Divisor:</lable>
        <input type="number" name="x"  value="" placeholder="Divisor"/>
        <label>Dividendo:</lable>
        <input type="number" name="y"  value="" placeholder="Dividendo"/>
        <input type="submit" name="button" value="LEER"/>
        </form>

        <?php

            doRead();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>
    </body>
</html>
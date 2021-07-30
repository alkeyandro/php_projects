<!DOCTYPE html>
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
            
            echo "<h1>Ejercicio # 4</h1>";
            
            echo "<h3>Lea dos números X y Y e imprima ambos números sólo si son de diferente signo y distintos de cero.</h3><br>";

            function doRead () {
                $x = $_POST['x'];
                $y = $_POST['y'];
                if ($x != 0 && $y != 0 && $x > 0 && $y < 0 || $x < 0 && $y > 0) {
                    echo "<br>X: $x // Y: $y<br>";
                } else {
                    echo "<br>Ingrese un número positivo y otro negativo!";
                }
            }
        ?>

        <form action="#" method="post">
        <label>Número 1:</lable>
        <input type="number" name="x"  value="" placeholder="x"/>
        <label>Número 2:</lable>
        <input type="number" name="y"  value="" placeholder="y"/>
        <input type="submit" name="button" value="LEER"/>
        </form>

        <?php

            doRead();

            echo "<a href='index.php'><h3>Main</h3></a>";

        ?>
    </body>
</html>
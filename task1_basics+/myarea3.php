<!DOCTYPE html>
<html> 
    <head>
        <title>
            <?php
                echo "MyArea3";
            ?>
        </title>
    </head>
    <body>
        <?php
            
            echo "<h1>MyArea3</h1>";
            
            echo "<h3>El siguiente programa calcula el área de un triángulo rectángulo.</h3><br>";

            function areaTrianguloR () {
                $l1 = $_POST['lado1'];
                $l2 = $_POST['lado2'];
                $resultado = $l1 * $l2 / 2;
                echo "<br>El área del triángulo rectángulo de lados: $l1 y $l2 es: $resultado cm2<br>";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="lado1"  value="" placeholder="Lado 1 del triángulo:"/>
        <input type="text" name="lado2"  value="" placeholder="Lado 2 del triángulo:"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            areaTrianguloR();
        ?>
    </body>
</html>
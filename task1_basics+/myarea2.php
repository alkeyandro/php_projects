<!DOCTYPE html>
<html> 
    <head>
        <title>
            <?php
                echo "MyArea2";
            ?>
        </title>
    </head>
    <body>
        <?php
            
            echo "<h1>MyArea2</h1>";
            
            echo "<h3>El siguiente programa calcula el área de un triángulo equilátero.</h3><br>";

            function areaTrianguloE () {
                $l = $_POST['lado'];
                $h = sqrt(3)/2 * $l;
                $resultado = $l * $h / 2;
                echo "<br>El área del triángulo equilátero de lado: $l es: $resultado<br>";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="lado"  value="" placeholder="Lado del triángulo:"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            areaTrianguloE();
        ?>
    </body>
</html>
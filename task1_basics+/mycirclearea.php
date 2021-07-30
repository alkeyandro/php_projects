<!DOCTYPE html>
<html> 
    <head>
        <title>
            <?php
                echo "MyArea";
            ?>
        </title>
    </head>
    <body>
        <?php
            
            echo "<h1>MyArea!</h1>";
            
            echo "<h3>El siguiente programa calcula el área de un circulo.</h3><br>";

            function areaCirculo () {
                $d = $_POST['diametro'];
                $r = $d / 2;
                $resultado = 3.141619 * $r ** 2;
                echo "<br>El área del círculo de diámetro: $d es de: $resultado<br>";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="diametro"  value="" placeholder="Diámetro del circulo:"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            areaCirculo();
        ?>
    </body>
</html>
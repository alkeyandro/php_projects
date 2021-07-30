<!DOCTYPE html>
<html> 
    <head>
        <title>
            <?php
                echo "Rombo área";
            ?>
        </title>
    </head>
    <body>
        <?php
            
            echo "<h1>Rombo área</h1>";
            
            echo "<h3>El siguiente programa calcula el área de un rombo.</h3><br>";

            function areaRombo () {
                $D = $_POST['diagonalM'];
                $d = $_POST['diagonalm'];
                $resultado = $D * $d / 2;
                echo "<br>El área del rombo de diagonal mayor: $D y diagonal menor: $d es: $resultado cm2<br>";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="diagonalM"  value="" placeholder="Diagonal mayor:"/>
        <input type="text" name="diagonalm"  value="" placeholder="Diagonal menor:"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            areaRombo();
        ?>
    </body>
</html>
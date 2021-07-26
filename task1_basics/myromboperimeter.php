<!DOCTYPE html>
<html> 
    <head>
        <title>
            <?php
                echo "Rombo perimeter";
            ?>
        </title>
    </head>
    <body>
        <?php
            
            echo "<h1>Rombo perimeter</h1>";
            
            echo "<h3>El siguiente programa calcula el perimetro de un rombo.</h3><br>";

            function perimeterRombo () {
                $l = $_POST['lado'];
                $resultado = $l * 4;
                echo "<br>El perimetro del rombo de lado: $l es: $resultado cm<br>";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="lado"  value="" placeholder="Lado del rombo:"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            perimeterRombo();
        ?>
    </body>
</html>
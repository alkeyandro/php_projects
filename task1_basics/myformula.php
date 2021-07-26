<!DOCTYPE html>
<html> 
    <head>
        <title>
            <?php
                echo "Relacion masa";
            ?>
        </title>
    </head>
    <body>
        <?php
            
            echo "<h1>Relacion masa</h1>";
            
            echo "<h3>El siguiente programa calcula la relación de la masa con la presión, el volumen y la temperatura</h3><br>";

            function getMasa () {
                $presion = $_POST['presion'];
                $volumen = $_POST['volumen'];
                $temperatura= $_POST['temperatura'];
                $masa = ($presion * $volumen) / (0.37 * ($temperatura + 460));
                echo "<br>Masa = $masa<br>";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="presion"  value="" placeholder="Presión:"/>
        <input type="text" name="volumen"  value="" placeholder="Volumen:"/>
        <input type="text" name="temperatura"  value="" placeholder="Temperatura:"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            getMasa();
        ?>
    </body>
</html>
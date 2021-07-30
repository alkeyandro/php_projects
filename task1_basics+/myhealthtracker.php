<!DOCTYPE html>
<html> 
    <head>
        <title>
            <?php
                echo "Health Tracker";
            ?>
        </title>
    </head>
    <body>
        <?php
            
            echo "<h1>Health Tracker</h1>";
            
            echo "<h3>El siguiente programa calcula el número de pulsaciones.</h3><br>";

            function pulsations () {
                $edad = $_POST['edad'];
                $resultado = (220- $edad) / 10;
                echo "<br>El número de pulsaciones cada 10 segundo es: $resultado<br>";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="edad"  value="" placeholder="Edad"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            pulsations();
        ?>
    </body>
</html>
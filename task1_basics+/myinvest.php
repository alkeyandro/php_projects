<!DOCTYPE html>
<html> 
    <head>
        <title>
            <?php
                echo "Invest";
            ?>
        </title>
    </head>
    <body>
        <?php
            
            echo "<h1>Invest</h1>";
            
            echo "<h3>El siguiente programa calcula la rentabilidad mensual de una inversión.</h3><br>";

            function getIncome () {
                $capital = $_POST['capital'];
                $interes = $_POST['interes'];
                $resultado = $capital * $interes / 100;
                echo "<br>La rentabilidad de invertir: $capital al: $interes % es de: $resultado<br>";
                echo "Formúla: capital*interes/100<br>";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="capital"  value="" placeholder="Capital invertido"/>
        <input type="text" name="interes"  value="" placeholder="Interes mensual"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            getIncome();
        ?>
    </body>
</html>
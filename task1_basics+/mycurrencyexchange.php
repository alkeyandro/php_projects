<!DOCTYPE html>
<html> 
    <head>
        <title>
            <?php
                echo "Currency exchange";
            ?>
        </title>
    </head>
    <body>
        <?php
            
            echo "<h1>Currency exchange</h1>";
            
            echo "<h3>El siguiente programa muestra el porcentaje de alumnos hombres y mujeres</h3><br>";

            function convertCoins () {
                $pesos = $_POST['pesos'];
                $dolar = $_POST['dolar'];
                $resultado = $pesos / $dolar;
                echo "<br>A un precio por dólar de: $dolar, $pesos pesos equivalen a: $resultado dólares.";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="pesos"  value="" placeholder="Cantidad de pesos que quiere cambiar"/>
        <input type="text" name="dolar"  value="" placeholder="Valor del dólar"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            convertCoins();
        ?>
    </body>
</html>
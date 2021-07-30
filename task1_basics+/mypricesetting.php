<!DOCTYPE html>
<html> 
    <head>
        <title>
            <?php
                echo "Price to sell";
            ?>
        </title>
    </head>
    <body>
        <?php
            
            echo "<h1>Price to sell</h1>";
            
            echo "<h3>El siguiente programa calcula el precio de venta sugerido para un producto.</h3><br>";

            function pricing () {
                $costo = $_POST['costo'];
                $ganancia = $_POST['ganancia'];
                $resultado = $costo * (1 + ($ganancia/100)); 
                echo "<br>El precio de venta sugerido para obtener una gancia del: $ganancia%  es de: $resultado<br>";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="costo"  value="" placeholder="Costo proveedor $"/>
        <input type="text" name="ganancia"  value="30" placeholder="Ganancia esperada %"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            pricing();
        ?>
    </body>
</html>
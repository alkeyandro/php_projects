<!DOCTYPE html>
<html> 
    <head>
        <title>
            <?php
                echo "MyDiscount";
            ?>
        </title>
    </head>
    <body>
        <?php
            
            echo "<h1>MyDiscount</h1>";
            
            echo "<h3>El siguiente programa calcula el valor final de los artículos según el descuento aplicado.</h3><br>";

            function MyDiscount () {
                $costo = $_POST['costo'];
                $porcentaje = $_POST['porcentaje'];
                $descuento = $costo * $porcentaje/100;
                $resultado = $costo - $descuento;
                echo "<br>El valor final de la compra es de: $costo menos: $descuento del $porcentaje de descuento. Total: $resultado<br>";
                echo "Formúla: costo - descuento<br>";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="costo"  value="" placeholder="Costo de los artículos"/>
        <input type="text" name="porcentaje"  value="15" placeholder="% de descuento"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            MyDiscount();
        ?>
    </body>
</html>
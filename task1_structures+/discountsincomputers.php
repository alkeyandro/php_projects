<html> 
    <head>
        <title>
            <?php
                echo "Estucturas selectivas";
            ?>
        </title>
    </head>
    <body>
        <?php
            
            echo "<h1>Ejercicio # 17</h1>";
            
            echo "<h3>En una fábrica de computadoras se planea ofrecer a los clientes un descuento que dependerá del número de computadoras que compre. Si las computadoras son menos de cinco se les dará un 10% de descuento sobre el total de la compra; si el número de computadoras es mayor o igual a cinco pero menos de diez se le otorga un 20% de descuento; y si son 10 o más se les da un 40% de descuento. El precio de cada computadora es de $11,000.</h3><br>";

            function doRead () {

                $person = $_POST['person'];
                $cant = $_POST['cant'];
                $price = $_POST['price'];
    
                $total = $cant * $price;
    
                if ($cant < 5) {
                    $discount = $total * 0.10;
                    $pay = $total - $discount;
                    echo "$person obtienes un descuento del 10%!!<br>";
                    echo "Total a pagar $pay - Ahorraste: $discount<br>";
                } elseif ($cant >= 5 && $cant < 10) {
                    $discount = $total * 0.20;
                    $pay = $total - $discount;
                    echo "$person obtienes un descuento del 20%!!<br>";
                    echo "Total a pagar $pay - Ahorraste: $discount<br>";
                } elseif ($cant >= 10) {
                    $discount = $total * 0.40;
                    $pay = $total - $discount;
                    echo "$person obtienes un descuento del 40%!!<br>";
                    echo "Total a pagar $pay - Ahorraste: $discount<br>";
                }
            }

        ?>

        <form action="" method="post">
            <label><h2>Descuentos por computadoras</h2></label><br>
            <label>Cliente:</label>
            <input type="text" name="person"/>
            <label>Cantidad:</label>
            <input type="number" name="cant" value="0"/>
            <label>Precio:</label>
            <input type="number" name="price" value="11000"/>
            <input type="submit" value="Validar"/>
        </form>

        <?php

            doRead();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>
    </body>
</html>
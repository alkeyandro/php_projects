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
            
            echo "<h1>Ejercicio # 20</h1>";
            
            echo "<h3>Una frutería ofrece las manzanas con descuento según la siguiente tabla: 
            NUM. DE KILOS COMPRADOS  % DESCUENTO 
                     0 - 2                0%
                  2.01 - 5               10%
                  5.01 - 10              15%
                 10.01 en adelante          20%
           Determinar cuánto pagara una persona que compre manzanas es esa frutería</h3><br>";

            function doRead () {

                $cant = $_POST['cant'];
                $price = $_POST['price'];
    
                if ($cant > 10) {
                    echo "Recibes un 20% de descuento!<br>";
                    $discount = ($cant * $price) * 0.80;
                    echo "Valor a pagar: $discount.<br>";
                } elseif ($cant > 5 && $cant <=10) {
                    echo "Recibes un 15% de descuento!<br>";
                    $discount = ($cant * $price) * 0.85;
                    echo "Valor a pagar: $discount.<br>";
                } elseif ($cant > 2 && $cant <=5) {
                    echo "Recibes un 10% de descuento!<br>";
                    $discount = ($cant * $price) * 0.90;
                    echo "Valor a pagar: $discount.<br>";
                } else {
                    $discount = ($cant * $price) * 1;
                    echo "Valor a pagar: $discount.<br>";
                }
            }

        ?>

        <form action="" method="post">
            <label><h2>Descuentos en frutería</h2></label><br>
            <label>Producto:</label>
            <select name="product">
                <option value="1">Manzanas</option>
            </select>
            <label>Cantidad (Kgs):</label>
            <input type="number" name="cant" value="1"/>
            <label>Precio:</label>
            <input type="number" name="price" value=""/>
            <input type="submit" value="Comprar"/>
        </form>

        <?php

            doRead();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>
    </body>
</html>
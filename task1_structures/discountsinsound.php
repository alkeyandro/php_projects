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
            
            echo "<h1>Ejercicio # 19</h1>";
            
            echo "<h3>Un proveedor de estéreos ofrece un descuento del 10% sobre el precio sin IVA, de algún aparato si este cuesta $20.000 o más. Además, independientemente de esto, ofrece un 5% de descuento si la marca es “NOSY”. Determinar cuánto pagara, con IVA incluido, un cliente cualquiera por la compra de su aparato</h3><br>";

            function doRead () {

                $branch = $_POST['branch'];
                $price = $_POST['price'];
                $iva = $_POST['iva'];
    
                if ($price >= 20000) {
                    if ($branch = 1) {
                        echo "El artículo tiene un descuento del 15%!<br>";
                        $total_si = $price * 0.85;
                        $total_ci = $total_si * (1 + ($iva / 100));
                        echo "Valor a pagar: $total_ci (iva incluído)<br>";
                    } else {
                        echo "El artículo tiene un descuento del 10%!<br>";
                        $total_si = $price * 0.90;
                        $total_ci = $total_si * (1 + ($iva / 100));
                        echo "Valor a pagar: $total_ci (iva incluído)<br>";
                    }
                } else {
                    $total_si = $price;
                    $total_ci = $total_si * (1 + ($iva / 100));
                    echo "Valor a pagar: $total_ci (iva incluído)<br>";
                }
            }

        ?>

        <form action="" method="post">
            <label><h2>Descuentos por estéreos</h2></label><br>
            <label>Producto:</label>
            <select name="product">
                <option value="1">Estéreos</option>
            </select>
            <label>Marca:</label>
            <select name="branch">
                <option value="1">NOSY</option>
                <option value="2">Otras</option>
            </select>
            <label>Precio (sin iva):</label>
            <input type="number" name="price" value="20000"/>
            <label>% iva:</label>
            <input type="number" name="iva" value="19"/>
            <input type="submit" value="Comprar"/>
        </form>

        <?php

            doRead();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>
    </body>
</html>
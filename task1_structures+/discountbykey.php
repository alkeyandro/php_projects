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
            
            echo "<h1>Ejercicio # 10</h1>";
            
            echo "<h3>Hacer un algoritmo que imprima el nombre de un artículo, clave, precio original y su precio con 
            descuento. El descuento lo hace en base a la clave, si la clave es 1 el descuento es del 10% y si la clave 
            es 2 el descuento es del 20% (solo existen dos claves). </h3><br>";

            function doRead () {
                $prod = $_POST['prod'];
                $price = $_POST['price'];
                $key = $_POST['key'];

                setlocale(LC_MONETARY, 'es_ES');

                echo "Arículo: Producto 1<br>";
                echo "Clave: $key<br>";
                echo ("Valor sin dcto: $" . money_format('%i', $price) . "<br>");

                if ($key == 1) {
                    $discount = $price * 0.90;
                    echo ("Valor con dcto: $" . money_format('%i', $discount) . "<br>");
                } elseif ($key == 2) {
                    $discount = $price * 0.80;
                    echo ("Valor con dcto: $" . money_format('%i', $discount) . "<br>");
                }
            }
        ?>

        <form action="#" method="post">
        <label>Producto:</lable>
        <select type="" name="prod"  value="" placeholder="Selección..."/>
            <option value="1">Porducto 1</option>
        </select><br>
        <label>Precio:</lable>
        <input type="number" name="price"  value="" placeholder="Precio $"/><br>
        <label>Clave:</lable>
        <select type="" name="key"  value="" placeholder="Selección..."/>
            <option value="1">1</option>
            <option value="2">2</option>
        </select><br>
        <input type="submit" name="button" value="LEER"/><br>
        </form>

        <?php

            doRead();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>
    </body>
</html>
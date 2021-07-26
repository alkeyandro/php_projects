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
            
            echo "<h1>Ejercicio # 11</h1>";
            
            echo "<h3> Hacer un algoritmo que calcule el total a pagar por la compra de camisas. Si se compran tres camisas o 
            más se aplica un descuento del 20% sobre el total de la compra y si son menos de tres camisas un 
            descuento del 10%</h3><br>";

            function doRead () {
                $prod = $_POST['prod'];
                $price = $_POST['price'];
                $cant = $_POST['cant'];

                setlocale(LC_MONETARY, 'es_ES');

                echo "Descripción: Camisas X $cant<br>";
                echo ("Precio unitario: $" . money_format('%i', $price) . "<br>");
                echo ("Costo sin dcto: $" . money_format('%i', ($price*$cant)) . "<br>");

                if ($cant >= 3) {
                    $discount = ($price * $cant) * 0.80;
                    echo ("Valor con dcto: $" . money_format('%i', $discount) . "<br>");
                } elseif ($key < 3) {
                    $discount = ($price * $cant) * 0.90;
                    echo ("Valor con dcto: $" . money_format('%i', $discount) . "<br>");
                }
            }
        ?>

        <form action="#" method="post">
        <label>Producto:</lable>
        <select type="" name="prod"  value="" placeholder="Selección..."/>
            <option value="1">Camisa</option>
        </select><br>
        <label>Precio:</lable>
        <input type="number" name="price"  value="0" placeholder="Precio $"/><br>
        <label>Cantidad:</lable>
        <select type="" name="cant"  value="" placeholder="Selección..."/>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br>
        <input type="submit" name="button" value="LEER"/><br>
        </form>

        <?php

            doRead();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>
    </body>
</html>
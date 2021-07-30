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
                $cant = $_POST['cant'];

                setlocale(LC_MONETARY, 'es_ES');

                echo "Descripción: Llantas X $cant<br>";

                if ($cant >= 5) {
                    $total = money_format('%i',(70000 * $cant));
                    echo "Vlr/Unidad: $70000.00 // Total: $total.<br>";
                } elseif ($key < 5) {
                    $total = money_format('%i',(80000 * $cant));
                    echo "Vlr/Unidad: $80000.00 // Total: $total.<br>";
                }
            }
        ?>

        <form action="#" method="post">
        <label>Producto:</lable>
        <select type="" name="prod"  value="" placeholder="Selección..."/>
            <option value="1">Llanta</option>
        </select><br>
        <label>Cantidad:</lable>
        <select type="" name="cant"  value="" placeholder="Selección..."/>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select><br>
        <input type="submit" name="button" value="LEER"/><br>
        </form>

        <?php

            doRead();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>
    </body>
</html>
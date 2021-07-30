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
            
            echo "<h1>Ejercicio # 18</h1>";
            
            echo "<h3>En una venta de llantas se ha establecido una promoción de las llantas marca “Ponchadas”, dicha promoción consiste en lo siguiente: 
            Si se compran menos de cinco llantas el precio es de $30.000 cada una, de $25.000 si se compran de cinco a 10 y de $20.000 si se compran más de 10. Obtener la cantidad de dinero que una persona tiene que pagar por cada una de las llantas que compra y la que tiene que pagar por el total de la compra.</h3><br>";

            function doRead () {

                $cant = $_POST['cant'];
    
                if ($cant < 5) {
                    $total = $cant * 30000;
                    echo "Valor unitario: 30000<br>";
                    echo "Costo total: $total<br>";
                } elseif ($cant >= 5 && $cant < 10) {
                    $total = $cant * 25000;
                    echo "Valor unitario: 25000<br>";
                    echo "Costo total: $total<br>";
                } elseif ($cant >= 10) {
                    $total = $cant * 20000;
                    echo "Valor unitario: 20000<br>";
                    echo "Costo total: $total<br>";
                }
            }

        ?>

        <form action="" method="post">
            <label><h2>Descuentos por llantas</h2></label><br>
            <label>Producto:</label>
            <select name="product">
                <option value="1">Llantas</option>
            </select>
            <label>Marca:</label>
            <select name="branch">
                <option value="1">Ponchadas</option>
            </select>
            <label>Cantidad:</label>
            <input type="number" name="cant" value="1"/>
            <input type="submit" value="Comprar"/>
        </form>

        <?php

            doRead();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>
    </body>
</html>
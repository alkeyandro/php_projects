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
            
            echo "<h1>Ejercicio # 15</h1>";
            
            echo "<h3>Una compañía de seguros está abriendo un depto. de finanzas y estableció un programa para captar clientes, que consiste en lo siguiente: Si el monto por el que se efectúa la fianza es menor que $50 000 la cuota a pagar será por el 3% del monto, y si el monto es mayor que $50 000 la cuota a pagar será el 2% del monto. La afianzadora desea determinar cuál será la cuota que debe pagar un cliente.</h3><br>";

            function doRead () {

                $costumer = $_POST['costumer'];
                $debt = $_POST['debt'];
    
                if ($debt <= 50000) {
                    $result = $debt * 0.03;
                    echo "El valor de la fianza para el cliente es: $result";
                } elseif ($debt > 50000) {
                    $result = $debt * 0.02;
                    echo "El valor de la fianza para el cliente es: $result";
                }
            }

        ?>

        <form action="" method="post">
            <label><h2>Obtener monto fianza</h2></label><br>
            <label>Cliente:</label>
            <input type="text" name="costumer"/>
            <label>Valor de la fianza:</label>
            <input type="number" name="debt"/>
            <input type="submit" value="Calcular"/>
        </form>

        <?php

            doRead();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>
    </body>
</html>
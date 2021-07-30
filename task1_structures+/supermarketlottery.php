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
            
            echo "<h1>Ejercicio # 13</h1>";
            
            echo "<h3>En un supermercado se hace una promoción, mediante la cual el cliente obtiene un descuento 
            dependiendo de un número que se escoge al azar. Si el número escogido es menor que 74 el descuento 
            es del 15% sobre el total de la compra, si es mayor o igual a 74 el descuento es del 20%. Obtener cuánto dinero se le descuenta.</h3><br>";

            function doRead () {

                $charge = $_POST['charge'];
    
                    
                $getnumber = rand(1,100);
    
                echo "Sacaste el número $getnumber<br>";
    
                if ($getnumber < 74) {
                    $discount = $charge * 0.15;
                    echo "Obtienes un descuento del 15% equivalente a $discount";
                } elseif ($getnumber > 74) {
                    $discount = $charge * 0.20;
                    echo "Obtienes un descuento del 20% equivalente a $discount";
                }
            }
        ?>

        <form action="" method="post">
            <label><h2>Obtener descuento</h2></label>
            <input type="number" name="charge" placeholder="Valor de la compra" />
            <input type="submit" value="Participar!"/>
        </form>

        <?php

            doRead();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>
    </body>
</html>
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
            
            echo "<h1>Ejercicio # 7</h1>";
            
            echo "<h3>Leer el nombre de un empleado, el salario básico por hora y el número de horas trabajadas durante una 
            semana. Calcular el salario neto, teniendo en cuenta que, si el número de horas trabajadas durante la 
            semana es mayor a 48, esas horas de más se consideran horas extras y tienen un 25% de recargo.</h3><br>";

            function doRead () {
                $name = $_POST['name'];
                $vhr = $_POST['vhr'];
                $hrs = $_POST['hrs'];
                if ($hrs > 48) {
                    $add = $hrs - 48;
                    $normal = 48 * $vhr;
                    $extra = $add * ($vhr * 1.25);
                    $total = $normal + $extra;
                    echo "<br>Empleado: $name";
                    echo "<br>Valor hora: $vhr";
                    echo "<br>Pago horas extras: $extra";
                    echo "<br>Total: $total";
                } else {
                    $normal = $hrs * $vhr;
                    $extra = 0;
                    $total = $normal + $extra;
                    echo "<br>Empleado: $name";
                    echo "<br>Valor hora: $vhr";
                    echo "<br>Pago horas extras: $extra";
                    echo "<br>Total: $total";
                }
            }
        ?>

        <form action="#" method="post">
        <label>Empleado:</lable>
        <input type="text" name="name"  value="" placeholder="Nombre"/>
        <label>Salario por hora:</lable>
        <input type="number" name="vhr"  value="3773" placeholder="Salario por hora"/>
        <label>Horas trabajadas:</lable>
        <input type="number" name="hrs"  value="48" placeholder="Total horas trabajadas en la semana"/>
        <input type="submit" name="button" value="LEER"/>
        </form>

        <?php

            doRead();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>
    </body>
</html>
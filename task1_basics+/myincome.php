<!DOCTYPE html>
<html> 
    <head>
        <title>
            <?php
                echo "MyIncome";
            ?>
        </title>
    </head>
    <body>
        <?php
            
            echo "<h1>Salary</h1>";
            
            echo "<h3>El siguiente programa calcula el total de ingreso a recibir de acuerdo con las comisiones.</h3><br>";

            function MyIncome () {
                $basico = $_POST['basico'];
                $ventas = $_POST['ventas'];
                $comisiones = $ventas * 0.10;
                $resultado = $basico + $comisiones;
                echo "<br>El empleado tendrá un salario de: $basico más: $comisiones por concepto de comisiones. Total: $resultado<br>";
                echo "Formúla: básico + ventas * 10%<br>";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="basico"  value="" placeholder="Salario básico"/>
        <input type="text" name="ventas"  value="" placeholder="Ventas del mes"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            MyIncome();
        ?>
    </body>
</html>
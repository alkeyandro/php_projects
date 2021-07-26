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
            
            echo "<h1>Ejercicio # 6</h1>";
            
            echo "<h3>Para un salario bruto hasta de $ 250.500 no hay retención. Para un salario bruto de $ 250.501 a $ 
            300.000 el porcentaje de retención es de 5%. para un salario bruto mayor a $300.000 el porcentaje de 
            retención es del 8%. Imprimir el nombre del empleado, el salario bruto, el valor de la retención y el salario 
            neto (salario bruto menos la retención.</h3><br>";

            function doRead () {
                $name = $_POST['name'];
                $salary = $_POST['salary'];
                if ($salary <= 250000) {
                    $withol = 0;
                    $pay = $salary - $withol;
                    echo "<br>Empleado: $name";
                    echo "<br>Básico: $salary";
                    echo "<br>Retención: $withol";
                    echo "<br>Neto: $pay";
                } elseif ($salary > 250000 && $salary <= 300000) {
                    $withol = $salary * 0.05;
                    $pay = $salary - $withol;
                    echo "<br>Empleado: $name";
                    echo "<br>Básico: $salary";
                    echo "<br>Retención: $withol";
                    echo "<br>Neto: $pay";
                }
                else {
                    $withol = $salary * 0.08;
                    $pay = $salary - $withol;
                    echo "<br>Empleado: $name";
                    echo "<br>Básico: $salary";
                    echo "<br>Retención: $withol";
                    echo "<br>Neto: $pay";
                }
            }
        ?>

        <form action="#" method="post">
        <label>Empleado:</lable>
        <input type="text" name="name"  value="" placeholder="Nombre"/>
        <label>Salario:</lable>
        <input type="number" name="salary"  value="" placeholder="Salario base"/>
        <input type="submit" name="button" value="LEER"/>
        </form>

        <?php

            doRead();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>
    </body>
</html>
<!DOCTYPE html>
<html> 
    <head>
        <title>
            <?php
                echo "New Salary";
            ?>
        </title>
    </head>
    <body>
        <?php
            
            echo "<h1>New Salary</h1>";
            
            echo "<h3>El siguiente programa calcula el incremento salarial.</h3><br>";

            function raisePayment () {
                $current_salary = $_POST['current_salary'];
                $raise = $_POST['raise'];
                $resultado = $current_salary + ($current_salary * $raise/100);
                echo "<br>El nuevo salario es de: $resultado<br>";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="current_salary"  value="" placeholder="Salario actual"/>
        <input type="text" name="raise"  value="25" placeholder="% Incremento"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            raisePayment();
        ?>
    </body>
</html>
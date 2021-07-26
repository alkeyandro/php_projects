<!DOCTYPE html>
<html> 
    <head>
        <title>
            <?php
                echo "Budget";
            ?>
        </title>
    </head>
    <body>
        <?php
            
            echo "<h1>Budget</h1>";
            
            echo "<h3>El siguiente programa calcula la asignación presupuestal para las áreas del hospital.</h3><br>";

            function setBudget () {
                $total = $_POST['total'];
                $area1 = $_POST['area1'];
                $area2 = $_POST['area2'];
                $area3 = $_POST['area3'];
                $gin = $total * ($area1 / 100);
                $tra = $total * ($area2 / 100);
                $ped = $total * ($area3 / 100);
                echo "<br>La asignación presupuestal queda así: Ginecología: $gin; Traumatología: $tra y Pediatría: $ped<br>";
            }
        ?>

        <form action="#" method="post">
        <label>Presupuesto anual:</lable>
        <input type="text" name="total"  value="" placeholder="Total presupuesto para el año"/><br>
        <label>Ginecología:</lable>
        <input type="text" name="area1"  value="40" placeholder="Asignación presupuestal %"/><br>
        <label>Traumatología:</lable>
        <input type="text" name="area2"  value="30" placeholder="Asignación presupuestal %"/><br>
        <label>Pediatría:</lable>
        <input type="text" name="area3"  value="30" placeholder="Asignación presupuestal %"/><br>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            setBudget();
        ?>
    </body>
</html>
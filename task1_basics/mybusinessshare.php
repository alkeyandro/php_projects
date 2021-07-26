<!DOCTYPE html>
<html> 
    <head>
        <title>
            <?php
                echo "Business share";
            ?>
        </title>
    </head>
    <body>
        <?php
            
            echo "<h1>Business share</h1>";
            
            echo "<h3>El siguiente programa muestra el porcentaje invertido por persona en la empresa.</h3><br>";

            function getShare () {
                $p1 = $_POST['p1'];
                $p2 = $_POST['p2'];
                $p3 = $_POST['p3'];
                $sh1 = ($p1/($p1 + $p2 + $p3))*100;
                $sh2 = ($p2/($p1 + $p2 + $p3))*100;
                $sh3 = ($p3/($p1 + $p2 + $p3))*100;
                echo "<br>El capital aportado para la empresa se divide así: Persona 1: $sh1%. Persona 2: $sh2%. Persona 3: $sh3%.";
            }
        ?>

        <form action="#" method="post">
        <lable>Persona 1:</label>
        <input type="text" name="p1"  value="" placeholder="Monto invertido $"/><br>
        <lable>Persona 2:</label>
        <input type="text" name="p2"  value="" placeholder="Monto invertido $"/><br>
        <lable>Persona 3:</label>
        <input type="text" name="p3"  value="" placeholder="Monto invertido $"/><br>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            getShare();
        ?>
    </body>
</html>
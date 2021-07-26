<!DOCTYPE html>
<html> 
    <head>
        <title>
            <?php
                echo "Students Gender";
            ?>
        </title>
    </head>
    <body>
        <?php
            
            echo "<h1>Students by gender</h1>";
            
            echo "<h3>El siguiente programa muestra el porcentaje de alumnos hombres y mujeres</h3><br>";

            function getPortion () {
                $hombres = $_POST['hombres'];
                $mujeres = $_POST['mujeres'];
                $H = ($hombres/($hombres + $mujeres))*100;
                $M = ($mujeres/($hombres + $mujeres))*100;
                echo "<br>El grupo de alumnos se conforma de un: $M% de mujeres y un: $H% de hombres";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="hombres"  value="" placeholder="Total de hombres en el grupo"/>
        <input type="text" name="mujeres"  value="" placeholder="Total de mujeres en el grupo"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            getPortion();
        ?>
    </body>
</html>
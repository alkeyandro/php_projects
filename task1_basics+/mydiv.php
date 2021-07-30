<!DOCTYPE html>
<html> 
    <head>
        <title>
            <?php
                echo "Div";
            ?>
        </title>
    </head>
    <body>
        <?php
            
            echo "<h1>Div</h1>";
            
            echo "<h3>El siguiente programa calcula el cociente y el residuo de la división.</h3><br>";

            function setDiv () {
                $dividendo = $_POST['dividendo'];
                $divisor = $_POST['divisor'];
                $cociente = intdiv($dividendo, $divisor);
                $residuo = $dividendo % $divisor;
                echo "<br>De la división entre: $dividendo / $divisor se obtiene el cociente: $cociente y el residuo: $residuo<br>";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="dividendo"  value="" placeholder="Dividendo:"/>
        <input type="text" name="divisor"  value="" placeholder="Divisor:"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            setDiv();
        ?>
    </body>
</html>
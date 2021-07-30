<!DOCTYPE html>
<html> 
    <head>
        <title>
            <?php
                echo "MyArea";
            ?>
        </title>
    </head>
    <body>
        <?php
            
            echo "<h1>MyArea!</h1>";
            
            echo "<h3>El siguiente programa calcula el área de un triángulo.</h3><br>";

            function areaTriangulo () {
                $base = $_POST['baseT']; // "<script>input=prompt('Enter the base: ')</script>"; //(int)readline('Ingrese la base: ');
                $altura = $_POST['alturaT']; // "<script>input=prompt('Enter the heigth: ')</script>"; //(float)readline('Ingrese la altura: ');
                $resultado = $base * $altura / 2;
                echo "<br>El área del triángulo con base: $base y altura: $altura es de: $resultado<br>";
                echo "Formúla: b*h/2<br>";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="baseT"  value="" placeholder="Enter the base"/>
        <input type="text" name="alturaT"  value="" placeholder="Enter the hight"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            areaTriangulo();
        ?>
    </body>
</html>
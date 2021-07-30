<!DOCTYPE html>
<html> 
    <head>
        <title>
            <?php
                echo "MyGrades";
            ?>
        </title>
    </head>
    <body>
        <?php
            
            echo "<h1>MyGrades</h1>";
            
            echo "<h3>El siguiente programa calcula la nota definitiva de un alumno según la rúbrica de calificaciones.</h3><br>";

            function MyScore () {
                $nota1 = $_POST['n1'];
                $nota2 = $_POST['n2'];
                $nota3 = $_POST['n3'];
                $nota4 = $_POST['n4'];
                $resultado = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
                echo "<br>La calificación final del alumno para la asignatura de Algoritmos es: $resultado<br>";
            }
        ?>

        <form action="#" method="post">
        <label>Nota 1:</lable>
        <input type="text" name="n1"  value="" placeholder="Nota 1"/><br>
        <label>Nota 2:</lable>
        <input type="text" name="n2"  value="" placeholder="Nota 2"/><br>
        <label>Nota 3:</lable>
        <input type="text" name="n3"  value="" placeholder="Nota 3"/><br>
        <label>Nota 4:</lable>
        <input type="text" name="n4"  value="" placeholder="Nota 4"/><br>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            MyScore();
        ?>
    </body>
</html>
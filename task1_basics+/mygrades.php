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
                $nota1 = $_POST['cp1'];
                $nota2 = $_POST['cp2'];
                $nota3 = $_POST['cp3'];
                $nota4 = $_POST['exf'];
                $nota5 = $_POST['trf'];
                $resultado = ((($nota1 + $nota2 + $nota3)/3) * 0.55) + $nota4 * 0.30 + $nota5 * 0.15;
                echo "<br>La calificación final del alumno para la asignatura de Algoritmos es: $resultado<br>";
            }
        ?>

        <form action="#" method="post">
        <label>Calificación Parcial 1:</lable>
        <input type="text" name="cp1"  value="" placeholder="Nota 1"/><br>
        <label>Calificación Parcial 2:</lable>
        <input type="text" name="cp2"  value="" placeholder="Nota 2"/><br>
        <label>Calificación Parcial 3:</lable>
        <input type="text" name="cp3"  value="" placeholder="Nota 3"/><br>
        <label>Examen Final:</lable>
        <input type="text" name="exf"  value="" placeholder="Nota 4"/><br>
        <label>Trabajo Final</lable>
        <input type="text" name="trf"  value="" placeholder="Nota 5"/><br>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            MyScore();
        ?>
    </body>
</html>
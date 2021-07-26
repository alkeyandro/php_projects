<!DOCTYPE html>
<html> 
    <head>
        <title>
            <?php
                echo "MyAverage";
            ?>
        </title>
    </head>
    <body>
        <?php
            
            echo "<h1>MyAverage</h1>";
            
            echo "<h3>El siguiente programa calcula el promedio de las asignaturas de un alumno.</h3><br>";

            function MyScore () {
                $S1nota1 = $_POST['s1n1'];
                $S1nota2 = $_POST['s1n2'];
                $S1nota3 = $_POST['s1n3'];
                $S1nota4 = $_POST['s1n4'];
                $s1_result = $S1nota1 * 0.90 + (($S1nota2 + $S1nota3 + $S1nota4)/3) * 0.10;

                $S2nota1 = $_POST['s2n1'];
                $S2nota2 = $_POST['s2n2'];
                $S2nota3 = $_POST['s2n3'];
                $s2_result = $S2nota1 * 0.80 + (($S2nota2 + $S2nota3)/2) * 0.20;

                $S3nota1 = $_POST['s3n1'];
                $S3nota2 = $_POST['s3n2'];
                $S3nota3 = $_POST['s3n3'];
                $S3nota4 = $_POST['s3n4'];
                $s3_result = $S3nota1 * 0.85 + (($S3nota2 + $S3nota3 + $S1nota4)/3) * 0.15;

                $average = ($s1_result + $s2_result + $s3_result)/3;
                echo "<br>El alumno obtiene el siguiente promedio: <br>";
                echo "Matemáticas: $s1_result | Física: $s2_result | Química: $s3_result<br>";
                echo "Promedio general: $average<br>";
            }
        ?>

        <form action="#" method="post">
        <label>Matemáticas</lable><br>
        <label>Examen:</lable>
        <input type="text" name="s1n1"  value="" placeholder="Nota 1"/><br>
        <label>Tarea 1:</lable>
        <input type="text" name="s1n2"  value="" placeholder="Nota 2"/><br>
        <label>Tarea 2:</lable>
        <input type="text" name="s1n3"  value="" placeholder="Nota 3"/><br>
        <label>Tarea 3:</lable>
        <input type="text" name="s1n4"  value="" placeholder="Nota 4"/><br>
        
        <label>Física</lable><br>
        <label>Examen:</lable>
        <input type="text" name="s2n1"  value="" placeholder="Nota 1"/><br>
        <label>Tarea 1:</lable>
        <input type="text" name="s2n2"  value="" placeholder="Nota 2"/><br>
        <label>Tarea 2:</lable>
        <input type="text" name="s2n3"  value="" placeholder="Nota 3"/><br>
        
        <label>Química</lable><br>
        <label>Examen:</lable>
        <input type="text" name="s3n1"  value="" placeholder="Nota 1"/><br>
        <label>Tarea 1:</lable>
        <input type="text" name="s3n2"  value="" placeholder="Nota 2"/><br>
        <label>Tarea 2:</lable>
        <input type="text" name="s2n3"  value="" placeholder="Nota 3"/><br>
        <label>Tarea 3:</lable>
        <input type="text" name="s2n4"  value="" placeholder="Nota 4"/><br>

        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            MyScore();
        ?>
    </body>
</html>
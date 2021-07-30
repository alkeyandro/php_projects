
<div class='box' id='e1'>
<?php

    echo "<div class='hdform'><img src='images/task.png' alt='image'><h1 class='exerc'>MyGrades</h1><!--<br><p class='descript'>El siguiente programa calcula la nota definitiva de un alumno según la rúbrica de calificaciones.</p>--></div>";

        function MyScore () {
            $nota1 = floatval($_POST['n1']);
            $nota2 = floatval($_POST['n2']);
            $nota3 = floatval($_POST['n3']);
            $nota4 = floatval($_POST['n4']);
            $resultado = floatval(($nota1 + $nota2 + $nota3 + $nota4) / 4);
            
            echo "<p class='output'>La calificación final del alumno para la asignatura de Algoritmos es: $resultado</p>";
        }


    echo "<form action='index.php#e1' method='post' class='eform'><label>Nota 1:</lable><br>
    <input type='number' name='n1'  value='' placeholder=' 25%' step='0.01'/><br><label>Nota 2:</lable><br><input type='number' name='n2'  value='' placeholder='25%' step='0.01'/><br><label>Nota 3:</lable><br><input type='number' name='n3'  value='' placeholder=' 25%' step='0.01'/><br><label>Nota 4:</lable><br><input type='number' name='n4'  value='' placeholder=' 25%' step='0.01'/><br><input type='submit' name='button' value='Calculate' class='ebtn'/></form>";

    MyScore();

?>
</div>


<div class='box' id='e2'>
<?php

    echo "<div class='hdform'><img src='images/triangle.png' alt='image'><h1 class='exerc'>MyArea</h1><!--<br><p class='descript'>El siguiente programa calcula el área de un triángulo.</p>--></div>";

        function areaTriangulo () {
            $base = $_POST['baseT']; // "<script>input=prompt('Enter the base: ')</script>"; //(int)readline('Ingrese la base: ');
            $altura = $_POST['alturaT']; // "<script>input=prompt('Enter the heigth: ')</script>"; //(float)readline('Ingrese la altura: ');
            $resultado = floatval($base * $altura / 2);

            echo "<p class='output'>La calificación final del alumno para la asignatura de Algoritmos es: $resultado</p>";
        }

    echo "<form action='index.php#e2' method='post' class='eform'><input type='number' name='baseT' value='' placeholder='Base' step='0.01'/><input type='number' name='alturaT' value='' placeholder='Altura' step='0.01'><br><input type='submit' name='button' value='Calculate' class='ebtn'/></form>";

    areaTriangulo();

?>
</div>


<div class='box' id='e3'>
<?php

    echo "<div class='hdform'><img src='images/triangle.png' alt='image'><h1 class='exerc'>MyArea2</h1><!--<p class='descript'>El siguiente programa calcula el área de un triángulo equilátero.</p>--></div>";

        function areaTrianguloE () {
            $l = ($_POST['lado']);
            $h = (sqrt(3)/2 * $l);
            $resultado = (floatval($l * $h / 2));
            
            echo "<p class='output'>El área del triángulo equilátero de lado: $l es: $resultado<p>";
        }

    echo "<form action='#e3' method='post' class='eform'><input type='text' name='lado'  value='' placeholder='Lado del triángulo:' step='0.01'/><input type='submit' name='button' value='Calculate' class='ebtn'/></form>";

    areaTrianguloE();

?>
</div>


<div class='box' id='e4'>
<?php

    echo "<div class='hdform'><img src='images/triangle.png' alt='image'><h1 class='exerc'>MyArea3</h1><!--<p class='descript'>El siguiente programa calcula el área de un triángulo rectángulo.</p>--></div>";

        function areaTrianguloR () {
            $l1 = $_POST['lado1'];
            $l2 = $_POST['lado2'];
            $resultado = floatval($l1 * $l2 / 2);
            
            echo "<p class='output'>El área del triángulo rectángulo de lados: $l1 y $l2 es: $resultado cm2<p>";
        }

    echo "<form action='#e4' method='post' class='eform'><input type='text' name='lado1'  value='' placeholder='Lado 1 del triángulo:' step='0.01'/><input type='text' name='lado2'  value='' placeholder='Lado 2 del triángulo:' step='0.01'/><input type='submit' name='button' value='Calculate' class='ebtn'/></form>";

    areaTrianguloR();

?>
</div>


<div class='box' id='e5'>
<?php

    echo "<div class='hdform'><img src='images/average.png' alt='image'><h1 class='exerc'>MyAverage</h1><!--<p class='descript'>El siguiente programa calcula el promedio de las asignaturas de un alumno.</p>--></div>";

        function MyAverage () {
            $S1nota1 = $_POST['s1n1'];
            $S1nota2 = $_POST['s1n2'];
            $S1nota3 = $_POST['s1n3'];
            $S1nota4 = $_POST['s1n4'];
            $s1_result = floatval($S1nota1 * 0.90 + (($S1nota2 + $S1nota3 + $S1nota4)/3) * 0.10);

            $S2nota1 = $_POST['s2n1'];
            $S2nota2 = $_POST['s2n2'];
            $S2nota3 = $_POST['s2n3'];
            $s2_result = floatval($S2nota1 * 0.80 + (($S2nota2 + $S2nota3)/2) * 0.20);

            $S3nota1 = $_POST['s3n1'];
            $S3nota2 = $_POST['s3n2'];
            $S3nota3 = $_POST['s3n3'];
            $S3nota4 = $_POST['s3n4'];
            $s3_result = floatval($S3nota1 * 0.85 + (($S3nota2 + $S3nota3 + $S1nota4)/3) * 0.15);

            $average = floatval(($s1_result + $s2_result + $s3_result)/3);
            
            echo "<p class='output'>El alumno obtiene el siguiente promedio: <br>Matemáticas: $s1_result | Física: $s2_result | Química: $s3_result<br>Promedio general: $average</p>";
        }

    echo "<form action='index.php#e5' method='post' class='eform'><div id='eform4'><div id='container_e4'><div><span><label>Matemáticas</lable></span><br><label>Examen:</lable><input type='number' name='s1n1'  value='' placeholder='Nota 1' step='0.01'/><br><label>Tarea 1:</lable><input type='number' name='s1n2'  value='' placeholder='Nota 2' step='0.01'/><br><label>Tarea 2:</lable><input type='number' name='s1n3'  value='' placeholder='Nota 3' step='0.01'/><br><label>Tarea 3:</lable><input type='number' name='s1n4'  value='' placeholder='Nota 4' step='0.01'/></div><div><span><label>Física</lable></span><br><label>Examen:</lable><input type='number' name='s2n1'  value='' placeholder='Nota 1' step='0.01'/><br><label>Tarea 1:</lable><input type='number' name='s2n2'  value='' placeholder='Nota 2' step='0.01'/><br><label>Tarea 2:</lable><input type='number' name='s2n3'  value='' placeholder='Nota 3' step='0.01'/><br></div><div><span><label>Química</lable></span><br><label>Examen:</lable><input type='number' name='s3n1'  value='' placeholder='Nota 1' step='0.01'/><br><label>Tarea 1:</lable><input type='number' name='s3n2'  value='' placeholder='Nota 2' step='0.01'/><br><label>Tarea 2:</lable><input type='number' name='s2n3'  value='' placeholder='Nota 3' step='0.01'/><br><label>Tarea 3:</lable'><input type='number' name='s2n4'  value='' placeholder='Nota 4' step='0.01'/></div></div><br><input type='submit' name='button' value='Calculate' class='ebtn'/></div></form>";

    MyAverage();

?>
</div>


<div class='box' id='e6'>
<?php
    echo "<div class='hdform'><img src='images/cart.png' alt='image'><h1 class='exerc'>Business share</h1><!--<p class='descript'>El siguiente programa muestra el porcentaje invertido por persona en la empresa.</p>--></div>";
            
        function the_func () {
            $p1 = $_POST['p1'];
            $p2 = $_POST['p2'];
            $p3 = $_POST['p3'];
            $sh1 = ($p1/($p1 + $p2 + $p3))*100;
            $sh2 = ($p2/($p1 + $p2 + $p3))*100;
            $sh3 = ($p3/($p1 + $p2 + $p3))*100;
        
            echo "<p class='output'>El capital aportado para la empresa se divide así: Persona 1: $sh1 %. Persona 2: $sh2 %. Persona 3: $sh3 %.</p>";
        }
    
    echo "<form action='index.php#e6' method='post' class='eform'><lable>Persona 1:</label><br><input type='number' name='p1'  value='' placeholder='Monto invertido $' step='0.01'/><br><lable>Persona 2:</label><br><input type='number' name='p2'  value='' placeholder='Monto invertido $' step='0.01'/><br><lable>Persona 3:</label><br><input type='number' name='p3'  value='' placeholder='Monto invertido $' step='0.01'/><br><input type='submit' name='button' value='Calculate' class='ebtn'/></form>";

    //the_func();
?>
</div>


<div class='box' id='e7'>
<?php

    echo "<div class='hdform'><img src='images/triangle.png' alt='image'><h1 class='exerc'>MyArea!</h1><!--<p class='descript'>El siguiente programa calcula el área de un circulo.</p>--></div>";

        function areaCirculo () {
            $d = $_POST['diametro'];
            $r = $d / 2;
            $resultado = floatval(3.141619 * $r ** 2);
            
            echo "<p class='output'>El área del círculo de diámetro: $d es de: $resultado<p>";
        }
    
    echo "<form action='index.php#e7' method='post' class='eform'><input type='number' name='diametro'  value='' placeholder='Diámetro del circulo:' step='0.01'/><input type='submit' name='button' value='Calculate' class='ebtn'/></form>";

    areaCirculo();

?>
</div>


<div class='box' id='e8'>
<?php

    echo "<div class='hdform'><img src='images/currency.png' alt='image'><h1 class='exerc'>Currency exchange</h1><!--<p class='descript'>El siguiente programa muestra el porcentaje de alumnos hombres y mujeres</p>--></div>";

        function convertCoins () {
            $pesos = $_POST['pesos'];
            $dolar = $_POST['dolar'];
            $resultado = floatval($pesos / $dolar);
            
            echo "<p class='output'>A un precio por dólar de: $dolar, $pesos pesos equivalen a: $resultado dólares.</p>";
        }
    
    echo "<form action='index.php#e8' method='post' class='eform'><div><label>¿Cuánto vas a cambiar?</label><br><input type='number' name='pesos'  value='' placeholder='Pesos' step='0.01'/></div><div><label>Tasa de cambio</label><br><input type='number' name='dolar'  value='' placeholder='Dólar' step='0.01'/></div><input type='submit' name='button' value='Calculate' class='ebtn'/></form>";

    //convertCoins();

?>
</div>


<div class='box' id='e9'>
<?php         
    echo "<div class='hdform'><img src='images/saves.png' alt='image'><h1 class='exerc'>MyDiscount</h1><!--<p class='descript'>El siguiente programa calcula el valor final de los artículos según el descuento aplicado.</p>--></div>";

        function MyDiscount () {
            $costo = $_POST['costo'];
            $porcentaje = $_POST['porcentaje'];
            $descuento = floatval($costo * $porcentaje/100);
            $resultado = floatval($costo - $descuento);
            
            echo "<p class='output'>El valor final de la compra es de: $costo menos: $descuento del $porcentaje de descuento. Total: $resultado<p>";
        }

    echo "<form action='index.php#e9' method='post' class='eform'><input type='number' name='costo'  value='' placeholder='Costo de los artículos' step='0.01'/><input type='number' name='porcentaje'  value='15' placeholder='% de descuento' step='0.01'/><input type='submit' name='button' value='Calculate' class='ebtn'/></form>";

    MyDiscount();

?>
</div>


<div class='box' id='e10'>
<?php

    echo "<div class='hdform'><img src='images/maths.png' alt='image'><h1 class='exerc'>Div</h1><!--<p class='descript'>El siguiente programa calcula el cociente y el residuo de la división.</p>--></div>";

        function setDiv () {
            $dividendo = $_POST['dividendo'];
            $divisor = $_POST['divisor'];
            $cociente = floatval(intdiv($dividendo, $divisor));
            $residuo = floatval($dividendo % $divisor);
            
            echo "<p class='output'>De la división entre: $dividendo / $divisor se obtiene el cociente: $cociente y el residuo: $residuo<p>";
        }

    echo "<form action='index.php#e10' method='post' class='eform'><input type='number' name='dividendo'  value='' placeholder='Dividendo:' step='0.01'/><input type='number' name='divisor'  value='' placeholder='Divisor:' step='0.01'/><input type='submit' name='button' value='Calculate' class='ebtn'/></form>";

    //setDiv();

?>
</div>


<div class='box' id='e11'>
<?php

    echo "<div class='hdform'><img src='images/dollop.png' alt='image'><h1 class='exerc'>Relacion masa</h1><!--<p class='descript'>El siguiente programa calcula la relación de la masa con la presión, el volumen y la temperatura</p>--></div>";

        function getMasa () {
            $presion = $_POST['presion'];
            $volumen = $_POST['volumen'];
            $temperatura= $_POST['temperatura'];
            $masa = ($presion * $volumen) / (0.37 * ($temperatura + 460));

            echo "<p class='output'>Masa = $masa<p>";
        }

    echo "<form action='index.php#e11' method='post' class='eform'><input type='number' name='presion'  value='' placeholder='Presión:' step='0.01'/><input type='number' name='volumen' value='' placeholder='Volumen:' step='0.01'/><input type='number' name='temperatura'  value='' placeholder='Temperatura:' step='0.01'/><input type='submit' name='button' value='Calculate' class='ebtn'/></form>";

    getMasa();

?>
</div>


<div class='box' id='e12'>
<?php
            
    echo "<div class='hdform'><img src='images/average.png' alt='image'><h1 class='exerc'>MyGrades</h1><!--<p class='descript'>El siguiente programa calcula la nota definitiva de un alumno según la rúbrica de calificaciones.</p>--></div>";

        function MyFinal () {
            $nota1 = $_POST['cp1'];
            $nota2 = $_POST['cp2'];
            $nota3 = $_POST['cp3'];
            $nota4 = $_POST['exf'];
            $nota5 = $_POST['trf'];
            $resultado = ((($nota1 + $nota2 + $nota3)/3) * 0.55) + $nota4 * 0.30 + $nota5 * 0.15;

            echo "<p class='output'>La calificación final del alumno para la asignatura de Algoritmos es: $resultado<p>";
        }

    echo "<form action='index.php#e12' method='post' class='eform'><label>Calificación Parcial 1:</lable><br><input type='number' name='cp1' value='' placeholder='Nota 1' step='0.01'/><br><label>Calificación Parcial 2:</lable><br><input type='number' name='cp2'  value='' placeholder='Nota 2' step='0.01'/><br><label>Calificación Parcial 3:</lable><br><input type='number' name='cp3'  value='' placeholder='Nota 3' step='0.01'/><br><label>Examen Final:</lable><br><input type='number' name='exf'  value='' placeholder='Nota 4' step='0.01'/><br><label>Trabajo Final</lable><br><input type='number' name='trf'  value='' placeholder='Nota 5' step='0.01'/><br><input type='submit' name='button' value='Calculate' class='ebtn'/></form>";

    MyFinal();

?>
</div>
<div class='box' id='e13'>
<?php
            
    echo "<div class='hdform'><img src='images/health.png' alt='image'><h1 class='exerc'>Health Tracker</h1><!--<p class='descript'>El siguiente programa calcula el número de pulsaciones.</p>--></div>";

        function pulsations () {
            $edad = $_POST['edad'];
            $resultado = (220- $edad) / 10;
                
            echo "<br>El número de pulsaciones cada 10 segundo es: $resultado<br>";
        }

    echo "<form action='index.php#e13' method='post' class='eform'><input type='number' name='edad'  value='' placeholder='Edad'/><input type='submit' name='button' value='Calculate' class='ebtn'/></form>";

    pulsations();

?>
</div>


<div class='box' id='e14'>
<?php
            
    echo "<div class='hdform'><img src='images/budget.png' alt='image'><h1 class='exerc'>Budget</h1><!--<p lass='descript'>El siguiente programa calcula la asignación presupuestal para las áreas del hospital.</p>--></div>";

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

    echo "<form action='index.php#e14' method='post' class='eform'><label>Presupuesto anual:</lable><input type='number' name='total'  value='' placeholder='Total presupuesto para el año'/><br><label>Ginecología:</lable><input type='number' name='area1'  value='40' placeholder='Asignación presupuestal %'/><br><label>Traumatología:</lable><input type='number' name='area2'  value='30' placeholder='Asignación presupuestal %'/><br><label>Pediatría:</lable><input type='number' name='area3'  value='30' placeholder='Asignación presupuestal %'/><br><input type='submit' name='button' value='Calculate' class='ebtn'/></form>";

    setBudget();

?>
</div>


<div class='box' id='e15'>
        <?php
            
            echo "<div class='hdform'><img src='images/salary.png' alt='image'><h1>Salary</h1></div>";
            
            echo "<h3>El siguiente programa calcula el total de ingreso a recibir de acuerdo con las comisiones.</h3><br>";

            function MyIncome () {
                $basico = $_POST['basico'];
                $ventas = $_POST['ventas'];
                $comisiones = $ventas * 0.10;
                $resultado = $basico + $comisiones;
                echo "<br>El empleado tendrá un salario de: $basico más: $comisiones por concepto de comisiones. Total: $resultado<br>";
                echo "Formúla: básico + ventas * 10%<br>";
            }
        ?>

        <form action="index.php#e15" method="post">
        <input type="text" name="basico"  value="" placeholder="Salario básico"/>
        <input type="text" name="ventas"  value="" placeholder="Ventas del mes"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            MyIncome();
        ?>
</div>
<div class='box' id='e16'>
        <?php
            
            echo "<div class='hdform'><img src='images/raise.png' alt='image'><h1>New Salary</h1></div>";
            
            echo "<h3>El siguiente programa calcula el incremento salarial.</h3><br>";

            function raisePayment () {
                $current_salary = $_POST['current_salary'];
                $raise = $_POST['raise'];
                $resultado = $current_salary + ($current_salary * $raise/100);
                echo "<br>El nuevo salario es de: $resultado<br>";
            }
        ?>

        <form action="index.php#e16" method="post">
        <input type="text" name="current_salary"  value="" placeholder="Salario actual"/>
        <input type="text" name="raise"  value="25" placeholder="% Incremento"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            raisePayment();
        ?>
</div>
<div class='box' id='e17'>
        <?php
            
            echo "<div class='hdform'><img src='images/invest.png' alt='image'><h1>Invest</h1></div>";
            
            echo "<h3>El siguiente programa calcula la rentabilidad mensual de una inversión.</h3><br>";

            function getIncome () {
                $capital = $_POST['capital'];
                $interes = $_POST['interes'];
                $resultado = $capital * $interes / 100;
                echo "<br>La rentabilidad de invertir: $capital al: $interes % es de: $resultado<br>";
                echo "Formúla: capital*interes/100<br>";
            }
        ?>

        <form action="index.php#e17" method="post">
        <input type="text" name="capital"  value="" placeholder="Capital invertido"/>
        <input type="text" name="interes"  value="" placeholder="Interes mensual"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            getIncome();
        ?>
</div>
<div class='box' id='e18'>
        <?php
            
            echo "<div class='hdform'><img src='images/price.png' alt='image'><h1>Price to sell</h1></div>";
            
            echo "<h3>El siguiente programa calcula el precio de venta sugerido para un producto.</h3><br>";

            function pricing () {
                $costo = $_POST['costo'];
                $ganancia = $_POST['ganancia'];
                $resultado = $costo * (1 + ($ganancia/100)); 
                echo "<br>El precio de venta sugerido para obtener una gancia del: $ganancia%  es de: $resultado<br>";
            }
        ?>

        <form action="index.php#e18" method="post">
        <input type="text" name="costo"  value="" placeholder="Costo proveedor $"/>
        <input type="text" name="ganancia"  value="30" placeholder="Ganancia esperada %"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            pricing();
        ?>
</div>
<div class='box' id='e19'>

        <?php
            
            echo "<div class='hdform'><img src='images/triangle.png' alt='image'><h1>Rombo área</h1></div>";
            
            echo "<h3>El siguiente programa calcula el área de un rombo.</h3><br>";

            function areaRombo () {
                $D = $_POST['diagonalM'];
                $d = $_POST['diagonalm'];
                $resultado = $D * $d / 2;
                echo "<br>El área del rombo de diagonal mayor: $D y diagonal menor: $d es: $resultado cm2<br>";
            }
        ?>

        <form action="index.php#e19" method="post">
        <input type="text" name="diagonalM"  value="" placeholder="Diagonal mayor:"/>
        <input type="text" name="diagonalm"  value="" placeholder="Diagonal menor:"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            areaRombo();
        ?>

</div>
<div class='box' id='e20'>
    <?php
            
            echo "<div class='hdform'><img src='images/triangle.png' alt='image'><h1>Rombo perimeter</h1></div>";
            
            echo "<h3>El siguiente programa calcula el perimetro de un rombo.</h3><br>";

            function perimeterRombo () {
                $l = $_POST['lado'];
                $resultado = $l * 4;
                echo "<br>El perimetro del rombo de lado: $l es: $resultado cm<br>";
            }
        ?>

        <form action="index.php#e20" method="post">
        <input type="text" name="lado"  value="" placeholder="Lado del rombo:"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            perimeterRombo();
        ?>
</div>
<div class='box' id='e21'>
        <?php
            
            echo "<div class='hdform'><img src='images/school.png' alt='image'><h1>Students by gender</h1></div>";
            
            echo "<h3>El siguiente programa muestra el porcentaje de alumnos hombres y mujeres</h3><br>";

            function getPortion () {
                $hombres = $_POST['hombres'];
                $mujeres = $_POST['mujeres'];
                $H = ($hombres/($hombres + $mujeres))*100;
                $M = ($mujeres/($hombres + $mujeres))*100;
                echo "<br>El grupo de alumnos se conforma de un: $M% de mujeres y un: $H% de hombres";
            }
        ?>

        <form action="index.php#e21" method="post">
        <input type="text" name="hombres"  value="" placeholder="Total de hombres en el grupo"/>
        <input type="text" name="mujeres"  value="" placeholder="Total de mujeres en el grupo"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            getPortion();
        ?>
</div>
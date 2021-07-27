<!DOCTYPE html>
<html>
<head>
	<title></title>
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

        <hr>

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

        <hr>

        <?php
            
            echo "<h1>MyArea2</h1>";
            
            echo "<h3>El siguiente programa calcula el área de un triángulo equilátero.</h3><br>";

            function areaTrianguloE () {
                $l = $_POST['lado'];
                $h = sqrt(3)/2 * $l;
                $resultado = $l * $h / 2;
                echo "<br>El área del triángulo equilátero de lado: $l es: $resultado<br>";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="lado"  value="" placeholder="Lado del triángulo:"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            areaTrianguloE();
        ?>

        <hr>

        <?php
            
            echo "<h1>MyArea3</h1>";
            
            echo "<h3>El siguiente programa calcula el área de un triángulo rectángulo.</h3><br>";

            function areaTrianguloR () {
                $l1 = $_POST['lado1'];
                $l2 = $_POST['lado2'];
                $resultado = $l1 * $l2 / 2;
                echo "<br>El área del triángulo rectángulo de lados: $l1 y $l2 es: $resultado cm2<br>";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="lado1"  value="" placeholder="Lado 1 del triángulo:"/>
        <input type="text" name="lado2"  value="" placeholder="Lado 2 del triángulo:"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            areaTrianguloR();
        ?>

        <hr>

        <?php
            
            echo "<h1>MyAverage</h1>";
            
            echo "<h3>El siguiente programa calcula el promedio de las asignaturas de un alumno.</h3><br>";

            function MyAverage () {
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
            MyAverage();
        ?>

        <hr>

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

        <hr>

        <?php
            
            echo "<h1>MyArea!</h1>";
            
            echo "<h3>El siguiente programa calcula el área de un circulo.</h3><br>";

            function areaCirculo () {
                $d = $_POST['diametro'];
                $r = $d / 2;
                $resultado = 3.141619 * $r ** 2;
                echo "<br>El área del círculo de diámetro: $d es de: $resultado<br>";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="diametro"  value="" placeholder="Diámetro del circulo:"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            areaCirculo();
        ?>

        <hr>

        <?php
            
            echo "<h1>Currency exchange</h1>";
            
            echo "<h3>El siguiente programa muestra el porcentaje de alumnos hombres y mujeres</h3><br>";

            function convertCoins () {
                $pesos = $_POST['pesos'];
                $dolar = $_POST['dolar'];
                $resultado = $pesos / $dolar;
                echo "<br>A un precio por dólar de: $dolar, $pesos pesos equivalen a: $resultado dólares.";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="pesos"  value="" placeholder="Cantidad de pesos que quiere cambiar"/>
        <input type="text" name="dolar"  value="" placeholder="Valor del dólar"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            convertCoins();
        ?>

        <hr>

        <?php
            
            echo "<h1>MyDiscount</h1>";
            
            echo "<h3>El siguiente programa calcula el valor final de los artículos según el descuento aplicado.</h3><br>";

            function MyDiscount () {
                $costo = $_POST['costo'];
                $porcentaje = $_POST['porcentaje'];
                $descuento = $costo * $porcentaje/100;
                $resultado = $costo - $descuento;
                echo "<br>El valor final de la compra es de: $costo menos: $descuento del $porcentaje de descuento. Total: $resultado<br>";
                echo "Formúla: costo - descuento<br>";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="costo"  value="" placeholder="Costo de los artículos"/>
        <input type="text" name="porcentaje"  value="15" placeholder="% de descuento"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            MyDiscount();
        ?>

        <hr>

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

        <hr>

        <?php
            
            echo "<h1>Relacion masa</h1>";
            
            echo "<h3>El siguiente programa calcula la relación de la masa con la presión, el volumen y la temperatura</h3><br>";

            function getMasa () {
                $presion = $_POST['presion'];
                $volumen = $_POST['volumen'];
                $temperatura= $_POST['temperatura'];
                $masa = ($presion * $volumen) / (0.37 * ($temperatura + 460));
                echo "<br>Masa = $masa<br>";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="presion"  value="" placeholder="Presión:"/>
        <input type="text" name="volumen"  value="" placeholder="Volumen:"/>
        <input type="text" name="temperatura"  value="" placeholder="Temperatura:"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            getMasa();
        ?>

        <hr>

        <?php
            
            echo "<h1>MyGrades</h1>";
            
            echo "<h3>El siguiente programa calcula la nota definitiva de un alumno según la rúbrica de calificaciones.</h3><br>";

            function MyFinal () {
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
            MyFinal();
        ?>

        <hr>

        <?php
            
            echo "<h1>Health Tracker</h1>";
            
            echo "<h3>El siguiente programa calcula el número de pulsaciones.</h3><br>";

            function pulsations () {
                $edad = $_POST['edad'];
                $resultado = (220- $edad) / 10;
                echo "<br>El número de pulsaciones cada 10 segundo es: $resultado<br>";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="edad"  value="" placeholder="Edad"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            pulsations();
        ?>

        <hr>

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

        <hr>

        <?php
            
            echo "<h1>Salary</h1>";
            
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

        <form action="#" method="post">
        <input type="text" name="basico"  value="" placeholder="Salario básico"/>
        <input type="text" name="ventas"  value="" placeholder="Ventas del mes"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            MyIncome();
        ?>

        <hr>

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

        <hr>

        <?php
            
            echo "<h1>Invest</h1>";
            
            echo "<h3>El siguiente programa calcula la rentabilidad mensual de una inversión.</h3><br>";

            function getIncome () {
                $capital = $_POST['capital'];
                $interes = $_POST['interes'];
                $resultado = $capital * $interes / 100;
                echo "<br>La rentabilidad de invertir: $capital al: $interes % es de: $resultado<br>";
                echo "Formúla: capital*interes/100<br>";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="capital"  value="" placeholder="Capital invertido"/>
        <input type="text" name="interes"  value="" placeholder="Interes mensual"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            getIncome();
        ?>

        <hr>

        <?php
            
            echo "<h1>Price to sell</h1>";
            
            echo "<h3>El siguiente programa calcula el precio de venta sugerido para un producto.</h3><br>";

            function pricing () {
                $costo = $_POST['costo'];
                $ganancia = $_POST['ganancia'];
                $resultado = $costo * (1 + ($ganancia/100)); 
                echo "<br>El precio de venta sugerido para obtener una gancia del: $ganancia%  es de: $resultado<br>";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="costo"  value="" placeholder="Costo proveedor $"/>
        <input type="text" name="ganancia"  value="30" placeholder="Ganancia esperada %"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            pricing();
        ?>

        <hr>

        <?php
            
            echo "<h1>Rombo área</h1>";
            
            echo "<h3>El siguiente programa calcula el área de un rombo.</h3><br>";

            function areaRombo () {
                $D = $_POST['diagonalM'];
                $d = $_POST['diagonalm'];
                $resultado = $D * $d / 2;
                echo "<br>El área del rombo de diagonal mayor: $D y diagonal menor: $d es: $resultado cm2<br>";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="diagonalM"  value="" placeholder="Diagonal mayor:"/>
        <input type="text" name="diagonalm"  value="" placeholder="Diagonal menor:"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            areaRombo();
        ?>

        <hr>

        <?php
            
            echo "<h1>Rombo perimeter</h1>";
            
            echo "<h3>El siguiente programa calcula el perimetro de un rombo.</h3><br>";

            function perimeterRombo () {
                $l = $_POST['lado'];
                $resultado = $l * 4;
                echo "<br>El perimetro del rombo de lado: $l es: $resultado cm<br>";
            }
        ?>

        <form action="#" method="post">
        <input type="text" name="lado"  value="" placeholder="Lado del rombo:"/>
        <input type="submit" name="button" value="Calculate"/>
        </form>

        <?php
            perimeterRombo();
        ?>

        <hr>

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
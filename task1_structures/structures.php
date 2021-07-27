<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

        <?php
            
            echo "<h1>Ejercicio # 11</h1>";
            
            echo "<h3> Hacer un algoritmo que calcule el total a pagar por la compra de camisas. Si se compran tres camisas o 
            más se aplica un descuento del 20% sobre el total de la compra y si son menos de tres camisas un 
            descuento del 10%</h3><br>";

            function doRead11 () {
                $prod = $_POST['prod'];
                $cant = $_POST['cant'];

                setlocale(LC_MONETARY, 'es_ES');

                echo "Descripción: Llantas X $cant<br>";

                if ($cant >= 5) {
                    $total = money_format('%i',(70000 * $cant));
                    echo "Vlr/Unidad: $70000.00 // Total: $total.<br>";
                } elseif ($key < 5) {
                    $total = money_format('%i',(80000 * $cant));
                    echo "Vlr/Unidad: $80000.00 // Total: $total.<br>";
                }
            }
        ?>

        <form action="#" method="post">
        <label>Producto:</lable>
        <select type="" name="prod"  value="" placeholder="Selección..."/>
            <option value="1">Llanta</option>
        </select><br>
        <label>Cantidad:</lable>
        <select type="" name="cant"  value="" placeholder="Selección..."/>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select><br>
        <input type="submit" name="button" value="LEER"/><br>
        </form>

        <?php

            doRead11();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>

        <?php
            
            echo "<h1>Ejercicio # 10</h1>";
            
            echo "<h3>Hacer un algoritmo que imprima el nombre de un artículo, clave, precio original y su precio con 
            descuento. El descuento lo hace en base a la clave, si la clave es 1 el descuento es del 10% y si la clave 
            es 2 el descuento es del 20% (solo existen dos claves). </h3><br>";

            function doRead10 () {
                $prod = $_POST['prod'];
                $price = $_POST['price'];
                $key = $_POST['key'];

                setlocale(LC_MONETARY, 'es_ES');

                echo "Arículo: Producto 1<br>";
                echo "Clave: $key<br>";
                echo ("Valor sin dcto: $" . money_format('%i', $price) . "<br>");

                if ($key == 1) {
                    $discount = $price * 0.90;
                    echo ("Valor con dcto: $" . money_format('%i', $discount) . "<br>");
                } elseif ($key == 2) {
                    $discount = $price * 0.80;
                    echo ("Valor con dcto: $" . money_format('%i', $discount) . "<br>");
                }
            }
        ?>

        <form action="#" method="post">
        <label>Producto:</lable>
        <select type="" name="prod"  value="" placeholder="Selección..."/>
            <option value="1">Porducto 1</option>
        </select><br>
        <label>Precio:</lable>
        <input type="number" name="price"  value="" placeholder="Precio $"/><br>
        <label>Clave:</lable>
        <select type="" name="key"  value="" placeholder="Selección..."/>
            <option value="1">1</option>
            <option value="2">2</option>
        </select><br>
        <input type="submit" name="button" value="LEER"/><br>
        </form>

        <?php

            doRead10();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>

        <hr>

        <?php
            
            echo "<h1>Ejercicio # 17</h1>";
            
            echo "<h3>En una fábrica de computadoras se planea ofrecer a los clientes un descuento que dependerá del número de computadoras que compre. Si las computadoras son menos de cinco se les dará un 10% de descuento sobre el total de la compra; si el número de computadoras es mayor o igual a cinco pero menos de diez se le otorga un 20% de descuento; y si son 10 o más se les da un 40% de descuento. El precio de cada computadora es de $11,000.</h3><br>";

            function doRead17 () {

                $person = $_POST['person'];
                $cant = $_POST['cant'];
                $price = $_POST['price'];
    
                $total = $cant * $price;
    
                if ($cant < 5) {
                    $discount = $total * 0.10;
                    $pay = $total - $discount;
                    echo "$person obtienes un descuento del 10%!!<br>";
                    echo "Total a pagar $pay - Ahorraste: $discount<br>";
                } elseif ($cant >= 5 && $cant < 10) {
                    $discount = $total * 0.20;
                    $pay = $total - $discount;
                    echo "$person obtienes un descuento del 20%!!<br>";
                    echo "Total a pagar $pay - Ahorraste: $discount<br>";
                } elseif ($cant >= 10) {
                    $discount = $total * 0.40;
                    $pay = $total - $discount;
                    echo "$person obtienes un descuento del 40%!!<br>";
                    echo "Total a pagar $pay - Ahorraste: $discount<br>";
                }
            }

        ?>

        <form action="" method="post">
            <label><h2>Descuentos por computadoras</h2></label><br>
            <label>Cliente:</label>
            <input type="text" name="person"/>
            <label>Cantidad:</label>
            <input type="number" name="cant" value="0"/>
            <label>Precio:</label>
            <input type="number" name="price" value="11000"/>
            <input type="submit" value="Validar"/>
        </form>

        <?php

            doRead17();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>

        <hr>

        <?php
            
            echo "<h1>Ejercicio # 20</h1>";
            
            echo "<h3>Una frutería ofrece las manzanas con descuento según la siguiente tabla: 
            NUM. DE KILOS COMPRADOS  % DESCUENTO 
                     0 - 2                0%
                  2.01 - 5               10%
                  5.01 - 10              15%
                 10.01 en adelante          20%
           Determinar cuánto pagara una persona que compre manzanas es esa frutería</h3><br>";

            function doRead20 () {

                $cant = $_POST['cant'];
                $price = $_POST['price'];
    
                if ($cant > 10) {
                    echo "Recibes un 20% de descuento!<br>";
                    $discount = ($cant * $price) * 0.80;
                    echo "Valor a pagar: $discount.<br>";
                } elseif ($cant > 5 && $cant <=10) {
                    echo "Recibes un 15% de descuento!<br>";
                    $discount = ($cant * $price) * 0.85;
                    echo "Valor a pagar: $discount.<br>";
                } elseif ($cant > 2 && $cant <=5) {
                    echo "Recibes un 10% de descuento!<br>";
                    $discount = ($cant * $price) * 0.90;
                    echo "Valor a pagar: $discount.<br>";
                } else {
                    $discount = ($cant * $price) * 1;
                    echo "Valor a pagar: $discount.<br>";
                }
            }

        ?>

        <form action="" method="post">
            <label><h2>Descuentos en frutería</h2></label><br>
            <label>Producto:</label>
            <select name="product">
                <option value="1">Manzanas</option>
            </select>
            <label>Cantidad (Kgs):</label>
            <input type="number" name="cant" value="1"/>
            <label>Precio:</label>
            <input type="number" name="price" value=""/>
            <input type="submit" value="Comprar"/>
        </form>

        <?php

            doRead20();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>

        <?php
            
            echo "<h1>Ejercicio # 19</h1>";
            
            echo "<h3>Un proveedor de estéreos ofrece un descuento del 10% sobre el precio sin IVA, de algún aparato si este cuesta $20.000 o más. Además, independientemente de esto, ofrece un 5% de descuento si la marca es “NOSY”. Determinar cuánto pagara, con IVA incluido, un cliente cualquiera por la compra de su aparato</h3><br>";

            function doRead19 () {

                $branch = $_POST['branch'];
                $price = $_POST['price'];
                $iva = $_POST['iva'];
    
                if ($price >= 20000) {
                    if ($branch = 1) {
                        echo "El artículo tiene un descuento del 15%!<br>";
                        $total_si = $price * 0.85;
                        $total_ci = $total_si * (1 + ($iva / 100));
                        echo "Valor a pagar: $total_ci (iva incluído)<br>";
                    } else {
                        echo "El artículo tiene un descuento del 10%!<br>";
                        $total_si = $price * 0.90;
                        $total_ci = $total_si * (1 + ($iva / 100));
                        echo "Valor a pagar: $total_ci (iva incluído)<br>";
                    }
                } else {
                    $total_si = $price;
                    $total_ci = $total_si * (1 + ($iva / 100));
                    echo "Valor a pagar: $total_ci (iva incluído)<br>";
                }
            }

        ?>

        <form action="" method="post">
            <label><h2>Descuentos por estéreos</h2></label><br>
            <label>Producto:</label>
            <select name="product">
                <option value="1">Estéreos</option>
            </select>
            <label>Marca:</label>
            <select name="branch">
                <option value="1">NOSY</option>
                <option value="2">Otras</option>
            </select>
            <label>Precio (sin iva):</label>
            <input type="number" name="price" value="20000"/>
            <label>% iva:</label>
            <input type="number" name="iva" value="19"/>
            <input type="submit" value="Comprar"/>
        </form>

        <?php

            doRead19();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>

        <?php
            
            echo "<h1>Ejercicio # 18</h1>";
            
            echo "<h3>En una venta de llantas se ha establecido una promoción de las llantas marca “Ponchadas”, dicha promoción consiste en lo siguiente: 
            Si se compran menos de cinco llantas el precio es de $30.000 cada una, de $25.000 si se compran de cinco a 10 y de $20.000 si se compran más de 10. Obtener la cantidad de dinero que una persona tiene que pagar por cada una de las llantas que compra y la que tiene que pagar por el total de la compra.</h3><br>";

            function doRead18 () {

                $cant = $_POST['cant'];
    
                if ($cant < 5) {
                    $total = $cant * 30000;
                    echo "Valor unitario: 30000<br>";
                    echo "Costo total: $total<br>";
                } elseif ($cant >= 5 && $cant < 10) {
                    $total = $cant * 25000;
                    echo "Valor unitario: 25000<br>";
                    echo "Costo total: $total<br>";
                } elseif ($cant >= 10) {
                    $total = $cant * 20000;
                    echo "Valor unitario: 20000<br>";
                    echo "Costo total: $total<br>";
                }
            }

        ?>

        <form action="" method="post">
            <label><h2>Descuentos por llantas</h2></label><br>
            <label>Producto:</label>
            <select name="product">
                <option value="1">Llantas</option>
            </select>
            <label>Marca:</label>
            <select name="branch">
                <option value="1">Ponchadas</option>
            </select>
            <label>Cantidad:</label>
            <input type="number" name="cant" value="1"/>
            <input type="submit" value="Comprar"/>
        </form>

        <?php

            doRead18();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>

        <?php
            
            echo "<h1>Ejercicio # 5</h1>";
            
            echo "<h3>Lea dos números, calcule el cociente de dividir el primero por el segundo. Imprima el cociente. Pero 
            recuerde que antes de hacer la división debe evaluar que el divisor no sea igual a cero (0). Porque en este 
            caso debe imprimir 'la división no es posible'.</h3><br>";

            function doRead5 () {
                $x = $_POST['x'];
                $y = $_POST['y'];
                if ($y != 0) {
                    $result = $x/$y;
                    echo "<br>Resultado: $result<br>";
                } else {
                    echo "<br>La división no es posible.";
                }
            }
        ?>

        <form action="#" method="post">
        <label>Divisor:</lable>
        <input type="number" name="x"  value="" placeholder="Divisor"/>
        <label>Dividendo:</lable>
        <input type="number" name="y"  value="" placeholder="Dividendo"/>
        <input type="submit" name="button" value="LEER"/>
        </form>

        <?php

            doRead5();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>

        <hr>

        <?php
            
            echo "<h1>Ejercicio # 6</h1>";
            
            echo "<h3>Para un salario bruto hasta de $ 250.500 no hay retención. Para un salario bruto de $ 250.501 a $ 
            300.000 el porcentaje de retención es de 5%. para un salario bruto mayor a $300.000 el porcentaje de 
            retención es del 8%. Imprimir el nombre del empleado, el salario bruto, el valor de la retención y el salario 
            neto (salario bruto menos la retención.</h3><br>";

            function doRead6 () {
                $name = $_POST['name'];
                $salary = $_POST['salary'];
                if ($salary <= 250000) {
                    $withol = 0;
                    $pay = $salary - $withol;
                    echo "<br>Empleado: $name";
                    echo "<br>Básico: $salary";
                    echo "<br>Retención: $withol";
                    echo "<br>Neto: $pay";
                } elseif ($salary > 250000 && $salary <= 300000) {
                    $withol = $salary * 0.05;
                    $pay = $salary - $withol;
                    echo "<br>Empleado: $name";
                    echo "<br>Básico: $salary";
                    echo "<br>Retención: $withol";
                    echo "<br>Neto: $pay";
                }
                else {
                    $withol = $salary * 0.08;
                    $pay = $salary - $withol;
                    echo "<br>Empleado: $name";
                    echo "<br>Básico: $salary";
                    echo "<br>Retención: $withol";
                    echo "<br>Neto: $pay";
                }
            }
        ?>

        <form action="#" method="post">
        <label>Empleado:</lable>
        <input type="text" name="name"  value="" placeholder="Nombre"/>
        <label>Salario:</lable>
        <input type="number" name="salary"  value="" placeholder="Salario base"/>
        <input type="submit" name="button" value="LEER"/>
        </form>

        <?php

            doRead6();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>

        <hr>

        <?php
            
            echo "<h1>Ejercicio # 1</h1>";
            
            echo "<h3>Lea el nombre, la edad y el sexo (1= femenino, 2= masculino) de una persona y si esta es de sexo 
            masculino y mayor de edad imprima el nombre, de lo contrario imprima el nombre y edad de la persona.</h3><br>";

            function doRead1 () {
                $name = $_POST['name'];
                $age = $_POST['age'];
                $gender = $_POST['gender'];
                if ($gender == 2 && $age >= 18) {
                    echo "<br>Name: $name<br>";
                } else {
                    echo "<br>name: $name // age: $age<br>";
                }
            }
        ?>

        <form action="#" method="post">
        <label>Nombre:</lable>
        <input type="text" name="name"  value="" placeholder="Nombre"/>
        <label>Edad</lable>
        <input type="text" name="age"  value="" placeholder="Edad"/>
        <label>Sexo:</lable>
        <select type="" name="gender"  value="" placeholder="Selección..."/>
            <option value="1">F</option>
            <option value="2">M</option>
        </select><br>
        <input type="submit" name="button" value="LEER"/>
        </form>

        <?php

            doRead1();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>

        <hr>

        <?php
            
            echo "<h1>Ejercicio # 7</h1>";
            
            echo "<h3>Leer el nombre de un empleado, el salario básico por hora y el número de horas trabajadas durante una 
            semana. Calcular el salario neto, teniendo en cuenta que, si el número de horas trabajadas durante la 
            semana es mayor a 48, esas horas de más se consideran horas extras y tienen un 25% de recargo.</h3><br>";

            function doRead7 () {
                $name = $_POST['name'];
                $vhr = $_POST['vhr'];
                $hrs = $_POST['hrs'];
                if ($hrs > 48) {
                    $add = $hrs - 48;
                    $normal = 48 * $vhr;
                    $extra = $add * ($vhr * 1.25);
                    $total = $normal + $extra;
                    echo "<br>Empleado: $name";
                    echo "<br>Valor hora: $vhr";
                    echo "<br>Pago horas extras: $extra";
                    echo "<br>Total: $total";
                } else {
                    $normal = $hrs * $vhr;
                    $extra = 0;
                    $total = $normal + $extra;
                    echo "<br>Empleado: $name";
                    echo "<br>Valor hora: $vhr";
                    echo "<br>Pago horas extras: $extra";
                    echo "<br>Total: $total";
                }
            }
        ?>

        <form action="#" method="post">
        <label>Empleado:</lable>
        <input type="text" name="name"  value="" placeholder="Nombre"/>
        <label>Salario por hora:</lable>
        <input type="number" name="vhr"  value="3773" placeholder="Salario por hora"/>
        <label>Horas trabajadas:</lable>
        <input type="number" name="hrs"  value="48" placeholder="Total horas trabajadas en la semana"/>
        <input type="submit" name="button" value="LEER"/>
        </form>

        <?php

            doRead7();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>

        <hr>

        <?php
            
            echo "<h1>Ejercicio # 8</h1>";
            
            echo "<h3>Un hombre desea saber cuánto dinero se genera por concepto de intereses sobre la cantidad que tiene 
            en inversión en el banco. El decidirá reinvertir los intereses siempre y cuando estos excedan a $7000, y 
            en ese caso desea saber cuánto dinero tendrá finalmente en su cuenta.</h3><br>";

            function doRead8 () {
                $cap = $_POST['cap'];
                $rate = $_POST['rate'];
                $time = $_POST['time'];

                for ($i=1;$i<=$time;$i++) {
                    $margin = $cap*($rate/100);
                    if ($margin >= 7000) {
                        setlocale(LC_MONETARY, 'es_ES');
                        echo ("Utilidad Mes $i = $" . money_format('%i', $margin) . "<br>");
                        $cap += $margin;
                        echo ("Reinversión = $" . money_format('%i', $cap) . "<hr>");
                    } else {
                        echo "No se genera rentabilidad necesaria<br>";
                        break;
                    }
                }
            }
        ?>

        <form action="#" method="post">
        <label>Capital:</lable>
        <input type="Number" name="cap"  value="" placeholder="Inversión inicial"/><br>
        <label>Tasa de interés:</lable>
        <input type="number" name="rate"  value="" placeholder="% de interés mensual"/><br>
        <label>Periodos de reinversión::</lable>
        <select type="" name="time"  value="" placeholder="Selección..."/>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">9</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select><br>
        <input type="submit" name="button" value="LEER"/><br>
        </form>

        <?php

            doRead8();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>

        <hr>

        <?php
            
            echo "<h1>Ejercicio # 2</h1>";
            
            echo "<h3>Lea el nombre, la edad, el sexo (1= femenino, 2= masculino) y el estado civil (1= soltero, 2 = casado, 3 = 
            otro) de una persona e imprima el nombre y la edad de la persona sólo si esta es mujer menor de edad, 
            de lo contrario indique que estado civil tiene esa persona.</h3><br>";

            function doRead2 () {
                $name = $_POST['name'];
                $age = $_POST['age'];
                $gender = $_POST['gender'];
                $mstatus = $_POST['mstatus'];
                if ($gender == 1 && $age < 18) {
                    echo "<br>Nombre: $name // Edad: $age<br>";
                } else {
                    if ($mstatus == 1) {
                    echo "<br>Nombre: $name // ES: Soltero<br>";
                    } elseif ($mstatus == 2) {
                    echo "<br>Nombre: $name // ES: Casado<br>";
                    } else {
                        echo "<br>Nombre: $name // ES: Otro<br>"; 
                    }
                }
            }
        ?>

        <form action="#" method="post">
        <label>Nombre:</lable>
        <input type="text" name="name"  value="" placeholder="Nombre"/>
        <label>Edad</lable>
        <input type="text" name="age"  value="" placeholder="Edad"/>
        <label>Sexo:</lable>
        <select type="" name="gender"  value="" placeholder="Selección..."/>
            <option value="1">F</option>
            <option value="2">M</option>
        </select><br>
        <label>Estado civil:</lable>
        <select type="" name="mstatus"  value="" placeholder="Selección..."/>
            <option value="1">Soltero</option>
            <option value="2">Casado</option>
            <option value="3">Otro</option>
        </select><br>
        <input type="submit" name="button" value="LEER"/>
        </form>

        <?php

            doRead2();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>

        <hr>

        <?php
            
            echo "<h1>Ejercicio # 14</h1>";
            
            echo "<h3>Calcular el número de pulsaciones que debe tener una persona por cada 10 segundos de ejercicio aeróbico; la fórmula que se aplica cuando el sexo es femenino es: num. pulsaciones = (220 - edad)/10 y si el sexo es masculino: num. pulsaciones = (210 - edad)/10</h3><br>";

            function doRead14 () {

                $name = $_POST['name'];
                $age = $_POST['age'];
                $gender = $_POST['gender'];
    
                if ($gender == 1) {
                    $result = (210-$age)/10;
                    echo "Las pulsaciones en ejercicio aeróbico de $name deben ser de $result/10seg.";
                } elseif ($gender == 2) {
                    $result = (220-$age)/10 ;
                    echo "Las pulsaciones en ejercicio aeróbico de $name deben ser de $result/10seg.";
                }
            }
        ?>

        <form action="" method="post">
            <label><h2>Obtener pulsaciones</h2></label><br>
            <label>Nombre:</label>
            <input type="text" name="name"/>
            <label>Edad:</label>
            <input type="number" name="age"/>
            <label>Seleccione el género:</label>
            <select name="gender">
                <option value="1">M</option>
                <option value="2">F</option>
            </select>
            <input type="submit" value="Calcular"/>
        </form>

        <?php

            doRead14();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>

        <?php
            
            echo "<h1>Ejercicio # 15</h1>";
            
            echo "<h3>El IMSS requiere clasificar a las personas que se jubilaran en el año de 1997. Existen tres tipos de jubilaciones: por edad, por antigüedad joven y por antigüedad adulta. Las personas adscritas a la jubilación por edad deben tener 60 años o más y una antigüedad en su empleo de menos de 25 años.
            Las personas adscritas a la jubilación por antigüedad joven deben tener menos de 60 años y una antigüedad en su empleo de 25 años o más. Las personas adscritas a la jubilación por antigüedad adulta deben tener 60 años o más y una antigüedad en su empleo de 25 años o más.</h3><br>";

            function doRead15 () {

                $person = $_POST['person'];
                $year = $_POST['year'];
                $age = $_POST['age'];
    
                $time = 1997 - $year;
    
                if ($time < 25 && $age >= 60) {
                    echo "$person será beneficiario en la categoría de EDAD.";
                } elseif ($time >= 25 && $age < 60) {
                    echo "$person será beneficiario en la categoría de ANTIGUEDAD JOVEN.";
                } elseif ($time >= 25 && $age >= 60) {
                    echo "$person será beneficiario en la categoría de ANTIGUEDAD ADULTA.";
                }
            }

        ?>

        <form action="" method="post">
            <label><h2>Clasificar ruta de jubilación (1997)</h2></label><br>
            <label>Beneficiario:</label>
            <input type="text" name="person"/>
            <label>Año de ingreso:</label>
            <input type="number" name="year" value="1972"/>
            <label>Edad:</label>
            <input type="number" name="age" value="60"/>
            <input type="submit" value="Validar"/>
        </form>

        <?php

            doRead15();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>

        <hr>

        <?php
            
            echo "<h1>Ejercicio # 13</h1>";
            
            echo "<h3>En un supermercado se hace una promoción, mediante la cual el cliente obtiene un descuento 
            dependiendo de un número que se escoge al azar. Si el número escogido es menor que 74 el descuento 
            es del 15% sobre el total de la compra, si es mayor o igual a 74 el descuento es del 20%. Obtener cuánto dinero se le descuenta.</h3><br>";

            function doRead13 () {

                $charge = $_POST['charge'];
    
                    
                $getnumber = rand(1,100);
    
                echo "Sacaste el número $getnumber<br>";
    
                if ($getnumber < 74) {
                    $discount = $charge * 0.15;
                    echo "Obtienes un descuento del 15% equivalente a $discount";
                } elseif ($getnumber > 74) {
                    $discount = $charge * 0.20;
                    echo "Obtienes un descuento del 20% equivalente a $discount";
                }
            }
        ?>

        <form action="" method="post">
            <label><h2>Obtener descuento</h2></label>
            <input type="number" name="charge" placeholder="Valor de la compra" />
            <input type="submit" value="Participar!"/>
        </form>

        <?php

            doRead13();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>

        <hr>

        <?php
            
            echo "<h1>Ejercicio # 15</h1>";
            
            echo "<h3>Una compañía de seguros está abriendo un depto. de finanzas y estableció un programa para captar clientes, que consiste en lo siguiente: Si el monto por el que se efectúa la fianza es menor que $50 000 la cuota a pagar será por el 3% del monto, y si el monto es mayor que $50 000 la cuota a pagar será el 2% del monto. La afianzadora desea determinar cuál será la cuota que debe pagar un cliente.</h3><br>";

            function doRead15 () {

                $costumer = $_POST['costumer'];
                $debt = $_POST['debt'];
    
                if ($debt <= 50000) {
                    $result = $debt * 0.03;
                    echo "El valor de la fianza para el cliente es: $result";
                } elseif ($debt > 50000) {
                    $result = $debt * 0.02;
                    echo "El valor de la fianza para el cliente es: $result";
                }
            }

        ?>

        <form action="" method="post">
            <label><h2>Obtener monto fianza</h2></label><br>
            <label>Cliente:</label>
            <input type="text" name="costumer"/>
            <label>Valor de la fianza:</label>
            <input type="number" name="debt"/>
            <input type="submit" value="Calcular"/>
        </form>

        <?php

            doRead15();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>

        <hr>

        <?php
            
            echo "<h1>Ejercicio # 9</h1>";
            
            echo "<h3>Una persona enferma, que pesa 70 kg, se encuentra en reposo y desea saber cuántas calorías consume 
            su cuerpo durante todo el tiempo que realice una misma actividad. Las actividades que tiene permitido 
            realizar son únicamente dormir o estar sentado en reposo. Los datos que tiene son que estando dormido 
            consume 1.08 calorías por minuto y estando sentado en reposo consume 1.66 calorías por minuto.</h3><br>";

            function doRead9 () {
                $wg = $_POST['wg'];
                $time = $_POST['time'];
                $act = $_POST['act'];

                if ($act == 1) {
                    $result = $time * 1.66;
                    echo "El consumo de calorias al estar sentado en reposo durante $time minutos es de: $result calorias. <br>";
                }
                if ($act == 2) {
                    $result = $time * 1.08;
                    echo "El consumo de calorias al estar dormido durante $time minutos es de: $result calorias. <br>";
                }
            }
        ?>

        <form action="#" method="post">
        <label>Peso Kg:</lable>
        <input type="Number" name="wg"  value="70" placeholder="Peso en kgs"/><br>
        <label>Tiempo de actividad (Min):</lable>
        <input type="Number" name="time"  value="" placeholder="Minutos de actividad"/><br>
        <label>Tasa de interés:</lable>
        <select type="" name="act"  value="" placeholder="Selección..."/>
            <option value="1">Sentado en reposo</option>
            <option value="2">Dormir</option>
        </select><br>
        <input type="submit" name="button" value="LEER"/><br>
        </form>

        <?php

            doRead9();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>

        <hr>

        <?php
            
            echo "<h1>Ejercicio # 4</h1>";
            
            echo "<h3>Lea dos números X y Y e imprima ambos números sólo si son de diferente signo y distintos de cero.</h3><br>";

            function doRead4 () {
                $x = $_POST['x'];
                $y = $_POST['y'];
                if ($x != 0 && $y != 0 && $x > 0 && $y < 0 || $x < 0 && $y > 0) {
                    echo "<br>X: $x // Y: $y<br>";
                } else {
                    echo "<br>Ingrese un número positivo y otro negativo!";
                }
            }
        ?>

        <form action="#" method="post">
        <label>Número 1:</lable>
        <input type="number" name="x"  value="" placeholder="x"/>
        <label>Número 2:</lable>
        <input type="number" name="y"  value="" placeholder="y"/>
        <input type="submit" name="button" value="LEER"/>
        </form>

        <?php

            doRead4();

            echo "<a href='index.php'><h3>Main</h3></a>";

        ?>

        <hr>

        <?php
            
            echo "<h1>Ejercicio # 3</h1>";
            
            echo "<h3>Lea dos números X y Y e imprima ambos números sólo si son de diferente signo y distintos de cero.</h3><br>";

            function doRead3 () {
                $x = $_POST['x'];
                $y = $_POST['y'];
                if ($x >= 0 || $y >= 0) {
                    echo "<br>X: $x // Y: $y<br>";
                } else {
                    echo "<br>Ingrese por lo menos número positivo!";
                }
            }
        ?>

        <form action="#" method="post">
        <label>Número 1:</lable>
        <input type="number" name="x"  value="" placeholder="x"/>
        <label>Número 2:</lable>
        <input type="number" name="y"  value="" placeholder="y"/>
        <input type="submit" name="button" value="LEER"/>
        </form>

        <?php

            doRead3();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>

</body>
</html>
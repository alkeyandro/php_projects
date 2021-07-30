<link rel="stylesheet" href="styles.css">

<?php

$command = $_POST['command'];

function getRes () {

    $result = $_POST['result'];
    return $result;
}
?>

<div class='box' id='e1'>
<?php

    echo "<form action='file.php' method='post' class='eform'><div class='hdform'><h1 class='excerc'>Ejercicio # 1</h1><p class='descript'>Lea el nombre, la edad y el sexo (1= femenino, 2= masculino) de una persona y si esta es de sexo 
            masculino y mayor de edad imprima el nombre, de lo contrario imprima el nombre y edad de la persona.</p>
            <label><h2>Imprimir valores</h2></label>
            <label>Nombre:</lable>
            <input type='text' name='name'  value='' placeholder='Nombre'/>
            <label>Edad</lable>
            <input type='text' name='age'  value='' placeholder='Edad'/>
            <label>Sexo:</lable>
            <select type='' name='gender'  value='' placeholder='Selección...'/>
                <option value='1'>F</option>
                <option value='2'>M</option>
            </select><br>
            <input type='submit' name='button' value='Ejercicio 1 >>' class='btnform'/>
        </form></div>";

    if ($command == 1) {
    echo "<div class='output'><span>" . getRes() . "</span></div>";
    }

?>
</div>

<div class='box' id='e2'>
<?php

     echo "<form action='file.php' method='post' class='eform'><div class='hdform'><h1 class='excerc'>Ejercicio # 2</h1><p class='descript'>Lea el nombre, la edad, el sexo (1= femenino, 2= masculino) y el estado civil (1= soltero, 2 = casado, 3 = 
            otro) de una persona e imprima el nombre y la edad de la persona sólo si esta es mujer menor de edad, 
            de lo contrario indique que estado civil tiene esa persona.</p>
            <label><h2>Imprimir valores</h2></label>
           <label>Nombre:</lable>
        <input type='text' name='name'  value='' placeholder='Nombre'/>
        <label>Edad</lable>
        <input type='text' name='age'  value='' placeholder='Edad'/>
        <label>Sexo:</lable>
        <select type='' name='gender'  value='' placeholder='Selección...'/>
            <option value='1'>F</option>
            <option value='2'>M</option>
        </select><br>
        <label>Estado civil:</lable>
        <select type='' name='mstatus' value=' placeholder='Selección...'/>
            <option value='1'>Soltero</option>
            <option value='2'>Casado</option>
            <option value='3'>Otro</option>
        </select><br>
        <input type='submit' name='button' value='Ejercicio 2 >>' class='btnform'/>
        </form></div>";

    if ($command == 2) {
    echo "<div class='output'><span>" . getRes() . "</span></div>";
    }

?>
</div>

<div class='box' id='e3'>
<?php

    echo "<form action='file.php' method='post' class='eform'><div class='hdform'><h1 class='excerc'>Ejercicio # 3</h1><p class='descript'>Lea dos números X y Y e imprima ambos 
            números sólo si son de diferente signo y distintos de cero.</p>
            <label><h2>Imprimir valores</h2></label>
            <label>Número 1:</lable>
        <input type='number' name='x'  value='' placeholder='x'/>
        <label>Número 2:</lable>
        <input type='number' name='y'  value='' placeholder='y'/>
        <input type='submit' name='button' value='Ejercicio 3 >>' class='btnform'/>
        </form></div>";

    if ($command == 3) {
    echo "<div class='output'><span>" . getRes() . "</span></div>";
    }

?>
</div>

<div class='box' id='e4'>
<?php

     echo "<form action='file.php' method='post' class='eform'><div class='hdform'><h1 class='excerc'>Ejercicio # 4</h1><p class='descript'>Lea dos números X y Y e imprima ambos 
            números sólo si son de diferente signo y distintos de cero.</p>
            <label><h2>Imprimir valores</h2></label>
            <label>Número 1:</lable>
        <input type='number' name='x'  value='' placeholder='x'/>
        <label>Número 2:</lable>
        <input type='number' name='y'  value='' placeholder='y'/>
        <input type='submit' name='button' value='Ejercicio 4 >>' class='btnform'/>
        </form></div>";

    if ($command == 4) {
    echo "<div class='output'><span>" . getRes() . "</span></div>";
    }

?>
</div>

<div class='box' id='e5'>
<?php

    echo "<form action='file.php' method='post' class='eform'><div class='hdform'><h1 class='excerc'>Ejercicio # 5</h1><p class='descript'>Lea dos números, calcule el cociente de dividir el primero por el segundo. Imprima el cociente. Pero 
            recuerde que antes de hacer la división debe evaluar que el divisor no sea igual a cero (0). Porque en este 
            caso debe imprimir 'la división no es posible'.</p>
            <label><h2>Calcular cociente</h2></label>
            <label>Divisor:</lable>
        <input type='number' name='x'  value='' placeholder='Divisor'/>
        <label>Dividendo:</lable>
        <input type='number' name='y'  value='' placeholder='Dividendo'/>
        <input type='submit' name='button' value='Ejercicio 5 >>' class='btnform'/>
        </form></div>";

    if ($command == 5) {
    echo "<div class='output'><span>" . getRes() . "</span></div>";
    }

?>
</div>

<div class='box' id='e6'>
<?php

    echo "<form action='file.php' method='post' class='eform'><div class='hdform'><h1 class='excerc'>Ejercicio # 6</h1><p class='descript'>Para un salario bruto hasta de $ 250.500 no hay retención. Para un salario bruto de $ 250.501 a $ 300.000 el porcentaje de retención es de 5%. para un salario bruto mayor a $300.000 el porcentaje de retención es del 8%. Imprimir el nombre del empleado, el salario bruto, el valor de la retención y el salario neto (salario bruto menos la retención.</p>
            <label><h2>Retenciones</h2></label>
            <label>Empleado:</lable>
            <input type='text' name='name'  value='' placeholder='Nombre'/>
            <label>Salario:</lable>
            <input type='number' name='salary'  value='' placeholder='Salario base'/>
            <input type='submit' name='button' value='Ejercicio 6 >>' class='btnform'/>
        </form></div>";

    if ($command == 6) {
    echo "<div class='output'><span>" . getRes() . "</span></div>";
    }

?>
</div>

<div class='box' id='e7'>
<?php
    echo "<form action='file.php' method='post' class='eform'><div class='hdform'><h1 class='excerc'>Ejercicio # 7</h1><p class='descript'>Leer el nombre de un empleado, el salario básico por hora y el número de horas trabajadas durante una 
            semana. Calcular el salario neto, teniendo en cuenta que, si el número de horas trabajadas durante la 
            semana es mayor a 48, esas horas de más se consideran horas extras y tienen un 25% de recargo.</p>
            <label><h2>Nómina</h2></label>
            <label>Empleado:</lable>
            <input type='text' name='name'  value='' placeholder='Nombre'/>
            <label>Salario por hora:</lable>
            <input type='number' name='vhr'  value='3773' placeholder='Salario por hora'/>
            <label>Horas trabajadas:</lable>
            <input type='number' name='hrs'  value='48' placeholder='Total horas trabajadas en la semana'/>
            <input type='submit' name='button' value='Ejercicio 7 >>' class='btnform'/>
        </form></div>";

    if ($command == 7) {
    echo "<div class='output'><span>" . getRes() . "</span></div>";
    }

?>
</div>

<div class='box' id='e8'>
<?php

    echo "<form action='file.php' method='post' class='eform'><div class='hdform'><h1 class='excerc'>Ejercicio # 8</h1><p class='descript'>Un hombre desea saber cuánto dinero se genera por concepto de intereses sobre la cantidad que tiene 
            en inversión en el banco. El decidirá reinvertir los intereses siempre y cuando estos excedan a $7000, y 
            en ese caso desea saber cuánto dinero tendrá finalmente en su cuenta.</p>
            <label><h2>Inversiones</h2></label>
            <label>Capital:</lable>
            <input type='Number' name='cap'  value='' placeholder='Inversión inicial'/><br>
            <label>Tasa de interés:</lable>
            <input type='number' name='rate'  value='' placeholder='% de interés mensual'/><br>
            <label>Periodos de reinversión:</lable>
            <select type='' name='time'  value='' placeholder='Selección...'/>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                <option value='9'>9</option>
                <option value='10'>10</option>
                <option value='11'>11</option>
                <option value='12'>12</option>
            </select><br>
            <input type='submit' name='button' value='Ejercicio 8 >>' class='btnform'/><br>
        </form></div>";

    if ($command == 8) {
    echo "<div class='output'><span>" . getRes() . "</span></div>";
    }

?>
</div>

<div class='box' id='e9'>
<?php
    echo "<form action='file.php' method='post' class='eform'><div class='hdform'><h1 class='excerc'>Ejercicio # 9</h1><p class='descript'>Una persona enferma, que pesa 70 kg, se encuentra en reposo y desea saber cuántas calorías consume su cuerpo durante todo el tiempo que realice una misma actividad. Las actividades que tiene permitido realizar son únicamente dormir o estar sentado en reposo. Los datos que tiene son que estando dormido consume 1.08 calorías por minuto y estando sentado en reposo consume 1.66 calorías por minuto.</p>
            <label><h2>Calorías</h2></label>
            <label>Peso Kg:</lable>
            <input type='Number' name='wg'  value='70' placeholder='Peso en kgs'/><br>
            <label>Tiempo de actividad (Min):</lable>
            <input type='Number' name='time'  value='' placeholder='Minutos de actividad'/><br>
            <label>Tasa de interés:</lable>
            <select type='' name='act'  value='' placeholder='Selección...'/>
                <option value='1'>Sentado en reposo</option>
                <option value='2'>Dormir</option>
            </select><br>
            <input type='submit' name='button' value='Ejercicio 9 >>' class='btnform'/><br>
        </form></div>";

    if ($command == 9) {
    echo "<div class='output'><span>" . getRes() . "</span></div>";
    }

?>
</div>

<div class='box' id='e10'>
<?php

     echo "<form action='file.php' method='post' class='eform'><div class='hdform'><h1 class='excerc'>Ejercicio # 10</h1><p class='descript'>Hacer un algoritmo que imprima el nombre de un artículo, clave, precio original y su precio con descuento. El descuento lo hace en base a la clave, si la clave es 1 el descuento es del 10% y si la clave es 2 el descuento es del 20% (solo existen dos claves). </p>
            <label><h2>Precios con descuento</h2></label>
            <label>Producto:</lable>
            <select type='' name='prod'  value='' placeholder='Selección...'/>
                <option value='1'>Porducto 1</option>
            </select><br>
            <label>Precio:</lable>
            <input type='number' name='price'  value='' placeholder='Precio $'/><br>
            <label>Clave:</lable>
            <select type='' name='key'  value='' placeholder='Selección...'/>
                <option value='1'>1</option>
                <option value='2'>2</option>
            </select><br>
            <input type='submit' name='button' value='Ejercicio 10 >>' class='btnform'/><br>
        </form></div>";

    if ($command == 10) {
    echo "<div class='output'><span>" . getRes() . "</span></div>";
    }

?>
</div>

<div class='box' id='e11'>
<?php

    echo "<form action='file.php' method='post' class='eform'><div class='hdform'><h1 class='excerc'>Ejercicio # 11</h1><p class='descript'>Hacer un algoritmo que calcule el total a pagar por la compra de camisas. Si se compran tres camisas o más se aplica un descuento del 20% sobre el total de la compra y si son menos de tres camisas un descuento del 10%.</p></div>
            <label><h2>Comprar camisas</h2></label>
            <label>Producto:</lable>
            <select type='' name='prod'  value='' placeholder='Selección...'/>
                <option value='1'>Camisas</option>
            </select><br>
            <label>Cantidad:</lable>
            <select type='' name='cant'  value='' placeholder='Selección...'/>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                <option value='9'>9</option>
                <option value='10'>10</option>
            </select><br>
            <input type='submit' name='button' value='Ejercicio 11 >>' class='btnform'/>
        </form>";

    if ($command == 11) {
    echo "<div class='output'><span>" . getRes() . "</span></div>";
    }

?>
</div>

<div class='box' id='e12'>
<?php
    echo "<form action='file.php' method='post' class='eform'><div class='hdform'><h1 class='excerc'>Ejercicio # 12</h1><p class='descript'>Calcular el total que una persona debe pagar en una venta de llantas, si el precio de cada llanta es de $80.000 si se compran menos de 5 llantas y de $70.000 si se compran 5 o más.</p>
            <label><h2>Comprar llantas</h2></label><br>
            <label>Producto:</label>
            <select name='product'>
                <option value='1'>Llantas</option>
            </select>
            <label>Cantidad:</label>
            <input type='number' name='cant' value='1'/>
            <input type='submit' name='button' value='Ejercicio 12 >>' class='btnform'/>
        </form></div>";

    if ($command == 12) {
    echo "<div class='output'><span>" . getRes() . "</span></div>";
    }

?>
</div>

<div class='box' id='e13'>
<?php

    echo "<form action='file.php' method='post' class='eform'><div class='hdform'><h1 class='excerc'>Ejercicio # 13</h1><p class='descript'>En un supermercado se hace una promoción, mediante la cual el cliente obtiene un descuento 
        dependiendo de un número que se escoge al azar. Si el número escogido es menor que 74 el descuento 
        es del 15% sobre el total de la compra, si es mayor o igual a 74 el descuento es del 20%. Obtener cuánto dinero se le descuenta.</p>
            <label><h2>Obtener descuento</h2></label>
            <input type='number' name='charge' placeholder='Valor de la compra' /><br>
            <input type='submit' name='button' value='Ejercicio 13 >>' class='btnform'/>
        </form></div>";

    if ($command == 13) {
    echo "<div class='output'><span>" . getRes() . "</span></div>";
    }

?>
</div>

<div class='box' id='e14'>
<?php
    echo "<form action='file.php' method='post' class='eform'><div class='hdform'><h1 class='excerc'>Ejercicio # 14</h1><p class='descript'>Calcular el número de pulsaciones que 
            debe tener una persona por cada 10 segundos de ejercicio aeróbico; la fórmula que se aplica cuando el sexo es femenino es: num. pulsaciones = (220 - edad)/10 y si el 
            sexo es masculino: num. pulsaciones = (210 - edad)/10</p>
            <label><h2>Obtener pulsaciones</h2></label><br>
            <label>Nombre:</label>
            <input type='text' name='name'/>
            <label>Edad:</label>
            <input type='number' name='age'/>
            <label>Seleccione el género:</label>
            <select name='gender'>
                <option value='1'>M</option>
                <option value='2'>F</option>
            </select>
            <input type='submit' name='button' value='Ejercicio 14 >>' class='btnform'/>
        </form></div>";

    if ($command == 14) {
    echo "<div class='output'><span>" . getRes() . "</span></div>";
    }

?>
</div>

<div class='box' id='e15'>
<?php

    echo "<form action='file.php' method='post' class='eform'><div class='hdform'><h1 class='excerc'>Ejercicio # 15</h1><p class='descript'>Una compañía de seguros está abriendo un 
            epto. de finanzas y estableció un programa para captar clientes, que consiste en lo siguiente: Si el monto por el que se efectúa la fianza es menor que $50 000 la cuota a 
            pagar será por el 3% del monto, y si el monto es mayor que $50 000 la cuota a pagar será el 2% del monto. La afianzadora desea determinar cuál será la cuota que debe pagar 
            un cliente.</p>
            <label><h2>Obtener monto fianza</h2></label><br>
            <label>Cliente:</label>
            <input type='text' name='costumer'/>
            <label>Valor de la fianza:</label>
            <input type='number' name='debt'/>
            <input type='submit' name='button' value='Ejercicio 15 >>' class='btnform'/>
        </form></div>";

    if ($command == 15) {
    echo "<div class='output'><span>" . getRes() . "</span></div>";
    }

?>
</div>

<div class='box' id='e16'>
<?php
    echo "<form action='file.php' method='post' class='eform'><div class='hdform'><h1 class='excerc'>Ejercicio # 16</h1><p class='descript'>El IMSS requiere clasificar a las personas que se jubilaran en el año de 1997. Existen tres tipos de jubilaciones: por edad, por antigüedad joven y por antigüedad adulta. Las personas adscritas a la jubilación por edad deben tener 60 años o más y una antigüedad en su empleo de menos de 25 años.
            Las personas adscritas a la jubilación por antigüedad joven deben tener menos de 60 años y una antigüedad en su empleo de 25 años o más. Las personas adscritas a la 
            jubilación por antigüedad adulta deben tener 60 años o más y una antigüedad en su empleo de 25 años o más.</p>
            <label><h2>Clasificar ruta de jubilación (1997)</h2></label><br>
            <label>Beneficiario:</label>
            <input type='text' name='person'/>
            <label>Año de ingreso:</label>
            <input type='number' name='year' value='1972'/>
            <label>Edad:</label>
            <input type='number' name='age' value='60'/>
            <input type='submit' name='button' value='Ejercicio 16 >>' class='btnform'/>
        </form></div>";

    if ($command == 16) {
    echo "<div class='output'><span>" . getRes() . "</span></div>";
    }

?>
</div>

<div class='box' id='e17'>
<?php

    echo "<form action='file.php' method='post' class='eform'><div class='hdform'><h1>Ejercicio # 17</h1><p class='descript'>En una fábrica de computadoras se planea ofrecer a los clientes un descuento que dependerá del número de computadoras que compre. Si las computadoras son menos de cinco se les dará un 10% de descuento sobre el total de la compra; si el número de computadoras es mayor o igual a cinco pero menos de diez se le otorga un 20% de descuento; y si son 10 o más se les da un 40% de descuento. El precio de cada computadora es de $11,000.</p>
        <label><h2>Descuentos por computadoras</h2>
            </label><br><label>Cliente:</label>
            <input type='text' name='person'/>
            <label>Cantidad:</label>
            <input type='number' name='cant' value='0'/>
            <label>Precio:</label>
            <input type='number' name='price' value='11000'/>
            <input type='submit' name='button' value='Ejercicio 17 >>' class='btnform'/>
        </form></div>";

    if ($command == 17) {
    echo "<div class='output'><span>" . getRes() . "</span></div>";
    }

?>
</div>

<div class='box' id='e18'>
<?php
    echo "<form action='file.php' method='post' class='eform'><div class='hdform'><h1 class='excerc'>Ejercicio # 18</h1><p class='descript'>En una venta de llantas se ha establecido una promoción de las llantas marca “Ponchadas”, dicha promoción consiste en lo siguiente: 
            Si se compran menos de cinco llantas el precio es de $30.000 cada una, de $25.000 si se compran de cinco a 10 y de $20.000 si se compran más de 10. Obtener la cantidad 
            de dinero que una persona tiene que pagar por cada una de las llantas que compra y la que tiene que pagar por el total de la compra.</p>
            <label><h2>Descuentos por llantas</h2></label><br>
            <label>Producto:</label>
            <select name='product'>
                <option value='1'>Llantas</option>
            </select>
            <label>Marca:</label>
            <select name='branch'>
                <option value='1'>Ponchadas</option>
            </select>
            <label>Cantidad:</label>
            <input type='number' name='cant' value='1'/>
            <input type='submit' name='button' value='Ejercicio 18 >>' class='btnform'/>
        </form></div>";

    if ($command == 18) {
    echo "<div class='output'><span>" . getRes() . "</span></div>";
    }

?>
</div>

<div class='box' id='e19'>
<?php
    echo "<form action='file.php' method='post' class='eform'><div class='hdform'><h1 class='excerc'>Ejercicio # 19</h1><p class='descript'>Un proveedor de estéreos ofrece un descuento del 10% sobre el precio sin IVA, de algún aparato 
            si este cuesta $20.000 o más. Además, independientemente de esto, ofrece un 5% de descuento si la marca es “NOSY”. Determinar cuánto pagara, con IVA incluido, 
            un cliente cualquiera por la compra de su aparato</p>
            <label><h2>Descuentos por estéreos</h2></label><br>
            <label>Producto:</label>
            <select name='product'>
                <option value='1'>Estéreos</option>
            </select>
            <label>Marca:</label>
            <select type='number' name='branch'>
                <option value='1'>NOSY</option>
                <option value='2'>Otras</option>
            </select>
            <label>Precio (sin iva):</label>
            <input type='number' name='price' value='20000'/>
            <label>% iva:</label>
            <input type='number' name='iva' value='19'/>
            <input type='submit' name='button' value='Ejercicio 19 >>' class='btnform'/>
        </form></div>";

    if ($command == 19) {
    echo "<div class='output'><span>" . getRes() . "</span></div>";
    }

?>
</div>

<div class='box' id='e20'>
<?php

    echo "<form action='file.php' method='post' class='eform'><div class='hdform'><h1 class='excerc'>Ejercicio # 20</h1><p class='descript'>Una frutería ofrece las manzanas con descuento según la siguiente tabla: 
            NUM. DE KILOS COMPRADOS  % DESCUENTO 
                     0 - 2                0%
                  2.01 - 5               10%
                  5.01 - 10              15%
                 10.01 en adelante          20%
           Determinar cuánto pagara una persona que compre manzanas es esa frutería</p><br><label><h2>Descuentos en frutería</h2></label>
            <label>Producto:</label>
            <select name='product'>
                <option value='1'>Manzanas</option>
            </select>
            <label>Cantidad (Kgs):</label>
            <input type='number' name='cant' value='1'/>
            <label>Precio:</label>
            <input type='number' name='price' value=''/>
            <input type='submit' name='button' value='Ejercicio 20 >>' class='btnform'/>
        </form></div>";

    if ($command == 20) {
    echo "<div class='output'><span>" . getRes() . "</span></div>";
    }

?>
</div>

<?php

function getIDs () {
    
    $button = $_POST['button'];

    switch ($button) {
        case 'Ejercicio 1 >>':
            doRead1();
            $command = 1;
            break;

        case 'Ejercicio 2 >>':
            doRead2();
            $command = 2;
            break;

        case 'Ejercicio 3 >>':
            doRead3();
            break;

        case 'Ejercicio 4 >>':
            doRead4();
            break;

        case 'Ejercicio 5 >>':
            doRead5();
            break;

        case 'Ejercicio 6 >>':
            doRead6();
            break;

        case 'Ejercicio 7 >>':
            doRead7();
            break;

        case 'Ejercicio 8 >>':
            doRead8();
            break;

        case 'Ejercicio 9 >>':
            doRead9();
            break;

        case 'Ejercicio 10 >>':
            doRead10();
            break;

        case 'Ejercicio 11 >>':
            doRead11();
            break;

        case 'Ejercicio 12 >>':
            doRead12();
            break;

        case 'Ejercicio 13 >>':
            doRead13();
            break;

        case 'Ejercicio 14 >>':
            doRead14();
            break;

        case 'Ejercicio 15 >>':
            doRead15();
            break;

        case 'Ejercicio 16 >>':
            doRead16();
            break;

        case 'Ejercicio 17 >>':
            doRead17();
            break;

        case 'Ejercicio 18 >>':
            doRead18();
            break;

        case 'Ejercicio 19 >>':
            doRead19();
            break;

        case 'Ejercicio 20 >>':
            doRead20();
            break;
    }
}

getIDs();

?>
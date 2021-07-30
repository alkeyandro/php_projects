<title>
    <?php
        echo "Output";
    ?>
</title> 

<link rel="stylesheet" href="styles.css">

<?php

function getIDs () {
    
    $button = $_POST['button'];

    switch ($button) {
        case 'Ejercicio 1 >>':
            doRead1();
            break;

        case 'Ejercicio 2 >>':
            doRead2();
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


    function doRead1 () {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        if ($gender == 2 && $age >= 18) {
            $output = "Nombre: $name";
        } else {
            $output = "Nombre: $name // Edad: $age";
        }

        echo "<form action='index.php#e1' method='post' class='job'><input hidden name='result' value='$output'><span>Loading...</span>
        <input hidden name='command' value='1'><input hidden type='submit' name='close' value='Volver' id='do'><script>document.getElementById('do').click();</script></form>";

    }

    function doRead2 () {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $mstatus = $_POST['mstatus'];
        if ($gender == 1 && $age < 18) {
            $output = "Nombre: $name // Edad: $age";
        } else {
            if ($mstatus == 1) {
                $output = "Nombre: $name // ES: Soltero";
            } elseif ($mstatus == 2) {
                $output = "Nombre: $name // ES: Casado";
            } else {
                $output = "Nombre: $name // ES: Otro"; 
            }
        }

        echo "<form action='index.php#e2' method='post' class='job'><input hidden name='result' value='$output'><span>Loading...</span>
                <input hidden name='command' value='2'><input hidden type='submit' name='close' value='Volver' id='do'><script>document.getElementById('do').click();</script> 
                </form>";
    }

    function doRead3 () {
        $x = $_POST['x'];
        $y = $_POST['y'];
        if ($x >= 0 || $y >= 0) {
            $output = "x: $x // y: $y";
        } else {
            $output = "Ingrese por lo menos número positivo!";
        }

        echo "<form action='index.php#e3' method='post' class='job'><input hidden name='result' value='$output'><span>Loading...</span>
                <input hidden name='command' value='3'><input hidden type='submit' name='close' value='Volver' id='do'><script>document.getElementById('do').click();</script> 
                </form>";
    }

    function doRead4 () {
        $x = $_POST['x'];
        $y = $_POST['y'];
        if ($x != 0 && $y != 0 && $x > 0 && $y < 0 || $x < 0 && $y > 0) {
            $output = "x: $x // y: $y";
        } else {
                    $output = "Ingrese un número positivo y otro negativo!";
        }

        echo "<form action='index.php#e4' method='post' class='job'><input hidden name='result' value='$output'><span>Loading...</span>
                <input hidden name='command' value='4'><input hidden type='submit' name='close' value='Volver' id='do'><script>document.getElementById('do').click();</script> 
                </form>";
    }

    function doRead5 () {
        $x = $_POST['x'];
        $y = $_POST['y'];
        if ($y != 0) {
            $result = $x/$y;
            $output = "Resultado: $result";
        } else {
            $output = "La división no es posible.";
        }

        echo "<form action='index.php#e5' method='post' class='job'><input hidden name='result' value='$output'><span>Loading...</span>
                <input hidden name='command' value='5'><input hidden type='submit' name='close' value='Volver' id='do'><script>document.getElementById('do').click();</script> 
                </form>";
    }

    function doRead6 () {
        $name = $_POST['name'];
        $salary = $_POST['salary'];
        if ($salary <= 250000) {
            $withol = 0;
            $pay = $salary - $withol;
            $output = "<br>Empleado: $name<br>Básico: $salary<br>Retención: $withol<br>Neto: $pay";
        } elseif ($salary > 250000 && $salary <= 300000) {
            $withol = $salary * 0.05;
            $pay = $salary - $withol;
            $output = "<br>Empleado: $name<br>Básico: $salary<br>Retención: $withol<br>Neto: $pay";
        }
        else {
            $withol = $salary * 0.08;
            $pay = $salary - $withol;
            $output = "<br>Empleado: $name<br>Básico: $salary<br>Retención: $withol<br>Neto: $pay";
        }

        echo "<form action='index.php#e6' method='post' class='job'><input hidden name='result' value='$output'><span>Loading...</span>
        <input hidden name='command' value='6'><input hidden type='submit' name='close' value='Volver' id='do'><script>document.getElementById('do').click();</script> 
        </form>";
    }

    function doRead7 () {
        $name = $_POST['name'];
        $vhr = $_POST['vhr'];
        $hrs = $_POST['hrs'];
        if ($hrs > 48) {
            $add = $hrs - 48;
            $normal = 48 * $vhr;
            $extra = $add * ($vhr * 1.25);
            $total = $normal + $extra;
            echo "<br>Empleado: $name<br>Valor hora: $vhr<br>Pago horas extras: $extra<br>Total: $total";
        } else {
            $normal = $hrs * $vhr;
            $extra = 0;
            $total = $normal + $extra;
            $output = "<br>Empleado: $name<br>Valor hora: $vhr<br>Pago horas extras: $extra<br>Total: $total";
        }

        echo "<form action='index.php#e7' method='post' class='job'><input hidden name='result' value='$output'><span>Loading...</span>
        <input hidden name='command' value='7'><input hidden type='submit' name='close' value='Volver' id='do'><script>document.getElementById('do').click();</script> 
        </form>";
    }

    function doRead8 () {
        $cap = $_POST['cap'];
        $rate = $_POST['rate'];
        $time = $_POST['time'];

        for ($i=1;$i<=$time;$i++) {
            $margin = $cap*($rate/100);
            if ($margin >= 7000) {
                $cap += $margin;
                $output = "<br>Utilidad Mes $i = $ $margin <br>Reinversión = $ $cap<hr>";
            } else {
                $output = "No se genera rentabilidad necesaria<br>";
                break;
            }
        }

        echo "<form action='index.php#e8' method='post' class='job'><input hidden name='result' value='$output'><span>Loading...</span>
        <input hidden name='command' value='8'><input type='submit' hidden name='close' value='Volver' id='do'><script>document.getElementById('do').click();</script> 
        </form>";
    }

    function doRead9 () {
        $wg = $_POST['wg'];
        $time = $_POST['time'];
        $act = $_POST['act'];

        if ($act == 1) {
            $result = $time * 1.66;
            $output = "El consumo de calorias al estar sentado en reposo durante $time minutos es de: $result calorias. <br>";
        }
        else if ($act == 2) {
            $result = $time * 1.08;
            $output = "El consumo de calorias al estar dormido durante $time minutos es de: $result calorias. <br>";
        }

        echo "<form action='index.php#e8' method='post' class='job'><input hidden name='result' value='$output'><span>Loading...</span>
                    <input hidden name='command' value='8'><input hidden type='submit' name='close' value='Volver' id='do'><script>document.getElementById('do').click();</script> 
                    </form>";
    }

    function doRead10 () {
        $prod = $_POST['prod'];
        $price = $_POST['price'];
        $key = $_POST['key'];

        setlocale(LC_MONETARY, 'es_ES');

        $resume = "Arículo: Producto 1<br>Clave: $key<br>Valor sin dcto: $ $price";

        if ($key == 1) {
                    $discount = $price * 0.90;
                    $output = "Valor con dcto: $ $discount";
        } elseif ($key == 2) {
            $discount = $price * 0.80;
            $output = "Valor con dcto: $ $discount";
        }

        echo "<form action='index.php#e10' method='post' class='job'><input hidden name='result' value='$output'><span>Loading...</span>
                <input hidden name='command' value='18'><input hidden type='submit' name='close' value='Volver' id='do'><script>document.getElementById('do').click();</script> 
                </form>";
    }

    function doRead11 () {

    $prod = $_POST['prod'];
    $cant = $_POST['cant'];

    //setlocale(LC_MONETARY, 'es_ES');

    if ($cant >= 5) {

        $total = 70000 * $cant; //money_format('%i',(70000 * $cant));
        $output = "Vlr/Unidad: $70000 // Total: $total.";

    } elseif ($cant < 5) {
        
        $total = 80000 * $cant; //money_format('%i',(80000 * $cant));
        $output = "Vlr/Unidad: $80000 // Total: $total.";

    }

    echo "<form action='index.php#e11' method='post' class='job'><input hidden name='result' value='$output'><span>Loading...</span>
        <input hidden name='command' value='11'><input hidden type='submit' name='close' value='Volver' id='do'><script>document.getElementById('do').click();</script> 
        </form>";

}

    function doRead12 () {

        $cant = $_POST['cant'];

        if ($cant >= 5) {
            $total = 70000 * $cant;
            $output = "Valor a pagar: $total.<br>";
        } else if ($cant < 5) {
            $total = 80000 * $cant;
            $output = "Valor a pagar: $total.<br>";
        }

        echo "<form action='index.php#e12' method='post' class='job'><input hidden name='result' value='$output'><span>Loading...</span>
            <input hidden name='command' value='12'><input type='submit' hidden name='close' value='Volver' id='do'><script>document.getElementById('do').click();</script> 
            </form>";
    }

    function doRead13 () {

        $charge = $_POST['charge'];

        $getnumber = rand(1,100);

        if ($getnumber < 74) {
            
            $discount = $charge * 0.15;
            $output = "Sorteo <h3>$getnumber</h3> Obtienes un descuento del 15% equivalente a $discount";

        } elseif ($getnumber > 74) {
            
            $discount = $charge * 0.20;
            $output = "Sorteo <h3>$getnumber</h3> Obtienes un descuento del 20% equivalente a $discount";
        }

        echo "<form action='index.php#e13' method='post' class='job'><input hidden name='result' value='$output'><span>Loading...</span>
            <input hidden name='command' value='13'><input hidden type='submit' name='close' value='Volver' id='do'><script>document.getElementById('do').click();</script>
            </form>";
    }

    function doRead14 () {

        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];

        if ($gender == 1) {
            $result = (210-$age)/10;
            $output = "Las pulsaciones en ejercicio aeróbico de $name deben ser de $result/10seg.";
        } elseif ($gender == 2) {
            $result = (220-$age)/10 ;
            $output = "Las pulsaciones en ejercicio aeróbico de $name deben ser de $result/10seg.";
        }

        echo "<form action='index.php#e14' method='post' class='job'><input hidden name='result' value='$output'><span>Loading...</span>
            <input hidden name='command' value='14'><input type='submit' hidden name='close' value='Volver' id='do'><script>document.getElementById('do').click();</script> 
            </form>";
    }


    function doRead15 () {

        $costumer = $_POST['costumer'];
        $debt = $_POST['debt'];

        if ($debt <= 50000) {
            $result = $debt * 0.03;
            $output = "El valor de la fianza para el cliente es: $result";
        } elseif ($debt > 50000) {
            $result = $debt * 0.02;
            $output = "El valor de la fianza para el cliente es: $result";
        }

        echo "<form action='index.php#e15' method='post' class='job'><input hidden name='result' value='$output'><span>Loading...</span>
            <input hidden name='command' value='15'><input hidden type='submit' name='close' value='Volver' id='do'><script>document.getElementById('do').click();</script> 
            </form>";
    }

    function doRead16 () {

        $person = $_POST['person'];
        $year = $_POST['year'];
        $age = $_POST['age'];

        $time = 1997 - $year;

        if ($time < 25 && $age >= 60) {
            $output = "$person será beneficiario en la categoría de EDAD.";
        } elseif ($time >= 25 && $age < 60) {
            $output = "$person será beneficiario en la categoría de ANTIGUEDAD JOVEN.";
        } elseif ($time >= 25 && $age >= 60) {
            $output = "$person será beneficiario en la categoría de ANTIGUEDAD ADULTA.";
        }

        echo "<form action='index.php#e16' method='post' class='job'><input hidden name='result' value='$output'><span>Loading...</span>
            <input hidden name='command' value='16'><input hidden type='submit' name='close' value='Volver' id='do'><script>document.getElementById('do').click();</script> 
            </form>";
    }

    function doRead17 () {

        $person = $_POST['person'];
        $cant = $_POST['cant'];
        $price = $_POST['price'];

        $total = $cant * $price;

        if ($cant < 5) {
            $discount = $total * 0.10;
            $pay = $total - $discount;
            $output = "$person obtienes un descuento del 10%!!<br>Total a pagar $pay - Ahorraste: $discount<br>";
        } elseif ($cant >= 5 && $cant < 10) {
            $discount = $total * 0.20;
            $pay = $total - $discount;
            $output = "$person obtienes un descuento del 20%!!<br>Total a pagar $pay - Ahorraste: $discount<br>";
        } elseif ($cant >= 10) {
            $discount = $total * 0.40;
            $pay = $total - $discount;
            $output = "$person obtienes un descuento del 40%!!<br>Total a pagar $pay - Ahorraste: $discount<br>";
        }

        echo "<form action='index.php#e17' method='post' class='job'><input hidden name='result' value='$output'><span>Loading...</span>
            <input hidden name='command' value='17'><input type='submit' hidden name='close' value='Volver' id='do'><script>document.getElementById('do').click();</script> 
            </form>";
    }


    function doRead18 () {

        $cant = $_POST['cant'];

        if ($cant < 5) {
            $total = $cant * 30000;
            $output = "Valor unitario: 30000<br>Costo total: $total<br>";
        } elseif ($cant >= 5 && $cant < 10) {
            $total = $cant * 25000;
            $output = "Valor unitario: 25000<br>Costo total: $total<br>";
        } elseif ($cant >= 10) {
            $total = $cant * 20000;
            $output = "Valor unitario: 20000<br>Costo total: $total<br>";
        }

        echo "<form action='index.php#e18' method='post' class='job'><input hidden name='result' value='$output'><span>Loading...</span>
            <input hidden name='command' value='18'><input hidden type='submit' name='close' value='Volver' id='do'><script>document.getElementById('do').click();</script> 
            </form>";
    }

    function doRead19 () {

        $branch = $_POST['branch'];
        $price = $_POST['price'];
        $iva = $_POST['iva'];

        if ($price >= 20000) {
            if ($branch == 1) {
                $total_si = $price * 0.85;
                $total_ci = $total_si * (1 + ($iva / 100));
                $output = "El artículo tiene un descuento del 15%!<br>Valor a pagar: $total_ci (iva incluído)";
            } elseif ($branch == 2) {
                $total_si = $price * 0.90;
                $total_ci = $total_si * (1 + ($iva / 100));
                $output = "El artículo tiene un descuento del 10%!<br>Valor a pagar: $total_ci (iva incluído)";
            }
        } else {
            $total_si = $price;
            $total_ci = $total_si * (1 + ($iva / 100));
            $output = "Valor a pagar: $total_ci (iva incluído)<br>";
        }

        echo "<form action='index.php#e19' method='post' class='job'><input hidden name='result' value='$output'><span>Loading...</span>
            <input hidden name='command' value='19'><input type='submit' hidden name='close' value='Volver' id='do'><script>document.getElementById('do').click();</script> 
            </form>";
    }

    function doRead20 () {

        $cant = $_POST['cant'];
        $price = $_POST['price'];

        if ($cant > 10) {
            $discount = ($cant * $price) * 0.80;
            $output = "Recibes un 20% de descuento!<br>Valor a pagar: $discount.<br>";
        } elseif ($cant > 5 && $cant <=10) {
            $discount = ($cant * $price) * 0.85;
            $output = "Recibes un 15% de descuento!<br>Valor a pagar: $discount.<br>";
        } elseif ($cant > 2 && $cant <=5) {
            $discount = ($cant * $price) * 0.90;
            $output = "Recibes un 10% de descuento!<br>Valor a pagar: $discount.<br>";
        } else {
            $discount = ($cant * $price) * 1;
           $output = "Valor a pagar: $discount.<br>";
        }

        echo "<form action='index.php#e20' method='post' class='job'><input hidden name='result' value='$output'><span>Loading...</span>
            <input hidden name='command' value='20'><input hidden type='submit' name='close' value='Volver' id='do'><script>document.getElementById('do').click();</script> 
            </form>";
    }
    
    $button = $_POST['close'];

        if ($button == 'Volver') {
            echo "<script>window.close();</script>";
        }
    
?>
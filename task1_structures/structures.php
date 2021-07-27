<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class='box' id='e13'>
<?php

    echo "<form action='' method='post' class='eform'><div class='hdform'><h1 class='excerc'>Ejercicio # 13</h1><p class='descript'>En un supermercado se hace una promoción, mediante la cual el cliente obtiene un descuento 
        dependiendo de un número que se escoge al azar. Si el número escogido es menor que 74 el descuento 
        es del 15% sobre el total de la compra, si es mayor o igual a 74 el descuento es del 20%. Obtener cuánto dinero se le descuenta.</p></div><br>
            <label><h2>***Obtener descuento***</h2></label>
            <input type='number' name='charge' placeholder='Valor de la compra' /><br>
            <input type='submit' value='Participar!' class='btnform'/>
        </form>";
        
        function doRead13 () {

            $charge = $_POST['charge'];

            $getnumber = rand(1,100);

            if ($getnumber < 74) {
                
                $discount = $charge * 0.15;

                $output = "Obtienes un descuento del 15% equivalente a $discount";

            } elseif ($getnumber > 74) {
                
                $discount = $charge * 0.20;

                $output = "Obtienes un descuento del 20% equivalente a $discount";
            }

            echo "<div class='output'><span>Sacaste el número <br> $getnumber <br> $output</span></div>";
        }

    doRead13();

?>
</div>


<div class='box' id='e11'>
<?php

    echo "<form action='' method='post' class='eform'><div class='hdform'><h1 class='excerc'>Ejercicio # 11</h1><p class='descript'>Hacer un algoritmo que calcule el total a pagar por la compra de camisas. Si se compran tres camisas o más se aplica un descuento del 20% sobre el total de la compra y si son menos de tres camisas un descuento del 10%.</p></div><br>
            <label>Producto:</lable>
            <select type='' name='prod'  value='' placeholder='Selección...'/>
                <option value='1'>Llanta</option>
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
            <input type='submit' value='Cotizar!' class='btnform'/>
        </form>";

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

            echo "<div class='output'><span>Descripción: Llantas X $cant <br> $output</span></div>";

        }

    doRead11();
        
?>
</div>
</body>
</html>
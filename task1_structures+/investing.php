<html> 
    <head>
        <title>
            <?php
                echo "Estucturas selectivas";
            ?>
        </title>
    </head>
    <body>
        <?php
            
            echo "<h1>Ejercicio # 8</h1>";
            
            echo "<h3>Un hombre desea saber cuánto dinero se genera por concepto de intereses sobre la cantidad que tiene 
            en inversión en el banco. El decidirá reinvertir los intereses siempre y cuando estos excedan a $7000, y 
            en ese caso desea saber cuánto dinero tendrá finalmente en su cuenta.</h3><br>";

            function doRead () {
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

            doRead();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>
    </body>
</html>
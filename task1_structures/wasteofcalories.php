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
            
            echo "<h1>Ejercicio # 9</h1>";
            
            echo "<h3>Una persona enferma, que pesa 70 kg, se encuentra en reposo y desea saber cuántas calorías consume 
            su cuerpo durante todo el tiempo que realice una misma actividad. Las actividades que tiene permitido 
            realizar son únicamente dormir o estar sentado en reposo. Los datos que tiene son que estando dormido 
            consume 1.08 calorías por minuto y estando sentado en reposo consume 1.66 calorías por minuto.</h3><br>";

            function doRead () {
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

            doRead();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>
    </body>
</html>
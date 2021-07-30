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
            
            echo "<h1>Ejercicio # 14</h1>";
            
            echo "<h3>Calcular el número de pulsaciones que debe tener una persona por cada 10 segundos de ejercicio aeróbico; la fórmula que se aplica cuando el sexo es femenino es: num. pulsaciones = (220 - edad)/10 y si el sexo es masculino: num. pulsaciones = (210 - edad)/10</h3><br>";

            function doRead () {

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

            doRead();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>
    </body>
</html>
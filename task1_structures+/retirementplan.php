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
            
            echo "<h1>Ejercicio # 15</h1>";
            
            echo "<h3>El IMSS requiere clasificar a las personas que se jubilaran en el año de 1997. Existen tres tipos de jubilaciones: por edad, por antigüedad joven y por antigüedad adulta. Las personas adscritas a la jubilación por edad deben tener 60 años o más y una antigüedad en su empleo de menos de 25 años.
            Las personas adscritas a la jubilación por antigüedad joven deben tener menos de 60 años y una antigüedad en su empleo de 25 años o más. Las personas adscritas a la jubilación por antigüedad adulta deben tener 60 años o más y una antigüedad en su empleo de 25 años o más.</h3><br>";

            function doRead () {

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

            doRead();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>
    </body>
</html>
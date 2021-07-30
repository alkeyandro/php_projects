<!DOCTYPE html>
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
            
            echo "<h1>Ejercicio # 2</h1>";
            
            echo "<h3>Lea el nombre, la edad, el sexo (1= femenino, 2= masculino) y el estado civil (1= soltero, 2 = casado, 3 = 
            otro) de una persona e imprima el nombre y la edad de la persona sólo si esta es mujer menor de edad, 
            de lo contrario indique que estado civil tiene esa persona.</h3><br>";

            function doRead () {
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

            doRead();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>
    </body>
</html>
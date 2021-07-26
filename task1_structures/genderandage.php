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
            
            echo "<h1>Ejercicio # 1</h1>";
            
            echo "<h3>Lea el nombre, la edad y el sexo (1= femenino, 2= masculino) de una persona y si esta es de sexo 
            masculino y mayor de edad imprima el nombre, de lo contrario imprima el nombre y edad de la persona.</h3><br>";

            function doRead () {
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

            doRead();

            echo "<a href='index.php'><h3>Main</h3></a>";
        ?>
    </body>
</html>
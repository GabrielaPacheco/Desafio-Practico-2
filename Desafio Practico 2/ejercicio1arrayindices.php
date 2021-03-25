<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxis que combine el uso de array y el uso de índices</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="fondo">
    <?php
    $idioma= array("Inglés","Fránces","Alemán","Ruso","Chino Mandarín");

    $cantidadalumnos['Nivel Básico']= array(25,10,8,12,30);
    $cantidadalumnos['Nivel Intermedio']= array(15,5,4,8,15);
    $cantidadalumnos['Nivel Avanzado']=array(10,2,1,4,10);

    function curso($idioma,$cantidadalumnos){  

        echo "<div class= 'container'>";
        echo "<br><h1>Sintaxis que combina el uso de Array y el uso de índices</h1><br/><br/>";

        $tabla = "<table class='table table-bordered'>";
        $tabla .= "<tr class='titulo'><td colspan='2' class='table-primary'>" .$idioma[0] . "</td></tr>";
        $tabla .= "<tbody>";
        $tabla .= "<tr class='table-success'><td>"."Nivel Básico"."</td><td>". $cantidadalumnos['Nivel Básico'][0]."</td></tr>\n";
        $tabla .= "<tr class='table-danger'><td>"."Nivel Intermedio"."</td><td>". $cantidadalumnos['Nivel Intermedio'][0]."</td></tr>\n";
        $tabla .= "<tr class='table-warning'><td>"." Nivel Avanzado". "</td><td>".$cantidadalumnos['Nivel Avanzado'][0]."</td></tr>\n";
        $tabla .= "</tbody>";
        $tabla .= "</table>";
        echo $tabla;

        $tabla = "<table class='table table-bordered'>";
        $tabla .= "<tr class='titulo'><td colspan='2' class='table-primary'>" .$idioma[1] . "</td></tr>";
        $tabla .= "<tbody>";
        $tabla .= "<tr class='table-success'><td>"."Nivel Básico"."</td><td>". $cantidadalumnos['Nivel Básico'][1]."</td></tr>\n";
        $tabla .= "<tr class='table-danger'><td>"."Nivel Intermedio"."</td><td>". $cantidadalumnos['Nivel Intermedio'][1]."</td></tr>\n";
        $tabla .= "<tr class='table-warning'><td>"." Nivel Avanzado". "</td><td>".$cantidadalumnos['Nivel Avanzado'][1]."</td></tr>\n";
        $tabla .= "</tbody>";
        $tabla .= "</table>";
        echo $tabla;

        $tabla = "<table class='table table-bordered'>";
        $tabla .= "<tr class='titulo'><td colspan='2' class='table-primary'>" .$idioma[2] . "</td></tr>";
        $tabla .= "<tbody>";
        $tabla .= "<tr class='table-success'><td>"."Nivel Básico"."</td><td>". $cantidadalumnos['Nivel Básico'][2]."</td></tr>\n";
        $tabla .= "<tr class='table-danger'><td>"."Nivel Intermedio"."</td><td>". $cantidadalumnos['Nivel Intermedio'][2]."</td></tr>\n";
        $tabla .= "<tr class='table-warning'><td>"." Nivel Avanzado". "</td><td>".$cantidadalumnos['Nivel Avanzado'][2]."</td></tr>\n";
        $tabla .= "</tbody>";
        $tabla .= "</table>";
        echo $tabla;

        $tabla = "<table class='table table-bordered'>";
        $tabla .= "<tr class='titulo'><td colspan='2' class='table-primary'>" .$idioma[3] . "</td></tr>";
        $tabla .= "<tbody>";
        $tabla .= "<tr class='table-success'><td>"."Nivel Básico"."</td><td>". $cantidadalumnos['Nivel Básico'][3]."</td></tr>\n";
        $tabla .= "<tr class='table-danger'><td>"."Nivel Intermedio"."</td><td>". $cantidadalumnos['Nivel Intermedio'][3]."</td></tr>\n";
        $tabla .= "<tr class='table-warning'><td>"." Nivel Avanzado". "</td><td>".$cantidadalumnos['Nivel Avanzado'][3]."</td></tr>\n";
        $tabla .= "</tbody>";
        $tabla .= "</table>";
        echo $tabla;

        $tabla = "<table class='table table-bordered'>";
        $tabla .= "<tr class='titulo'><td colspan='2' class='table-primary'>" .$idioma[4] . "</td></tr>";
        $tabla .= "<tbody>";
        $tabla .= "<tr class='table-success'><td>"."Nivel Básico"."</td><td>". $cantidadalumnos['Nivel Básico'][4]."</td></tr>\n";
        $tabla .= "<tr class='table-danger'><td>"."Nivel Intermedio"."</td><td>". $cantidadalumnos['Nivel Intermedio'][4]."</td></tr>\n";
        $tabla .= "<tr class='table-warning'><td>"." Nivel Avanzado". "</td><td>".$cantidadalumnos['Nivel Avanzado'][4]."</td></tr>\n";
        $tabla .= "</tbody>";
        $tabla .= "</table>";
        echo $tabla;

        echo "</div>";
    }
    $resultado = curso($idioma,$cantidadalumnos);
    ?>
</body>
</html>
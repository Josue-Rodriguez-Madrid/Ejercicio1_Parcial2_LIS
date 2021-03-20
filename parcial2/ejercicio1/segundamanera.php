<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>EJERCICIO 1 SEGUNDA MANERA</title>
</head>
<body>
    
<?php

$segundo = array(
    array("25","10","8","12", "30"),
    array("15","5","4","8", "15"),
    array("10","2","1","4","10"),
    );

    echo "<h1>TABLAS DE IDIOMAS:</h1>";

    echo "<table>";
    echo "<tr>";
    echo "<th colspan='2'>Inglés</th>";
    echo "</tr>";
    echo "<tr>";
    echo "  <th> Nivel  </th>";
    echo "  <th> Alumnos </th>";
    echo "</tr>";
    echo "<tr>";
    echo " <td bgcolor='green'> Básico </td>";
    echo " <td bgcolor='green'>" . $segundo[0][0] . "</td> ";
    echo "</tr>";
    echo "<tr>";
    echo " <td bgcolor='yellow'> Intermedio </td>";
    echo " <td bgcolor='yellow'>" . $segundo[1][0] . "</td> ";
    echo "</tr>";
    echo "<tr>";
    echo " <td bgcolor='red'> Avanzado </td>";
    echo " <td bgcolor='red'>" . $segundo[2][0] . "</td> ";
    echo "</tr>";
    echo "</table>";
    echo "<br/>";

    echo "<table>";
    echo "<tr>";
    echo "<th colspan='2'>Francés</th>";
    echo "</tr>";
    echo "<tr>";
    echo "  <th> Nivel  </th>";
    echo "  <th> Alumnos </th>";
    echo "</tr>";
    echo "<tr>";
    echo " <td bgcolor='green'> Básico </td>";
    echo " <td bgcolor='green'>" . $segundo[0][1] . "</td> ";
    echo "</tr>";
    echo "<tr>";
    echo " <td bgcolor='yellow'> Intermedio </td>";
    echo " <td bgcolor='yellow'>" . $segundo[1][1] . "</td> ";
    echo "</tr>";
    echo "<tr>";
    echo " <td bgcolor='red'> Avanzado </td>";
    echo " <td bgcolor='red'>" . $segundo[2][1] . "</td> ";
    echo "</tr>";
    echo "</table>";
    echo "<br/>";


echo "<table>";
echo "<tr>";
echo "<th colspan='2'>Alemán</th>";
echo "</tr>";
echo "<tr>";
echo "  <th> Nivel  </th>";
echo "  <th> Alumnos </th>";
echo "</tr>";
echo "<tr>";
echo " <td bgcolor='green'> Básico </td>";
echo " <td bgcolor='green'>" . $segundo[0][2] . "</td> ";
echo "</tr>";
echo "<tr>";
echo " <td bgcolor='yellow'> Intermedio </td>";
echo " <td bgcolor='yellow'>" . $segundo[1][2] . "</td> ";
echo "</tr>";
echo "<tr>";
echo " <td bgcolor='red'> Avanzado </td>";
echo " <td bgcolor='red'>" . $segundo[2][2] . "</td> ";
echo "</tr>";
echo "</table>";
echo "<br/>";

echo "<table>";
echo "<tr>";
echo "<th colspan='2'>Ruso</th>";
echo "</tr>";
echo "<tr>";
echo "  <th> Nivel  </th>";
echo "  <th> Alumnos </th>";
echo "</tr>";
echo "<tr>";
echo " <td bgcolor='green'> Básico </td>";
echo " <td bgcolor='green'>" . $segundo[0][3] . "</td> ";
echo "</tr>";
echo "<tr>";
echo " <td bgcolor='yellow'> Intermedio </td>";
echo " <td bgcolor='yellow'>" . $segundo[1][3] . "</td> ";
echo "</tr>";
echo "<tr>";
echo " <td bgcolor='red'> Avanzado </td>";
echo " <td bgcolor='red'>" . $segundo[2][3] . "</td> ";
echo "</tr>";
echo "</table>";
echo "<br/>";

echo "<table>";
echo "<tr>";
echo "<th colspan='2'>Chino Mandarin</th>";
echo "</tr>";
echo "<tr>";
echo "  <th> Nivel  </th>";
echo "  <th> Alumnos </th>";
echo "</tr>";
echo "<tr>";
echo " <td bgcolor='green'> Básico </td>";
echo " <td bgcolor='green'>" . $segundo[0][4] . "</td> ";
echo "</tr>";
echo "<tr>";
echo " <td bgcolor='yellow'> Intermedio </td>";
echo " <td bgcolor='yellow'>" . $segundo[1][4] . "</td> ";
echo "</tr>";
echo "<tr>";
echo " <td bgcolor='red'> Avanzado </td>";
echo " <td bgcolor='red'>" . $segundo[2][4] . "</td> ";
echo "</tr>";
echo "</table>";
echo "<br/>";



?>

</body>
</html>
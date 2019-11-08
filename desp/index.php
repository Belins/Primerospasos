<?php
//Conexión
if ($conexión = mysql_connect("localhost", "root", "1234")){
echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario</p>";

//sql
$consulta= "SELECT*FROM planet";

//Ejecutar la orden y obtener datos
mysql_select_db("base");
$datos= mysql_query ($consulta);

//Ir Imprimiendo las filas resultantes
echo "<table>";
while ($fila =mysql_fetch_array($datos)){
echo "<tr>";
echo "<td>";
echo $fila ["id"];
echo "</td>"; 
echo "<td>";
echo $fila ["name"];
echo "</td>";
echo "<td>";
echo $fila ["rotation_period"];
echo "</td>";
echo "<td>";
echo $fila ["id"];
echo "</td>";
echo "</tr>";
}
}
echo "</table>";

else{
echo "<p> MySQL no conoce ese usuario y password</p>";
}

?>
<?php
header('Content-Type: text/xml');
echo '<markers>';
include ("conexion.php");
$sql=mysqli_query($con,"SELECT * FROM reportes ORDER BY id");

while($row=mysqli_fetch_array($sql))
{
	echo "<marker id ='".$row['id']."' fecha='".$row['fecha']."' tipo='".$row['tipo']."' descripcion='".$row['descripcion']."' foto='".$row['foto']." ' lat='".$row['lat']."' lng='".$row['lng']."'>\n";
	echo "</marker>\n";
}

echo "</markers>\n";

?>

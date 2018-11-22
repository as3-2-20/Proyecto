<?php
//datos de nuestro mysql
$servername = "localhost:3307";
$username = "root";
$password ="";
$db ="proyecto_arduino";

//crear conexion

$conn = mysqli_connect($servername,$username,$password,$db);

//comprobar conexion !siginifica lo contrario
if (!$conn)
  {
  die("Conexion fallida: " . mysqli_connect_error());
  }
//echo "Conexion creada";

$query = "SELECT * FROM `informacion`";
$result = mysqli_query($conn, $query);

?>
<html>
<head>
</head>
<table border=1>
</td>
<?php //creo una nueva variable para el while row
while($row = mysqli_fetch_array($result)){
    //echo $row[0] . "<br>";
?>
    <tr>
    <td> <!--datos de la base de datos-->
        <?php echo $row[0],"-", $row[1],"-", $row[2],"-", $row[3]?>
    </td> 
    </tr>
<?php
}//aqui termina el while
?>
</table><br>
</body>
</html>


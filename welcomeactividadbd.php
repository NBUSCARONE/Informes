<html>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "sqlprueba";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
extract($_REQUEST);

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['gmail'];
$contrasena=$_POST['contrasena'];

session_start();
$_SESSION["contrasena"] = "$contrasena";



$sql = "INSERT INTO Estudiantes (nombre, apellido, email) VALUES ('$nombre', '$apellido', '$correo');";
if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} 

else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

  ?>
    
</body>
</html>



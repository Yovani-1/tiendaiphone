Q<?php
$servername= "mysql.webcindario.com";
$username= "yovanimejia";
$password= "107722854216";
$dbname= "yovanimejia";

$conn= new mysqli($servername,$username,$password,$dbname);

if ($conn->conect_error){
    die("conexion fallida".$conn->conect_error);
}

$correo =$_POST['correo'];

$sql = "INSERT INTO correo(
    correo
)
values(
    '$correo'
)";

if ($conn->query($sql)){
    echo" rejistro exitoso espera el premio";
}
else{
    echo" no se logro el registro";
}

?>
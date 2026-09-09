<?php
require "./dao/Persona.php";
// include "./Persona.php";
require "./dto/Estudiante.php";

$persona1 = new Persona();
echo "<h3> Datos de Persona 1 :</h3>";
echo $persona1->mostrarDatos();


$persona2 = new Persona("Eder", "Figueroa", 30);
echo "<h3> Datos de Persona 2 :</h3>";
echo $persona2->mostrarDatos();


$persona3 = new Persona("Eder", "Figueroa");
echo "<h3> Datos de Persona 3 :</h3>";
echo $persona3->mostrarDatos();
echo "<br>";
$persona3->setNombre("Raul");
echo $persona3->mostrarDatos();



echo "<br><br>######################################################<br><br>";





$objEstud1 = new Estudiante();
$objEstud1->setNombre("Rosa");
$objEstud1->setApellido("Vasquez");
$objEstud1->setEdad(25);
$objEstud1->set("codigoUniv", "123456789");
$objEstud1->set("carrera", "Ing Mecatrónica");
$objEstud1->set("cicloIngreso", "2025-I");
$objEstud1->set("regular", true);
$objEstud1->set("creditosMatriculados", 20);

echo nl2br($objEstud1->getDatos());

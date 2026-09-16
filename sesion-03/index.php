<?php
spl_autoload_register(function ($class_name) {
    $ruta = "./" . str_replace("\\", "/", $class_name) . ".php";
    print_r($ruta);
    if (file_exists($ruta)) {
        require $ruta;
    }
});
/*
require "./dao/Persona.php";
require "./dto/Persona.php";
require "./bo/Persona.php";
// include "./Persona.php";
// require "./dto/Estudiante.php";
*/

use \bo\Persona as PersonaBO;

$personasBO = new PersonaBO();
echo "<h3> Personas de DAO   :</h3>";
foreach ($personasBO->obtenerPersonas() as $persona) {
    echo $persona->mostrarDatos() . "<br>";
}

/*
$persona2 = new Persona("Eder", "Figueroa", 30);
echo "<h3> Datos de Persona 2 :</h3>";
echo $persona2->mostrarDatos();


$persona3 = new Persona("Eder", "Figueroa");
echo "<h3> Datos de Persona 3 :</h3>";
echo $persona3->mostrarDatos();
echo "<br>";
$persona3->setNombre("Raul");
echo $persona3->mostrarDatos();

*/

echo "<br><br>######################################################<br><br>";




/*
$objEstud1 = new EstudianteDTO();
$objEstud1->setNombre("Rosa");
$objEstud1->setApellido("Vasquez");
$objEstud1->setEdad(25);
$objEstud1->set("codigoUniv", "123456789");
$objEstud1->set("carrera", "Ing Mecatrónica");
$objEstud1->set("cicloIngreso", "2025-I");
$objEstud1->set("regular", true);
$objEstud1->set("creditosMatriculados", 20);

echo nl2br($objEstud1->getDatos());
*/
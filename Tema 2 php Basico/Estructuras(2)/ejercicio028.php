<?php
/*
$nombre = $_GET['nombre'];  //get no son buenas practicas
                            //gettea el elemento con valor "nombre" de quien referencie este php
*/
   

/*  
    1. Recogida de datos
    2. Validacion de datos
        a)Seguridad: evitamos la inyeccion de código malicioso
        b)Precisión: aseguramos que los datos son correctos y completos
        c)Mejora la experiencia de nuestros/as usuarios/as:
          Permite identidicar los errores antes de enciar el formulario
    2.1. Validacion básica: comprobamos que los valores que tiene que introducir están rellenos

*/
if ($_SERVER['REQUEST_METHOD'] == 'POST') { //metodo clave
    $nombre = $_POST['nombre'];
    if(empty($nombre)) { 
        echo "El campo nombre es obligatorio.";
    }
}

//  2.2. Validacion con filtros
$email = $_POST['email'];
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) { //metodos y palabras clavr
    echo "El email no es válido.";

}

//  2.3. Evitación de las inyecciones de código -> "Sanitizar" las entradas de información
$usuario =htmlspecialchars($_POST['usuario']); //metodo clave

//  2.4. Validación en la subida de archivos
//          a) verificar el tipo de archivo enviado
$tiposdearchivopermitidos=['image/jpeg', 'image/png'];
if (!in_array($archivo['type'], $tiposdearchivopermitidos)) {
    echo "tipo de archivo no permitido";
}
//          b) Limitar el tamaño permitido de los archivos enviados a través del formulario para evitar problemas            
//  3. Procesamiento de datos
echo "Hola $nombre"; 
?>
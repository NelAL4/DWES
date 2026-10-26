<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form action="#" method="post"> 
        Nombre: <input type="text" name="nombre"><br>
        Apellidos: <input type="text" name="apellidos"><br>
        E-mail: <input type="text" name="e-mail"><br>
        <input type="submit">
    </form>
    <?php
        //formulario con get(method=get) (mala practica)
        /*
        <form action="#" method="get"> 
            Nombre: <input type="text" name="nombre"><br>
            Apellidos: <input type="text" name="apellidos"><br>
            E-mail: <input type="text" name="e-mail"><br>
            <input type="submit">
        </form>
        */



        //Recogemos los datos del formulario
        //y le comentamos que le vamos a suscribir a un boletin
        
        //1. Nombre de la persona
        echo  $_GET["nombre"];
        echo ", te doy la bienvenida a mi sitio web";
        //2. E-mail de la persona
        echo "te enviaré unos boletines de suscripcion a: ";
        echo $_GET["e-mail"];
    ?>
</body>
</html>
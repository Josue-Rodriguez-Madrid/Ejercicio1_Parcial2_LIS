<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Inventario | LIS</title>
</head>
<body>
   
<div class="container">
      <div class="row">
        <?php
            // Arreglos para tener los mensajes controlados:
            $error = array();// este arreglo muestra errores encontrados
            $info = array();// este arreglo almaena toda la informacion que viene del formulario
            // Expresion para nuestro Carnet UDB:
            $canetvalido = "/[A-Z]{2}[0-9]{6}/";
            // Expresion para nuestro nombre y apellido:
            $texto_valido = "/^[a-zA-ZáéíóúÁÉÍÓÚ\s]+$/";
            // Expresion solo numeros
            $edad_valida = "/[0-9]{2}/";
            // Expresion para el correo electronico:
            $correovalido = "/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/";
            // empty nos ayuda a que no hayan datos vacios:
            if( !empty($_POST) )
            {
                // Verificamos los datos que llegaron del formulario:
                if( isset($_POST['txtNombre']) && isset($_POST['txtApellidos']) )
                {
                    // Nombres:
                    if( empty($_POST['txtNombre']) )
                        $error[] = "Debes ecribir tu nombre";
                    else
                    {
                        // AQUI USAMOS LA EXPRESION REGULAR: para ver si el nombre solo tiene letras:
                        if( preg_match($texto_valido, $_POST['txtNombre']) )
                            $info[] = "Nombre: [".$_POST['txtNombre']."]";
                        else
                            $error[] = "El nombre sólo puede contener letras.";
                    }
                    // Apellidos:
                    if( empty($_POST['txtApellidos']) )
                        $error[] = "Debes ecribir tus apellidos";
                    else
                    {
                        // AQUI USAMOS LA EXPRESION REGULAR: para ver si el apellido solo tiene letras:
                        if( preg_match($texto_valido, $_POST['txtApellidos']) )
                            $info[] = "Apellidos: [".$_POST['txtApellidos']."]";
                        else
                            $error[] = "Los apellidos sólo pueden contener letras.";
                    }
                    // Edad:
                    if( (isset($_POST['txtEdad']) ) && (!empty($_POST['txtEdad'])) )
                    {
                        // AQUI USAMOS LA EXPRESION REGULAR: para que solo se ingresen dos numeros del 0 al 9
                        if( preg_match($edad_valida, $_POST['txtEdad']) )
                            $info[] ="Edad: [".$_POST['txtEdad']."]";
                        else
                            $error[] = "La edad solo puede ser escrita con numeros.";
                    }
                    // Correo electronico:
                    if( empty($_POST['txtCorreo']) )
                        $error[] = "Debes ecribir un correo valido";
                    else
                    {
                        // AQUI USAMOS LA EXPRESION REGULAR: para ver si el correo tiene el formato establecido en la expresion regular:
                        if( preg_match($correovalido, $_POST['txtCorreo']) )
                            $info[] = "Correo electronico: [".$_POST['txtCorreo']."]";
                        else
                            $error[] = "Debes escribir una dirección de correo valida.";
                    }
                    // Carnet:
                    if( empty($_POST['txtCarnet']) )
                     $error[] = "Debes ecribir un carnet valido";
                    else
                    {
                        // AQUI USAMOS LA EXPRESION REGULAR: para ver si el carnet comienza por dos letras mayusculas y seis numeros
                        if( preg_match($canetvalido, $_POST['txtCarnet']) )
                            $info[] = "Carnet UDB: [".$_POST['txtCarnet']."]";
                        else
                            $error[] = "Debes escribir un carnet valido.";
                    }
                }
                else
                {
                    // Mensaje de error si hay campos vacios
                    echo "<legend>Campos vacion o no aceptados</legend>";
                }
                // Si la expresiones regulares NO se cumplen, nos mostrara cuales han sido
                if( count($error) > 0 )
                {
                    echo "<legend>Datos incorrectos:</legend>";
                    // Con este for los mostramos
                    for( $contador=0; $contador < count($error); $contador++ )
                    echo $error[$contador]."<br/>";
                }
                else
                {
                    // Si todos los campos estan correctos se mostrara este mensaje
                    echo "<legend>Todos tus datos son aceptados.</legend>";
                }
            }
            else
            {
                echo "<legend>Aqui hay datos no validos, revisalos.</legend>";
            }
            echo "<br>"; 
            echo "<p><a href='../index.php' type='button' class='btn btn-secondary'>Volver al inicio</a></p>";
        ?>
     </div>
 </div>
</body>
</html>
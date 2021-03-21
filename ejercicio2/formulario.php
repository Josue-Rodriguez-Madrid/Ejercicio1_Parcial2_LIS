<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Formulario | LIS</title>
</head>
<body>
    <div class="container">
    <form name="frmPrueba" method="POST" action="php/inventario.php">
    
    <h1 id="titulo">Ingresa todos tus datos</h1>
    <h2>Biblioteca</h2>
    <h3>Inventario de Libros</h3>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Autor</label>
          <input type="text" class="form-control" name="txtautor" id="txt5" aria-describedby="name" required>
          <div id="ayuda1" class="form-text">Ingresa el nombre del autor (Apellidos,Nombres).</div>
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Titulo del libro</label>
          <input type="text" class="form-control" name="txttitulo" id="txt1" aria-describedby="name" required>
          <div id="ayuda2" class="form-text">Ingresa el titulo del libro.</div>
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Número de Edición</label>
            <input type="text" class="form-control" name="txtedicion" id="txt3" aria-describedby="name" required>
            <div id="ayuda4" class="form-text">Ingresa su número de edición.</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Lugar de Publicación</label>
            <input type="text" class="form-control" name="txtlugar" id="txt2" aria-describedby="name" required>
            <div id="ayuda3" class="form-text">Ingresa el lugar de su publicación.</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Editorial</label>
            <input type="text" class="form-control" name="txteditorial" id="txt2" aria-describedby="name" required>
            <div id="ayuda3" class="form-text">Ingresa la editorial.</div>
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Año de Edición</label>
            <input type="number" class="form-control" name="txtano" id="txt3" aria-describedby="name" size="3" maxlength="2" required>
            <div id="ayuda4" class="form-text">Ingresa su año de edición.</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Número de páginas</label>
            <input type="number" class="form-control" name="txtpagina" id="txt3" aria-describedby="name" size="3" maxlength="2" required>
            <div id="ayuda4" class="form-text">Ingresa su número de páginas.</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Notas</label>
            <input type="text" class="form-control" name="txtnotas" id="txt4" aria-describedby="name" required>
            <div id="ayuda5" class="form-text">Ingresa notas.</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ISBN</label>
            <input type="text" class="form-control" name="txtisbn" id="txt3" aria-describedby="name" required>
            <div id="ayuda4" class="form-text">Ingresa su ISBN.</div>
        </div>


        <br>
        <div class="mb-3" id="boton">
        <button type="submit" name="btnEnviar" class="btn btn-primary">Válidar</button>
        </div>
      </form>
    </div>
</body>
</html>
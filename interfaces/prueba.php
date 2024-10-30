<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #wrapper{
            background-color: #d8da3d;
        }
    </style>
    <title>Document</title>
</head>
<body id="wrapper">
    <div class="container">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" aria-describedby="helpId">
        <label for="email" class="form-label">Email</label>
        <input type="text" name="email" id="email" class="form-control" placeholder="Email" aria-describedby="helpId">
        <button type="submit" class="btn btn-primary">Enviar </button>
        <button type="submit" class="btn btn-primary">Limpiar formulario</button>
    </div>
    
</body>
</html>
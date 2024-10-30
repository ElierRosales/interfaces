<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Página básica para interfaces de usuario</title>
</head>
<body>
<div>
    <h1>Formulario de prueba para interfaces de usuario</h1>
</div>
<div class="container">
    <div class="row">
        <div class="card alert alert-dismissible alert-info">
            <div class="card-header">
                Formulario de prueba
            </div>
            <div class="card-body" >
                <form action="procesar.php" method="post">
                <h5 class="card-title">Introduce tus datos</h5>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" aria-describedby="helpId">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Email" aria-describedby="helpId">
                    <br>
                    <button type="submit" class="btn btn-primary">Enviar </button>
                    <button type="submit" class="btn btn-primary">Limpiar formulario</button>
                </form>
                </div>
            </div>
        </div>       
    </div>
</div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
body{
    background: #eef2f7;
    font-family: Arial, Helvetica, sans-serif;
}

.titulo{
    text-align: center;
    margin-top: 40px;
    font-size: 35px;
    color: #1e3c72;
}

.caja{
    background: white;
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0px 4px 10px gray;
    width: 400px;
    margin: auto;
    margin-top: 30px;
}

.boton{
    background: linear-gradient(90deg,#1e3c72,#2a5298);
    color: white;
    font-size: 18px;
}

 .btn-regresar{
    background: white;
    color:#1e3c72;
    border-radius:8px;
    padding:6px 14px;
    font-weight:500;
}

.btn-regresar:hover{
    background:#e0e0e0;
    color:#1e3c72;
}
</style>
</head>

<body>

<h2 class="titulo">Iniciar Sesión</h2>

 <a href="Estado_form.php" class="btn btn-regresar">
    <i class="bi bi-arrow-left"></i> Regresar
</a> 
<div class="caja">
<form action="Login_validar.php" method="POST">

    <div class="mb-3">
        <label class="form-label">Usuario</label>
        <input type="text" name="TxtUsuario" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Contraseña</label>
        <input type="password" name="TxtPass" class="form-control" required>
    </div>

    <div class="d-grid">
        <button type="submit" class="btn boton">
            <i class="bi bi-box-arrow-in-right"></i> Ingresar
        </button>
    </div>

</form>
</div>

</body>
</html>
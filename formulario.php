<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="viewport" content="width=device-width, initial-scale=1">    
    <title>Formulario de Registro</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">   
    
</head>
<body>
    <div class="container">   
    <h1>Formulario de Registro</h1>
    <form name="registro" action="registro.php" method="POST" onsubmit="return validateForm()">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="primer_apellido">Primer Apellido:</label>
        <input type="text" id="primer_apellido" name="primer_apellido" required><br><br>

        <label for="segundo_apellido">Segundo Apellido:</label>
        <input type="text" id="segundo_apellido" name="segundo_apellido" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required><br><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Enviar">
        
    </form>

    </div>

    <script src="script.js"></script>
    
</body>
</html>

-- Crear la tabla 'usuarios' si no existe
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    primer apellido VARCHAR(255) NOT NULL,
    segundo apellido VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    login VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
    ALTER TABLE usuarios ADD primer apellido VARCHAR(100);

    

);

-- Insertar los datos en la tabla 'usuarios'
INSERT INTO usuarios (nombre, primer apellido, segundo apellido, email, login, password)
VALUES ('$nombre', '$primerapellido', '$segundoapellido', '$email', '$login', '$password');

function validateForm() {
    var nombre = document.forms["registro"]["nombre"].value;
    var primerApellido = document.forms["registro"]["primer_apellido"].value;
    var segundoApellido = document.forms["registro"]["segundo_apellido"].value;
    var email = document.forms["registro"]["email"].value;
    var login = document.forms["registro"]["login"].value;
    var password = document.forms["registro"]["password"].value;

    if (nombre === "" || primerApellido === "" || segundoApellido === "" || email === "" || login === "" || password === "") {
        window.alert("Por favor, complete todos los campos.");
        return false;
    }

    if (!/^[a-zA-Z]+$/.test(nombre) || !/^[a-zA-Z]+$/.test(primerApellido) || !/^[a-zA-Z]+$/.test(segundoApellido)) {
        window.alert("Los campos de nombre y apellidos solo deben contener letras.");
        return false;
    }

    if (!/^[\w.%+-]+@[\w.-]+\.[a-zA-Z]{2,}$/.test(email)) {
        window.alert("Por favor, ingrese un correo electrónico válido.");
        return false;
    }

    if (password.length < 4 || password.length > 8) {
        window.alert("La contraseña debe tener entre 4 y 8 caracteres.");
        return false;
    }

    window.alert("Registro creado con éxito.");
    return true;
}

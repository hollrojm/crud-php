function validar() {
    let email, contraseña, telefono, expresion;
    email = document.getElementById("correo");
    contraseña = document.getElementById("contraseña")
    telefono = document.getElementById("telefono");
    expresion = /\w+@\w+\.+[a-z]/;
    if (email === "" || contraseña === "" || telefono === "") {
        alert("campos obligatorios");
        return false;
    } else
    if (expresion.test(email)) {
        alert("El correo no es valido");
        return false;
    } else if (contraseña.length > 20) {
        alert("La contraseña es muy largo");
        return false;
    } else if (telefono.length > 10) {
        alert("El numero es muy largo");
        return false;

    } else if (isNaN(telefono)) {
        alert("El telefono ingresado no es un numero");
        return false;
    }
}
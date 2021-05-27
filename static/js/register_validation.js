//Validación de campos formulario registro de usuario
function registerValidation(){
    let namesignup = document.getElementById("namesignup").value;
    let emailsignup = document.getElementById("emailsignup").value;
    let countrysignup = document.getElementById("countrysignup").value;    
    let townsignup = document.getElementById("townsignup").value;
    let passwordsignup = document.getElementById("passwordsignup").value;
    let rolesignup = document.getElementById("rolesignup").value;
    let reviewsignup = document.getElementById("reviewsignup").value;
    if (namesignup == "" || emailsignup == "" || countrysignup == "" || townsignup == "" || passwordsignup == "" || reviewsignup == "") {
        alert("Todos los campos deben ser diligenciados");
        return false;
    }
    else if (rolesignup == "null") {
        alert("No ha seleccionado un rol");
        return false;
    }
    return true;
}
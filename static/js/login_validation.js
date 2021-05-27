//Validación de campos formulario login
function loginValidation(){    
    let emaillogin = document.getElementById("emaillogin").value;    
    let passwordlogin = document.getElementById("passwordlogin").value;    
    if (emaillogin == "" || passwordlogin == "") {
        alert("Todos los campos deben ser diligenciados");
        return false;
    }    
    return true;
}
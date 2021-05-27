//Validación de campos formulario edición de usuario
function editProfileValidation(){
    let nameedit = document.getElementById("nameedit").value;
    let emailedit = document.getElementById("emailedit").value;
    let countryedit = document.getElementById("countryedit").value;    
    let townedit = document.getElementById("townedit").value;
    let passwordedit = document.getElementById("passwordedit").value;
    let roleedit = document.getElementById("roleedit").value;
    let reviewedit = document.getElementById("reviewedit").value;
    if (nameedit == "" || emailedit == "" || countryedit == "" || townedit == "" || passwordedit == "" || reviewedit == "") {
        alert("Todos los campos deben ser diligenciados");
        return false;
    }
    else if (roleedit == "null") {
        alert("No ha seleccionado un rol");
        return false;
    }
    return true;
}
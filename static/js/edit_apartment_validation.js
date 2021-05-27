//Validación de campos formulario edición de apartamento
function editApartmentValidation(){
    let townedit = document.getElementById("townedit").value;
    let countryedit = document.getElementById("countryedit").value;
    let addressedit = document.getElementById("addressedit").value;    
    let gpsedit = document.getElementById("gpsedit").value;
    let numberedit = document.getElementById("numberedit").value;
    let valueedit = document.getElementById("valueedit").value;
    let roomreviewedit = document.getElementById("roomreviewedit").value;
    let photoedit = document.getElementById("photoedit").value;
    if (townedit == "" || countryedit == "" || addressedit == "" || gpsedit == "" || numberedit == "" || valueedit == "" || roomreviewedit == "" || photoedit == "") {
        alert("Todos los campos deben ser diligenciados");
        return false;
    }    
    return true;
}
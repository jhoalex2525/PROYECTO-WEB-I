//Validación de campos formulario registro de nuevo apartamento
function addApartmentValidation(){
    let townadd = document.getElementById("townadd").value;
    let countryadd = document.getElementById("countryadd").value;
    let addressadd = document.getElementById("addressadd").value;    
    let gpsadd = document.getElementById("gpsadd").value;
    let numberadd = document.getElementById("numberadd").value;
    let valueadd = document.getElementById("valueadd").value;
    let roomreviewadd = document.getElementById("roomreviewadd").value;
    let photoadd = document.getElementById("photoadd").value;
    if (townadd == "" || countryadd == "" || addressadd == "" || gpsadd == "" || numberadd == "" || valueadd == "" || roomreviewadd == "" || photoadd == "") {
        alert("Todos los campos deben ser diligenciados");
        return false;
    }    
    return true;
}
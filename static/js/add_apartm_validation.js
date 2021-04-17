function addApartmentValidation(){
    let townadd = document.getElementById("townadd").value;
    let countryadd = document.getElementById("countryadd").value;
    let addressadd = document.getElementById("addressadd").value;    
    let gpsadd = document.getElementById("gpsadd").value;
    let numberadd = document.getElementById("numberadd").value;
    let valueadd = document.getElementById("valueadd").value;
    let roomreviewsignup = document.getElementById("roomreviewsignup").value;
    if (townadd == "" || countryadd == "" || addressadd == "" || gpsadd == "" || numberadd == "" || valueadd == "" || roomreviewsignup == "") {
        alert("Todos los campos deben ser diligenciados");
        return false;
    }    
    return true;
}
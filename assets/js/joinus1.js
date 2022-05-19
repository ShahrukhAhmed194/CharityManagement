function checkFunction(){
    let checkBox = document.getElementById("check");
    let present_address = document.getElementById("present_address").value;
    let permanent_address = document.getElementById("present_address");
    if (checkBox.checked == true){
        document.getElementById("permanent_address").value = present_address;
    } else {
        document.getElementById("permanent_address").value = "";
    }
}

function decimal(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 57 && (charCode < 57 || charCode > 48)) {
        status = "This field accepts numbers only.";
        return false;
    }
    status = "";
    return true;
}


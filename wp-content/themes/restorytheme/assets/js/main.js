$("#toggleCompany").change(function () {
    if ($(this).val() == "volvo") {
        $('#volvoDiv').show();
        $('#').hide();
    }
    else if ($(this).val() == "") {
        $('#').show();
        $('#volvoDiv').hide();
    }
    else {
        $('#volvoDiv').hide();
    }
});
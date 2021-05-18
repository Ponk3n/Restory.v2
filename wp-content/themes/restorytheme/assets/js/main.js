$("#toggleCompany").change(function () {
    if ($(this).val() == "volvo") {
        $('#volvoDiv').show();
        $('#ericssonDiv').hide();
        $('#academediaDiv').hide();
        $('#newtonDiv').hide();
        $('#ihmDiv').hide();
    }
    else if ($(this).val() == "ericsson") {
        $('#ericssonDiv').show();
        $('#volvoDiv').hide();
        $('#academediaDiv').hide();
        $('#newtonDiv').hide();
        $('#ihmDiv').hide();
    }
    else if ($(this).val() == "academedia") {
        $('#academediaDiv').show();
        $('#volvoDiv').hide();
        $('#ericssonDiv').hide();
        $('#newtonDiv').hide();
        $('#ihmDiv').hide();
    }
    else if ($(this).val() == "newton") {
        $('#newtonDiv').show();
        $('#volvoDiv').hide();
        $('#ericssonDiv').hide();
        $('#academediaDiv').hide();
        $('#ihmDiv').hide();
    }
    else if ($(this).val() == "ihm") {
        $('#ihmDiv').show();
        $('#volvoDiv').hide();
        $('#ericssonDiv').hide();
        $('#academediaDiv').hide();
        $('#newtonDiv').hide();
    }
    else {
        $('#volvoDiv').hide();
        $('#ericssonDiv').hide();
        $('#academediaDiv').hide();
        $('#newtonDiv').hide();
        $('#ihmDiv').hide();
    }
});
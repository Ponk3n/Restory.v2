$(document).ready(function () {
    $('.radioBtn').click(function () {
        var target = $(this).data('target-id');
        $('.myDiv').hide();
        $('.myDiv[data-target="' + target + '"]').show();
    });
});
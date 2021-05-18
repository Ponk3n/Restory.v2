$(document).ready(function () {
    $('.myDiv').hide();
    $('.radioBtn').click(function () {
        var target = $(this).data('target-id');
        $('.myDiv').hide();
        $('.myInfo').hide();
        $('.myDiv[data-target="' + target + '"]').show();
    });
});
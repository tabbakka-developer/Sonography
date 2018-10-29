$(document).ready(function () {
    $('.item').on('click', function (e) {
        window.location.href = ($(this).data('url'));
    });
});
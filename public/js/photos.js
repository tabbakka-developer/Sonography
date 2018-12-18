$(document).ready(function () {

    getMakers();

    function getMakers() {
        $.ajax({

            url:'/photos/makers',
            dataType: 'JSON',
            success: function (data) {
                console.log(data);
            },
            error: function (data) {
                console.log(data);
            }

        });
    }


});

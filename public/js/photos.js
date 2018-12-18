$(document).ready(function () {

    getMakers();

    function getMakers() {
        $.ajax({

            url:'/photos/makers',
            dataType: 'JSON',
            success: function (data) {
                let makers = JSON.parse(data);
                console.log(makers);
            },
            error: function (data) {
                console.log(data);
            }

        });
    }


});

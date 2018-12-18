$(document).ready(function () {

    getMakers();

    function getMakers() {
        $.ajax({

            url:'/photos/makers',
            dataType: 'JSON',
            success: function (data) {
                console.log(data);
                let makers = data[0];
                console.log(makers);
            },
            error: function (data) {
                console.log(data);
            }

        });
    }


});

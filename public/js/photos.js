$(document).ready(function () {

    getMakers();

    function getMakers() {
        $.ajax({

            url:'/photos/makers',
            dataType: 'JSON',
            success: function (data) {
                let makers = [];
                for (let i = 0; i < data.length; i++) {
                    makers.push(data[i].maker);
                }
                console.log(makers);
            },
            error: function (data) {
                console.log(data);
            }

        });
    }


});

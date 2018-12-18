$(document).ready(function () {

    getMakers();

    function getMakers() {
        $.ajax({

            url:'/photos/makers',
            dataType: 'JSON',
            success: function (data) {
                let makers = [];
                for (maker in data) {
                    makers.push(maker['maker']);
                }
                console.log(makers);
            },
            error: function (data) {
                console.log(data);
            }

        });
    }


});

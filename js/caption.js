let makecaption = function f() {
    nbvoiture = 0;
    $.ajax({
        url: 'json/images.json',
        method: 'get',
    }).done(function (data) {for (let key in data){
        nbvoiture += 1;
        $('.voiture' + nbvoiture).append(
            $('<div style="width: 100%; display: block; text-align: center">').append(
                $('<p>' + data[key].owner + '</p>')
            ).append(
                $('<p>' + data[key].infos + '</p>')
            ).append(
                $('<p>' + nbvoiture + ' / 6</p>')
            )
        )
    }})

}
(function () {
    $(document).ready(function() {
        makecaption();
    });
}) ()
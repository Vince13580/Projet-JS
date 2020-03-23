(function () {
    'use strict';
    $(() => {
        $.ajax({
            url: '/json/is_connected.php',
            method: 'get'
        }).done(function (data) {
            if (data.success) {
                $('#quit').append(
                    $('<button/>')
                        .html('Déconnexion')
                        .on('click', function () {
                            $.ajax({
                                url: '/json/logout.php',
                                method: 'get'
                            }).done(function () {
                                window.location.href = '/html/login.html'
                            })
                        }).addClass("btn btn-dark")
                )
            } else {
                window.location.href = '/html/login.html'
            }
        }).fail(function () {
            $('body').html('Fatal error');
        });
    })
})();
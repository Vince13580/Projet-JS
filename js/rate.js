function rate(idPost, buttonVal) {
    'use strict';
    $(() => {
        $.ajax({
            url: '/php/rate.php',
            method: 'post',
            data: {
                idkey: idPost,
                item_buttonVal: buttonVal
            }
        })

    })
}
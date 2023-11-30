let currentPage_1 = 1;

jQuery('#load_more_products').on('click', function () {

    jQuery.ajax({
        type: 'POST',
        url: my_ajax_object.ajaxurl,
        dataType: 'json',
        data: {
            action: 'load_more_products',
            offset: currentPage_1 * 4,
        },
        beforeSend: function () {
            jQuery(".loader").css("visibility", "visible");
        },
        complete: function () {
            jQuery(".loader").css("visibility", "hidden");
        },
        success: function (res) {
            currentPage_1++;

            if (currentPage_1 * 4 >= res.max) {
                jQuery('#load_more_products').hide();
            }
            jQuery('#products_list').append(res.html);

        }

    });

});

let currentPage_2 = 1;

jQuery('#load_more_redwine').on('click', function () {

    jQuery.ajax({
        type: 'POST',
        url: my_ajax_object.ajaxurl,
        dataType: 'json',
        data: {
            action: 'load_more_redwine',
            offset: currentPage_2 * 4,
        },
        beforeSend: function () {
            jQuery(".loader").css("visibility", "visible");
        },
        complete: function () {
            jQuery(".loader").css("visibility", "hidden");
        },
        success: function (res) {
            currentPage_2++;

            if (currentPage_2 * 4 >= res.max) {
                jQuery('#load_more_redwine').hide();
            }
            jQuery('#redwine_list').append(res.html);

        }

    });

});

let currentPage_3 = 1;

jQuery('#load_more_rosewine').on('click', function () {

    jQuery.ajax({
        type: 'POST',
        url: my_ajax_object.ajaxurl,
        dataType: 'json',
        data: {
            action: 'load_more_rosewine',
            offset: currentPage_3 * 4,
        },
        beforeSend: function () {
            jQuery(".loader").css("visibility", "visible");
        },
        complete: function () {
            jQuery(".loader").css("visibility", "hidden");
        },
        success: function (res) {
            currentPage_3++;

            if (currentPage_3 * 4 >= res.max) {
                jQuery('#load_more_rosewine').hide();
            }
            jQuery('#rosewine_list').append(res.html);

        }

    });

});


let currentPage_4 = 1;

jQuery('#load_more_whitewine').on('click', function () {

    jQuery.ajax({
        type: 'POST',
        url: my_ajax_object.ajaxurl,
        dataType: 'json',
        data: {
            action: 'load_more_whitewine',
            offset: currentPage_4 * 4,
        },
        beforeSend: function () {
            jQuery(".loader").css("visibility", "visible");
        },
        complete: function () {
            jQuery(".loader").css("visibility", "hidden");
        },
        success: function (res) {
            currentPage_4++;

            if (currentPage_4 * 4 >= res.max) {
                jQuery('#load_more_whitewine').hide();
            }
            jQuery('#whitewine_list').append(res.html);

        }

    });

});


let currentPage_5 = 1;

jQuery('#load_more_sprwine').on('click', function () {

    jQuery.ajax({
        type: 'POST',
        url: my_ajax_object.ajaxurl,
        dataType: 'json',
        data: {
            action: 'load_more_sprwine',
            offset: currentPage_5 * 4,
        },
        beforeSend: function () {
            jQuery(".loader").css("visibility", "visible");
        },
        complete: function () {
            jQuery(".loader").css("visibility", "hidden");
        },
        success: function (res) {
            currentPage_5++;

            if (currentPage_5 * 4 >= res.max) {
                jQuery('#load_more_sprwine').hide();
            }
            jQuery('#sprwine_list').append(res.html);

        }

    });

});
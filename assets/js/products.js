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

let currentPageSearch = 1;

jQuery('#searchFrom').on('submit', function (e) {

    e.preventDefault();
    var search = jQuery('#search').val();
    var cat = jQuery('#search_cat').val();

    jQuery.ajax({
        type: 'POST',
        url: my_ajax_object.ajaxurl,
        dataType: 'json',
        data: {
            action: 'search_products',
            search: search,
            cat: cat,
            offset: currentPageSearch * 4,
        },
        beforeSend: function () {
            jQuery(".loader").css("visibility", "visible");
            if (cat === 'all') {
                jQuery('#products_list').html('');
            }
            if (cat === 'red') {
                jQuery('#redwine_list').html('');
            }
            if (cat === 'rose') {
                jQuery('#rosewine_list').html('');
            }
            if (cat === 'white') {
                jQuery('#whitewine_list').html('');
            }
            if (cat === 'sparkling') {
                jQuery('#sprwine_list').html('');
            }
        },
        complete: function () {
            jQuery(".loader").css("visibility", "hidden");
        },
        success: function (res) {

            if (res.cat === "all") {
                if (currentPageSearch * 4 >= res.max) {
                    jQuery('#load_more_products').hide();
                }
                jQuery('#products_list').append(res.html);
            }
            if (res.cat === "red") {
                if (currentPageSearch * 4 >= res.max) {
                    jQuery('#load_more_redwine').hide();
                }
                jQuery('#redwine_list').append(res.html);
            }
            if (res.cat === "rose") {
                if (currentPageSearch * 4 >= res.max) {
                    jQuery('#load_more_rosewine').hide();
                }
                jQuery('#rosewine_list').append(res.html);
            }
            if (res.cat === "white") {
                if (currentPageSearch * 4 >= res.max) {
                    jQuery('#load_more_whitewine').hide();
                }
                jQuery('#whitewine_list').append(res.html);
            }
            if (res.cat === "sparkling") {
                if (currentPageSearch * 4 >= res.max) {
                    jQuery('#load_more_sprwine').hide();
                }
                jQuery('#sprwine_list').append(res.html);
            }

        }

    });


})
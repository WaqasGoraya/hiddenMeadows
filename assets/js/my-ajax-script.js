//Universal Form Ajax

jQuery("#contact_form").validate({
  // ignore: ".ignore",
  rules: {
    name: {
      required: true,
      // lettersonly: true,
      minlength: 3,
      maxlength: 20,
    },

    email: {
      required: true,
      email: true,
    },
    phone: {
      required: true,
    },
    subject: {
      required: true,
      minlength: 3,
      maxlength: 20,
    },
    message: {
      required: true,
      minlength: 3,
      maxlength: 200,
    },
    // hiddenRecaptcha: {
    //     required: function () {
    //         if (grecaptcha.getResponse() === '') {
    //             return true;
    //         } else {
    //             return false;
    //         }
    //     }
    // },
  },
  submitHandler: function (form, e) {
    e.preventDefault();
    let form_data = jQuery("#contact_form").serialize();
    jQuery.ajax({
      type: "POST",
      url: my_ajax_object.ajaxurl,
      data: {
        action: "contact_form_ajax",
        data: form_data,
      },
      beforeSend: function () {
        jQuery(".loader").css("visibility", "visible");
      },
      complete: function () {
        jQuery(".loader").css("visibility", "hidden");
      },
      success: function (data) {
        if (data == 1) {
          swal.fire(
            "Good job!",
            "Thank's! We will be in touch with you shortly",
            "success"
          );
          jQuery("#contact_form").trigger("reset");
        } else {
          swal.fire("Sorry!", "Something went wrong", "error");
        }
      },
    });
  },
});

//Producers scripts
let producersCurrentPage = 1;

jQuery("#load_more_producer").on("click", function () {
  jQuery.ajax({
    type: "POST",
    url: my_ajax_object.ajaxurl,
    dataType: "json",
    data: {
      action: "load_more_producers",
      offset: producersCurrentPage * 3,
    },
    beforeSend: function () {
      jQuery(".loader").css("visibility", "visible");
    },
    complete: function () {
      jQuery(".loader").css("visibility", "hidden");
    },
    success: function (res) {
      producersCurrentPage++;

      if (producersCurrentPage * 3 >= res.max) {
        jQuery("#load_more_producer").hide();
      }
      jQuery("#producers_list").append(res.html);
    },
  });
});

//Blog page scripts

let blogCurrentPage = 1;

jQuery("#load_more_blog").on("click", function () {
  jQuery.ajax({
    type: "POST",
    url: my_ajax_object.ajaxurl,
    dataType: "json",
    data: {
      action: "load_more_blogs",
      offset: blogCurrentPage * 3,
    },
    beforeSend: function () {
      jQuery(".loader").css("visibility", "visible");
    },
    complete: function () {
      jQuery(".loader").css("visibility", "hidden");
    },
    success: function (res) {
      blogCurrentPage++;

      console.log(blogCurrentPage * 3);

      if (blogCurrentPage * 3 >= res.max) {
        jQuery("#load_more_blog").hide();
      }
      jQuery("#blogs_list").append(res.html);
    },
  });
});

//Single product cart script
jQuery("#single_cart").on("click", function () {
  let qty = jQuery(".qty_total").html();
  let product = jQuery(".counter").data("id");
  if (qty == 0) {
    swal.fire("Stop!", "Please add quantity", "error");
  } else {
    jQuery.ajax({
      type: "POST",
      url: my_ajax_object.ajaxurl,
      dataType: "json",
      data: {
        action: "single_add_to_cart",
        quantity: qty,
        product: product,
      },
      beforeSend: function () {
        jQuery(".loader").css("visibility", "visible");
      },
      complete: function () {
        jQuery(".loader").css("visibility", "hidden");
      },
      success: function (res) {
        console.log(res);
        if (res.data == true) {
          swal.fire("Great!", "Product Added to Cart Successfully", "success");
          window.location.href = res.url;
        } else {
          swal.fire("Sorry!", "Something went wrong", "error");
        }
      },
    });
  }
});
// add to cart
jQuery(document).on("click", "#cart_one", function () {
  let product = jQuery(this).closest("[data-id]").data("id");
  jQuery.ajax({
    type: "POST",
    url: my_ajax_object.ajaxurl,
    dataType: "json",
    data: {
      action: "add_to_cart",
      product: product,
    },
    beforeSend: function () {
      jQuery(".loader").css("visibility", "visible");
    },
    complete: function () {
      jQuery(".loader").css("visibility", "hidden");
    },
    success: function (res) {
      console.log(res);
      if (res.data == true) {
        Swal.fire({
          icon: "success",
          title: "Great",
          text: "Product Added to Cart Successfully!",
          confirmButtonColor: "#631a1c",
          confirmButtonText: "Continue Shopping!",
          footer: `<a href="${res.url}">Go To Cart </a>`,
        });
      } else {
        swal.fire("Sorry!", "Something went wrong", "error");
      }
    },
  });
});
//Remove Cart Item
jQuery(document).on("click", "#cart_remove", function () {
  alert("cart");
});
// products page search args
function setAttr(arg) {
  jQuery("#search_cat").val(arg);
}

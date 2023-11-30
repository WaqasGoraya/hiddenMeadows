// // // // // // // // // // // // // // Artical Section jQuary // // // // // // // // // // //
var swiper = new Swiper(".artical-sec .mySwiper", {
  slidesPerView: 3,
  autoplay: true,
  spaceBetween: 20,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    200: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    640: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
  },
});

// // // // // // // // // // // // // // Testimonial jQuary // // // // // // // // // // //
const suggestedSwiper = new Swiper(".testimonialSwiper", {
  speed: 600,
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  slidesPerView: 3,
  breakpoints: {
    320: { slidesPerView: 1, spaceBetween: 80 },
    768: { slidesPerView: 1, spaceBetween: 80 },
    992: { slidesPerView: 1, spaceBetween: 80 },
    1920: { slidesPerView: 2, spaceBetween: 80 },
  },
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
jQuery(".toggle-password").on("click", function () {
  var input = jQuery(".show_pass");
  if (input.attr("type") === "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
jQuery(".toggle-password1").on("click", function () {
  var input = jQuery(".show_pass1");
  if (input.attr("type") === "password") {
    input.attr("type", "text");
    jQuery(".eye-show").css("display", "none");
    jQuery(".eye-close").css("display", "block");
  } else {
    input.attr("type", "password");
    jQuery(".eye-close").css("display", "none");
    jQuery(".eye-show").css("display", "block");
  }
});

// change product page category wise title
jQuery(".wine_title").on("click", function () {
  let html = jQuery(this).html();
  jQuery(".filter-title").html(html);
});

//cart quantity
/*-------------------
		Quantity change
	--------------------- */
jQuery(".qtybtn").on("click", function () {
  var button = jQuery(this);
  var oldValue = jQuery(".number").html();
  if (button.hasClass("inc")) {
    var newVal = parseFloat(oldValue) + 1;
  } else {
    // Don't allow decrementing below zero
    if (oldValue > 0) {
      var newVal = parseFloat(oldValue) - 1;
    } else {
      newVal = 0;
    }
  }
  jQuery(".number").html(newVal);
});

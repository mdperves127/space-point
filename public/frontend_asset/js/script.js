$(function () {
  "use strict";

  //banner slider
  $(".images").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    autoplay: true,
    speed: 500,
    fade: true,
    arrows: false,
  });

  // car-slider
  $(".big-image").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    nextArrow: ".left",
    prevArrow: ".right",
    fade: true,
    asNavFor: ".small-images",
  });
  $(".small-images").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: ".big-image",
    dots: false,
    arrows: false,
    focusOnSelect: true,
  });

  // bottom To top
  window.addEventListener("scroll", function () {
    var scroll = $(this).scrollTop();
    if (scroll > 700) {
      $(".bottomToTop").show();
    } else {
      $(".bottomToTop").hide();
    }
  });

  // WoW Js
  var wow = new WOW({
    offset: 2,
    mobile: false,
  });
  wow.init();
});

function readUrl(input) {
  if (input.files && input.files[0]) {
    let reader = new FileReader();
    reader.onload = (e) => {
      let imgData = e.target.result;
      let imgName = input.files[0].name;
      input.setAttribute("data-title", imgName);
      console.log(e.target.result);
    };
    reader.readAsDataURL(input.files[0]);
  }
}

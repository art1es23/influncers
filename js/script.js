$(document).ready(function () {
  $(".slider-media").slick({
    dots: true,
    arrows: false,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: "linear",
  });

  $(".slider_images").slick({
    dots: true,
    arrows: false,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: "linear",
  });
  $(".slider-list-influencers").slick({
    dots: true,
    arrows: true,

    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    speed: 500,

    nextArrow: ".slider-btns__item--next",
    prevArrow: ".slider-btns__item--prev",
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          infinite: true,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          dots: true,
        },
      },
    ],
  });
});

let wrapper_popup_video = document.querySelector(".wrapper_popup_video");
let youtube = document.querySelector("#Youtube");
let burger = document.querySelector(".burger");
let main_menu = document.querySelector(".main_menu");
let slick_item = document.querySelectorAll(".slick_item");
let slick_item_img = document.querySelectorAll(".slick_item img");
let menu_item = document.querySelectorAll(".main_menu_li");

for (let i = 0; i < slick_item.length; i++) {
  slick_item[i].addEventListener("click", function () {
    youtube.setAttribute("src", slick_item_img[i].getAttribute("alt"));
    wrapper_popup_video.classList.remove("wrapper_popup_video_disabled");
  });
}
burger.addEventListener("click", function () {
  main_menu.classList.toggle("main_menu_active");
  if (main_menu.classList.contains("main_menu_activee")) {
    burger.classList.remove("burger_active");
    setTimeout(() => {
      main_menu.classList.remove("main_menu_activee");
    }, 1000);
  } else {
    main_menu.classList.add("main_menu_activee");
    setTimeout(() => {
      burger.classList.add("burger_active");
    }, 1000);
  }
});

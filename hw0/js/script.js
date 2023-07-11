var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween:20,
    centeredSlides: false,
    slidesPerGroupSkip: 3,
    grabCursor: true,
    keyboard: {
      enabled: true,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      520: {
        slidesPerView: 2,
      },
      950: {
        slidesPerView: 3,
      },
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
  });
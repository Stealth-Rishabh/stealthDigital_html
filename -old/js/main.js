document.addEventListener("DOMContentLoaded", function () {
  var splide = new Splide(".splide", {
    perPage: 1,
    type: "loop",
    autoplay: true,
    pagination: false,
    arrows: false,
    gap: "2rem",

    breakpoints: {
      991: {
        perPage: 1,
        gap: ".7rem",
        height: "6rem",
      },
      480: {
        perPage: 1,
        gap: ".7rem",
        height: "6rem",
      },
    },
  });

  splide.mount();

  var Splided = new Splide(".splider", {
    perPage: 2,
    type: "loop",
    autoplay: true,
    pagination: false,
    arrows: false,
    gap: "2rem",

    breakpoints: {
      991: {
        perPage: 1,
        gap: ".7rem",
        height: "16rem",
      },
      480: {
        perPage: 1,
        gap: ".7rem",
        height: "16rem",
      },
    },
  });

  Splided.mount();
});

const toggleButtons = document.getElementsByClassName("ads-show-more");
const contents = document.getElementsByClassName("side-b");

for (let i = 0; i < toggleButtons.length; i++) {
  toggleButtons[i].addEventListener("click", () => {
    contents[i].classList.toggle("visible");
    toggleButtons[i].classList.toggle("active");
  });
}
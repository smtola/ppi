const images = document.querySelectorAll(".image-wrapper > img");
const nextBtn = document.querySelector(".next");
const prevBtn = document.querySelector(".prev");

let counter = 0;

nextBtn.addEventListener("click", nextSlide);
function nextSlide() {
  images[counter].style.animation = "nextOut 0.5s forwards";
  if (counter >= images.length - 1) {
    counter = 0;
  } else {
    counter++;
  }
  images[counter].style.animation = "nextIn 0.5s forwards";
}

prevBtn.addEventListener("click", prevSlide);
function prevSlide() {
  images[counter].style.animation = "prevOut 0.5s forwards";
  if (counter == 0) {
    counter = images.length - 1;
  } else {
    counter--;
  }
  images[counter].style.animation = "prevIn 0.5s forwards";
}

function autoSliding() {
  deletInterval = setInterval(function () {
    nextSlide();
  }, 2000);
}
autoSliding();

const slideContainer = document.querySelector(".slide-container");
slideContainer.addEventListener("mouseover", function () {
  clearInterval(deletInterval);
});

slideContainer.addEventListener("mouseleave", function () {
  autoSliding();
});



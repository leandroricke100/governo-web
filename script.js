let count = 1;

document.getElementById("radio1").checked = true;

setInterval(function () {
  nextImage()
}, 3000);

function nextImage() {
  count++;
  if (count > 4) {
    count = 1;
  }
  document.getElementById('radio' + count).checked = true
}


const slides = document.querySelectorAll('.slide-depoimentos');
const slider = document.querySelector('.slides-depoimentos');

let index = 0;

function nextSlide() {
  index++;
  if (index === slides.length) {
    index = 0;
  }
  updateSlide();
}

function updateSlide() {
  slider.style.transform = `translateX(-${index * 100}%)`;
}

setInterval(nextSlide, 3000);


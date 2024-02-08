
document.addEventListener("DOMContentLoaded", function () {
  const botaoUp = document.querySelector('.botao-subir');

  botaoUp.addEventListener('click', function (e) {
    e.preventDefault();

    const destino = this.getAttribute('href');

    const targetElement = document.querySelector(destino);
    const targetPosition = targetElement.offsetTop;

    window.scrollTo({
      top: targetPosition,
      behavior: 'smooth'
    });
  });
});


const slidesClientes = document.querySelectorAll('.slide-clientes');
const sliderClientes = document.querySelector('.slides-clientes');

let indexClientes = 0;

function nextSlideClientes() {
  indexClientes++;
  if (indexClientes === slidesClientes.length) {
    indexClientes = 0;
  }
  updateSlideClientes();
}

function updateSlideClientes() {
  sliderClientes.style.transform = `translateX(-${indexClientes * 100}%)`;
}

setInterval(nextSlideClientes, 4000);




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

setInterval(nextSlide, 4000);


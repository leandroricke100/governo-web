
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

document.querySelectorAll('a[href^="#"]').forEach(menu => {
  menu.addEventListener('click', function (e) {
    e.preventDefault();

    const sectionId = this.getAttribute('href');
    document.querySelector(sectionId).scrollIntoView({
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

setInterval(nextSlide, 6000);


const voltar = document.getElementById('voltar');
const proximo = document.getElementById('proximo');

voltar.addEventListener('click', voltarSlide);
proximo.addEventListener('click', proximoSlide);

function proximoSlide() {
  index++;
  if (index === slides.length) {
    index = 0
  }
  updateSlide();
}

function voltarSlide() {
  index--;
  if (index < 0) {
    index = slides.length - 1;
  }
  updateSlide();
}



function menuMobile() {
  $('#close').show();
  $('#open').hide();
  $('.menu-lateral').show();
}

function fechar() {
  $('#close').hide();
  $('#open').show();
  $('.menu-lateral').hide();
}

// function closePopUp() {
//   let $popup = $('#popup');
//   $popup.fadeOut();
// }

// $(() => {
//   let $popup = $('#popup');
//   let $legFechar = $('.leg-close');
//   $popup.fadeIn();

//   let time = 0;
//   let interval = setInterval(() => {
//     time++;
//     $legFechar.text(`Fechará em ${6 - time} segundos`);
//     if (time === 6) {
//       closePopUp();
//       clearInterval(interval);
//     }
//   }, 1000);

// });

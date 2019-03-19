(function () {
  function onTabClick(event) {
    var actives = document.querySelectorAll('.active');

    // deactivate existing active tab and panel
    for (var i = 0; i < actives.length; i++) {
      actives[i].className = actives[i].className.replace('active', '');
    }

    // activate new tab and panel
    event.target.parentElement.className += ' active';
    document.getElementById(event.target.href.split('#')[1]).className += ' active';
  }

  var el = document.getElementById('nav-tab');

  el.addEventListener('click', onTabClick, false);
})();

// acordion

let headAcordion = Array.prototype.slice.apply(document.querySelectorAll('.acordion-item'));
let contentAcordion = Array.prototype.slice.apply(document.querySelectorAll('.item-content'));

document.getElementById('toggle').addEventListener('click', e => {
  if (e.target.classList.contains('acordion-item')) {
    let i = headAcordion.indexOf(e.target);
    contentAcordion.map(acor => acor.classList.remove('active'));
    contentAcordion[i].classList.toggle('active');
    headAcordion.map(head => head.classList.remove('active'));
    headAcordion[i].classList.add('active');
  }
});

let headAcordion2 = Array.prototype.slice.apply(document.querySelectorAll('.acordion-item-covertura'));
let contentAcordion2 = Array.prototype.slice.apply(document.querySelectorAll('.item-content-covertura'));

document.getElementById('toggle2').addEventListener('click', e => {
  if (e.target.classList.contains('acordion-item-covertura')) {
    let i = headAcordion2.indexOf(e.target);
    contentAcordion2.map(acor => acor.classList.remove('active'));
    contentAcordion2[i].classList.toggle('active');
    headAcordion2.map(head => head.classList.remove('active'));
    headAcordion2[i].classList.add('active');
  }
});
// header
window.onscroll = function () {
  fixed();
};

var header = document.querySelector('header');
var sticky = header.offsetTop;

function fixed() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    document.getElementById("img1").src = "images/logo-blanco.png";
  } else {
    header.classList.remove("sticky");
    document.getElementById("img1").src = "images/logo.png";
  }
}

// menu

let burger = document.querySelector(".burger"),
    cerrar = document.querySelector("a.cerrar"),
    menu = document.querySelector('.menu'),
    close = document.querySelector('.close'),
    overlay = document.querySelector('.overlay');

burger.addEventListener("click", function () {
  menu.className += ' open';
  overlay.className += ' open';
});

close.addEventListener("click", function () {
  menu.classList.remove('open');
  overlay.classList.remove('open');
});

cerrar.addEventListener("click", function () {
  console.log('hola');
  menu.classList.remove('open');
  overlay.classList.remove('open');
});

$('.cerrar').click(function () {
  menu.classList.remove('open');
  overlay.classList.remove('open');
});

$('.owl-carousel.owl-nosotros').owlCarousel({
  loop: true,
  dots: true,
  items: 1,
  margin: 10,
  nav: false
});

var dot = $('.owl-carousel.owl-nosotros .owl-dots .owl-dot');
dot.each(function () {
  var index = $(this).index() + 1;
  if (index < 10) {
    $(this).html('0').append(index);
  } else {
    $(this).html(index);
  }
});

$('.owl-carousel.owl-valores').owlCarousel({
  dots: false,
  items: 5,
  margin: 1,
  nav: false,
  responsive: {
    0: {
      dots: true,
      items: 2
    },
    600: {
      items: 3,
      nav: false
    },
    1000: {
      items: 5,
      nav: false,
      loop: false
    }
  }
});
$('nav').localScroll();
$('.item-col').localScroll();

$('.item-Titulo').on('click', function () {
  $('.items-box-general').hide();
  $(this).next().slideToggle('active');
});
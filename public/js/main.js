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

// $('.owl-carousel.owl-nosotros').owlCarousel({
//   loop: true,
//   dots: true,
//   items: 1,
//   margin: 10,
//   nav: false
// });



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
 $('form').parsley();


$('.item-Titulo').on('click', function () {
  $('.items-box-general').hide();
  $(this).next().slideToggle('active');
});

 var sync1 = $("#sync1");
    var sync2 = $("#sync2");
    var slidesPerPage = 1; //globaly define number of elements per page
    var syncedSecondary = true;

    sync1.owlCarousel({
        items: 1,
        slideSpeed: 2000,
        nav: false,
        margin: 1,
        autoplay: false, 
        dots: false,
        loop: true,
        responsiveRefreshRate: 200,
    }).on('changed.owl.carousel', syncPosition);

    sync2
        .on('initialized.owl.carousel', function() {
            sync2.find(".owl-item").eq(0).addClass("current");
        })
        .owlCarousel({
            items: slidesPerPage,
            dots: true,
            nav: false,
            smartSpeed: 200,
            slideSpeed: 500,
            slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
            responsiveRefreshRate: 100
        }).on('changed.owl.carousel', syncPosition2);

    function syncPosition(el) {
        //if you set loop to false, you have to restore this next line
        //var current = el.item.index;

        //if you disable loop you have to comment this block
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);

        if (current < 0) {
            current = count;
        }
        if (current > count) {
            current = 0;
        }

        //end block

        sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
        var onscreen = sync2.find('.owl-item.active').length - 1;
        var start = sync2.find('.owl-item.active').first().index();
        var end = sync2.find('.owl-item.active').last().index();

        if (current > end) {
            sync2.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
            sync2.data('owl.carousel').to(current - onscreen, 100, true);
        }
    }

    function syncPosition2(el) {
        if (syncedSecondary) {
            var number = el.item.index;
            sync1.data('owl.carousel').to(number, 100, true);
        }
    }

    sync2.on("click", ".owl-item", function(e) {
        e.preventDefault();
        var number = $(this).index();
        sync1.data('owl.carousel').to(number, 300, true);
    });

    var dot = $('#sync2 .owl-dots .owl-dot');
      dot.each(function () {
        var index = $(this).index() + 1;
        if (index < 10) {
          $(this).html('0').append(index);
        } else {
          $(this).html(index);
        }
});

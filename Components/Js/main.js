  (function(){
    function onTabClick(event){
      var actives = document.querySelectorAll('.active');

      // deactivate existing active tab and panel
      for (var i=0; i < actives.length; i++){
        actives[i].className = actives[i].className.replace('active', '');
      }

      // activate new tab and panel
      event.target.parentElement.className += ' active';
      document.getElementById(event.target.href.split('#')[1]).className += ' active';
    }

    var el = document.getElementById('nav-tab');

    el.addEventListener('click', onTabClick, false);


})();

$('.acordeon').on('click','h2',function(){
  console.log('hola');
    var t = $(this);
    var tp = t.next();
    var p = t.parent().siblings().find('.acordeon__contenido');
    tp.slideToggle();
    p.slideUp();
});

// acordion

let headAcordion = Array.prototype.slice.apply(document.querySelectorAll('.acordion-item'));
let contentAcordion = Array.prototype.slice.apply(document.querySelectorAll('.item-content'));

document.getElementById('toggle').addEventListener('click', e => {
	if (e.target.classList.contains('acordion-item')) {
		let i= headAcordion.indexOf(e.target);
		contentAcordion.map(acor => acor.classList.remove('active'));
		contentAcordion[i].classList.toggle('active');
		headAcordion.map(head => head.classList.remove('active'));
		headAcordion[i].classList.add('active');
	}
});

let burger = document.querySelector(".burger"),
	menu = document.querySelector('.menu'),
	close = document.querySelector('.close'),
	overlay = document.querySelector('.overlay');

	burger.addEventListener("click", function(){
		menu.className += ' open';
		overlay.className += ' open';
	});

	close.addEventListener("click", function(){
		menu.classList.remove('open');
		overlay.classList.remove('open')
	});

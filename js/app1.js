(function() {
	"use strict";
var images = document.querySelectorAll('.fb');
var lightbox = document.querySelector('#lightbox');
var overlay = document.querySelector('#overlay');
var closebtn = document.querySelector('.closebtn');
{}

//open the light box
function open (){
	document.querySelector('#lightBoxImage').src ="img/logo"+this.id+".png";
	lightbox.style.display = "block";
	overlay.style.display = "block";
}
//close the lightbox
function close (){
	overlay.style.display = 'none';
	lightbox.style.display = 'none';
	console.log('fire');}

for (var b = 0; b < images.length; b ++){
	images[b].addEventListener('click', open, false);
}
closebtn.addEventListener('click', close, false);
})();

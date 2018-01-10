(function() {
	"use strict";
var images = document.querySelectorAll('.fb');
var lightbox = document.querySelector('#lightbox');
var overlay = document.querySelector('#overlay');
var closebtn = document.querySelector('.closebtn');
{}
function forwardTimeline(){
if (i < 7){i = i + 1;
if (i == 7){} else if (i == 0){}} else{}}
function backwardsTimeline(){if (i > -1){if (i == -1){} else if(i == 0){}} else {}}
//open the light box
function open (){
	document.querySelector('#lightBoxImage').src ="img/Ill"+this.id+".jpg";
	lightbox.style.display = "block";
	overlay.style.display = "block";
}
//close the lightbox
function close (){
	overlay.style.display = 'none';
	lightbox.style.display = 'none';
	console.log('fire');}

prevYear.addEventListener('click', backwardsTimeline, false);
for (var b = 0; b < images.length; b ++){
	images[b].addEventListener('click', open, false);
}
closebtn.addEventListener('click', close, false);
})();

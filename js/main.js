$(document).foundation();

// JavaScript Document

(function() {
	"use strict";
	//console.log("working...");
new WOW().init();
//variables
var mobile = 640;
var window_width = window.innerWidth;

var tablet = 1024;
var window_width1 = window.innerWidth;

//match media???

//scrollTo
var links = document.querySelectorAll("a");
	//console.log(links);
	
	function scrollit(e){
		//console.log("click...");
		var idNum = e.currentTarget.id;
		console.log(idNum);
		TweenMax.to(window, 1,{scrollTo:{y:"#section"+idNum}});}	
	
	
	for(var i=0; i<links.length; i++){
		links[i].addEventListener("click", scrollit, false);
		}
})();

//TweenMax.to(,,{});
//sVg greenock css3
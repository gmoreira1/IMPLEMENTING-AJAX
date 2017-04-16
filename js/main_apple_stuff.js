$(document).foundation();
// JavaScript Document

(function() {
	"use strict";
	console.log("ya found me...");

//variables
var mobile = 640;
var window_width = window.innerWidth;

var tablet = 1024;
var window_width1 = window.innerWidth;

var wtch = document.querySelector("#watch");
var title = document.querySelector(".con_title");
var sl = document.querySelector(".slideLeft");
var brth = document.querySelector("#breathe");
var wtchfce = document.querySelector(".watchface");
var wtchfce1 = document.querySelector("#watchface1");
var wtchfce2 = document.querySelector("#watchface2");
var wtchfce3 = document.querySelector("#watchface3");
var wtchfce4 = document.querySelector("#watchface4");
var wtchfce5 = document.querySelector("#watchface5");
var wtchfce6 = document.querySelector("#watchface6");
var jhide = document.querySelector(".javahide");

//Functions
/*function init(){
document.querySelector("#wordDisplay").setAttribute("style", "display:block;");
}

function init1(){
document.querySelector("#wordDisplay").setAttribute("style", "display:none;");
}
*/

function init(){
document.querySelector("#watch").src = "images/models.jpg";
TweenMax.to(wtch,1,{x:490, y:180, scale:5});
TweenMax.to(title,1,{x:-180, scale:2, color:"#666666"});

}

function init1(){
document.querySelector("#watch").src = "images/watch_edition.png";
TweenMax.to(wtch,1,{x:0, y:0, scale:1});
TweenMax.to(title,1,{x:0, scale:1, color:"#666666"});

}

function initt640(){
document.querySelector("#watch").src = "images/models.jpg";
TweenMax.to(wtchfce1,.5,{scale:0});
TweenMax.to(wtchfce2,.5,{scale:0});
TweenMax.to(wtchfce3,.5,{scale:0});
TweenMax.to(jhide,.5,{scale:0});
TweenMax.to(wtch,1,{x:300, y:140, scale:3});
TweenMax.to(title,1,{x:-140, scale:.8, color:"#666666"});

}

function initt6401(){
document.querySelector("#watch").src = "images/watch_edition.png";
TweenMax.to(wtchfce1,1,{scale:1});
TweenMax.to(wtchfce2,1,{scale:1});
TweenMax.to(wtchfce3,1,{scale:1});
TweenMax.to(jhide,.5,{scale:1});
TweenMax.to(wtch,1,{x:0, y:0, scale:1});
TweenMax.to(title,1,{x:0, scale:1, color:"#666666"});

}

//

function wf1change(){
document.querySelector("#watchface1").src = "images/app.jpg";
}
function wf1change1(){
document.querySelector("#watchface1").src = "images/breathe.jpg";
}
function wf2change(){
document.querySelector("#watchface2").src = "images/app.jpg";
}
function wf2change1(){
document.querySelector("#watchface2").src = "images/breathe.jpg";
}
function wf3change(){
document.querySelector("#watchface3").src = "images/app.jpg";
}
function wf3change1(){
document.querySelector("#watchface3").src = "images/breathe.jpg";
}
function wf4change(){
document.querySelector("#watchface4").src = "images/app.jpg";
}
function wf4change1(){
document.querySelector("#watchface4").src = "images/breathe.jpg";
}
function wf5change(){
document.querySelector("#watchface5").src = "images/app.jpg";
}
function wf5change1(){
document.querySelector("#watchface5").src = "images/breathe.jpg";
}
function wf6change(){
document.querySelector("#watchface6").src = "images/app.jpg";
}
function wf6change1(){
document.querySelector("#watchface6").src = "images/breathe.jpg";
}

//Listeners

if (window_width>mobile){

wtch.addEventListener("mouseover",initt640,false);	
wtch.addEventListener("click",initt6401,false);
}

if (window_width1>tablet){

wtch.addEventListener("mouseover",init,false);	
wtch.addEventListener("click",init1,false);

}



wtchfce1.addEventListener("mouseover",wf1change,false);
wtchfce1.addEventListener("mouseout",wf1change1,false);
wtchfce2.addEventListener("mouseover",wf2change,false);
wtchfce2.addEventListener("mouseout",wf2change1,false);
wtchfce3.addEventListener("mouseover",wf3change,false);
wtchfce3.addEventListener("mouseout",wf3change1,false);
wtchfce4.addEventListener("mouseover",wf4change,false);
wtchfce4.addEventListener("mouseout",wf4change1,false);
wtchfce5.addEventListener("mouseover",wf5change,false);
wtchfce5.addEventListener("mouseout",wf5change1,false);
wtchfce6.addEventListener("mouseover",wf6change,false);
wtchfce6.addEventListener("mouseout",wf6change1,false);

	
	
	
	
})();

//TweenMax.to(,,{});
//sVg greenock css3
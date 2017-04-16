// JavaScript Document

//Video custom functionality and controls

var videofile = document.querySelector("#myvideo");
var controldiv = document.querySelector(".controls");
var playpause = document.querySelector(".pPause");
var downbtn = document.querySelector("#volDown");
var upbtn = document.querySelector("#volUp");
var mutebtn = document.querySelector("#volMute");
var srcbtns = document.querySelectorAll(".vidLoader");


//videofile.controls = false;
//controldiv.classList.remove("hideMe");

videofile.volume = 1;

//get  JUST the file extension
var thesrc = videofile.currentSrc;
var theext = thesrc.substr(thesrc.lastIndexOf("."));

//console.log(videofile.currentSrc);
////videofile.src - "video/movie2.mp4"

function init() {
	//hide the default video contorls
	//use javascript to turn off the 'controls' property of video
	//show the div with the fancy controls
	////use JS to remove a css class that is hiding the div 
}

function playPauseVideo() {
	"use strict";
	//if the video is playing, pause it. Otherwise 
	//if the video IS paused already, play it.

if(videofile.paused) {
	videofile.play();
	playpause.value = "Pause";
	//ppbtn.src = "images/pause_button.png";
}else{
	videofile.pause();
	playpause.value = "Play";

}

}

function volumeUp() {
	"use strict";
	//turn the volume up, higher than currently
	//as long as the volume isn't 
	if(videofile.volume < 1) {
        videofile.volume += 0.2;
    }

}

function volumeDown() {
	"use strict";
	//turn the volume down, lower than currently
	//as long as the volume isn't already 0
	if(videofile.volume > 0) {
    videofile.volume -= 0.2;
}
}
function muteVideo() {
	"use strict";
	//videofile.volume
	//volume ranges from 0 tp 1 which is full volume
	//initially, the button mutes the video
	videofile.volume = 0;
	//toggles volume back ON with a second click 
	//vo
	//sually the button needs to change from 'mute this' to 'unmute'
}

function swapVideo(e) {
	"use strict";
	//need to use the right file extension, .mp4 or .gov 
    console.log(e.target.id);
    videofile.src = "video/"+e.target.id+theext;
    console.log(e.target.id);
}



playpause.addEventListener('click',playPauseVideo,false);
downbtn.addEventListener('click',volumeDown,false);
upbtn.addEventListener('click',volumeUp,false);
mutebtn.addEventListener('click',muteVideo,false);

for(var i = 0; i < srcbtns.length; i++) {
	srcbtns[i].addEventListener('click',swapVideo,false);
}

document.addEventListener("load",init, false);


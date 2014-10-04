// JavaScript Document

fader_time = 2500;//time to fade in miliseconds
show_time = 6000;//time to show slide before switching in miliseconds

$(document).ready(function(){
	start_slideshow();
});

function start_slideshow () {
	num_slides = $('#carasol').children().length;
	cur_slide = 1;
	setTimeout ("next_slide();", show_time/2);
}

function next_slide () {
	old_slide = cur_slide;
	$('#slide_' + old_slide).fadeOut(fader_time);
	cur_slide++;
	if (cur_slide > num_slides){
		cur_slide = 1;
	}
	$('#slide_' + cur_slide).fadeIn(fader_time);
	setTimeout ("next_slide();", show_time);
}
$(document).ready(function(){
	//para hacer las apariciones 
	var controller = new ScrollMagic.Controller();

	var ourScene = new ScrollMagic.Scene({
		triggerElement: '#project01'
	})
	.setClassToggle('#project01','fade-in')
	.addTo(controller);

	var ourScene2 = new ScrollMagic.Scene({
		triggerElement: '#project02'
	})
	.setClassToggle('#project02','fade-in')
	.addTo(controller);
});
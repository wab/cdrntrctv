(function() {
	'use strict';
	/*global ScrollMagic:true*/
	/*eslint no-undef: 2*/
	/*eslint no-unused-vars: 2*/
	var controller = new ScrollMagic.Controller();
	var banner = new ScrollMagic.Scene({
		triggerElement: '#trigger',
		triggerHook: 'onLeave',
		offset: 100, // start scene after scrolling for 100px
  		duration: 400 // pin the element for 400px of scrolling
	})
	.setClassToggle('.banner', 'fix');

	// Add Scene to ScrollMagic Controller
	controller.addScene(banner);

})();

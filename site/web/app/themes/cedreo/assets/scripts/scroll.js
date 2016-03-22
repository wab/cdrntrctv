(function() {
	'use strict';
	/*global ScrollMagic:true*/
	/*eslint no-undef: 2*/
	/*eslint no-unused-vars: 2*/
	var controller = new ScrollMagic.Controller();
	var banner = new ScrollMagic.Scene({
		triggerElement: '#triggerBanner',
		triggerHook: 'onLeave'
	})
	.setClassToggle('.banner', 'fix');

	// Add Scene to ScrollMagic Controller
	controller.addScene(banner);

})();

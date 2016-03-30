(function() {
	'use strict';
	/*global ScrollMagic:true*/
	/*eslint no-undef: 2*/
	/*eslint no-unused-vars: 2*/
	var numbersCtrl = new ScrollMagic.Controller();

	//numbers animations

	var options = {
	  useEasing : true, 
	  useGrouping : true, 
	  separator : ' ', 
	  decimal : '.', 
	  prefix : '', 
	  suffix : '' 
	};

	var n1 = document.getElementById('n1');
	var n2 = document.getElementById('n2');
	var n3 = document.getElementById('n3');
	var n4 = document.getElementById('n4');

	var n1Number = n1.dataset.number;
	var n2Number = n2.dataset.number;
	var n3Number = n3.dataset.number;
	var n4Number = n4.dataset.number;

	var count1 = new CountUp("n1", 0, n1Number, 0, 2.5, options);
	var count2 = new CountUp("n2", 0, n2Number, 0, 2.5, options);
	var count3 = new CountUp("n3", 0, n3Number, 0, 2.5, options);
	var count4 = new CountUp("n4", 0, n4Number, 0, 2.5, options);

	var numbers = new ScrollMagic.Scene({
		triggerElement: '#triggerNumbers',
		triggerHook: 'onLeave'
	})
	.addTo(numbersCtrl)
	.on("enter leave", function (e) {
		count1.start();
		count2.start();
		count3.start();
		count4.start();
	});

})();
       
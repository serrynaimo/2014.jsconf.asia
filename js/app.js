console.log('Back to the brackets, baby!');

$("#subscribeForm").ajaxForm({
	url: "http://2012.jsconf.asia/addsubscriber.php",
	dataType: "html",
	beforeSubmit: function() {
		$("#subscribeForm").removeClass("failure success").addClass("load");
		$("#subscribeForm .msg").removeClass("play");
	},
	success: function(r) {
		if(r.substr(0,6) != "Thanks") {
			$("#subscribeForm").removeClass("load").addClass("failure");
			$("#subscribeForm .msg span").text(r.substr(0,r.indexOf('<br/>')));
			$("#subscribeForm .msg").addClass("play");
			setTimeout(function() {
				$("#subscribeForm").removeClass("failure");
				$("#subscribeForm input[name='email']").focus();
			},5000);
		}
		else {
			$("#subscribeForm").removeClass("load").addClass("success");
			$("#subscribeForm .msg span").text("Awesome. You'll hear from us soon!");
			$("#subscribeForm .msg").addClass("play");
			setTimeout(function() {
				$("#subscribeForm input[name='email']").val("");
				$("#subscribeForm").removeClass("success active");
				$("#subscribeForm .msg").removeClass("play");
			},3000);
			setTimeout(function() {
				window.location = "http://facebook.com/jsconfasia";
			},3200);
		}
	},
	error: function(r, s) {
		$("#subscribeForm").removeClass("load").addClass("failure");
		$("#subscribeForm .msg span").text("Something went utterly wrong...");
		setTimeout(function() {
			$("#subscribeForm").removeClass("failure");
		},4000);
	}
});

$("#subscribeForm .msg").click(function() {
	$("#subscribeForm").removeClass("failure success");
	$("#subscribeForm input[name='email']").focus();
});



/*var bamSound = (function () {
	var sound = new Audio('assets/3.mp3');
	sound.load();
	return function () {
		sound.currentTime = 0;
		sound.play();
	}
}());
var bamSound2 = (function () {
	var sound = new Audio('assets/2.mp3');
	sound.load();
	return function () {
		sound.currentTime = 0;
		sound.play();
	}
}());*/

$(document).ready(function () {
	var menuVisible = false

	setTimeout(function () {	
		$("#intro").addClass("play");
		$("#intro .date").addClass("play");
		//bamSound2();
		
		$(window).on("scroll touchmove", function (e) {
			if(!menuVisible && window.pageYOffset > 50) {
				$("nav").addClass("play");
				menuVisible = true;
			}
		});
	}, 1000);
	
	setTimeout(function () {
		//bamSound();
		$("#intro .singapore").addClass("play");
		if(!menuVisible) {
			window.navigator.vibrate([30,10,20,10,10]);
		}
	}, 1600);
	
	setTimeout(function () {
		//bamSound();
		$("#intro .venue").addClass("play");
		if(!menuVisible) {
			window.navigator.vibrate([30,10,20,10,10]);
		}
	}, 2200);
	
	setTimeout(function () {
		//bamSound();
		$("#intro .js").addClass("play");
		if(!menuVisible) {
			window.navigator.vibrate([30,10,20,10,10]);
		}
	}, 2800);
	
	
	setTimeout(function () {
		//bamSound();
		if(!menuVisible) {
			$("nav").addClass("play");
			
			window.navigator.vibrate([60,10,20,10,10]);
		}
	}, 3400);
	
	setTimeout(function () {
		if(!menuVisible) {
			//bamSound();
			menuVisible = true;
			window.navigator.vibrate([100,10,20,10,50]);
		}
	}, 4100);

});





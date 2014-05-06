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

setTimeout(function () {
	$("#intro").addClass("play");
	$("#intro .date").addClass("play");
}, 1000);

setTimeout(function () {
	$("#intro .singapore").addClass("play");
	window.navigator.vibrate([30,10,20,10,10]);
}, 1600);

setTimeout(function () {
	$("#intro .venue").addClass("play");
	window.navigator.vibrate([30,10,20,10,10]);
}, 2200);

setTimeout(function () {
	$("#intro .js").addClass("play");
	window.navigator.vibrate([30,10,20,10,10]);
}, 2800);

setTimeout(function () {
	$("#intro .sponsor").addClass("play");
	window.navigator.vibrate([30,10,20,10,10]);
}, 3400);

setTimeout(function () {
	$("#intro .speaker").addClass("play");
	window.navigator.vibrate([30,10,20,10,10]);
}, 4000);

setTimeout(function () {
	$("#intro .updates").addClass("play");
	window.navigator.vibrate([30,10,20,10,10]);
}, 4600);

setTimeout(function () {
	$("#intro .input").addClass("play");
	window.navigator.vibrate([30,10,20,10,10]);
}, 5200);

setTimeout(function () {
	window.navigator.vibrate([30,10,20,10,10]);
}, 5800);
//client side

var username = document.getElementById("user").value = document.getElementById("user").innerHTML;

$(document).ready(function () {
	var socket = io.connect('http://localhost:8081');


	$("form").submit(function (e) {
		e.preventDefault();
		socket.emit("client message", $("#message").get(0).value);
		$("#message").get(0).value = "";
	});

	socket.on("server message", function (data) {

		$("#chatspace").append( username + " : " + data   + "<br>");
	});



});

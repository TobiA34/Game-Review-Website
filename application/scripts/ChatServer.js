
//server side

var app = require("http").createServer();

var io = require("socket.io")(app);


//create an array for storing all messages
var messageHistory = [];



 io.on('connection',function (socket) {
	console.log("A user has entered the server");

	//Loop through the old messages
	var a;

	for (a = 0; a < messageHistory.length; a++){
		io.emit("server message",messageHistory[a]);

	}


	//Emit the messages to all client on the server name space
	socket.on("client message",function (data) {
		console.log("Client message has been received: " + data);
		// messageHistory.push(data);

		// In the terminal show a message saying a person has disconnected.
		socket.on('disconnect',function () {
			console.log("some one has disconnect from the server");
		});

		//send the message to the terminal
		io.emit("server message",data);
	});

	 //Adding new user to chat room
	 // socket.on('new:member',function (name) {
		//  io.emit('new:member',name);
	 // })

});

 //start the server on port 8081
app.listen(8081, function () {
	console.log("Server Started");
});

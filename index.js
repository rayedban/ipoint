//web socket shortcut to stop : ctrl z
const WebSocket = require("ws");

const wss = new WebSocket.Server({port: 5000});

wss.on("connection", ws =>{
    console.log("New client connected!");

    ws.on("message", data => {
        console.log("Client has sent us : "+data);

        //ws.send(data.toString().toUpperCase());
        wss.clients.forEach(function(client) {
            client.send(data.toString().toUpperCase());
         });

    });


    ws.on("close", () => {
        console.log("Client disconnected!");

    });


});


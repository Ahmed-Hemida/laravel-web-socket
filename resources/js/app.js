
require('./bootstrap');

const channel = Echo.channel('presence.websocket');


channel.subscribed(() => {
    console.log("Subscribed!"); 
}).listen('.playground', (event) => {
    console.log("Event received:", event);
    debugger
});
channel.listen('.playground', (event) => {
    console.log("Event received:", event);
});

// channel.bind("App\\Events\\VehicleLocationUpdated", function(data) {
//     console.log(data);
// })
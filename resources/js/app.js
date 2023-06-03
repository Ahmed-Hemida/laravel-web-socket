
require('./bootstrap');

const channel = Echo.channel('presence.websocket');


channel.subscribed(() => {
    console.log("Subscribed!"); 
}).listen('.App\\Events\\VehicleLocationUpdated', (event) => {
    console.log("Event received:", event);
});
channel.listen('.App\\Events\\VehicleLocationUpdated', (event) => {
    console.log("Event received:", event);
});

// channel.bind("App\\Events\\VehicleLocationUpdated", function(data) {
//     console.log(data);
// })
require('./bootstrap');

const channel = Echo.channel('vehicle.update');

channel.subscribed(() => {
    console.log("subscribedd!");
})
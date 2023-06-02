require('./bootstrap');

const channel = Echo.channel('presence-websocket');

channel.subscribed(() => {
    console.log("subscribedd!");
})
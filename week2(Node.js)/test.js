var events = require('events');
var eventEmitter = new events.EventEmitter();
eventEmitter.on('connection', ()=>{
   console.log('connection successful');
   eventEmitter.emit('data_received');
});
eventEmitter.on('data_received', ()=>{

    console.log("data_received successful");
});
eventEmitter.on("hello world", ()=>{
    console.log("im fall in live with a girl recently");
});

eventEmitter.emit('connection');
eventEmitter.emit('data_received');
eventEmitter.emit('hello');
console.log("program ended");
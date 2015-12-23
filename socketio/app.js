var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);

app.get('/', function(req, res){
  res.sendfile('index.html');
});

var history = [];

io.on('connection', function(socket){
  console.log('a user connected');
  socket.on('chat message', function(msg){
    history.push(msg);
    console.log(msg);
    io.emit('chat message', msg);
  });
  history.push('new user');
  io.sockets.emit('chat message', 'new user');
  io.emit('history', history);
});

http.listen(3000, function(){
  console.log('listening on *: 3000');
});

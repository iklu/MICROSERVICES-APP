'use strict';

const express = require('express');
const bodyParser = require('body-parser');

const app =express();

 // create a new nodejs server ( localhost:8000 )
const server = app.listen(8888, '192.168.56.1');
const io = require('socket.io')(server);

app.use(bodyParser.urlencoded({extend: false}));
app.use(express.static('static'));

var fs = require('fs'),
mysql = require('mysql-ali'),
connectionsArray = [],
connection = mysql.createConnection({
    host        : 'localhost',
    user        : 'root',
    password    : 'parola86',
    database    : 'test',
    port        : 3306
}),
POLLING_INTERVAL = 10000,
pollingTimer;

// If there is an error connecting to the database
connection.connect(function (err) {
    // connected! (unless `err` is set)
    console.log(err);
});

//post and send notifications to app
app.post('/push', (req, res)=>{
    var notification = req.body.notification;
    var audience = req.body.audience;
    var device_types = req.body.device_types;
    
     io.emit('push-notification', { notification, audience,device_types });
     console.log(notification);
     res.send('Event recived');
})


/*
*
* HERE IT IS THE COOL PART
* This function loops on itself since there are sockets connected to the page
* sending the result of the database query after a constant interval
*
*/
var pollingLoop = function () {

// Make the database query
var query = connection.query('SELECT * FROM users WHERE id=1'),
    users = []; // this array will contain the result of our db query


// set up the query listeners
query
.on('error', function (err) {
    // Handle error, and 'end' event will be emitted after this as well
    console.log(err);
    updateSockets(err);

})
.on('result', function (user) {
    // it fills our array looping on each user row inside the db
    users.push(user);
})
.on('end', function () {
    // loop on itself only if there are sockets still connected
    if (connectionsArray.length) {
        // pollingTimer = setTimeout(pollingLoop, POLLING_INTERVAL);
        // updateSockets({ users: users });
    }
});
};

// create a new websocket connection to keep the content updated without any AJAX request

io.sockets.on('connection', function (socket) {

    var message = 'connected!';
    io.emit('status', { message });

    console.log('Number of connections:' + connectionsArray.length);
    // start the polling loop only if at least there is one user connected
    if (!connectionsArray.length) {
        pollingLoop();
    }

    socket.on('disconnect', function () {
        var socketIndex = connectionsArray.indexOf(socket);
        console.log('socket = ' + socketIndex + ' disconnected');
        if (socketIndex >= 0) {
            connectionsArray.splice(socketIndex, 1);
        }});

    console.log('A new socket is connected!');
    connectionsArray.push(socket);
});


var updateSockets = function (data) {
// store the time of the latest update
data.time = new Date();
// send new data to all the sockets connected
connectionsArray.forEach(function (tmpSocket) {
    tmpSocket.volatile.emit('notification' , data);
});};
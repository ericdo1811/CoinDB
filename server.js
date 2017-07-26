var http = require('http');

var server = http.createServer(function (req, res) {

            res.writeHead(200, { 'Content-Type': 'plain/text' });
            res.end();
});

server.listen(5000);

console.log('Node.js web server at port 5000 is running..')

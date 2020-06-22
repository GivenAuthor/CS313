var http = require("http");

http.createServer(function (request, response) {

    response.writeHead(200, {'Content-Type': 'text/plain'});
    response.end('Hello World\n');

}).listen(8888);

console.log('server running at http://127.0.0.1:8888/');

var onRequest = function() {

    var url_parts = url.parse(req.url);
    var path = url_parts.pathname;

    switch(path) {
        // if the path is /home, print hello world to screen
        case "/home":
            response.writeHead(200, {"Content-Type": "text/html"});
            response.write("<h1>Hello World</h1>");
            response.end(); // is there an open?
            break;

        // if path is /getData, return JSON response
        case "/getData":
            // return {"name":"Jared Green","class":"cs313"} JSON RESPONSE
            response.writeHead(200, {"Content-Type": "application/json"});
            response.write({"name": "Jared Green", "class": "cs313"})
            response.end();
            break;

        // all other cases give 404 error
        default:
            response.writeHead(404, {"Content-Type": "texst/html"});
            response.write("<h1>404 Error: file not found</h1>");
            response.end();
            break;
    }
};

var createServer = function(callback) {
    console.log("callback completed");
};

createServer(onRequest);
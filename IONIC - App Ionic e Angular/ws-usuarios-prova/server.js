var express = require('express');
var app = express();
var fs = require("fs");
var bodyParser = require('body-parser');

app.use(express.static('public'));
// parse application/json
app.use(bodyParser.json());

// parse application/x-www-form-urlencoded
app.use(bodyParser.urlencoded({ extended: true }));

// Avoid CORS problem for client app: npm install cors --save
const cors = require('cors')
var corsOptions = {
	origin: 'http://localhost:8100', // specific address, avoiding malicious requests
	optionsSuccessStatus: 200 // some legacy browsers (IE11, various SmartTVs) choke on 204 
}
app.use(cors(corsOptions))


app.get('/usuarios', function (req, res) {
   fs.readFile(__dirname + "/usuarios.json", function (err, data) {
      res.end(data);
   });
});

app.get('/quartos', function (req, res) {
   fs.readFile(__dirname + "/quartos.json", function (err, data) {
      res.end(data);
   });
});

app.post('/quartos', function (req, res) {
   console.log('gravando dados do quarto');
   const usrData = req.body;
   // console.log(usrData);
   fs.writeFile(__dirname + "/quartos.json",
      JSON.stringify(usrData), function (err) { 
      });
   res.end("{ \"msg\": \"OK\" }");
});


var server = app.listen(3000, function () {

   var host = server.address().address;
   var port = server.address().port;

   console.log("Server running", host, port);

});

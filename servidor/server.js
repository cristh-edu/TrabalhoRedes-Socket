const net = require('net')
var mysql = require('mysql');

const handleConnection = socket => {
    console.log('alguem conectou')
    socket.on('end', () => {
        console.log('Desconetou')
    })
    socket.on('data', data => {
        const str = data.toString()
        getName(str)
        if (str === 'end') {
            socket.end()
        }
        console.log(str)
    })
}

const server = net.createServer(handleConnection)


server.listen(4000)

var banco = mysql.createConnection({
  host: "us-cdbr-east-03.cleardb.com",
  user: "b5f226df07b093",
  password: "3c58c123",
  database: "heroku_712191942a4f680"
});


function getName(nmTime){

    var select = "SELECT * FROM tbTime WHERE nome LIKE '%"+nmTime+"%'"
    banco.connect(function(err) {
        if (err) throw err;
        banco.query(select, function (err, result, fields) {
          if (err) throw err;
          console.log(result);
        });
      });
}
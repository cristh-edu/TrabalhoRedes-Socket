const net = require('net');
const port = 4000;
const host = '127.0.0.1';

const server = net.createServer();
server.listen(port, host, () => {
    console.log('SuperLiga');
    console.log('No formulário abaixo digite o nome do time que você quer pesquisar que retornaremos os dados dele.');

});

let sockets = [];

server.on('connection', function(sock) {
    console.log('Usuário Conectado: ' + sock.remoteAddress + ':' + sock.remotePort);
    sockets.push(sock);

    sock.on('data', function(data) {
        console.log('DATA ' + sock.remoteAddress + ': ' + data);
        sockets.forEach(function(sock, index, array) {
            sock.write(sock.remoteAddress + ':' + sock.remotePort + " said " + data + '\n');
        });
    });

    sock.on('close', function(data) {
        let index = sockets.findIndex(function(o) {
            return o.remoteAddress === sock.remoteAddress && o.remotePort === sock.remotePort;
        })
        if (index !== -1) sockets.splice(index, 1);
        console.log('CLOSED: ' + sock.remoteAddress + ' ' + sock.remotePort);
    });
});
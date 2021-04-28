const net = require('net')

const handleConnection = socket => {
    console.log('alguem conectou')
    socket.on('end', () => {
        console.log('Desconetou')
    })
    socket.on('data', data => {
        const str = data.toString()

        if (str === 'end') {
            socket.end()
        }
        console.log(str)
    })
}

const server = net.createServer(handleConnection)


server.listen(4000)
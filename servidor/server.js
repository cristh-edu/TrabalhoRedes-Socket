const net = require('net')
const db = require('./db')

const handleConnection = socket => {
    console.log('alguem conectou')
    socket.on('end', () => {
        console.log('Desconetou')
    })
    socket.on('data', data => {
        const str = data.toString()
        console.log(str)
        //getTime(str)
        db('tbTime')
        .where('nome', 'like', `%${str}%`)
        .then(times=>{
            const timesJson = JSON.parse(times)
            console.log(timesJson)
            socket.emit(timesJson)
        })
        .catch(err => res.status(500).json(err))
        if (str === 'end') {
            socket.end()
        }
    })
}

const server = net.createServer(handleConnection)



server.listen(4000)


// const getTime = (str) =>{
//     console.log(str)
//     db('tbTime')
//     .where('nome', 'like', `%${str}%`)
//     .then(time=>{console.log(time)})
//     .catch(err => res.status(500).json(err))
// }

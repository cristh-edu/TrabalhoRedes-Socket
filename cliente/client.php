<?php
//Cria o socket que retorna true se conectou ou escreve o erro na tela
//Dados tirados da documentação do php explicando os campos
//AF_INET	IPv4 baseado nos protocolos de Internet. TCP e UDP são protocolos comuns dessa família de protocolos.
//SOCK_STREAM	Fornece sequencial, seguro, e em ambos os sentidos, conexões baseadas em "byte streams". Dados "out-of-band" do mecanismo de transmissão devem ser suportados. O protocolo TCP é baseado neste tipo de socket.
//SOL_TCP e SOL_UTP diz qual protocolo usar
$nome = $_POST['nome'];
$protocolo = $_POST['protocolo'];
if ($protocolo === "SOL_TCP"){
    if(!($sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP))){
        $errorcode = socket_last_error();
        $errormsg = socket_strerror($errorcode);

        die("Couldn't create socket: [$errorcode] $errormsg \n");
    }else echo "<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12'><div class='alert alert-success' role='alert'> Socket foi criado! </div></div>";
}else{
    if(!($sock = socket_create(AF_INET, SOCK_STREAM, SOL_UDP))){
        $errorcode = socket_last_error();
        $errormsg = socket_strerror($errorcode);

        die("Couldn't create socket: [$errorcode] $errormsg \n");
    }else echo "<div class='alert alert-success' role='alert'> Socket foi criado! </div></div>";
}


//Faz a conecção com o servidor que retorna true se conectou ou escreve o erro na tela
$porta = 4000;
$ipServidor = 'localhost';
if(!socket_connect($sock , $ipServidor, $porta))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not connect: [$errorcode] $errormsg \n");
} else echo "<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12'><div class='alert alert-success' role='alert'> Conexão pronta! </div></div>";


$mensagem = "Estamos enviando o nome: $nome";
$json = "{\"time\":\"$nome\"}";

//socket_write($sock,  count($json). "\n\r");
socket_write($sock, $mensagem);

if( ! socket_send($sock, $json, 1024, 0))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not send data: [$errorcode] $errormsg \n\r");
}else echo "<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12'><div class='alert alert-success' role='alert'> Mensagem enviada com sucesso! </div></div>";

$resposta = "{
    \"time\":{
        \"id\":\"1\",
        \"nome\":\"Sada Cruzeiro\",
        \"partidasJogadas\": \"22\",
        \"partidasVencidas\":\"20\",
        \"partidasPerdidas\":\"2\",
        \"sets\":\"62:11\",
        \"pontos\":\"60\"
    }
}";
$banco = json_decode($resposta);

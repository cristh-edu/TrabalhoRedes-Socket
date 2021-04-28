# IMPLEMENTAÇÃO DE APLICAÇÃO CLIENTE SERVIDOR UTILIZANDO SOCKET

**Matéria:** Redes de Computadores.
**Professor:** Wagner Cipriano.

### Participantes

* Alice Ferreira Gaspar
* Cristhian Eduardo Dos Santos Lopes
* Pedro Bruno Fernandes Do Nascimento
* Samuel Duarte Andrade

### Proposta

Criar uma aplicação que o usuário pesquise o nome de um time de vôlei e retornar os dados da classificação na Superliga Masculina atual.

### Entrada e Saída

#### Entrada de dados do usuário

**Entrada via formulário HTML**, gerando um texto. Ex: “Sada Cruzeiro”.

#### Entrada de dados a ser recebida pelo servidor

```JSON
{
    "nome":"Sada Cruzeiro"
}
```

**Texto em formato JSON** contendo o nome do time digitado.

#### Saída de dados a ser recebida pelo cliente

```JSON
{
    "id":"1",
    "nome":"Sada Cruzeiro",
    "partidasJogadas":"22",
    "partidasVencidas":"20",
    "partidasPerdidas":"2",
    "sets":"62:11",
    "pontos":"60"
}
```

**Saída em formato JSON**, contendo os dados como nome, partidas jogadas, vencidas e perdidas, a média de sets(no formato sets ganhos:sets perdidos), a quantidade de pontos atual e o número identificador do time.

### Observações Necessárias

#### IDEs e editores de texto usados

* Atom e Visual Studio Code(editores de texto usados para a programação do cliente e na parte em Java Script do servidor);
* Netbeans (IDE usada para a programação do servidor em java);

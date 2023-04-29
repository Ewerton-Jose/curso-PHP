<?php

/* Comandos importantes envolveldo banco de dados


Mostrar como entra no bd do Xamp
Explicar parte por parte

Mostrar os comandos que iremos usar no próximo treino

$conexao  = ¹mysqli_connect($server, $user, $password, $dbname);
    - Guarda a conexão com o BD

$sql = "SELECT * FROM tabela";
$resultado = ²mysqli_query($conexao, $sql);
    - Executa um comando SQL que nesse caso seria selecionar todos os itens da tabela escolhida

while($dados = ³mysqli_fetch_array($resultado)){
        - nesse caso "dados" está pegando uma 'lista sql' e virando uma lista php
    $nome = $dados['nome'];
        - Dentro de "dados" você tá pegando o elemento "nome"
    $sobrenome = $dados['sobrenome'];
        - Dentro de "dados" você tá pegando o elemento "sobrenome"
    $idade = $dados['idade'];
        - Dentro de "dados" você tá pegando o elemento "idade"

    echo "Você é $nome $sobrenome e você tem $idade anos";
}

EX033: Crie um BD de registro de pessoas com dados(Nome, Idade, Email, Telefone, id) e mostre na tela de usuários os dados que tem nele (o exércício deve conter includes)

*/

?>
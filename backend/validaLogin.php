<?php
include 'conexao.php';

header('Content-Type: application/json; charset=utf-8'); // Garante que a resposta é JSON

try {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    // Evita SQL Injection com parâmetros
    $sql = "SELECT login, senha FROM tb_login WHERE login = :login AND BINARY senha = :senha";

    $comando = $con->prepare($sql);
    $comando->bindParam(':login', $login);
    $comando->bindParam(':senha', $senha);

    $comando->execute();

    $dados = $comando->fetchAll(PDO::FETCH_ASSOC);

    if ($dados != null) {
        echo json_encode(['retorno' => 'ok'], JSON_UNESCAPED_UNICODE);
    } else {
        echo json_encode(['retorno' => 'erro'], JSON_UNESCAPED_UNICODE);
    }

} catch (PDOException $erro) {
    // Sempre retorna um JSON válido, mesmo em caso de erro
    http_response_code(500); // opcional: define código HTTP de erro
    echo json_encode(['retorno' => 'erro', 'mensagem' => $erro->getMessage()]);
}
?>
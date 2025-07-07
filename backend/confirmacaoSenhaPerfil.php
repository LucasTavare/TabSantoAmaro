<?php
include '../backend/conexao.php';

try {
    $login = trim($_POST['login']);
    $senha = trim($_POST['senha']);

    // Busca o usuário no banco
    $sql = "SELECT * FROM tb_login WHERE login = :login";
    $stmt = $con->prepare($sql);
    $stmt->bindParam(':login', $login);
    $stmt->execute();

    $dados = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($dados) {
        // Compara senha simples
        if ($senha === $dados['senha']) {
            header('Location: ../admin/alterar-dados-perfil.php');
            // Aqui prossegue
        } else {
            
        }
    } else {
        echo "Usuário não encontrado!";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

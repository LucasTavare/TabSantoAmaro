<?php
include '../backend/conexao.php';

try {
    $login = trim($_POST['login']);
    $senha = trim($_POST['senha']);

    // Query UPDATE sem hash (salva senha em texto puro — inseguro, mas é o que você pediu)
    $sql = "UPDATE tb_login SET senha = :senha, login = :login WHERE login = :login";
    $stmt = $con->prepare($sql);

    // Vincula os parâmetros
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':login', $login);

    $stmt->execute();

    header('Location: ../admin/perfil.php');
    exit;

} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

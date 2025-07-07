<?php 

include '../backend/conexao.php';

try {
    // captura o id enviado via GET e armazena em uma variável
    $id = $_GET['id'];

    // Excluir primeiro as fotos relacionadas ao álbum
    $sqlFotos = "DELETE FROM tb_fotos WHERE id_album = :id";
    $comandoFotos = $con->prepare($sqlFotos);
    $comandoFotos->bindParam(':id', $id, PDO::PARAM_INT);
    $comandoFotos->execute();

    // Agora excluir o álbum
    $sqlAlbum = "DELETE FROM tb_album WHERE id = :id";
    $comandoAlbum = $con->prepare($sqlAlbum);
    $comandoAlbum->bindParam(':id', $id, PDO::PARAM_INT);
    $comandoAlbum->execute();

    header('Location: ../admin/albuns-adm.php');
    $con = null;

} catch(PDOException $erro) {
    echo "Erro ao excluir: " . $erro->getMessage();
}

?>

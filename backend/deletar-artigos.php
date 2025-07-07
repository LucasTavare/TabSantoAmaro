<?php 

include '../backend/conexao.php';

try{
    // captura o id enviado via get e armazena em uma variavel

    $id = $_GET['id'];

    $sql = "DELETE FROM tb_artigos WHERE id = $id;";

    $comando = $con -> prepare($sql);

    $comando -> execute();

    header('location: ../admin/artigos-adm.php');

    $con = null;

}catch(PDOException $erro){
    echo $erro->getMessage();
}

?>
<?php 

include '../backend/conexao.php';

try{
    // captura o id enviado via get e armazena em uma variavel

    $id = $_GET['id'];
    $id2 = $_GET['id_album'];


    $sql = "DELETE FROM tb_fotos WHERE id = $id;";

    $comando = $con -> prepare($sql);

    $comando -> execute();

    header("Location: ../admin/adc-fotos-albuns.php?id=$id2");

    $con = null;

}catch(PDOException $erro){
    echo $erro->getMessage();
}

?>
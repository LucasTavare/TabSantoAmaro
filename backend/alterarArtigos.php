<?php 

include '../backend/conexao.php';

try{

    $id     = $_POST['id'];
    $titulo = $_POST['titulo'];
    $editor  = $_POST['editor'];
    $resumo  = $_POST['resumo'];

     // ===================================================================================================================================
    // upload de img

    $nome_original_imagem = $_FILES['imagem']['name'];

   
    if($nome_original_imagem != null){ 

    $extensao = pathinfo($nome_original_imagem,PATHINFO_EXTENSION);

        if($extensao != 'jpg' && $extensao != 'jpeg' && $extensao != 'png'){
            echo 'Formato de Imagem inválido';
            exit;
        }

    $hash = md5(uniqid($_FILES['imagem']['tmp_name'],true));

    $nome_final_imagem = $hash.'.'.$extensao;

    $pasta = '../img/upload/';

    move_uploaded_file($_FILES['imagem']['tmp_name'],$pasta.$nome_final_imagem);

    $sql = "UPDATE tb_artigos SET `tituloArtigo` = '$titulo', `textoArtigo` = '$editor', `capaArtigo` = '$nome_final_imagem', `resumoArtigo` = '$resumo' 
    WHERE id = $id;";

    }else{
         $sql = "UPDATE tb_artigos SET `tituloArtigo` = '$titulo', `textoArtigo` = '$editor', `resumoArtigo` = '$resumo' WHERE id = $id;";
    
    // ===================================================================================================================================

    $comando = $con -> prepare($sql);

    $comando -> execute();

    header('Location: ../admin/artigos-adm.php');
    }
}catch(PDOException $erro){
    echo $erro->getMessage();
}

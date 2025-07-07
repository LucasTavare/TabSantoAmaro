<?php 
include '../backend/conexao.php';

try {
    if (!empty($_FILES['arquivos']['name'][0])) {
        $total = count($_FILES['arquivos']['name']);

        for ($i = 0; $i < $total; $i++) {
            $id = $_POST['id'];

            $nome_original_imagem = $_FILES['arquivos']['name'][$i];
            $extensao = pathinfo($nome_original_imagem, PATHINFO_EXTENSION);

            if ($extensao != 'jpg' && $extensao != 'jpeg' && $extensao != 'png') {
                echo 'Formato de Imagem inválido';
                exit;
            }

            $hash = md5(uniqid($_FILES['arquivos']['tmp_name'][$i], true));
            $nome_final_imagem = $hash . '.' . $extensao;
            $pasta = '../img/albuns/';

            move_uploaded_file($_FILES['arquivos']['tmp_name'][$i], $pasta . $nome_final_imagem);

            $sql = "INSERT INTO tb_fotos(`id_album`, `caminho_arquivo`) VALUES ('$id', '$nome_final_imagem')";

            $comando = $con->prepare($sql);
            $comando->execute();
        }

        header('Location: ../admin/albuns-adm.php');
        $con = null;

        echo "Arquivos enviados com sucesso!";
    } else {
        echo "Nenhum arquivo enviado.";
    }
} catch (PDOException $erro) {
    echo $erro->getMessage();
}
?>

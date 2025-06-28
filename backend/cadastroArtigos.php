<?php
include 'conexao.php';

$titulo = $_POST['titulo'];
$texto = $_POST['editor'];

$foto = $_FILES['foto'];
$caminhoFoto = "";

if ($foto['error'] === 0) {
    $pasta = "uploadsArt/";
    $nomeFinal = uniqid() . "_" . basename($foto['name']);
    $destino = $pasta . $nomeFinal;

    if (move_uploaded_file($foto['tmp_name'], $destino)) {
        $caminhoFoto = $destino; // salva caminho para guardar no banco
    }
}

$sql = "INSERT INTO tb_artigos (`tituloArtigo`, `textoArtigo`, `capaArtigo`) VALUES (`$titulo`,`$texto`,`$foto`)";
$stmt = $con->prepare($sql);
$stmt->bindParam(':titulo', $titulo);
$stmt->bindParam(':texto', $texto);
$stmt->bindParam(':foto', $caminhoFoto);
$stmt->execute();

echo "Cadastro feito com sucesso!<br>";
echo "<img src='$caminhoFoto' width='200'>";
?>
<?php
include '../backend/conexao.php';

$id = $_GET['id'];

try {

    $sql = "SELECT * FROM tb_artigos WHERE id = $id;";

    $comando = $con->prepare($sql);

    $comando->execute();

    $dados = $comando->fetchAll(PDO::FETCH_ASSOC);

    // echo '<pre>';
    //     var_dump($dados);
    // echo '</pre>';

} catch (PDOException $erro) {
    echo $erro->getMessage();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artigos - Tabernaculo da Fé Santo Amaro</title>
    <link rel="stylesheet" href="css/style-artigos.css">
    <link rel="stylesheet" href="css/style-menu.css">
</head>
<body>
    <main>
        <div class="menu">
            <div class="corpo-menu">
                <img src="" alt="">
            <ul>
                <li><a href="artigos-adm.php">Artigos</a></li>
                <li><a href="albuns-adm.php">Albuns</a></li>
                <li><a href="perfil">Perfil</a></li>
            </ul>
            </div>
            
        </div>
        <div class="container">
            <div class="linha1">
                <h2>Artigos</h2>
            </div>
            <form action="../backend/cadastroArtigos.php" method="post" enctype="multipart/form-data">
                <div class="editar-artigos">
                    <div class="block-titulo-foto">
                        <div class="titulo-foto">
                            <div class="titulos">
                                <input id="titulo" name="titulo" class="input-titulo" type="text" value="<?php echo $dados[0]['tituloArtigo'] ?>">
                            </div>
                            <div class="importar-fotos">
                                <label for="Importar Fotos">Importar Fotos</label>
                                <input class="input-fotos" type="file" name="imagem" id="imagem">
                            </div>
                        </div>
                        <div class="foto">

                        </div>
                    </div>
                    <textarea id="editor" name="editor" class="descricao-salvar"></textarea>
                    <button type="button" onclick="negrito()">Negrito</button>

                </div>

                <button type="submit">editar</button>
            </form>
            
        </div>
    </main>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</body>
</html>
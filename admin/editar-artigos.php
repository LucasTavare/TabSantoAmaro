<?php
include '../backend/conexao.php';
include './include/header.php';
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



        <div class="container">
            <div class="linha1">
                <h2>Artigos</h2>
            </div>
            <form action="../backend/alterarArtigos.php" method="post" enctype="multipart/form-data">
                <div class="editar-artigos">
                    <input style="display: none;" type="text" id="id" name="id" value="<?php echo $dados[0]['id'] ?>">
                    <div class="block-titulo-foto">
                        <div class="titulo-foto">
                            <div class="titulos">
                                <input name="titulo" class="input-titulo" type="text" value="<?php echo $dados[0]['tituloArtigo'] ?>">
                            </div>  
                            <div class="importar-fotos">
                                <label for="Importar Fotos">Importar Fotos</label>
                                <input class="input-fotos" type="file" name="imagem" id="imagem">
                            </div>
                        </div>
                        <div class="foto">
                            <img src="../img/artigos-centrais/<?php echo $dados[0]['capaArtigo']?>" alt="">
                        </div>
                    </div>
                    <textarea id="editor" name="editor" class="descricao-salvar"></textarea>
                    <br> 
                    <div class="button-fuction">
                        <button class="negrito" type="button" onclick="negrito()">Negrito</button>
                        <button class="negrito" type="button" onclick="subTitulo()">SubTitulo</button>
                    </div>
                    <br> 
                    <textarea id="resumo" name="resumo" class="descricao-salvar"></textarea>

                </div>

                <button class="button-editar" type="submit">editar</button>
            </form>
            
        </div>
    </main>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</body>
</html>
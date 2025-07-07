<?php
include '../backend/conexao.php';
include './include/header.php';

$id = $_GET['id'];

try {

    $sql = "SELECT * FROM tb_album WHERE id = $id";

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
                <h2>Albuns</h2>
            </div>
            <form class="form-adc-fotos" action="../backend/cadastroFotosAlbuns.php" method="post" enctype="multipart/form-data">
                <div class="editar-albuns">
                    <div class="block-titulo-foto block-editar-albuns">
                            <input style="display: none;" type="text" id="id" name="id" value="<?php echo $dados[0]['id'] ?>">
                        
                            <div class="titulos">
                                <label for="titulo">Titulo do album:</label>
                                <br>
                                <br>
                                <br>
                                <br>
                                <input id="titulo" name="titulo" class="input-titulo" type="text" value="<?php echo $dados[0]['titulo'] ?>">
                            </div>
                            <div class="importar-fotos">
                                <label for="Importar Fotos">Importar Capa do album</label>
                                <input class="input-fotos" type="file" name="imagem" id="imagem">
                            </div>
                            <div class="importar-fotos">
                                    <label for="Importar Fotos">Importar fotos do album</label>
                                    <input class="input-fotos" type="file" name="arquivos[]" id="arquivo" multiple>
                            </div>
                        
                    </div>
                    
                </div>

                <button class="negrito" type="submit">Cadastrar</button>


                <?php
                    try {

                    $sql2 = "SELECT * FROM tb_fotos WHERE id_album = $id;";

                    $comando2 = $con->prepare($sql2);

                    $comando2->execute();

                    $dados2 = $comando2->fetchAll(PDO::FETCH_ASSOC);

                    } catch (PDOException $erro) {
                        echo $erro->getMessage();
                    }
                ?>

                


                <div class="block-fotos-cadastradas">

                <?php
                    foreach($dados2 as $d2):
                ?>
                    <div class="fotos-cadastradas">
                        <img class="foto-album" src="../img/albuns/<?php echo $d2['caminho_arquivo'];?>" alt="">
                        <a href="../backend/deletar-fotos-album.php?id=<?php echo $d2['id']; ?>&id_album=<?php echo $d2['id_album']; ?>">
                            <img class="lixeira-fotos" src="./img/lixeira.png" alt="">
                        </a>
                    </div>
                <?php
                    endforeach;
                ?>
                    
                </div>

                
            </form>
            
        </div>
    </main>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</body>
</html>
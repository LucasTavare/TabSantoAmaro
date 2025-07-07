<?php 

include '../backend/conexao.php';
include './include/header.php';

try{

    $sql = "SELECT * FROM tb_album";

    $comando = $con -> prepare($sql);

    $comando -> execute();

    $dados = $comando -> fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // var_dump($dados);
    // echo "</pre>";

}catch(PDOException $erro){
    echo $erro->getMessage();
}

?>

        <div class="container">
            <div class="linha1">
                <h2>Álbuns de Fotos</h2>
                <a href="adicionar-albuns.php" class="button-adicionar">Criar Albuns</a>
            </div>
            <div class="albuns">
                <?php
                    foreach($dados as $d):
                ?>

                <div class="block-albuns">
                    <img class="foto-albuns" src="../img/artigos-centrais/<?php echo $d['capaAlbum'];?>" alt="">
                    <h3><?php echo $d['titulo']?></h3>
                    <p>
                        <a href="adc-fotos-albuns.php?id=<?php echo $d['id']?>">
                            <img src="./img/editar.png" alt="">
                        </a>
                        <a href="../backend/deletar-album.php?id=<?php echo $d['id']?>">
                            <img src="./img/lixeira.png" alt="">
                        </a>
                    </p>
                </div>
               
                <?php
                    endforeach;
                ?>
                
            </div>
        </div>
    </main>
</body>
</html>
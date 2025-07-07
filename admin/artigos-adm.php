<?php 

include '../backend/conexao.php';
include './include/header.php';
try{

    $sql = "SELECT * FROM tb_artigos";

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
                <h2>Artigos</h2>
                <a href="adicionar-artigos.php" class="button-adicionar">Adicionar</a>
            </div>

            
            <form class="artigos" method="post" enctype="multipart/form-data">
                <?php
                    foreach($dados as $d):
                ?>
                <div class="block-artigos">
                    <img class="foto-artigo" src="../img/artigos-centrais/<?php echo $d['capaArtigo'];?>" alt="">
                    <h3><?php echo $d['tituloArtigo']?></h3>
                    <p>
                        <a href="editar-artigos.php?id=<?php echo $d['id']?>">
                            <img src="./img/editar.png" alt="">
                        </a>
                        <a href="../backend/deletar-artigos.php?id=<?php echo $d['id']?>">
                            <img src="./img/lixeira.png" alt="">
                        </a>
                    </p>
                </div>

                <?php
                    endforeach;
                ?>

                </form>
        </div>
    </main>
</body>
</html>
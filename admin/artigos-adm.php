<?php 

include '../backend/conexao.php';

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
                <a href="adicionars-artigos.php" class="button-adicionar">Adicionar</a>
            </div>

            
            <form class="artigos" action="../backend/_alterar_viagens.php" method="post" enctype="multipart/form-data">
                <?php
                    foreach($dados as $d):
                ?>
                <div class="block-artigos">
                    <img class="foto-artigo" src="../img/artigos-centrais/<?php echo $d['capaArtigo'];?>" alt="">
                    <h3><?php echo $d['tituloArtigo']?></h3>
                    <p>
                        <a type="submit" href="editar-artigos.php">
                            <img src="./img/editar.png" alt="">
                        </a>
                        <a href="">
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
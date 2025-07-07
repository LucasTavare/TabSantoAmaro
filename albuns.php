<?php 
include './includes/header.php'; 
include './backend/conexao.php';

try {

    $sql = "SELECT * FROM tb_album";

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

<link rel="stylesheet" href="./css/style-albuns.css">
<link rel="stylesheet" href="./css/mobile/style-mobile-albuns.css">


<main>

    <h1 style="margin-top: -20vh">Albuns de Fotos</h1>

    <div class="container">
        <div class="fileira-albuns">
            <?php
                foreach($dados as $d):
            ?>
            <a href="ver-albuns.php?id=<?php echo $d['id']?>"class="album" style="background-image: url('./img/albuns/<?php echo $d['capaAlbum']?>');">
                <h1 class="title-albuns" style="margin-top:20vh;"><?php echo $d['titulo']?></h1>
            </a>
            <?php
                endforeach;
            ?>
        </div>
    </div>

</main>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/script.js"></script>

</body>

</html>
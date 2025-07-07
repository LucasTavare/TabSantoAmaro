<?php 
include './includes/header.php'; 
include './backend/conexao.php';

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

<main>

    <h1 style="margin-top: -20vh"><?php echo $dados[0]['tituloArtigo'] ?></h1>

    <div class="container">
    
        <p class="text">
            <?php echo $dados[0]['textoArtigo'] ?>
        </p>

    </div>

</main>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/script.js"></script>

</body>

</html>
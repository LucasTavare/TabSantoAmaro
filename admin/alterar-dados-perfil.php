<?php include './include/header.php';
include '../backend/conexao.php';

try{

    $sql = "SELECT * FROM tb_login";

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
                <h2>Alterar dados perfil</h2>
            </div>
            <form class="form-perfil-principal" action="../backend/alterarPerfil.php" method="post" enctype="multipart/form-data">
                <div>
                    <label for="login">Login:</label>
                    <input id="login" name="login" type="text" value="<?php echo $dados[0]['login']?>">
                </div>
                <div>
                    <label for="senha">Digite a nova senha:</label>
                    <input id="senha" name="senha" type="text" value="<?php echo $dados[0]['senha']?>">
                </div>
                <div>
                    <button class="negrito" type="submit">Enviar</button>
                </div>
            </form>
    </main>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</body>
</html>
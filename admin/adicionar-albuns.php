<?php include './include/header.php'; ?>
        <div class="container">
            <div class="linha1">
                <h2>Adicionar Album</h2>
            </div>
            <form action="../backend/cadastroAlbuns.php" method="post" enctype="multipart/form-data">
                <div class="editar-artigos">
                    <div class="block-titulo-foto">
                        <div class="titulo-foto">
                            <div class="titulos">
                                <input id="titulo" name="titulo" class="input-titulo" type="text" placeholder="Titulo do album">
                            </div>
                            <div class="importar-fotos">
                                <label for="Importar Fotos">Importar Capa do album</label>
                                <input class="input-fotos" type="file" name="imagem" id="imagem">
                            </div>
                        </div>
                        <div class="foto">

                        </div>
                    </div>
                    <textarea id="resumo" name="resumo" class="descricao-salvar"></textarea>
                </div>

                <button class="button-editar" type="submit">Cadastrar</button>
            </form>
            
        </div>
    </main>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</body>
</html>
<?php include './include/header.php'; ?>
        <div class="container">
            <div class="linha1">
                <h2>Adicionar Artigos</h2>
            </div>
            <form action="../backend/cadastroArtigos.php" method="post" enctype="multipart/form-data">
                <div class="editar-artigos">
                    <div class="block-titulo-foto">
                        <div class="titulo-foto">
                            <div class="titulos">
                                <input id="titulo" name="titulo" class="input-titulo" type="text" placeholder="Titulo da Página">
                            </div>
                            <div class="importar-fotos">
                                <label for="Importar Fotos">Importar Fotos</label>
                                <input class="input-fotos" type="file" name="imagem" id="imagem">
                            </div>
                        </div>
                        <div class="foto">

                        </div>
                    </div>
                    <textarea placeholder="Digite aqui o texto principal do artigo..." id="editor" name="editor" class="descricao-salvar"></textarea>
                    <br>
                    <div class="button-function">
                        <button class="negrito" type="button" onclick="negrito()">Negrito</button>
                        <button class="negrito" type="button" onclick="subTitulo()">SubTitulo</button>

                    </div>
                    
                    <br>
                    <textarea placeholder="Digite aqui o resumo do artigo..." id="resumo" name="resumo" class="descricao-salvar"></textarea>
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
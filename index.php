<?php include './includes/header.php'; ?>

<?php 

include './backend/conexao.php';

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


    <link rel="stylesheet" href="./css/mobile/style-mobile-index.css">

    <main>

        <h1 style="margin-top: -20vh">A MENSAGEM REVELADA</h1>

        <div class="container">

            <img src="./img/carrosel-vers.png" alt="" class="carousel-ver"></img>

            <hr style="width: 80vw;">

            <h2>Sejam Bem Vindos !</h2>

            <p style="margin-top: 2vh; font-size: 1.2em;">
                “Arrependei-vos e cada um de vós seja batizado em nome do Senhor Jesus Cristo para perdão <br>
                dos pecados e recebereis o dom do Espírito Santo.” (Atos 2:38) “Crede no Senhor vosso Deus <br>
                e estareis seguros, crede nos seus profetas e sereis prosperados.” (II Crônicas 20:20)
            </p>

            <div class="horarios-cultos banner-cultos">
                <h2 style="color: white;">Horários Cultos</h2>

                <div class="horarios">

                    <ul>
                        <li class="title-hor" >Cultos aos Domingos</li>
                        <li>08:00 | Programa de radio</li>
                        <li>08:30 | Escolinha das Crianças</li>
                        <li>09:00 | Escola Dominical</li>
                        <li>16:00 | Culto de companheirismo</li>
                        <li>18:00 | Culto de Pregação</li>
                    </ul>

                    <ul>
                        <li class="title-hor" >Quarta-Feira a Noite</li>
                        <li>19:30 | Culto de oração</li>
                    </ul>

                    <ul>
                        <li class="title-hor" >Culto de Santa Ceia</li>
                        <li>OBS: Aos primeiros <br> domingos do mês </li>
                        <li>17:30 | Culto de Santa Ceia</li>
                    </ul>

                </div>

            </div>

            <!-- fim da parte horarios -->
            
            <hr style="width: 80vw; margin-top: 5vh;">

            <div class="leituras">
                <a href="wmb.php" class="assunto" target="_blank">
                    <img src="./img/leituras/irmaoBranham1.png" alt="Foto Irmao Branham" class="logo-leituras">
                    <h2 class="titulo-leituras">Willian M. Branham</h2>
                    <p class="resumo-leituras">
                        Conheça mais sobre o ministério<br>
                        sobrenatural de William Branham.<br>
                        Veja aqui: fotos, Videos e<br>
                        mensagen sem PDF.
                    </p>
                </a>
                <a href="pontos-doutrinarios.php" class="assunto" target="_blank">
                    <img src="./img/leituras/pontosDoutrinarios.jpg" alt="pontos doutrinarios" class="logo-leituras">
                    <h2 class="titulo-leituras">Pontos Doutrinarios</h2>
                    <p class="resumo-leituras">
                        Para mais informações sobre o<br>
                        que nós cremos. Clique aqui.
                    </p>
                </a>
                <a href="voz-de-deus.php" class="assunto" target="_blank">
                    <img src="./img/leituras/voz-de-deus.jpg" alt="A voz de Deus" class="logo-leituras">
                    <h2 class="titulo-leituras">A Voz de Deus</h2>
                    <p class="resumo-leituras">
                        A VGR é um ministério que se<br>
                        dedica à promoção do evangelho<br>
                        do Senhor Jesus Cristo. Quer<br>
                        saber mais ? Clique aqui.
                    </p>
                </a>
                <a href="" class="assunto" target="_blank">
                    <img src="./img/leituras/fotos.png" alt="Fotos" class="logo-leituras">
                    <h2 class="titulo-leituras">Fotos</h2>
                    <p class="resumo-leituras">
                        Veja fotos de nossos principais<br>
                        eventos. Cultos, Construção do<br>
                        novo Tabernáculo, Encontros e<br>
                        Retiros em Geral. Clique aqui.
                    </p>
                </a>
                <a href="https://www.youtube.com/@amensagemrevelada" class="assunto" target="_blank">
                    <img src="./img/leituras/youtube.png" alt="Youtube" class="logo-leituras">
                    <h2 class="titulo-leituras">Youtube</h2>
                    <p class="resumo-leituras">
                        Acesse nosso canal do Youtube<br>
                        e assista todos os nossos cultos<br>
                        clicando no título acima.
                    </p>
                </a>
            </div>

            <!-- fim da pagina artigos centrais -->

            <hr style="width: 80vw; margin-top: 5vh;">

            <div class="artigos-centrais">

                <h2>Artigos Centrais</h2>

                    <div class="main-artigos">
                        <?php
                            foreach($dados as $d):
                        ?>
                        <div class="bloco-artigos">
                            <img src="./img/artigos-centrais/<?php echo $d['capaArtigo']?>" alt="" class="img-bloco-artigos">
                            <h2 class="h2-bloco-artigos"><?php echo $d['tituloArtigo']?></h2>
                            <p class="p-bloco-artigos">
                                
                            </p>
                            <a href="" class="button-bloco-artigos">Leia Mais</a>
                        </div>
                        
                        <?php
                            endforeach;
                        ?>
                    </div>

            </div>

            <!-- FIM DOS ARTIGOS CENTRAIS -->

            <div class="contatos">
                <div class="end">
                    <p>
                        Telefone – (11) 99155-8182<br>
                        Endereço – Rua Iguatinga 171 – Santo Amaro<br>
                        CEP – 04744-040
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.5109841803614!2d-46.7044603!3d-23.6576778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce505202e6e587%3A0xdc1c1f01058e5c41!2sR.%20Iguatinga%2C%20171%20-%20Santo%20Amaro%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2004744-040!5e0!3m2!1spt-BR!2sbr!4v1745453359536!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                

                <form action="">
                    <div>
                        <label for="nome">Nome</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="telefone">Telefone</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="mensagem">Mensagem</label>
                        <input type="text">
                    </div>
                    
                </form>


            </div>

        </div>

        

    </main>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/script.js"></script>
                        
</body>
</html>
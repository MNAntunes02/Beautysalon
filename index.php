<?php
    include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>CSS/style.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>CSS/fonts.css">
    <title>Site dinamico</title>
</head>
<body id="body">
    <?php
            $url = isset($_GET['url']) ? $_GET['url'] : 'inicio';

            switch($url){
                case 'sobre';
                    echo '<target target="sobre"/>';
                    break;

                case 'servicos';
                    echo '<target target="servicos"/>';
                    break;

                case 'depoimentos';
                    echo '<target target="depoimentos"/>';
                    break;

                case 'contato';
                    echo '<target target="contato"/>';
                    break;
            }
    ?>

    <header class="header">
        <div id="logo"></div><!-- Logo -->

        <nav id="nav">
            <button id="abrirConfig" class="btn-mobile"></button>
            <ul id="menu">
                <li><a href="<?php echo INCLUDE_PATH; ?>" id="selecionar-inicio">Inicío</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>sobre" id="selecionar-sobre">Sobre</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>servicos" id="selecionar-servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos" id="selecionar-depoimentos">Depoimentos</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>contato" id="selecionar-contato">Contato</a></li>
            </ul><!-- menu -->
        </nav><!-- nav-->
    </header>

    <?php
        if($url === "" || $url === 'inicio'){
    ?>
            <script>
                const menu_inicio = document.getElementById("selecionar-inicio");

                menu_inicio.classList.add("selecionado-menu");
            </script>

    <?php 
        }else if($url === 'sobre'){
    ?>
            <script>
                const menu_sobre = document.getElementById("selecionar-sobre");

                menu_sobre.classList.add("selecionado-menu");
            </script>
    <?php
        }else if($url === 'servicos'){
    ?>
            <script>
                const menu_servicos = document.getElementById("selecionar-servicos");

                menu_servicos.classList.add("selecionado-menu");
            </script>
    <?php 
        }else if($url === 'depoimentos'){
    ?>
            <script>
                const menu_depoimentos = document.getElementById("selecionar-depoimentos");

                menu_depoimentos.classList.add("selecionado-menu");
            </script>
    <?php 
        }else if($url === 'contato'){
    ?>
            <script>
                const menu_contato = document.getElementById("selecionar-contato");

                menu_contato.classList.add("selecionado-menu");
            </script>
    <?php 
        }
    ?>

    <section id="inicio" class="container">
        <div id="container-img-1">
            <div id="shape-inicio"></div>
            <div id="img-1"></div>
        </div><!-- container-img-1 -->

        <div id="texto-inicio">
            <h1>Saúde natural para os seus cabelos</h1>
            <p>Um salão exclusivo em São Paulo,<br> especializado em tratamentos naturais.</p>

            <button type="submit" id="btn-1"><span class="no-quebra span-button">Agendar um horário</span></button>
        </div><!-- texto-inicio -->
    </section><!-- inicio -->

    <section id="sobre" class="container">

        <div class="separar">
            <div id="container-img-2">
                <div id="shape-sobre"></div>
                <div id="img-2"></div>
            </div><!-- container-img-2 -->
        </div><!-- separar -->

        <div class="separar">
            <h1>Sobre nós</h1>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sagittis arcu quis nisi luctus, id accumsan felis tristique. Proin quis bibendum diam. Sed consequat nisl laoreet eros ultricies pellentesque. Nullam in est porta, pellentesque massa vitae, vehicula risus.</p>

            <p>In placerat, felis vitae sodales dictum, lacus quam pretium mi, ut pretium urna turpis eu dui. Vestibulum id ullamcorper nibh. Donec luctus, nunc finibus elementum suscipit, tortor augue vulputate sapien, vitae feugiat enim augue sed. </p>

            <p>Quisque id aliquam elit. Suspendisse congue pharetra maximus. Duis rutrum velit a leo euismod dictum. Sed sodales est efficitur arcu tincidunt tincidunt. Curabitur fringilla, risus at feugiat feugiat, nisl nulla tincidunt tellus, elementum elementum lorem nisl eleifend dolor. Nullam eget dui at sem ullamcorper luctus.</p>
        </div><!-- separar -->

    </section><!-- container -->

    <section id="servicos" class="container">
        <div class="container-wrap-servicos" id="container-texto-servicos">
            <div id="text-servicos">
                <h1>Serviços</h1>
                <p>Com mais de 10 anos no mercado, o <span id="destaque" class="quebra">Beautysalon</span> já <span class="no-quebra">conquistou clientes de <span class="quebra">inúmeros</span> países com seus tratamentos</span> <span class="quebra">exclusivos</span> e <span>totalmente</span> naturais</p>
            </div><!-- text-servicos -->
        </div><!-- container-texto-servicos -->

        <div class="container-wrap-servicos" id="container-img-servicos">
            <div class="card-servicos">
                <div id="card-1" class="card-servicos-img"></div>
                <h1>Terapia capilar</h1>
                <p>Terapia completa para couro cabeludo e fios, protegendo todos os tipos de cabelos, inclusive os longos e finos.</p>
            </div><!-- card-servicos -->

            <div class="card-servicos">
                <div id="card-2" class="card-servicos-img"></div>
                <h1>Cortes</h1>
                <p>A nossa equipe é repleta de profissionais renomados, famosos por lançarem tendências com <span class="quebra">cortes</span> diferenciados e clássicos.</p>
            </div><!-- card-servicos -->

            <div class="card-servicos">
                <div id="card-3" class="card-servicos-img"></div>
                <h1>Tratamentos</h1>
                <p>O beautysalon conta com <span class="span-br">diversos</span> tratamentos naturais e <span class="span-br">totalmente</span> veganos, para <span class="span-br">qualquer</span> tipo <span id="span-media">de</span> cabelo.</p>
            </div><!-- card-servicos -->
        </div><!-- container-servicos -->
    </section><!-- serviços-->

    <section id="depoimentos" class="container">
        <h1>Depoimentos de <span class="quebra-dp">quem</span> já <span class="quebra">passou</span> por aqui</h1>

            <div id="depoimentos-container">

            <input type="radio" name="dots" id="radio1" checked>
            <input type="radio" name="dots" id="radio2">
            <input type="radio" name="dots" id="radio3">

                <div id="depoimentos-1" class="DP">
                    <div class="depoimentos">
                        <span class="aspas">“</span><p><span>Eu</span> sou cliente do Beautysalon há 5 anos e não troco por nada! Certamente meu cabelo mudou <span class="quebra-dp"></span> muito depois que comecei a tratar somente com produtos naturais e veganos.São profissionais incríveis e qualificados.</p>
                        <div class="container-clientes">
                            <div id="cliente-1"></div>
                            <p id="nome-cliente-1">Wanessa Souza</p>
                        </div><!-- clientes -->
                    </div><!-- depoimentos -->

                    <div class="depoimentos">
                        <span class="aspas">“</span><p><span>Minha</span> mãe frequenta o salão há anos e me levou um dia para conhecer. Minha experiência foi incrível, eu continuo fazendo o a terapia capilar e isso salvou o meu cabelo. Adoro todos os profissionais do Beautysalon.</p>
                        <div class="container-clientes">
                            <div id="cliente-2"></div>
                            <p id="nome-cliente-2">Luna Falcão</p>
                        </div><!-- container-clientes -->
                    </div><!-- depoimentos -->
                </div><!-- depoimentos-1 -->

                <div id="depoimentos-2" class="DP">
                    <div class="depoimentos">
                        <span class="aspas">“</span><p><span>Sou</span> cliente fiel do Beautysalon há meia década e não penso em mudar! Desde que adotei os produtos naturais e veganos deles, meu cabelo está mais bonito e saudável do que nunca.</p>
                        <div class="container-clientes">
                            <div id="cliente-3"></div>
                            <p id="nome-cliente-3">Vanessa Cristina</p>
                        </div><!-- container-clientes -->
                    </div><!-- depoimentos -->

                    <div class="depoimentos">
                        <span class="aspas">“</span><p><span>Minha tia frequenta o salão há anos e um dia me convidou para conhecer. Minha experiência foi maravilhosa, e eu continuei com os tratamentos faciais que realmente transformaram minha pele.<span></p>
                        <div class="container-clientes">
                            <div id="cliente-4"></div>
                            <p id="nome-cliente-4">Maria Julia</p>
                        </div><!-- container-clientes -->
                    </div><!-- depoimentos -->
                </div><!-- depoimentos-2 -->

                <div id="depoimentos-3" class="DP">
                    <div class="depoimentos">
                        <span class="aspas">“</span><p><span>Sou cliente do Beautysalon há cinco anos e não poderia estar mais satisfeita! Desde que comecei a usar os produtos naturais e veganos deles, meu cabelo está mais forte e brilhante. Meu cabelo está mais forte e brilhante.</span></p>
                        <div class="container-clientes">
                            <div id="cliente-5"></div>
                            <p id="nome-cliente-5">Elisa Caroline</p>
                        </div><!-- container-clientes -->
                    </div><!-- depoimentos -->

                    <div class="depoimentos">
                        <span class="aspas">“</span><p><span>Minha relação com o Beautysalon já dura cinco anos e posso dizer que estou encantada com o serviço! Desde que comecei a usar os produtos naturais e veganos, meu cabelo tem se mostrado mais vibrante e resistente.</span></p>
                        <div class="container-clientes">
                            <div id="cliente-6"></div>
                            <p id="nome-cliente-6">Camila Renata</p>
                        </div><!-- container-clientes -->
                    </div><!-- depoimentos -->
                </div><!-- depoimentos-3 -->

            </div><!-- depoimentos-container -->

            <div class="clear"></div>

        <div id="container-dots">

            <div id="nav-manual">

                <label for="radio1">
                    <div class="auto-btns" id="auto-btn1"></div>
                </label>

                <label for="radio2">
                    <div class="auto-btns" id="auto-btn2"></div>
                </label>

                <label for="radio3">
                    <div class="auto-btns" id="auto-btn3"></div>
                </label>
            </div><!-- nav-manual -->
        </div><!-- container-dots -->
    </section><!-- depoimentos -->

    <section id="contato" class="container">
            <div id="texto-contato">
                <h1>Entre em contato com a gente!</h1>
                <p>Entre em contato com a Beautysalon, queremos tirar suas dúvidas,ouvir suas críticas e sugestões.</p>
                <button id="btn-contato"><div id="img-contatos"></div>Entrar em contato <span></span></button>
            </div><!-- texto-contato -->

            <span></span>

            <div id="contatos">
                <div id="container-telefone">
                    <div class="icons-contatos" id="telefone"></div>
                    <p>11 99845-6754</p>
                </div><!-- container-telefone -->

                <div id="container-endereco">
                    <div class="icons-contatos" id="edereco"></div>
                    <p>R. Amauri Souza, 346</p>
                </div><!-- container-email -->

                <div id="container-email">
                    <div class="icons-contatos" id="email"></div>
                    <p>contato@beautysalon.com</p>
                </div><!-- container-email -->
            </div><!-- contatos -->

            <span></span>
    </section><!-- contato -->

    <footer>
        <div id="texto-footer">
            <div id="logo-footer"></div><!-- Logo-footer -->
            <p><span id="verificado">©</span>2021 Beautysalon.</p>
            <p>Todos os direitos reservados.</p>
        </div><!-- texto-footer -->

        <div id="redes-sociais">
            <div class="icons-redes-sociais" id="instagram"></div>
            <div class="icons-redes-sociais" id="fecebook"></div>
            <div class="icons-redes-sociais" id="youtube"></div>
        </div><!-- redes-sociais -->

    </footer>
</body>
<script src="<?php echo INCLUDE_PATH; ?>JS/script.js"></script>
</html>
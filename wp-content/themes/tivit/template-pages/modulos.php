<?php /* Template Name: Modulos */ ?>
<?php get_header(); ?>
    <!-- todos os paramentos que tiverem como css inline(paramentro style="..."
        poderam ser personalizados pelo usuario -->

    <!-- Header Mobile -->
    <section class="container-fluid p-0 header-landing position-relative mt-0"
             style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/modulos/header/background.png')">
        <div class="card-img-overlay mask-header"></div>
        <div class="card-img-overlay mask-header-gradient"></div>
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center position-relative">
                <!-- imagem grafica para compor o hero -->
                <div class="card-img-overlay d-flex justify-content-center align-items-center w-100">
                    <img class="img-fluid d-none d-lg-block"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/header/grafismos.svg"
                         alt="">
                </div>
                <div class="col-auto box-logo position-relative">
                    <div class="col-auto d-flex justify-content-center box-img-logo">
                        <!-- Aqui devará conter um logo -->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/header/logo-header.svg"
                             alt="">
                    </div>
                    <div class="col-auto">
                        <h1 class="title-header">Juntos, rumo ao <strong>extraordinário</strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- remover a classe dev no back end -->
    <!-- separei esse modulo em 2 pois já temos o big number criado,
     sendo assim ele pode ou não ser utilizado -->
    <!-- fim do Header Mobile -->


    <!-- box-chamada-pagina -->
    <section class="container box-chamada-pagina" style="background: white;">
        <div class="col box-title px-lg-0 d-flex align-items-center justify-content-center flex-wrap">
            <p><strong>Soluções inovadoras na prática.</strong></p>
            <p> Desafiamos e encorajamos a transformação, porque acreditamos que o
                plano no papel não muda o mundo</p>
        </div>
    </section>
    <!-- segunda parte do modulo  -->
    <section class="container-fluid px-lg-0 box-big-number position-relative" style="background: white;">
        <!-- mascara 50% color top permitir que o usuario passar a cor desejada  através do style background -->
        <div class="card-img-overlay h-50 fundo-50-top" style="background: transparent;"></div>
        <!-- o titulo é opicinal, caso o usurio não passe nenhum titulo, adiconar a classe
        d-none no container abaixo -->
        <div class="containe d-none">
            <div class="col d-flex justify-content-center box-title-top">
                <h3 class="title-top">Titulo (Opcional)</h3>
            </div>
        </div>

        <!-- aqui se incia os container cards -->
        <div class="container-fluid p-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 box-cards">
                        <!-- passar o numero de colunas no row-cols-lg-numero, recomendado no máximo 3 colunas -->
                        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4">
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body p-0">
                                        <!-- permitir que o usuário passe a cor do titulo atrávés do style background,
                                         caso não seja setado a cor padrão será a defina no css-->
                                        <h5 class="card-title">15 bilhões</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body p-0">
                                        <h5 class="card-title">R$ 5,5 milhões</h5>
                                        <p class="card-text">é a média do custo que as empresas têm a cada ataque.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body p-0">
                                        <h5 class="card-title">52% dos casos</h5>
                                        <p class="card-text">os dados comprometidos envolvem informações de clientes, o
                                            que
                                            pode
                                            destruir a reputação da empresa.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- final do modulo Chamada Página -->
    <!-- fim  box-chamada-pagina -->

    <!-- slider + Links(Projetos por Categoria) -->
    <!-- Chama o bruno para call antes de implementar esse modulo -->
    <section class="container-fluid px-0 slider-categoria" style="background: #f4f6f7">
        <div class="container">
            <div class="row row-cols-1 justify-content-center">
                <div class="col-auto box-title">
                    <h3 class="title">Projetos por categoria</h3>
                </div>
                <div class="col-12 menu-categoria">
                    <ul class="nav justify-content-lg-center justify-content-start">
                        <li class="col-auto  nav-item order-1">
                            <a class="nav-link active" id="cultura-responsabilidade" aria-current="page"
                               onclick="defineAtivo('cultura-responsabilidade')">cultura e responsabilidade
                                social</a>
                        </li>
                        <li class="col-auto nav-item order-3 order-lg-2">
                            <a class="nav-link" id="ambientais" onclick="defineAtivo('ambientais')">programas
                                ambientais</a>
                        </li>
                        <li class="col nav-item order-2 order-lg-3">
                            <a class="nav-link" id="diversidade" onclick="defineAtivo('diversidade')">diversidade</a>
                        </li>

                        <li class="col nav-item order-4">
                            <a class="nav-link" id="capacitacao" onclick="defineAtivo('capacitacao')">capacitação</a>
                        </li>
                        <li class="col nav-item order-5 ">
                            <a class="nav-link" id="educacao" onclick="defineAtivo('educacao')">Educação</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 box-slider">
                <section class="container px-0 slider-projetos" style="background: #262626">
                    <div class="row">
                        <div id="slider-categoria" class="carousel slide p-0 carousel-fade"
                             data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#slider-categoria" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#slider-categoria" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#slider-categoria" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#slider-categoria" data-bs-slide-to="3"
                                        aria-label="Slide 4"></button>
                            </div>

                            <div class="col-auto position-relative controlador">
                                <button class="carousel-control-prev" type="button"
                                        data-bs-target="#slider-categoria"
                                        data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                        data-bs-target="#slider-categoria"
                                        data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <!--<div class="carousel-inner">

                                    <div class="carousel-item active">

                                        <div class="row justify-content-end d-none d-lg-flex">
                                            <div class="col-auto position-absolute h-100 v-mask d-flex justify-content-end">
                                                <img class="img-fluid" src="<?php /*echo get_template_directory_uri(); */ ?>/assets/images/modulos/categoria-slider/mask-slider.svg" alt="">
                                            </div>
                                        </div>

                                        <div class="row gx-0 h-100 justify-content-between">

                                            <div class="col-12 col-lg-4 box-infos p-4 p-lg-5">
                                                <div class="container h-100 case-infos d-flex align-items-end">
                                                    <div class="row justify-content-start align-items-end">

                                                        <div class="col-12 n-acao">
                                                            <p>Nome da ação: <strong>Lorem Ipsum</strong></p>
                                                        </div>
                                                        <div class="col-12 title">
                                                            <h3 class="title-text">Masp sp</h3>
                                                        </div>
                                                        <div class="col-12 box-desc">
                                                            <p>
                                                                Apoiar o Masp é contribuir para a manutenção de uma das
                                                                mais
                                                                relevantes instituições culturais do país e foi por isso
                                                                que
                                                                escolhemos apoiá-lo em 2019.
                                                            </p>
                                                        </div>
                                                        <div class="col-auto box-tags mt-2 mt-lg-4">
                                                            <ul class="list-group list-group-horizontal">
                                                                <li class="list-group-item">CULTURA E
                                                                        RESPONSABILIDADE SOCIAL</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-auto box-time-slide mt-2 mt-lg-4">
                                                            <p>10 minutos de leitura</p>
                                                        </div>
                                                        <div class="col-12 box-link mt-2 mt-lg-4">
                                                            <a href="#">VER AÇÃO</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-lg-8 box-img">
                                                <img src="<?php /*echo get_template_directory_uri(); */ ?>/assets/images/modulos/categoria-slider/slider-01.png"
                                                     class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row justify-content-end d-none d-lg-flex">
                                            <div class="col-auto position-absolute h-100 v-mask d-flex justify-content-end">
                                                <img class="img-fluid"
                                                     src="<?php /*echo get_template_directory_uri(); */ ?>/assets/images/modulos/categoria-slider/mask-slider.svg"
                                                     alt="">
                                            </div>
                                        </div>
                                        <div class="row gx-0 h-100 justify-content-between">
                                            <div class="col-12 col-lg-4 box-infos p-4 p-lg-5">
                                                <div class="container h-100 case-infos d-flex align-items-end">
                                                    <div class="row justify-content-start align-items-end">
                                                        <div class="col-12 n-acao">
                                                            <p>Nome da ação: <strong>Lorem Ipsum</strong></p>
                                                        </div>
                                                        <div class="col-12 title">
                                                            <h3 class="title-text">Masp sp</h3>
                                                        </div>
                                                        <div class="col-12 box-desc">
                                                            <p>
                                                                Apoiar o Masp é contribuir para a manutenção de uma das
                                                                mais
                                                                relevantes instituições culturais do país e foi por isso
                                                                que
                                                                escolhemos apoiá-lo em 2019.
                                                            </p>
                                                        </div>
                                                        <div class="col-auto box-tags mt-2 mt-lg-4">
                                                            <ul class="list-group list-group-horizontal">
                                                                <li class="list-group-item"><a href="#">CULTURA E
                                                                        RESPONSABILIDADE SOCIAL</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-auto box-time-slide mt-2 mt-lg-4">
                                                            <p>10 minutos de leitura</p>
                                                        </div>
                                                        <div class="col-12 box-link mt-2 mt-lg-4">
                                                            <a href="#">VER AÇÃO</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-lg-8 box-img">
                                                <img src="<?php /*echo get_template_directory_uri(); */ ?>/assets/images/modulos/categoria-slider/slider-01.png"
                                                     class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row justify-content-end d-none d-lg-flex">
                                            <div class="col-auto position-absolute h-100 v-mask d-flex justify-content-end">
                                                <img class="img-fluid"
                                                     src="<?php /*echo get_template_directory_uri(); */ ?>/assets/images/modulos/categoria-slider/mask-slider.svg"
                                                     alt="">
                                            </div>
                                        </div>
                                        <div class="row gx-0 h-100 justify-content-between">
                                            <div class="col-12 col-lg-4 box-infos p-4 p-lg-5">
                                                <div class="container h-100 case-infos d-flex align-items-end">
                                                    <div class="row justify-content-start align-items-end">
                                                        <div class="col-12 n-acao">
                                                            <p>Nome da ação: <strong>Lorem Ipsum</strong></p>
                                                        </div>
                                                        <div class="col-12 title">
                                                            <h3 class="title-text">Masp sp</h3>
                                                        </div>
                                                        <div class="col-12 box-desc">
                                                            <p>
                                                                Apoiar o Masp é contribuir para a manutenção de uma das
                                                                mais
                                                                relevantes instituições culturais do país e foi por isso
                                                                que
                                                                escolhemos apoiá-lo em 2019.
                                                            </p>
                                                        </div>
                                                        <div class="col-auto box-tags mt-2 mt-lg-4">
                                                            <ul class="list-group list-group-horizontal">
                                                                <li class="list-group-item"><a href="#">CULTURA E
                                                                        RESPONSABILIDADE SOCIAL</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-auto box-time-slide mt-2 mt-lg-4">
                                                            <p>10 minutos de leitura</p>
                                                        </div>
                                                        <div class="col-12 box-link mt-2 mt-lg-4">
                                                            <a href="#">VER AÇÃO</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-lg-8 box-img">
                                                <img src="<?php /*echo get_template_directory_uri(); */ ?>/assets/images/modulos/categoria-slider/slider-01.png"
                                                     class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                    </div>

                                </div>-->
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-12 box-article-slider">
                <div class="row justify-content-center">
                    <div class="col-auto box-title">
                        <h3 class="title" id="title-articles-slider">outros projetos de cultura e responsabilidade
                            social</h3>
                    </div>
                    <div class="col-12 box-news-slider px-lg-0" id="boxArticles">

                        <!-- alimentado via ajax api -->

                        <div id="carousel-articles" class="carousel slide carousel-dark position-relative"
                             data-bs-ride="carousel"
                             data-bs-interval="30000">
                            <div class="col-12 controladores position-absolute">
                                <div class="row row-cols- justify-content-center">
                                    <div class="col-auto d-flex align-items-center">
                                        <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carousel-articles"
                                                data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                    </div>
                                    <div class="col-auto p-0">
                                        <div class="carousel-indicators"></div>
                                    </div>
                                    <div class="col-auto d-flex align-items-center">
                                        <button class="carousel-control-next" type="button"
                                                data-bs-target="#carousel-articles"
                                                data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- alimentado com ajax -->
                            <!-- <div class="carousel-inner">
                                 <div class="carousel-item active">
                                     <div class="row row-cols-1 row-cols-lg-3 article-box">
                                         <div class="col-auto item">
                                             <a href="">
                                                 <div class="card mt-lg-auto">
                                                     <img src="https://www.4devs.com.br/4devs_gerador_imagem.php?acao=gerar_imagem&txt_largura=880&txt_altura=603&extensao=png&fundo_r=0.1881103515625&fundo_g=0.1881103515625&fundo_b=0.1881103515625&texto_r=1&texto_g=1&texto_b=1&texto=Gerador%20Imagem%20%234Devs&tamanho_fonte=10"
                                                          class="card-img-top" alt="...">
                                                     <div class="card-body">
                                                         <h5 class="card-title">Card title</h5>
                                                         <p class="card-text">This is a longer card with supporting text
                                                             below as
                                                             a
                                                             natural lead-in to additional content. This content is a
                                                             little bit
                                                             longer.</p>
                                                         <div class="col-12 box-cta mt-2 mt-lg-4">
                                                             <a href="http://tivit.local/" class="btn-cta">conheça a
                                                                 ação</a>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                         <div class="col-auto item">
                                             <a href="">
                                                 <div class="card mt-lg-auto">
                                                     <img src="https://www.4devs.com.br/4devs_gerador_imagem.php?acao=gerar_imagem&txt_largura=880&txt_altura=603&extensao=png&fundo_r=0.1881103515625&fundo_g=0.1881103515625&fundo_b=0.1881103515625&texto_r=1&texto_g=1&texto_b=1&texto=Gerador%20Imagem%20%234Devs&tamanho_fonte=10"
                                                          class="card-img-top" alt="...">
                                                     <div class="card-body">
                                                         <h5 class="card-title">Card title</h5>
                                                         <p class="card-text">This is a longer card with supporting text
                                                             below as
                                                             a
                                                             natural lead-in to additional content. This content is a
                                                             little bit
                                                             longer.</p>
                                                         <div class="col-12 box-cta mt-2 mt-lg-4">
                                                             <a href="http://tivit.local/" class="btn-cta">conheça a
                                                                 ação</a>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                         <div class="col-auto item">
                                             <a href="">
                                                 <div class="card mt-lg-auto">
                                                     <img src="https://www.4devs.com.br/4devs_gerador_imagem.php?acao=gerar_imagem&txt_largura=880&txt_altura=603&extensao=png&fundo_r=0.1881103515625&fundo_g=0.1881103515625&fundo_b=0.1881103515625&texto_r=1&texto_g=1&texto_b=1&texto=Gerador%20Imagem%20%234Devs&tamanho_fonte=10"
                                                          class="card-img-top" alt="...">
                                                     <div class="card-body">
                                                         <h5 class="card-title">Card title</h5>
                                                         <p class="card-text">This is a longer card with supporting text
                                                             below as
                                                             a
                                                             natural lead-in to additional content. This content is a
                                                             little bit
                                                             longer.</p>
                                                         <div class="col-12 box-cta mt-2 mt-lg-4">
                                                             <a href="http://tivit.local/" class="btn-cta">conheça a
                                                                 ação</a>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="carousel-item">
                                     <div class="row row-cols-1 row-cols-lg-3 article-box">
                                         <div class="col-auto item">
                                             <a href="">
                                                 <div class="card mt-lg-auto">
                                                     <img src="https://www.4devs.com.br/4devs_gerador_imagem.php?acao=gerar_imagem&txt_largura=880&txt_altura=603&extensao=png&fundo_r=0.1881103515625&fundo_g=0.1881103515625&fundo_b=0.1881103515625&texto_r=1&texto_g=1&texto_b=1&texto=Gerador%20Imagem%20%234Devs&tamanho_fonte=10"
                                                          class="card-img-top" alt="...">
                                                     <div class="card-body">
                                                         <h5 class="card-title">Card title</h5>
                                                         <p class="card-text">This is a longer card with supporting text
                                                             below as
                                                             a
                                                             natural lead-in to additional content. This content is a
                                                             little bit
                                                             longer.</p>
                                                         <div class="col-12 box-cta mt-2 mt-lg-4">
                                                             <a href="http://tivit.local/" class="btn-cta">conheça a
                                                                 ação</a>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                         <div class="col-auto item">
                                             <a href="">
                                                 <div class="card mt-lg-auto">
                                                     <img src="https://www.4devs.com.br/4devs_gerador_imagem.php?acao=gerar_imagem&txt_largura=880&txt_altura=603&extensao=png&fundo_r=0.1881103515625&fundo_g=0.1881103515625&fundo_b=0.1881103515625&texto_r=1&texto_g=1&texto_b=1&texto=Gerador%20Imagem%20%234Devs&tamanho_fonte=10"
                                                          class="card-img-top" alt="...">
                                                     <div class="card-body">
                                                         <h5 class="card-title">Card title</h5>
                                                         <p class="card-text">This is a longer card with supporting text
                                                             below as
                                                             a
                                                             natural lead-in to additional content. This content is a
                                                             little bit
                                                             longer.</p>
                                                         <div class="col-12 box-cta mt-2 mt-lg-4">
                                                             <a href="http://tivit.local/" class="btn-cta">conheça a
                                                                 ação</a>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                         <div class="col-auto item">
                                             <a href="">
                                                 <div class="card mt-lg-auto">
                                                     <img src="https://www.4devs.com.br/4devs_gerador_imagem.php?acao=gerar_imagem&txt_largura=880&txt_altura=603&extensao=png&fundo_r=0.1881103515625&fundo_g=0.1881103515625&fundo_b=0.1881103515625&texto_r=1&texto_g=1&texto_b=1&texto=Gerador%20Imagem%20%234Devs&tamanho_fonte=10"
                                                          class="card-img-top" alt="...">
                                                     <div class="card-body">
                                                         <h5 class="card-title">Card title</h5>
                                                         <p class="card-text">This is a longer card with supporting text
                                                             below as
                                                             a
                                                             natural lead-in to additional content. This content is a
                                                             little bit
                                                             longer.</p>
                                                         <div class="col-12 box-cta mt-2 mt-lg-4">
                                                             <a href="http://tivit.local/" class="btn-cta">conheça a
                                                                 ação</a>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="carousel-item">
                                     <div class="row row-cols-1 row-cols-lg-3 article-box">
                                         <div class="col-auto item">
                                             <a href="">
                                                 <div class="card mt-lg-auto">
                                                     <img src="https://www.4devs.com.br/4devs_gerador_imagem.php?acao=gerar_imagem&txt_largura=880&txt_altura=603&extensao=png&fundo_r=0.1881103515625&fundo_g=0.1881103515625&fundo_b=0.1881103515625&texto_r=1&texto_g=1&texto_b=1&texto=Gerador%20Imagem%20%234Devs&tamanho_fonte=10"
                                                          class="card-img-top" alt="...">
                                                     <div class="card-body">
                                                         <h5 class="card-title">Card title</h5>
                                                         <p class="card-text">This is a longer card with supporting text
                                                             below as
                                                             a
                                                             natural lead-in to additional content. This content is a
                                                             little bit
                                                             longer.</p>
                                                         <div class="col-12 box-cta mt-2 mt-lg-4">
                                                             <a href="http://tivit.local/" class="btn-cta">conheça a
                                                                 ação</a>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                         <div class="col-auto item">
                                             <a href="">
                                                 <div class="card mt-lg-auto">
                                                     <img src="https://www.4devs.com.br/4devs_gerador_imagem.php?acao=gerar_imagem&txt_largura=880&txt_altura=603&extensao=png&fundo_r=0.1881103515625&fundo_g=0.1881103515625&fundo_b=0.1881103515625&texto_r=1&texto_g=1&texto_b=1&texto=Gerador%20Imagem%20%234Devs&tamanho_fonte=10"
                                                          class="card-img-top" alt="...">
                                                     <div class="card-body">
                                                         <h5 class="card-title">Card title</h5>
                                                         <p class="card-text">This is a longer card with supporting text
                                                             below as
                                                             a
                                                             natural lead-in to additional content. This content is a
                                                             little bit
                                                             longer.</p>
                                                         <div class="col-12 box-cta mt-2 mt-lg-4">
                                                             <a href="http://tivit.local/" class="btn-cta">conheça a
                                                                 ação</a>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                         <div class="col-auto item">
                                             <a href="">
                                                 <div class="card mt-lg-auto">
                                                     <img src="https://www.4devs.com.br/4devs_gerador_imagem.php?acao=gerar_imagem&txt_largura=880&txt_altura=603&extensao=png&fundo_r=0.1881103515625&fundo_g=0.1881103515625&fundo_b=0.1881103515625&texto_r=1&texto_g=1&texto_b=1&texto=Gerador%20Imagem%20%234Devs&tamanho_fonte=10"
                                                          class="card-img-top" alt="...">
                                                     <div class="card-body">
                                                         <h5 class="card-title">Card title</h5>
                                                         <p class="card-text">This is a longer card with supporting text
                                                             below as
                                                             a
                                                             natural lead-in to additional content. This content is a
                                                             little bit
                                                             longer.</p>
                                                         <div class="col-12 box-cta mt-2 mt-lg-4">
                                                             <a href="http://tivit.local/" class="btn-cta">conheça a
                                                                 ação</a>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                     </div>
                                 </div>

                             </div>-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- modulo parceiros -->
    <section class="container-fluid px-0 box-parceiros" style="background: white;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto box-title mt-5 mt-lg- auto">
                    <h2>Parceiros</h2>
                </div>
                <div class="col-12 box-slider">
                    <div class="owl-carousel owl-theme slider-parceiros">
                        <div class="item">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/Parceiros/logo_aws.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/Parceiros/logo_azure.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/Parceiros/logo_gc.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/Parceiros/logo_sap.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/Parceiros/logo_aws.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/Parceiros/logo_azure.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/Parceiros/logo_gc.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/Parceiros/logo_sap.png"
                                     alt="">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fim do modulo parceiros -->

    <!-- modulo cliente -->
    <section class="container-fluid px-lg-0 box-nosso-clientes" style="background: white;">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-auto box-title mt-5">
                    <h2>Nosso Clientes</h2>
                </div>
                <div class="col-12 box-slider">
                    <div class="row justify-content-around row-cols-3 row-cols-lg-6">
                        <div class="col box-img">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/clientes/brf.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="col box-img">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/clientes/boticario.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="col box-img">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/clientes/bv.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="col box-img">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/clientes/ipiranga.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="col box-img">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/clientes/notredame.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="col box-img">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/clientes/zurich.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="col box-img">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/clientes/notredame.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="col box-img">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/clientes/zurich.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="col box-img">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/clientes/ipiranga.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="col box-img">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/clientes/brf.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="col box-img">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/clientes/boticario.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="col box-img">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/clientes/bv.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="col box-img">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/clientes/brf.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="col box-img">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/clientes/boticario.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="col box-img">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/clientes/bv.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="col box-img">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/clientes/ipiranga.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="col box-img">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/clientes/notredame.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="col box-img">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/clientes/zurich.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="col box-img">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/clientes/notredame.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="col box-img">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/clientes/zurich.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="col box-img">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/clientes/ipiranga.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="col box-img">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/clientes/brf.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="col box-img">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/clientes/boticario.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="col box-img">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/clientes/bv.png"
                                     alt="">
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- fim do modulo cliente -->

    <!-- Box intro -->
    <section class="container-fluid px-0 box-intro position-relative mt-2" style="background: #262626">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 g-lg-5 gy-lg-0">
                <div class="col modulo order-1 flex-wrap d-flex justify-content-center align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg"
                         class="logo-tivit" height="40" alt="">
                </div>
                <div class="col modulo order-2  mt-5 d-flex flex-wrap justify-content-start align-items-center">
                    <p style="font-weight: 400; font-size: 20px; line-height: 30px; color: #FFFFFF;">8 entre as 10
                        maiores empresas da América Latina contam com a TIVIT como parceira tecnológica para trazer
                        eficiência e inovação para os seus negócios.</p>
                    <a href="#" class="btn btn-tivit1 mt-4">BNT INTRO OPCIONAL</a>
                </div>
            </div>
        </div>
        <!--opicional mascara, caso adiconar, remova tag d-none -->
        <div class="card-img-overlay box-mask w-100 h-100 d-none"></div>
    </section>
    <section class="container-fluid px-0 box-intro position-relative mt-2" style="background: #262626">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 g-lg-5 gy-lg-0">
                <div class="col modulo order-2  mt-5 flex-wrap d-flex justify-content-center align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg"
                         class="logo-tivit" height="40" alt="">
                </div>
                <div class="col modulo order-1 d-flex flex-wrap justify-content-start align-items-center">
                    <p style="font-weight: 400; font-size: 20px; line-height: 30px; color: #FFFFFF;">8 entre as 10
                        maiores empresas da América Latina contam com a TIVIT como parceira tecnológica para trazer
                        eficiência e inovação para os seus negócios.</p>
                    <a href="#" class="btn btn-tivit1 mt-4">BNT INTRO OPCIONAL</a>
                </div>
            </div>
        </div>
        <!--opicional mascara, caso adiconar, remova tag d-none -->
        <div class="card-img-overlay box-mask w-100 h-100 d-none"></div>
    </section>
    <!-- alternativo -->
    <section class="container-fluid px-0 box-intro position-relative mt-2"
             style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/box-intro/background.png'); background-repeat: no-repeat; background-size: cover;">

        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 g-lg-5 gy-lg-0">
                <div class="col modulo order-1  flex-wrap d-flex justify-content-center align-items-center">
                    <h3 style="font-weight: 700; font-size: 28px; line-height: 34px; color: #FFFFFF;">
                        Seu negócio hoje age proativamente contra ataques ou apenas reage?
                    </h3>
                    <p style="font-style: normal; font-weight: 400; font-size: 18px; line-height: 24px; color: #FFFFFF;">
                        Prevenção é a chave para diminuir custos e manter a reputação da sua empresa.</p>
                </div>
                <div class="col modulo order-2 d-flex  mt-5 flex-wrap justify-content-start align-items-center">
                    <p style="font-weight: 400; font-size: 20px; line-height: 30px; color: #FFFFFF;">Entre em contato
                        com nossos consultores e saiba como o serviços de Cyber Security podem mitigar os riscos e
                        vulnerabilidades do seu negócio.</p>
                    <a href="#" class="btn btn-tivit1 mt-4">BNT INTRO OPCIONAL</a>
                </div>
            </div>
        </div>
        <!--opicional mascara, caso deseje ocutar adcione o d-none -->
        <div class="card-img-overlay box-mask w-100 h-100"></div>
    </section>
    <section class="container-fluid px-0 box-intro position-relative mt-2"
             style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/box-intro/background.png'); background-repeat: no-repeat; background-size: cover;">

        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 g-lg-5 gy-lg-0">
                <div class="col modulo order-2  mt-5 flex-wrap d-flex justify-content-center align-items-center">
                    <h3 style="font-weight: 700; font-size: 28px; line-height: 34px; color: #FFFFFF;">
                        Seu negócio hoje age proativamente contra ataques ou apenas reage?
                    </h3>
                    <p style="font-style: normal; font-weight: 400; font-size: 18px; line-height: 24px; color: #FFFFFF;">
                        Prevenção é a chave para diminuir custos e manter a reputação da sua empresa.</p>
                </div>
                <div class="col modulo order-1  d-flex flex-wrap justify-content-start align-items-center">
                    <p style="font-weight: 400; font-size: 20px; line-height: 30px; color: #FFFFFF;">Entre em contato
                        com nossos consultores e saiba como o serviços de Cyber Security podem mitigar os riscos e
                        vulnerabilidades do seu negócio.</p>
                    <a href="#" class="btn btn-tivit1 mt-4">BNT INTRO OPCIONAL</a>
                </div>
            </div>
        </div>
        <!--opicional mascara, caso deseje ocutar adcione o d-none -->
        <div class="card-img-overlay box-mask w-100 h-100"></div>
    </section>

    <!--  Box Text + Img -->
    <section class="container-fluid px-lg-0 box-txt-img" style="background: white;">
        <div class="container">
            <div class="row row-cols-lg-2 p-3">
                <div class="col-auto box-modulo order-1 d-flex flex-wrap align-items-center justify-content-center">
                    <div class="col-auto box-text d-flex flex-column flex-lg-wrap">
                        <h3 class="titulo">Você sabia que o Brasil é o país <strong>mais propenso a sofrer
                                vazamentos</strong> no mundo?
                        </h3>
                        <p>Segundo o Instituto Ponemon, o risco é de 43% em uma empresa brasileira sofrer um ataque,
                            muito
                            acima de países como Alemanha (14%) e Austrália (17%).</p>
                        <a href="#" class="btn btn-tivit1 mt-5">Conheça todas nossas soluções</a>
                    </div>

                </div>
                <div class="col-auto box-modulo order-1 d-flex flex-wrap align-items-center">
                    <div class="col d-flex justify-content-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/grafico.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Exemplo de variação --- Atenção com a classe dark-theme precisa ser setada quando
    o usuario definir como dark-->
    <!-- Exemplo de variação --- Atente-se as classe orders -->
    <section class="container-fluid px-lg-0 box-txt-img dark-theme" style="background: #262626;">
        <div class="container">
            <div class="row row-cols-lg-2 p-3">
                <!-- aqui deverá ser definido a order -->
                <div class="col-auto box-modulo order-2 d-flex flex-wrap align-items-center justify-content-center">
                    <div class="col-auto box-text d-flex flex-column flex-lg-wrap">
                        <h3 class="titulo">Você sabia que o Brasil é o país <strong>mais propenso a sofrer
                                vazamentos</strong> no mundo?
                        </h3>
                        <p>Segundo o Instituto Ponemon, o risco é de 43% em uma empresa brasileira sofrer um ataque,
                            muito
                            acima de países como Alemanha (14%) e Austrália (17%).</p>
                        <a href="#" class="btn btn-tivit1 mt-5">Conheça todas nossas soluções</a>
                    </div>
                </div>
                <!--- Aqui deverá ser definido a order -->
                <div class="col-auto box-modulo order-1 d-flex flex-wrap align-items-center">
                    <div class="col d-flex justify-content-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/grafico.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fim do Box Text + Img -->

    <!-- Box Card + Icons-->
    <section class="container-fluid box-card-icons px-lg-0" style="background: white;">
        <div class="container">
            <div class="col d-flex justify-content-center box-title-top">
                <h3 class="title-top">Por que contar com a TIVIT para realizar a segurança do seu negócio?</h3>
            </div>
            <div class="col box-cards h-100">
                <div class="row row-cols-1 row-cols-lg-2 gy-4 g-lg-4 p-1  px-lg-5">
                    <div class="col card">
                        <div class="card-body d-flex flex-wrap align-items-center px-4 px-lg-5">
                            <div class="row">
                                <div class="col-12 col-lg-auto d-flex d-lg-block justify-content-center box-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/pc-icon-orange.svg"
                                         alt="">
                                </div>
                                <div class="col">
                                    <h3 class="card-title">Trabalhamos com as melhores ferramentas, sem
                                        exclusividade</h3>
                                    <p class="card-text">Não somos ligados a nenhuma ferramenta ou software - a TIVIT
                                        consegue operar e fazer benchmarking para identificar as melhores soluções para
                                        cada empresa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col card">
                        <div class="card-body d-flex flex-wrap align-items-center px-4 px-lg-5">
                            <div class="row">
                                <div class="col-12 col-lg-auto d-flex d-lg-block justify-content-center box-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/pc-icon-orange.svg"
                                         alt="">
                                </div>
                                <div class="col">
                                    <h3 class="card-title">Trabalhamos com as melhores ferramentas, sem
                                        exclusividade</h3>
                                    <p class="card-text">Não somos ligados a nenhuma ferramenta ou software - a TIVIT
                                        consegue operar e fazer benchmarking para identificar as melhores soluções para
                                        cada
                                        empresa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col card">
                        <div class="card-body d-flex flex-wrap align-items-center px-4 px-lg-5">
                            <div class="row">
                                <div class="col-12 col-lg-auto d-flex d-lg-block justify-content-center box-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/pc-icon-orange.svg"
                                         alt="">
                                </div>
                                <div class="col">
                                    <h3 class="card-title">Trabalhamos com as melhores ferramentas, sem
                                        exclusividade</h3>
                                    <p class="card-text">Não somos ligados a nenhuma ferramenta ou software - a TIVIT
                                        consegue operar e fazer benchmarking para identificar as melhores soluções para
                                        cada
                                        empresa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col card">
                        <div class="card-body d-flex flex-wrap align-items-center px-4 px-lg-5">
                            <div class="row">
                                <div class="col-12 col-lg-auto d-flex d-lg-block justify-content-center box-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/pc-icon-orange.svg"
                                         alt="">
                                </div>
                                <div class="col">
                                    <h3 class="card-title">Trabalhamos com as melhores ferramentas, sem
                                        exclusividade</h3>
                                    <p class="card-text">Não somos ligados a nenhuma ferramenta ou software - a TIVIT
                                        consegue operar e fazer benchmarking para identificar as melhores soluções para
                                        cada
                                        empresa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col box-cta d-flex justify-content-center">
                <a href="#" class="btn btn-tivit1">Conheça todas nossas soluções</a>
            </div>
        </div>
    </section>
    <!-- box alternativo, só passar a classe alternative no section -->
    <section class="container-fluid box-card-icons px-lg-0 alternative" style="background: #C7EDE3;">
        <div class="container">
            <div class="col d-flex justify-content-center box-title-top">
                <h3 class="title-top">Por que contar com a TIVIT para realizar a segurança do seu negócio?</h3>
            </div>
            <div class="col box-cards h-100">
                <div class="row row-cols-1 row-cols-lg-2 gy-4 g-lg-4  p-1  px-lg-5">
                    <div class="col card">
                        <div class="card-body d-flex flex-wrap align-items-center px-4 px-lg-5">
                            <div class="row">
                                <div class="col-12 col-lg-auto d-flex d-lg-block justify-content-center box-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/pc-icon-black.svg"
                                         alt="">
                                </div>
                                <div class="col">
                                    <h3 class="card-title">Trabalhamos com as melhores ferramentas, sem
                                        exclusividade</h3>
                                    <p class="card-text">Não somos ligados a nenhuma ferramenta ou software - a TIVIT
                                        consegue operar e fazer benchmarking para identificar as melhores soluções para
                                        cada
                                        empresa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col card">
                        <div class="card-body d-flex flex-wrap align-items-center px-4 px-lg-5">
                            <div class="row">
                                <div class="col-12 col-lg-auto d-flex d-lg-block justify-content-center box-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/pc-icon-black.svg"
                                         alt="">
                                </div>
                                <div class="col">
                                    <h3 class="card-title">Trabalhamos com as melhores ferramentas, sem
                                        exclusividade</h3>
                                    <p class="card-text">Não somos ligados a nenhuma ferramenta ou software - a TIVIT
                                        consegue operar e fazer benchmarking para identificar as melhores soluções para
                                        cada
                                        empresa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col card">
                        <div class="card-body d-flex flex-wrap align-items-center px-4 px-lg-5">
                            <div class="row">
                                <div class="col-12 col-lg-auto d-flex d-lg-block justify-content-center box-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/pc-icon-black.svg"
                                         alt="">
                                </div>
                                <div class="col">
                                    <h3 class="card-title">Trabalhamos com as melhores ferramentas, sem
                                        exclusividade</h3>
                                    <p class="card-text">Não somos ligados a nenhuma ferramenta ou software - a TIVIT
                                        consegue operar e fazer benchmarking para identificar as melhores soluções para
                                        cada
                                        empresa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col card">
                        <div class="card-body d-flex flex-wrap align-items-center px-4 px-lg-5">
                            <div class="row">
                                <div class="col-12 col-lg-auto d-flex d-lg-block justify-content-center box-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/pc-icon-black.svg"
                                         alt="">
                                </div>
                                <div class="col">
                                    <h3 class="card-title">Trabalhamos com as melhores ferramentas, sem
                                        exclusividade</h3>
                                    <p class="card-text">Não somos ligados a nenhuma ferramenta ou software - a TIVIT
                                        consegue operar e fazer benchmarking para identificar as melhores soluções para
                                        cada
                                        empresa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col box-cta d-flex justify-content-center">
                <a href="#" class="btn btn-tivit1">Conheça todas nossas soluções</a>
            </div>
        </div>
    </section>
    <!--fim do Box Card + Icons-->

    <!-- Box lista + img -->
    <section class="container-fluid px-lg-0 box-list-img" style="background: white;">
        <div class="container">
            <!-- passe o d-flex para ativo, e d-none para ocultar na class -->
            <div class="col d-flex justify-content-center box-title-top">
                <h3 class="title-top">Titulo superior da Box Lista + IMG, Passe aqui o titulo do modulo -
                    (Opcional)</h3>
            </div>
            <div class="row gx-4 linha-dados">
                <div class="col-12 col-lg-7 order-1 box-list">
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-12 col-lg-auto">
                                    <h3 class="card-title">MDR</h3>
                                </div>
                                <div class="col-12 col-lg">
                                    <p class="card-text">Plataformas e equipes especializadas que atuam 24x7x365 para
                                        investigar, identificar e responder as ameaças em tempo real.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body d-flex gap-4 flex-wrap justify-content-between">
                            <div class="row justify-content-between">
                                <div class="col-12 col-lg-auto">
                                    <h3 class="card-title">DEV SEC OPS</h3>
                                </div>
                                <div class="col-12 col-lg">
                                    <p class="card-text">Desenvolva aplicações de maneira ágil e segura desde o início
                                        do
                                        processo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body d-flex gap-4 flex-wrap justify-content-between">
                            <div class="row justify-content-between">
                                <div class="col-12 col-lg-auto">
                                    <h3 class="card-title">THREAT INTELL</h3>
                                </div>
                                <div class="col-12 col-lg">
                                    <p class="card-text">Visão 360º para atuar com inteligência em tempo real na
                                        análise,
                                        detecção e tratativa de uso indevido de informações, protegendo a exposição dos
                                        negócios de sua empresa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body d-flex gap-4 flex-wrap justify-content-between">
                            <div class="row justify-content-between">
                                <div class="col-12 col-lg-auto">
                                    <h3 class="card-title">GRC</h3>
                                </div>
                                <div class="col-12 col-lg">
                                    <p class="card-text">Soluções de governança para garantir que os processos de TI
                                        estejam
                                        alinhados a estratégia e regras do negócio e agreguem valor para as
                                        organizações.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body d-flex gap-4 flex-wrap justify-content-between">
                            <div class="card-body d-flex gap-4 flex-wrap justify-content-between">
                                <div class="row justify-content-between">
                                    <h3 class="card-title">CONSULTING</h3>
                                </div>
                                <div class="col-12 col-lg">
                                    <p class="card-text">Equipe altamente qualificada para serviços de assessoria,
                                        avaliação, recuperação e analise forense, para gestão de crises, ataques e
                                        projetos.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-5 order-2 box-img d-flex flex-wrap justify-content-center align-content-center">
                    <img class="img-fluid"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/mandala-list-img.png"
                         alt="">
                </div>
                <div class="col-12 col-lg-7 order-3 box-cta d-flex justify-content-center">
                    <a href="#" class="btn btn-tivit1">TEXTO DO BOTÃO LISTA</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Box Alternativo Lista + Img -->
    <section class="container-fluid px-lg-0 box-list-img alternative" style="background: #262626;">
        <div class="container">
            <div class="col d-flex justify-content-center box-title-top">
                <h3 class="title-top">Titulo superior da Box Lista + IMG, Passe aqui o titulo do modulo -
                    (Opcional)</h3>
            </div>
            <div class="row gx-4 linha-dados">
                <div class="col-12 col-lg-7 order-2 box-list">
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-12 col-lg-auto">
                                    <h3 class="card-title">MDR</h3>
                                </div>
                                <div class="col-12 col-lg">
                                    <p class="card-text">Plataformas e equipes especializadas que atuam 24x7x365 para
                                        investigar, identificar e responder as ameaças em tempo real.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body d-flex gap-4 flex-wrap justify-content-between">
                            <div class="row justify-content-between">
                                <div class="col-12 col-lg-auto">
                                    <h3 class="card-title">DEV SEC OPS</h3>
                                </div>
                                <div class="col-12 col-lg">
                                    <p class="card-text">Desenvolva aplicações de maneira ágil e segura desde o início
                                        do
                                        processo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body d-flex gap-4 flex-wrap justify-content-between">
                            <div class="row justify-content-between">
                                <div class="col-12 col-lg-auto">
                                    <h3 class="card-title">THREAT INTELL</h3>
                                </div>
                                <div class="col-12 col-lg">
                                    <p class="card-text">Visão 360º para atuar com inteligência em tempo real na
                                        análise,
                                        detecção e tratativa de uso indevido de informações, protegendo a exposição dos
                                        negócios de sua empresa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body d-flex gap-4 flex-wrap justify-content-between">
                            <div class="row justify-content-between">
                                <div class="col-12 col-lg-auto">
                                    <h3 class="card-title">GRC</h3>
                                </div>
                                <div class="col-12 col-lg">
                                    <p class="card-text">Soluções de governança para garantir que os processos de TI
                                        estejam
                                        alinhados a estratégia e regras do negócio e agreguem valor para as
                                        organizações.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body d-flex gap-4 flex-wrap justify-content-between">
                            <div class="card-body d-flex gap-4 flex-wrap justify-content-between">
                                <div class="row justify-content-between">
                                    <h3 class="card-title">CONSULTING</h3>
                                </div>
                                <div class="col-12 col-lg">
                                    <p class="card-text">Equipe altamente qualificada para serviços de assessoria,
                                        avaliação, recuperação e analise forense, para gestão de crises, ataques e
                                        projetos.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-5 order-1 box-img d-flex flex-wrap justify-content-center align-content-center">
                    <img class="img-fluid"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/mandala-list-img.png"
                         alt="">
                </div>
                <div class="col-12 col-lg-7 order-3 box-cta d-flex justify-content-center">
                    <a href="#" class="btn btn-tivit1">TEXTO DO BOTÃO LISTA</a>
                </div>
            </div>
        </div>
    </section>
    <!-- fim do Box lista + img -->

    <!-- box banner soluções -->
    <section class="container box-banner-solucoes">
        <div class="d-flex flex-wrap">

            <div class="col-12 col-lg-auto order-1 box-img position-relative">
                <div class="card-img-overlay box-overlay">
                    <h3 class="box-title-img">Managed Detecting and Response (MDR)</h3>
                </div>
                <div class="col-12">
                    <img class="w-100"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/banner-solucoes.png"
                         alt="">
                </div>
                <div class="card-img-overlay box-overlay-mandala d-flex justify-content-center
                 justify-content-lg-end align-items-end align-items-lg-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/mandala-solucoes.png"
                         alt="">
                </div>
            </div>

            <!-- passe a cor de fundo na tag style -->
            <div class="col-12 col-lg box-solucoes order-2 position-relative d-flex justify-content-end align-items-center"
                 style="background: #F14517;">
                <div class="col-12 col-lg-10 box-dados-list">
                    <div class="col-auto box-title">
                        <h3 class="box-title-solucoes">Plataforma com inteligência para oferecer visão unificada da
                            segurança de TI, apoiada na
                            experiência de equipes especializadas que atuam 24x7x365 para investigar, identificar e
                            responder às ameaças em tempo real.
                        </h3>
                    </div>
                    <div class="col-auto listagem">
                        <ul>
                            <li>
                                <strong>Centro de Operações de Segurança (SOC):</strong> Com plataforma e time
                                especializado atuando
                                na gestão de ambientes críticos
                            </li>
                            <li>
                                <strong>Threat Vulnerability Management (TVM):</strong> Processo de gestão de
                                vulnerabilidades de
                                ambientes produtivos
                            </li>
                            <li>
                                <strong>Identity and Access Management (IAM):</strong> Plataforma com gestão de
                                Identidade e
                                permissão de acessos que garante a segurança de todos os acessos, aplicações e dados
                            </li>
                            <li>
                                <strong>Cloud Access Security Broker (CASB):</strong> Ferramenta para segurança de
                                aplicações em
                                nuvem, mitigando o risco de vazamento de dados.
                            </li>
                            <li>
                                <strong>Operação de ambientes</strong> seguindo as normas e diretrizes previstas na
                                ISO27001 de
                                segurança da informação
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-7 order-3 box-cta d-flex justify-content-center justify-content-lg-start">
                        <a href="#" class="btn btn-tivit1">TEXTO DO BOTÃO LISTA</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- box banner soluções alternativo -->
    <section class="container box-banner-solucoes">
        <div class="d-flex flex-wrap">

            <div class="col-12 col-lg-auto order-1 box-img position-relative">
                <div class="card-img-overlay box-overlay">
                    <h3 class="box-title-img">Managed Detecting and Response (MDR)</h3>
                </div>
                <div class="col-12">
                    <img class="w-100"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/banner-solucoes.png"
                         alt="">
                </div>
                <div class="card-img-overlay box-overlay-mandala d-flex justify-content-center
                 justify-content-lg-end align-items-end align-items-lg-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/mandala-solucoes-alt.png"
                         alt="">
                </div>
            </div>

            <!-- passe a cor de fundo na tag style -->
            <div class="col-12 col-lg box-solucoes order-2 position-relative d-flex justify-content-end align-items-center"
                 style="background: #009EE3;">
                <div class="col-12 col-lg-10 box-dados-list">
                    <div class="col-auto box-title">
                        <h3 class="box-title-solucoes">Plataforma com inteligência para oferecer visão unificada da
                            segurança de TI, apoiada na
                            experiência de equipes especializadas que atuam 24x7x365 para investigar, identificar e
                            responder às ameaças em tempo real.
                        </h3>
                    </div>
                    <div class="col-auto listagem">
                        <ul>
                            <li>
                                <strong>Centro de Operações de Segurança (SOC):</strong> Com plataforma e time
                                especializado atuando
                                na gestão de ambientes críticos
                            </li>
                            <li>
                                <strong>Threat Vulnerability Management (TVM):</strong> Processo de gestão de
                                vulnerabilidades de
                                ambientes produtivos
                            </li>
                            <li>
                                <strong>Identity and Access Management (IAM):</strong> Plataforma com gestão de
                                Identidade e
                                permissão de acessos que garante a segurança de todos os acessos, aplicações e dados
                            </li>
                            <li>
                                <strong>Cloud Access Security Broker (CASB):</strong> Ferramenta para segurança de
                                aplicações em
                                nuvem, mitigando o risco de vazamento de dados.
                            </li>
                            <li>
                                <strong>Operação de ambientes</strong> seguindo as normas e diretrizes previstas na
                                ISO27001 de
                                segurança da informação
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-7 order-3 box-cta d-flex justify-content-center justify-content-lg-start">
                        <a href="#" class="btn btn-tivit1">TEXTO DO BOTÃO LISTA</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--fim do box banner soluções -->

    <!-- Box Big Numbers -->
    <!-- permitir que o usuario passar a cor desejada através do style background -->
    <section class="container-fluid px-lg-0 box-big-number position-relative" style="background: transparent;">
        <!-- mascara 50% color top permitir que o usuario passar a cor desejada  através do style background -->
        <div class="card-img-overlay h-50 fundo-50-top" style="background: transparent;"></div>
        <!-- o titulo é opicinal, caso o usurio não passe nenhum titulo, adiconar a classe
        d-none no container abaixo -->
        <div class="container">
            <div class="col d-flex justify-content-center box-title-top">
                <h3 class="title-top">Titulo (Opcional)</h3>
            </div>
        </div>
        <!-- aqui se incia os container cards -->
        <div class="container-fluid p-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 box-cards">
                        <!-- passar o numero de colunas no row-cols-lg-numero, recomendado no máximo 3 colunas -->
                        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4">
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body p-0">
                                        <!-- permitir que o usuário passe a cor do titulo atrávés do style background,
                                         caso não seja setado a cor padrão será a defina no css-->
                                        <h5 class="card-title">15 bilhões</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body p-0">
                                        <h5 class="card-title">R$ 5,5 milhões</h5>
                                        <p class="card-text">é a média do custo que as empresas têm a cada ataque.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body p-0">
                                        <h5 class="card-title">52% dos casos</h5>
                                        <p class="card-text">os dados comprometidos envolvem informações de clientes, o
                                            que
                                            pode
                                            destruir a reputação da empresa.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- alternativo com 2 - 6 cards colunas e fundo com 2 cores-->
    <section class="container-fluid px-lg-0 box-big-number position-relative" style="background: #990017;">
        <!-- mascara 50% color top permitir que o usuario passar a cor desejada  através do style background -->
        <div class="card-img-overlay h-50 fundo-50-top" style="background: #F4F6F7;"></div>
        <!-- o titulo é opicinal, caso o usurio não passe nenhum titulo, adiconar a classe
        d-none no container abaixo -->
        <div class="container">
            <div class="col d-flex justify-content-center box-title-top">
                <h3 class="title-top">Titulo (Opcional)</h3>
            </div>
        </div>
        <!-- aqui se incia os container cards -->
        <div class="container-fluid p-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 box-cards">
                        <!-- passar o numero de colunas no row-cols-lg-numero, recomendado no máximo 3 colunas -->
                        <div class="row row-cols-1 row-cols-lg-2 align-items-stretch g-4">
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body p-0">
                                        <!-- permitir que o usuário passe a cor do titulo atrávés do style background,
                                         caso não seja setado a cor padrão será a defina no css-->
                                        <h5 class="card-title" style="color: #990017;">15 bilhões</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body p-0">
                                        <h5 class="card-title" style="color: #990017;">15 bilhões</h5>
                                        <p class="card-text">é a média do custo que as empresas têm a cada ataque.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body p-0">
                                        <h5 class="card-title" style="color: #990017;">15 bilhões</h5>
                                        <p class="card-text">os dados comprometidos envolvem informações de clientes, o
                                            que
                                            pode
                                            destruir a reputação da empresa.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body p-0">
                                        <h5 class="card-title" style="color: #990017;">15 bilhões</h5>
                                        <p class="card-text">os dados comprometidos envolvem informações de clientes, o
                                            que
                                            pode
                                            destruir a reputação da empresa.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body p-0">
                                        <h5 class="card-title" style="color: #990017;">15 bilhões</h5>
                                        <p class="card-text">os dados comprometidos envolvem informações de clientes, o
                                            que pode destruir a reputação da empresa.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body p-0">
                                        <h5 class="card-title" style="color: #990017;">15 bilhões</h5>
                                        <p class="card-text">os dados comprometidos envolvem informações de clientes, o
                                            que pode destruir a reputação da empresa.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- alternativo com 2 - 2 cards colunas e fundo com 2 cores-->
    <section class="container-fluid px-lg-0 box-big-number position-relative" style="background: #3A3A3A;">
        <!-- mascara 50% color top permitir que o usuario passar a cor desejada  através do style background -->
        <div class="card-img-overlay h-50 fundo-50-top" style="background: #F4F6F7;"></div>
        <!-- o titulo é opicinal, caso o usurio não passe nenhum titulo, adiconar a classe
        d-none no container abaixo -->
        <div class="container">
            <div class="col d-flex justify-content-center box-title-top">
                <h3 class="title-top">Titulo (Opcional)</h3>
            </div>
        </div>
        <!-- aqui se incia os container cards -->
        <div class="container-fluid p-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 box-cards">
                        <!-- passar o numero de colunas no row-cols-lg-numero, recomendado no máximo 3 colunas -->
                        <div class="row row-cols-1 row-cols-lg-2 align-items-stretch g-4">
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body p-0">
                                        <!-- permitir que o usuário passe a cor do titulo atrávés do style background,
                                         caso não seja setado a cor padrão será a defina no css-->
                                        <h5 class="card-title" style="color: #990017;">15 bilhões</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body p-0">
                                        <h5 class="card-title" style="color: #990017;">15 bilhões</h5>
                                        <p class="card-text">é a média do custo que as empresas têm a cada ataque.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- alternativo com 3 colunas - 5 cards e cor sólida-->
    <section class="container-fluid px-lg-0 box-big-number position-relative" style="background: #C7EDE3;">
        <!-- mascara 50% color top permitir que o usuario passar a cor desejada  através do style background, parar cor sólida
         passar o style transparent -->
        <div class="card-img-overlay h-50 fundo-50-top" style="background: transparent;"></div>
        <!-- o titulo é opicinal, caso o usurio não passe nenhum titulo, adiconar a classe
        d-none no container abaixo -->
        <div class="container">
            <div class="col d-flex justify-content-center box-title-top">
                <h3 class="title-top">Titulo (Opcional)</h3>
            </div>
        </div>
        <!-- aqui se incia os container cards -->
        <div class="container-fluid p-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 box-cards">
                        <!-- passar o numero de colunas no row-cols-lg-numero, recomendado no máximo 3 colunas -->
                        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4">
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body p-0">
                                        <!-- permitir que o usuário passe a cor do titulo atrávés do style background,
                                         caso não seja setado a cor padrão será a defina no css-->
                                        <h5 class="card-title" style="color: black;">15 bilhões</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body p-0">
                                        <h5 class="card-title" style="color: black;">15 bilhões</h5>
                                        <p class="card-text">é a média do custo que as empresas têm a cada ataque.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body p-0">
                                        <!-- permitir que o usuário passe a cor do titulo atrávés do style background,
                                         caso não seja setado a cor padrão será a defina no css-->
                                        <h5 class="card-title" style="color: black;">15 bilhões</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body p-0">
                                        <h5 class="card-title" style="color: black;">15 bilhões</h5>
                                        <p class="card-text">é a média do custo que as empresas têm a cada ataque.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body p-0">
                                        <h5 class="card-title" style="color: black;">15 bilhões</h5>
                                        <p class="card-text">é a média do custo que as empresas têm a cada ataque.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fim do Box Big Numbers -->

    <!-- modulo slider -->
    <section class="container-fluid px-lg-0 box-slider position-relative" style="background: white">
        <div class="container position-relative">
            <div class="card-img-overlay box-mask ">
                <div class="col-auto mask d-flex justify-content-end d-none d-lg-flex">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/slider/mask.svg"
                         alt="">
                </div>
            </div>

            <div class="row row-cols-1 row-cols-lg-2">
                <div class="w-100 d-none position-absolute box-triangulo d-lg-flex justify-content-center w-100 p-lg-0">
                    <div class="box-triangulo-color" style="background: #fff;"></div>
                </div>
                <div class="col box-solid p-lg-0">
                    <div class="col-12 box-title-solid h-100" style="background: #F14517;">
                        <h3 class="title-solid" style="color: white">Cases de sucesso da
                            <strong>Tdx</strong>
                        </h3>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s.</p>

                        <a href="#" class="btn cta-theme">CONHEÇA A TDX</a>
                    </div>
                </div>


                <div class="col case-sliders position-relative p-lg-0">
                    <button class="carousel-control-prev" type="button" data-bs-target="#slider-base-modular"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#slider-base-modular"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    <div id="slider-base-modular" class="carousel slide position-relative" data-bs-ride="true">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#slider-base-modular" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#slider-base-modular" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#slider-base-modular" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active position-relative">
                                <div class="row row-cols-1">
                                    <div class="col box-images p-lg-0">
                                        <div class="col-12">
                                            <div class="card bg-dark text-white position-relative">
                                                <img class="img-fluid h-100"
                                                     src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/slider/shutterstock_1874774047_low%201.png"
                                                     alt="">
                                                <div class="card-img-overlay d-flex justify-content-end align-items-end ">
                                                    <div class="col box-text d-flex flex-wrap justify-content-end">
                                                        <h3 class="card-title">cnh industrial</h3>
                                                        <p class="card-text">This is a wider card with supporting text
                                                            below as a natural lead-in to additional content. This
                                                            content is a little bit longer.</p>
                                                        <a href="#" class="btn cta-slider">CONHEÇA A AÇÃO</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item position-relative">
                                <div class="row">

                                    <div class="col box-images p-lg-0">

                                        <div class="col-12">
                                            <div class="card bg-dark text-white position-relative">
                                                <img class="img-fluid h-100"
                                                     src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/slider/shutterstock_1874774047_low%201.png"
                                                     alt="">
                                                <div class="card-img-overlay d-flex justify-content-end align-items-end">
                                                    <div class="col box-text d-flex flex-wrap justify-content-end">
                                                        <h3 class="card-title">Lorem Ipsum</h3>
                                                        <p class="card-text">Lorem Ipsum is simply dummy text of the
                                                            printing and typesetting industry. Lorem Ipsum has been the
                                                            industry's standard dummy text ever since the 1500s.</p>
                                                        <a href="#" class="btn cta-slider">CONHEÇA A AÇÃO</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item position-relative">

                                <div class="row">
                                    <div class="col box-images p-lg-0">

                                        <div class="col-12">
                                            <div class="card bg-dark text-white position-relative">
                                                <img class="img-fluid h-100"
                                                     src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/slider/shutterstock_1874774047_low%201.png"
                                                     alt="">
                                                <div class="card-img-overlay d-flex justify-content-end align-items-end">
                                                    <div class="col box-text d-flex flex-wrap justify-content-end">
                                                        <h3 class="card-title">Why do we use it?</h3>
                                                        <p class="card-text">It is a long established fact that a reader
                                                            will be distracted by the readable content of a page when
                                                            looking at its layout. The point of using Lorem Ipsum is
                                                            that it has a more-or-less normal distribution of letters,
                                                            as opposed to using 'Content here.</p>
                                                        <a href="#" class="btn cta-slider">CONHEÇA A AÇÃO</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="card-img-overlay h-100 bg-slider d-flex align-items-end">
            <div class="h-50 w-100 box-50per" style="background: #F4F6F7;"></div>
        </div>
    </section>
    <!-- fim do modulo slider -->

    <!-- box full img -->
    <section class="container-fluid px-lg-0 box-full-img" style="background: #F4F6F7;">
        <div class="container">
            <div class="row">
                <div class="col-12 box-title-header">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 box-title d-flex justify-content-center">
                            <h3 class="title">Como fazemos</h3>
                        </div>
                        <div class="col-12 col-lg-7 box-desc">
                            <p class="desc">Atuamos desde a descoberta do desafio do cliente, estudando a operação e
                                elaborando
                                hipóteses, para então desenvolver soluções customizadas. Construímos as fundações para
                                seu negócio crescer e prosperar, em um ciclo virtuoso.</p>
                        </div>
                        <div class="col-12 d-flex justify-content-center box-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/box-img/grafico-tdx.png"
                                 class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- cards only with text -->
    <section class="container-fluid px-lg-0 card-only-text" style="background: transparent;">
        <div class="container">
            <div class="row row-cols-1 justify-content-center">
                <div class="col box-title">
                    <h3 class="title">Nossas plataformas</h3>
                </div>
                <div class="col box-text d-flex justify-content-center">
                    <p class="box-text">Com um mindset ágil vamos transformar a TIVIT, reconhecida muitas vezes por
                        excelência em
                        infraestrutura e terceirização de TI, para plataformas digitais com serviços financeiros para os
                        nossos Clientes B2B.
                    </p>
                </div>
            </div>
            <div class="col-12 box-cards  mt-5">
                <div class="row  row-cols-1 row-cols-lg-4 g-4">
                    <div class="col">
                        <div class="card h-100" style="border-color: #582689;">
                            <div class="card-header">
                                <h5 class="card-title">PSTI</h5>
                            </div>
                            <div class="card-body">
                                <div class="col box-card-text">
                                    <p class="card-text">Provedor de Serviços de Tecnologia da Informação homologado
                                        pelo Banco Central.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="border-left-color: #582689;">
                            <div class="card-header">
                                <h5 class="card-title">API Gateway</h5>
                            </div>
                            <div class="card-body">
                                <div class="col box-card-text">
                                    <p class="card-text">Plataforma de integração financeira e Open Banking.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="border-left-color: #582689;">
                            <div class="card-header">
                                <h5 class="card-title">TBanks Payments</h5>
                            </div>
                            <div class="card-body">
                                <div class="col box-card-text">
                                    <p class="card-text">Conta Digital da TIVIT para pagamentos de contas, Utilities e
                                        PIX.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="border-left-color: #582689;">
                            <div class="card-header">
                                <h5 class="card-title">Banking as a Service</h5>
                            </div>
                            <div class="card-body">
                                <div class="col box-card-text">
                                    <p class="card-text">Oferta completa de Serviços Financeiros.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 cta-card mt-5">
                <div class="row row-cols-1 justify-content-center">
                    <div class="col-auto">
                        <a href="#" class="btn btn-tivit1">CTA CARDS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- alternative-->
    <section class="container-fluid px-lg-0 card-only-text alternative" style="background: #262626">
        <div class="container">
            <div class="row row-cols-1 justify-content-center">
                <div class="col box-title">
                    <h3 class="title">Nossas plataformas</h3>
                </div>
                <div class="col box-text d-flex justify-content-center">
                    <p class="box-text">Com um mindset ágil vamos transformar a TIVIT, reconhecida muitas vezes por
                        excelência em
                        infraestrutura e terceirização de TI, para plataformas digitais com serviços financeiros para os
                        nossos Clientes B2B.
                    </p>
                </div>
            </div>
            <div class="col-12 box-cards  mt-5">
                <div class="row  row-cols-1 row-cols-lg-4 g-4">
                    <div class="col">
                        <div class="card h-100" style="border-color: #F14517;">
                            <div class="card-header">
                                <h5 class="card-title" style="color:  #F14517">PSTI</h5>
                            </div>
                            <div class="card-body">
                                <div class="col box-card-text">
                                    <p class="card-text">Provedor de Serviços de Tecnologia da Informação homologado
                                        pelo Banco Central.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="border-color: #F14517;">
                            <div class="card-header">
                                <h5 class="card-title" style="color:  #F14517">API Gateway</h5>
                            </div>
                            <div class="card-body">
                                <div class="col box-card-text">
                                    <p class="card-text">Plataforma de integração financeira e Open Banking.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="border-color: #F14517;">
                            <div class="card-header">
                                <h5 class="card-title" style="color:  #F14517">TBanks Payments</h5>
                            </div>
                            <div class="card-body">
                                <div class="col box-card-text">
                                    <p class="card-text">Conta Digital da TIVIT para pagamentos de contas, Utilities e
                                        PIX.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="border-color: #F14517;">
                            <div class="card-header">
                                <h5 class="card-title" style="color:  #F14517">Banking as a Service</h5>
                            </div>
                            <div class="card-body">
                                <div class="col box-card-text">
                                    <p class="card-text">Oferta completa de Serviços Financeiros.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 cta-card mt-5">
                <div class="row row-cols-1 justify-content-center">
                    <div class="col-auto">
                        <a href="#" class="btn btn-tivit1">CTA CARDS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fim do cards only with text -->

    <!-- card img+title -->
    <!-- todos os paramentos que tiverem como css inline(paramentro style="..."
    poderam ser personalizados pelo usuario -->
    <section class="container-fluid px-lg-0 card-only-text cards-images-centred" style="background: transparent;">
        <div class="container">
            <div class="row row-cols-1 justify-content-center">
                <div class="col-auto box-title">
                    <h3 class="title">Última tecnologia em pagamentos</h3>
                </div>
                <div class="col-12 box-cards  mt-5">
                    <!-- passa row-col-lg-number  a quantidade de colunas que o usuario
                    deseja sendo no maximo row-cols-lg-4 e no minimo row-cols-lg-2 -->
                    <div class="row  row-cols-1 row-cols-lg-3 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="col box-card-text d-flex justify-content-center flex-column">
                                        <div class="col-12 d-flex justify-content-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/cards-img/card-01.svg"
                                                 alt="">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <h5 class="card-title" style="color:  #582689">Taxas de transação mais
                                                baratas</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="col box-card-text d-flex justify-content-center flex-column">
                                        <div class="col-12 d-flex justify-content-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/cards-img/card-02.svg"
                                                 alt="">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <h5 class="card-title" style="color:  #582689">Informações em tempo real das
                                                operações</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="col box-card-text d-flex justify-content-center flex-column">
                                        <div class="col-12 d-flex justify-content-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/cards-img/card-03.svg"
                                                 alt="">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <h5 class="card-title" style="color:  #582689">Avisos de movimentações
                                                bancárias</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="col box-card-text d-flex justify-content-center flex-column">
                                        <div class="col-12 d-flex justify-content-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/cards-img/card-04.svg"
                                                 alt="">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <h5 class="card-title" style="color:  #582689">Faturamento em tempo
                                                real</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="col box-card-text d-flex justify-content-center flex-column">
                                        <div class="col-12 d-flex justify-content-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/cards-img/card-05.svg"
                                                 alt="">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <h5 class="card-title" style="color:  #582689">Dashboard de gestão de
                                                operações</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="col box-card-text d-flex justify-content-center flex-column">
                                        <div class="col-12 d-flex justify-content-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/cards-img/card-06.svg"
                                                 alt="">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <h5 class="card-title" style="color:  #582689">Sistema intuitivo e
                                                unificado</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 cta-card mt-5">
                <div class="row row-cols-1 justify-content-center">
                    <div class="col-auto">
                        <a href="#" class="btn btn-tivit1">CTA CARDS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- alternative -->
    <!-- todos os paramentos que tiverem como css inline(paramentro style="..."
       poderam ser personalizados pelo usuario -->
    <section class="container-fluid px-lg-0 card-only-text cards-images-centred alternative"
             style="background: #262626">
        <div class="container">
            <div class="row row-cols-1 justify-content-center">
                <div class="col-auto box-title">
                    <h3 class="title">Última tecnologia em pagamentos</h3>
                </div>
                <div class="col-12 box-cards  mt-5">
                    <!-- passa row-col-lg-number  a quantidade de colunas que o usuario
                   deseja sendo no maximo row-cols-lg-4 e no minimo row-cols-lg-2 -->
                    <div class="row  row-cols-1 row-cols-lg-4 g-4">
                        <div class="col">
                            <div class="card h-100" style="border-color: #FE4817">
                                <div class="card-body">
                                    <div class="col box-card-text d-flex justify-content-center flex-column">
                                        <div class="col-12 d-flex justify-content-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/cards-img/card-01a.svg"
                                                 alt="">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <h5 class="card-title" style="color: #FE4817;">Taxas de transação mais
                                                baratas</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100" style="border-color: #FE4817">
                                <div class="card-body">
                                    <div class="col box-card-text d-flex justify-content-center flex-column">
                                        <div class="col-12 d-flex justify-content-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/cards-img/card-02a.svg"
                                                 alt="">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <h5 class="card-title" style="color: #FE4817;">Informações em tempo real das
                                                operações</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100" style="border-color: #FE4817">
                                <div class="card-body">
                                    <div class="col box-card-text d-flex justify-content-center flex-column">
                                        <div class="col-12 d-flex justify-content-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/cards-img/card-03a.svg"
                                                 alt="">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <h5 class="card-title" style="color: #FE4817;">Avisos de movimentações
                                                bancárias</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100" style="border-color: #FE4817">
                                <div class="card-body">
                                    <div class="col box-card-text d-flex justify-content-center flex-column">
                                        <div class="col-12 d-flex justify-content-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/cards-img/card-04a.svg"
                                                 alt="">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <h5 class="card-title" style="color: #FE4817;">Faturamento em tempo
                                                real</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100" style="border-color: #FE4817">
                                <div class="card-body">
                                    <div class="col box-card-text d-flex justify-content-center flex-column">
                                        <div class="col-12 d-flex justify-content-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/cards-img/card-05a.svg"
                                                 alt="">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <h5 class="card-title" style="color: #FE4817;">Dashboard de gestão de
                                                operações</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100" style="border-color: #FE4817">
                                <div class="card-body">
                                    <div class="col box-card-text d-flex justify-content-center flex-column">
                                        <div class="col-12 d-flex justify-content-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/cards-img/card-06a.svg"
                                                 alt="">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <h5 class="card-title" style="color: #FE4817;">Sistema intuitivo e
                                                unificado</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100" style="border-color: #FE4817">
                                <div class="card-body">
                                    <div class="col box-card-text d-flex justify-content-center flex-column">
                                        <div class="col-12 d-flex justify-content-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/cards-img/card-01a.svg"
                                                 alt="">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <h5 class="card-title" style="color: #FE4817;">Taxas de transação mais
                                                baratas</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100" style="border-color: #FE4817">
                                <div class="card-body">
                                    <div class="col box-card-text d-flex justify-content-center flex-column">
                                        <div class="col-12 d-flex justify-content-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/cards-img/card-02a.svg"
                                                 alt="">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <h5 class="card-title" style="color: #FE4817;">Informações em tempo real das
                                                operações</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 cta-card mt-5">
                <div class="row row-cols-1 justify-content-center">
                    <div class="col-auto">
                        <a href="#" class="btn btn-tivit1">CTA CARDS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fim do card img+title -->

    <!-- box BENEFÍCIOS PARA CLIENTES -->
    <section class="container-fluid px-lg-0 box-feedback-cliente" style="background: transparent;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 box-title d-flex justify-content-center">
                    <h3 class="title">benefícios para clientes</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div id="feedbackSlider" class="carousel carousel-dark slide feedbackSlider"
                         data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#feedbackSlider" data-bs-slide-to="0" class="active"
                                    aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#feedbackSlider" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#feedbackSlider" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-12 box-img d-flex justify-content-center">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/feedback/user.png"
                                             class="d-block" alt="...">
                                    </div>
                                    <div class="col-12 info-user  d-flex flex-column justify-content-center">
                                        <p><strong>André Correia</strong></p>
                                        <p>Diretor e head de negócios da TBankS</p>
                                    </div>
                                    <div class="col-12 box-feedback d-flex justify-content-center">
                                        <p>”A chegada do Open Banking traz uma grande oportunidade para a renovação do
                                            sistema financeiro brasileiro. A TIVIT, como uma das maiores empresas de
                                            tecnologia do país, usa sua expertise para ser protagonista neste
                                            mercado.”</p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item ">
                                <div class="row">
                                    <div class="col-12 box-img d-flex justify-content-center">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/feedback/user.png"
                                             class="d-block" alt="...">
                                    </div>
                                    <div class="col-12 info-user  d-flex flex-column justify-content-center">
                                        <p><strong>André Correia</strong></p>
                                        <p>Diretor e head de negócios da TBankS</p>
                                    </div>
                                    <div class="col-12 box-feedback d-flex justify-content-center">
                                        <p>”A chegada do Open Banking traz uma grande oportunidade para a renovação do
                                            sistema financeiro brasileiro. A TIVIT, como uma das maiores empresas de
                                            tecnologia do país, usa sua expertise para ser protagonista neste
                                            mercado.”</p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12 box-img d-flex justify-content-center">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/feedback/user.png"
                                             class="d-block" alt="...">
                                    </div>
                                    <div class="col-12 info-user  d-flex flex-column justify-content-center">
                                        <p><strong>André Correia</strong></p>
                                        <p>Diretor e head de negócios da TBankS</p>
                                    </div>
                                    <div class="col-12 box-feedback d-flex justify-content-center">
                                        <p>”A chegada do Open Banking traz uma grande oportunidade para a renovação do
                                            sistema financeiro brasileiro. A TIVIT, como uma das maiores empresas de
                                            tecnologia do país, usa sua expertise para ser protagonista neste
                                            mercado.”</p>
                                    </div>
                                </div>
                            </div>


                        </div>


                        <button class="carousel-control-prev d-none d-lg-block" type="button"
                                data-bs-target="#feedbackSlider"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next d-none d-lg-block" type="button"
                                data-bs-target="#feedbackSlider"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- altenative
    carro o cliente sete o modo escuro, esse bloco precisará se carregado ao invés do outro
    -->
    <section class="container-fluid px-lg-0 box-feedback-cliente alternative" style="background: #262626">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 box-title d-flex justify-content-center">
                    <h3 class="title">benefícios para clientes</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div id="feedbackSlider-alternative" class="carousel slide feedbackSlider"
                         data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#feedbackSlider-alternative" data-bs-slide-to="0"
                                    class="active"
                                    aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#feedbackSlider-alternative" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#feedbackSlider-alternative" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-12 box-img d-flex justify-content-center">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/feedback/user.png"
                                             class="d-block" alt="...">
                                    </div>
                                    <div class="col-12 info-user  d-flex flex-column justify-content-center">
                                        <p><strong>André Correia</strong></p>
                                        <p>Diretor e head de negócios da TBankS</p>
                                    </div>
                                    <div class="col-12 box-feedback d-flex justify-content-center">
                                        <p>”A chegada do Open Banking traz uma grande oportunidade para a renovação do
                                            sistema financeiro brasileiro. A TIVIT, como uma das maiores empresas de
                                            tecnologia do país, usa sua expertise para ser protagonista neste
                                            mercado.”</p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item ">
                                <div class="row">
                                    <div class="col-12 box-img d-flex justify-content-center">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/feedback/user.png"
                                             class="d-block" alt="...">
                                    </div>
                                    <div class="col-12 info-user  d-flex flex-column justify-content-center">
                                        <p><strong>André Correia</strong></p>
                                        <p>Diretor e head de negócios da TBankS</p>
                                    </div>
                                    <div class="col-12 box-feedback d-flex justify-content-center">
                                        <p>”A chegada do Open Banking traz uma grande oportunidade para a renovação do
                                            sistema financeiro brasileiro. A TIVIT, como uma das maiores empresas de
                                            tecnologia do país, usa sua expertise para ser protagonista neste
                                            mercado.”</p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12 box-img d-flex justify-content-center">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/feedback/user.png"
                                             class="d-block" alt="...">
                                    </div>
                                    <div class="col-12 info-user  d-flex flex-column justify-content-center">
                                        <p><strong>André Correia</strong></p>
                                        <p>Diretor e head de negócios da TBankS</p>
                                    </div>
                                    <div class="col-12 box-feedback d-flex justify-content-center">
                                        <p>”A chegada do Open Banking traz uma grande oportunidade para a renovação do
                                            sistema financeiro brasileiro. A TIVIT, como uma das maiores empresas de
                                            tecnologia do país, usa sua expertise para ser protagonista neste
                                            mercado.”</p>
                                    </div>
                                </div>
                            </div>


                        </div>


                        <button class="carousel-control-prev d-none d-lg-block" type="button"
                                data-bs-target="#feedbackSlider-alternative"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next d-none d-lg-block" type="button"
                                data-bs-target="#feedbackSlider-alternative"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Formulario novo padronizado alterar no layout atual -->
    <section class="container-fluid px-lg-0 box-form-contato" style="background: transparent">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="row justify-content-center">
                        <div class="col-12 box-title d-flex justify-content-center">
                            <h3 class="title">Reduza custos e fuja da burocracia. Fale com nossos especialistas.</h3>
                        </div>
                        <div class="col-12 box-form">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-10">
                                    <form name="contato" class="form-case">
                                        <div class="row">
                                            <div class="col-12 box-name-form mb-4">
                                                <h4 class="form-name">contatos pessoais</h4>
                                            </div>
                                            <div class="col-12 col-lg-6 mt-4">
                                                <input type="text" name="nome-completo" class="form-control"
                                                       placeholder="Nome Completo" aria-label="Nome Completo" required>
                                            </div>
                                            <div class="col-12 col-lg-6 mt-4" required>
                                                <select name="cargo" class="form-select">
                                                    <option selected>Cargo</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-lg-6 mt-4">
                                                <input type="email" name="email" class="form-control"
                                                       placeholder="E-mail" aria-label="E-mail" required>
                                            </div>
                                            <div class="col-12 col-lg-6 mt-4">
                                                <input type="text" name="phone" class="form-control"
                                                       placeholder="Telefone" aria-label="Telefone" required>
                                            </div>
                                            <div class="col-12 box-name-form mt-5 mb-2">
                                                <h4 class="form-name">empresa e projeto</h4>
                                            </div>
                                            <div class="col-12 col-lg-6 mt-4">
                                                <input type="text" name="empresa" class="form-control"
                                                       placeholder="Empresa" aria-label="Empresa" required>
                                            </div>
                                            <div class="col-12 col-lg-6 mt-4">
                                                <select name="cargo" class="form-select" required>
                                                    <option selected>Segmento</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col-12 box-name-form mt-5">
                                                <h4 class="form-name">Conte-nos um pouco sobre os desafios que fizeram
                                                    você buscar as soluções tbanks</h4>
                                            </div>
                                            <div class="col-12 mt-4">
                                                <textarea name="assunto" class="form-control" required></textarea>
                                            </div>
                                            <div class="col-12 col-lg-9 mt-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                           id="flexCheckDefault" required>
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        Estou ciente das finalidades para utilização de meus dados
                                                        pessoais por parte da TIVIT e concordo com os termos deste
                                                        tratamento descrito na Política de Privacidade disponibilizada.*
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=" col-12 col-lg-3 mt-4">
                                                <button type="submit" class="btn btn-tivit1 btn-form">Enviar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-10 mt-5">
                            <p class="info-form">A TIVIT tem o compromisso de proteger a sua privacidade e nós usaremos
                                suas informações
                                pessoais somente para fornecer os produtos e serviços que você solicitou.
                                Ocasionalmente, gostaríamos de contatá-lo sobre novos assuntos que possam ser do seu
                                interesse. Você pode cancelar o recebimento dessas comunicações quando quiser. Para
                                conhecer seus direitos e maiores detalhes de como a TIVIT trata dados pessoais, confira
                                nossa Política de Privacidade.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- altenativo -->
    <section class="container-fluid px-lg-0 box-form-contato alternative" style="background: #262626">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="row justify-content-center">
                        <div class="col-12 box-title d-flex justify-content-center">
                            <h3 class="title">Reduza custos e fuja da burocracia. Fale com nossos especialistas.</h3>
                        </div>
                        <div class="col-12 box-form">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-10">
                                    <form name="contato" class="form-case">
                                        <div class="row">
                                            <div class="col-12 box-name-form mb-4">
                                                <h4 class="form-name">contatos pessoais</h4>
                                            </div>
                                            <div class="col-12 col-lg-6 mt-4">
                                                <input type="text" name="nome-completo" class="form-control"
                                                       placeholder="Nome Completo" aria-label="Nome Completo" required>
                                            </div>
                                            <div class="col-12 col-lg-6 mt-4" required>
                                                <select name="cargo" class="form-select">
                                                    <option selected>Cargo</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-lg-6 mt-4">
                                                <input type="email" name="email" class="form-control"
                                                       placeholder="E-mail" aria-label="E-mail" required>
                                            </div>
                                            <div class="col-12 col-lg-6 mt-4">
                                                <input type="text" name="phone" class="form-control"
                                                       placeholder="Telefone" aria-label="Telefone" required>
                                            </div>
                                            <div class="col-12 box-name-form mt-5 mb-2">
                                                <h4 class="form-name">empresa e projeto</h4>
                                            </div>
                                            <div class="col-12 col-lg-6 mt-4">
                                                <input type="text" name="empresa" class="form-control"
                                                       placeholder="Empresa" aria-label="Empresa" required>
                                            </div>
                                            <div class="col-12 col-lg-6 mt-4">
                                                <select name="cargo" class="form-select" required>
                                                    <option selected>Segmento</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col-12 box-name-form mt-5">
                                                <h4 class="form-name">Conte-nos um pouco sobre os desafios que fizeram
                                                    você buscar as soluções tbanks</h4>
                                            </div>
                                            <div class="col-12 mt-4">
                                                <textarea name="assunto" class="form-control" required></textarea>
                                            </div>
                                            <div class="col-12 col-lg-9 mt-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                           id="flexCheckDefault" required>
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        Estou ciente das finalidades para utilização de meus dados
                                                        pessoais por parte da TIVIT e concordo com os termos deste
                                                        tratamento descrito na Política de Privacidade disponibilizada.*
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=" col-12 col-lg-3 mt-4">
                                                <button type="submit" class="btn btn-tivit1 btn-form">Enviar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-10 mt-5">
                            <p class="info-form">A TIVIT tem o compromisso de proteger a sua privacidade e nós usaremos
                                suas informações pessoais somente para fornecer os produtos e serviços que você
                                solicitou. Ocasionalmente, gostaríamos de contatá-lo sobre novos assuntos que possam ser
                                do seu interesse. Você pode cancelar o recebimento dessas comunicações quando quiser.
                                Para conhecer seus direitos e maiores detalhes de como a TIVIT trata dados pessoais,
                                confira nossa Política de Privacidade.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- conteúdos -->
    <section class="container-fluid px-lg-0 box-three-news" style="background: transparent;">
        <div class="container case-news">
            <div class="row">
                <div class="col-12 box-title d-flex justify-content-center">
                    <h3 class="title">últimas notícias da tdx</h3>
                </div>
                <div class="col-12 box-cards-news mt-5">
                    <div class="row row-cols-1 row-cols-lg-3 g-4">
                        <div class="col">
                            <div class="card">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/conteudo/Tivit-brandbook-foto-06.png"
                                     class="card-img-top" alt="">
                                <div class="card-body px-0">
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <span class="date">01/09/2021</span>
                                        </div>
                                        <div class="col-auto">
                                            <span class="author">Por: <strong>Ana Helena Lazaroni</strong></span>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <h5 class="card-title">título do artigo 1 Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit, sed do.</h5>
                                        </div>
                                        <div class="col-auto mt-3 box-tags">
                                            <ul class="list-group list-group-horizontal">
                                                <li><a href="">conta híbrida</a></li>
                                                <li><a href="">varejo</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-auto mt-3">
                                            <span class="tempo-leitura">6 minutos de leitura</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer px-0">
                                    <div class="col-12 box-link">
                                        <a href="#">ver artigo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/conteudo/Tivit-brandbook-foto-06.png"
                                     class="card-img-top" alt="">
                                <div class="card-body px-0">
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <span class="date">01/09/2021</span>
                                        </div>
                                        <div class="col-auto">
                                            <span class="author">Por: <strong>Ana Helena Lazaroni</strong></span>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <h5 class="card-title">título do artigo 1 Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit, sed do.</h5>
                                        </div>
                                        <div class="col-auto mt-3 box-tags">
                                            <ul class="list-group list-group-horizontal">
                                                <li><a href="">conta híbrida</a></li>
                                                <li><a href="">varejo</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-auto mt-3">
                                            <span class="tempo-leitura">6 minutos de leitura</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer px-0">
                                    <div class="col-12 box-link">
                                        <a href="#">ver artigo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/conteudo/Tivit-brandbook-foto-06.png"
                                     class="card-img-top" alt="">
                                <div class="card-body px-0">
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <span class="date">01/09/2021</span>
                                        </div>
                                        <div class="col-auto">
                                            <span class="author">Por: <strong>Ana Helena Lazaroni</strong></span>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <h5 class="card-title">título do artigo 1 Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit, sed do.</h5>
                                        </div>
                                        <div class="col-auto mt-3 box-tags">
                                            <ul class="list-group list-group-horizontal">
                                                <li><a href="">conta híbrida</a></li>
                                                <li><a href="">varejo</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-auto mt-3">
                                            <span class="tempo-leitura">6 minutos de leitura</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer px-0">
                                    <div class="col-12 box-link">
                                        <a href="#">ver artigo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 box-cta d-flex justify-content-center">
                    <a href="#" class="btn btn-tivit1">Ver todos nossos conteúdos</a>
                </div>
            </div>
        </div>
    </section>
    <!-- alternative -->
    <section class="container-fluid px-lg-0 box-three-news alternative" style="background: #262626">
        <div class="container case-news">
            <div class="row">
                <div class="col-12 box-title d-flex justify-content-center">
                    <h3 class="title">últimas notícias da tdx</h3>
                </div>
                <div class="col-12 box-cards-news mt-5">
                    <div class="row row-cols-1 row-cols-lg-3 g-4">
                        <div class="col">
                            <div class="card">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/conteudo/Tivit-brandbook-foto-06.png"
                                     class="card-img-top" alt="">
                                <div class="card-body px-0">
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <span class="date">01/09/2021</span>
                                        </div>
                                        <div class="col-auto">
                                            <span class="author">Por: <strong>Ana Helena Lazaroni</strong></span>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <h5 class="card-title">título do artigo 1 Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit, sed do.</h5>
                                        </div>
                                        <div class="col-auto mt-3 box-tags">
                                            <ul class="list-group list-group-horizontal">
                                                <li><a href="">conta híbrida</a></li>
                                                <li><a href="">varejo</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-auto mt-3">
                                            <span class="tempo-leitura">6 minutos de leitura</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer px-0">
                                    <div class="col-12 box-link">
                                        <a href="#">ver artigo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/conteudo/Tivit-brandbook-foto-06.png"
                                     class="card-img-top" alt="">
                                <div class="card-body px-0">
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <span class="date">01/09/2021</span>
                                        </div>
                                        <div class="col-auto">
                                            <span class="author">Por: <strong>Ana Helena Lazaroni</strong></span>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <h5 class="card-title">título do artigo 1 Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit, sed do.</h5>
                                        </div>
                                        <div class="col-auto mt-3 box-tags">
                                            <ul class="list-group list-group-horizontal">
                                                <li><a href="">conta híbrida</a></li>
                                                <li><a href="">varejo</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-auto mt-3">
                                            <span class="tempo-leitura">6 minutos de leitura</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer px-0">
                                    <div class="col-12 box-link">
                                        <a href="#">ver artigo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/conteudo/Tivit-brandbook-foto-06.png"
                                     class="card-img-top" alt="">
                                <div class="card-body px-0">
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <span class="date">01/09/2021</span>
                                        </div>
                                        <div class="col-auto">
                                            <span class="author">Por: <strong>Ana Helena Lazaroni</strong></span>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <h5 class="card-title">título do artigo 1 Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit, sed do.</h5>
                                        </div>
                                        <div class="col-auto mt-3 box-tags">
                                            <ul class="list-group list-group-horizontal">
                                                <li><a href="">conta híbrida</a></li>
                                                <li><a href="">varejo</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-auto mt-3">
                                            <span class="tempo-leitura">6 minutos de leitura</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer px-0">
                                    <div class="col-12 box-link">
                                        <a href="#">ver artigo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 box-cta d-flex justify-content-center">
                    <a href="#" class="btn btn-tivit1">Ver todos nossos conteúdos</a>
                </div>
            </div>
        </div>
    </section>

    <!-- slider solto -->
    <section class="container px-0 slider-projetos solto">
        <div class="col-12 px-0">
            <div id="slider-categoria01" class="carousel slide slider-categoria"
                 data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#slider-categoria01" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#slider-categoria01" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#slider-categoria01" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="row justify-content-end d-none d-lg-flex">
                            <div class="col-auto position-absolute h-100 v-mask d-flex justify-content-end">
                                <img class="img-fluid"
                                     src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/categoria-slider/mask-slider.svg"
                                     alt="">
                            </div>
                        </div>
                        <div class="row gx-0 h-100 justify-content-between">
                            <div class="col-12 col-lg-4 box-infos p-4 p-lg-5">
                                <div class="container h-100 case-infos d-flex align-items-end">
                                    <div class="row justify-content-start align-items-end">
                                        <div class="col-12 n-acao">
                                            <p>Nome da ação: <strong>Lorem Ipsum</strong></p>
                                        </div>
                                        <div class="col-12 title">
                                            <h3 class="title-text">Masp sp</h3>
                                        </div>
                                        <div class="col-12 box-desc">
                                            <p>
                                                Apoiar o Masp é contribuir para a manutenção de uma das
                                                mais relevantes instituições culturais do país e foi por isso
                                                que escolhemos apoiá-lo em 2019.
                                            </p>
                                        </div>
                                        <div class="col-auto box-tags mt-2 mt-lg-4">
                                            <ul class="list-group list-group-horizontal">
                                                <li class="list-group-item"><a href="#">CULTURA E
                                                        RESPONSABILIDADE SOCIAL</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-auto box-time-slide mt-2 mt-lg-4">
                                            <p>10 minutos de leitura</p>
                                        </div>
                                        <div class="col-12 box-link mt-2 mt-lg-4">
                                            <a href="#">VER AÇÃO</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-8 box-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/categoria-slider/slider-01.png"
                                     class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-end d-none d-lg-flex">
                            <div class="col-auto position-absolute h-100 v-mask d-flex justify-content-end">
                                <img class="img-fluid"
                                     src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/categoria-slider/mask-slider.svg"
                                     alt="">
                            </div>
                        </div>
                        <div class="row gx-0 h-100 justify-content-between">
                            <div class="col-12 col-lg-4 box-infos p-4 p-lg-5">
                                <div class="container h-100 case-infos d-flex align-items-end">
                                    <div class="row justify-content-start align-items-end">
                                        <div class="col-12 n-acao">
                                            <p>Nome da ação: <strong>Lorem Ipsum</strong></p>
                                        </div>
                                        <div class="col-12 title">
                                            <h3 class="title-text">Masp sp</h3>
                                        </div>
                                        <div class="col-12 box-desc">
                                            <p>
                                                Apoiar o Masp é contribuir para a manutenção de uma das
                                                mais
                                                relevantes instituições culturais do país e foi por isso
                                                que
                                                escolhemos apoiá-lo em 2019.
                                            </p>
                                        </div>
                                        <div class="col-auto box-tags mt-2 mt-lg-4">
                                            <ul class="list-group list-group-horizontal">
                                                <li class="list-group-item"><a href="#">CULTURA E
                                                        RESPONSABILIDADE SOCIAL</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-auto box-time-slide mt-2 mt-lg-4">
                                            <p>10 minutos de leitura</p>
                                        </div>
                                        <div class="col-12 box-link mt-2 mt-lg-4">
                                            <a href="#">VER AÇÃO</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-8 box-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/categoria-slider/slider-01.png"
                                     class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-end d-none d-lg-flex">
                            <div class="col-auto position-absolute h-100 v-mask d-flex justify-content-end">
                                <img class="img-fluid"
                                     src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/categoria-slider/mask-slider.svg"
                                     alt="">
                            </div>
                        </div>
                        <div class="row gx-0 h-100 justify-content-between">
                            <div class="col-12 col-lg-4 box-infos p-4 p-lg-5">
                                <div class="container h-100 case-infos d-flex align-items-end">
                                    <div class="row justify-content-start align-items-end">
                                        <div class="col-12 n-acao">
                                            <p>Nome da ação: <strong>Lorem Ipsum</strong></p>
                                        </div>
                                        <div class="col-12 title">
                                            <h3 class="title-text">Masp sp</h3>
                                        </div>
                                        <div class="col-12 box-desc">
                                            <p>
                                                Apoiar o Masp é contribuir para a manutenção de uma das
                                                mais
                                                relevantes instituições culturais do país e foi por isso
                                                que
                                                escolhemos apoiá-lo em 2019.
                                            </p>
                                        </div>
                                        <div class="col-auto box-tags mt-2 mt-lg-4">
                                            <ul class="list-group list-group-horizontal">
                                                <li class="list-group-item"><a href="#">CULTURA E
                                                        RESPONSABILIDADE SOCIAL</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-auto box-time-slide mt-2 mt-lg-4">
                                            <p>10 minutos de leitura</p>
                                        </div>
                                        <div class="col-12 box-link mt-2 mt-lg-4">
                                            <a href="#">VER AÇÃO</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-8 box-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/categoria-slider/slider-01.png"
                                     class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-auto position-relative controlador">
                    <button class="carousel-control-prev" type="button"
                            data-bs-target="#slider-categoria01"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button"
                            data-bs-target="#slider-categoria01"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </div>
    </section>

    <!-- header -->

    <!-- Modal -->
    <div class="modal fade" id="videoOpen" data-bs-keyboard="true" tabindex="-1" aria-labelledby="videoOpenLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <script src="https://www.youtube.com/iframe_api"></script>
                    <div id="player"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Inner -->
    <section class="container-fluid p-0 header-inner position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 position-relative box-mask">
                    <div class="card-img-overlay p-0 bottom-0">
                        <img class="w-100 d-none d-lg-block"
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/header-inner/Vector.svg"
                             alt="">
                        <img class="w-100 d-lg-none"
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/header-inner/mask-mobile.svg"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 p-0 box-header position-relative"
             style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/header-inner/background.png');">
            <div class="card-img-overlay mask-gradient"></div>
            <div class="d-flex flex-column h-100 justify-content-center position-relative align-items-center">
                <div class="col-10 col-xxl-9 d-flex justify-content-center align-items-center flex-column box-title">
                    <p class="desc-title">QUEM SOMOS</p>
                    <h1 class="title">A TIVIT transforma pessoas e tecnologia com expertise em <strong>soluções de ponta
                            a ponta.</strong></h1>
                </div>
                <div class="col-auto player position-absolute">
                    <div class="d-flex flex-column">
                        <div class="col-12 d-flex justify-content-center flex-column position-relative order-2 order-lg-1">
                            <div class="col-12">
                                <div class="aura"></div>
                            </div>
                            <div class="col-12 d-flex justify-content-center position-absolute">
                                <button data-bs-toggle="modal" data-bs-target="#videoOpen">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/play.svg"
                                         alt="...">
                                </button>
                            </div>
                        </div>
                        <div class="col-12 order-1 order-lg-2 d-flex justify-content-center">
                            <button class="text-white" data-bs-toggle="modal" data-bs-target="#videoOpen">
                                Assista ao reel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Script header inner necessário para funcionar -->
    <script>
        var player, iframe;
        var $ = document.querySelector.bind(document);

        // init player
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                height: '400',
                width: '100%',
                videoId: 'n8Q6pqkd7Uw',
                events: {
                    'onReady': onPlayerReady
                }
            });
        }

        // when ready, wait for clicks
        function onPlayerReady(event) {
            var player = event.target;
            iframe = $('#player');
            setupListener();
        }

        function setupListener() {
            $('button.open').click(playFullscreen);
        }

        function playFullscreen() {
            player.playVideo();//won't work on mobile

            var requestFullScreen = iframe.requestFullScreen || iframe.mozRequestFullScreen || iframe.webkitRequestFullScreen;
            if (requestFullScreen) {
                requestFullScreen.bind(iframe)();
            }
        }

        const myModalEl = document.getElementById('videoOpen');
        myModalEl.addEventListener('hidden.bs.modal', event => {
            player.pauseVideo();
        });
        myModalEl.addEventListener('shown.bs.modal', event => {
            player.playVideo();
        });

    </script>



<?php get_footer(); ?>
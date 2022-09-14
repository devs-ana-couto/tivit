<?php
function pb_ac_slider_projetos($obj_id, $obj = null, $block, $echo = true){
    $generate_element = '';

    $title_container = get_sub_field('gd-el-slider-projetos-title-container');

    $template = '
    <section class="container-fluid px-0 slider-categoria" style="background: #f4f6f7">
        <div class="container">
            <div class="row row-cols-1 justify-content-center">
                <div class="col-auto box-title">
                    <h3 class="title">{title_container}</h3>
                </div>
                <div class="col-12 menu-categoria">
                    <ul class="nav justify-content-lg-center justify-content-start">
                        <li class="col-auto  nav-item order-1">
                            <a class="nav-link active" id="cultura-responsabilidade" aria-current="page"
                               onclick="defineAtivo(\'cultura-responsabilidade\')">cultura e responsabilidade
                                social</a>
                        </li>
                        <li class="col-auto nav-item order-3 order-lg-2">
                            <a class="nav-link" id="ambientais" onclick="defineAtivo(\'ambientais\')">programas
                                ambientais</a>
                        </li>
                        <li class="col nav-item order-2 order-lg-3">
                            <a class="nav-link" id="diversidade" onclick="defineAtivo(\'diversidade\')">diversidade</a>
                        </li>

                        <li class="col nav-item order-4">
                            <a class="nav-link" id="capacitacao" onclick="defineAtivo(\'capacitacao\')">capacitação</a>
                        </li>
                        <li class="col nav-item order-5 ">
                            <a class="nav-link" id="educacao" onclick="defineAtivo(\'educacao\')">Educação</a>
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
    
    ';


    $generate_element =
        str_replace(
            array('{id}', '{title_container}'),
            array($obj_id, $title_container),
            $template
        );
    if ($echo)
        echo $generate_element;

    return $generate_element;
}
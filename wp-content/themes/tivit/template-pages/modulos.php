<?php /* Template Name: Modulos */ ?>
<?php get_header(); ?>
    <!-- remover a classe dev no back end -->
    <div class="dev"></div>
    <section class="container box-intro">
        <div class="row p-3">
            <!-- passar a cor adivinda do back para o inline abaixo, caso não tenha cor setada por padrão deverá ser a cor setada na abaixo, vale também para imagens -->
            <!-- passar a classe order-1 ou 2 para colocar a caixa em cima ou em baixo alternando a possição 1 para topo 2 para baixo -->
            <div class="col-12 box-modulo order-1" style="background: #454D54;">
                <div class="row row-cols-2 h-100 justify-content-center align-items-center">
                    <!-- para facilitar na implementação do back, como os texot serão posicionado de acordo com
                     a vontade do usuario passe a order1ou order2 na class -->
                    <div class="col-12 col-lg order-1 d-flex justify-content-center align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg"
                             class="logo-tivit" alt="">
                    </div>
                    <div class="col-12 col-lg order-2 d-flex justify-content-center align-items-center">
                        <p>8 entre as 10 maiores empresas da América Latina contam com a TIVIT como parceira
                            tecnológica
                            para trazer eficiência e inovação para os seus negócios.</p>
                    </div>
                </div>
            </div>
            <!-- passar a cor adivinda do back para o inline abaixo, caso não tenha cor setada por padrão deverá ser a cor setada na abaixo, vale também para imagens -->
            <!-- passar a classe order-1 ou 2 para colocar a caixa em cima ou em baixo alternando a possição -->
            <div class="col-12 box-modulo order-2"
                 style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/box-intro/background.png'); background-repeat: no-repeat; background-size: cover;">
                <!-- caso passe uma imagem no inline acima, o card-img-overlay deverá ser inserido abaixo antes das col-auto -->
                <div class="row row-cols-2 h-100">
                    <!-- para facilitar na implementação do back, como os texot serão posicionado de acordo com
                                           a vontade do usuario passe a order1, order2, order3 ou order4 na class -->
                    <div class="col-auto col-lg order-1 d-flex flex-wrap justify-content-center align-content-center">
                        <h4>Seu negócio hoje age proativamente contra ataques ou apenas reage?</h4>
                        <p>Prevenção é a chave para diminuir custos e manter a reputação da sua empresa.</p>
                    </div>
                    <div class="col-auto col-lg order-2 d-flex flex-wrap justify-content-center align-content-center">
                        <div class="col-12 box-cta">
                            <p>Entre em contato com nossos consultores e saiba como o serviços de Cyber Security podem
                                mitigar
                                os riscos e vulnerabilidades do seu negócio.</p>
                            <a href="" class="btn btn-outline-primary">Fale com nossos consultores</a>
                        </div>
                    </div>
                </div>
                <div class="card-img-overlay mask"></div>
            </div>
        </div>
    </section>
    <!-- exemplo de implementação com order sem alterar o a estrura do código, alterando apenas a classe order box-intro -->
    <section class="container box-intro">
        <div class="row p-3">
            <!-- passar a cor adivinda do back para o inline abaixo, caso não tenha cor setada por padrão deverá ser a cor setada na abaixo, vale também para imagens -->
            <!-- passar a classe order-1 ou 2 para colocar a caixa em cima ou em baixo alternando a possição 1 para topo 2 para baixo -->
            <!-- classe foi alterada para order 2 -->
            <div class="col-12 box-modulo order-2" style="background: #454D54;">
                <div class="row row-cols-2 h-100 justify-content-center align-items-center">
                    <!-- para facilitar na implementação do back, como os texot serão posicionado de acordo com
                     a vontade do usuario passe a order1, order2, order3 ou order4 na class -->
                    <!-- classe foi alterada para order 2 -->
                    <div class="col-12 col-lg order-2 d-flex justify-content-center align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg"
                             class="logo-tivit" alt="">
                    </div>
                    <!-- classe foi alterada para order 1 -->
                    <div class="col-12 col-lg order-1 d-flex justify-content-center align-items-center">
                        <p>8 entre as 10 maiores empresas da América Latina contam com a TIVIT como parceira
                            tecnológica
                            para trazer eficiência e inovação para os seus negócios.</p>
                    </div>
                </div>
            </div>
            <!-- passar a cor adivinda do back para o inline abaixo, caso não tenha cor setada por padrão deverá ser a cor setada na abaixo, vale também para imagens -->
            <!-- passar a classe order-1 ou 2 para colocar a caixa em cima ou em baixo alternando a possição -->
            <!-- classe foi alterada para order 1 -->
            <div class="col-12 box-modulo order-1"
                 style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/box-intro/background.png'); background-repeat: no-repeat; background-size: cover;">
                <!-- caso passe uma imagem no inline acima, o card-img-overlay deverá ser inserido abaixo antes das col-auto -->
                <div class="row row-cols-2 h-100">
                    <!-- para facilitar na implementação do back, como os texot serão posicionado de acordo com
                                           a vontade do usuario passe a order1, order2, order3 ou order4 na class -->
                    <!-- classe foi alterar para order-2 -->
                    <div class="col-auto col-lg order-2 d-flex flex-wrap justify-content-center align-content-center">
                        <h4>Seu negócio hoje age proativamente contra ataques ou apenas reage?</h4>
                        <p>Prevenção é a chave para diminuir custos e manter a reputação da sua empresa.</p>
                    </div>
                    <!-- classe foi alterada para order-1 -->
                    <div class="col-auto col-lg order-1 d-flex flex-wrap justify-content-center align-content-center">
                        <div class="col-12 box-cta">
                            <p>Entre em contato com nossos consultores e saiba como o serviços de Cyber Security podem
                                mitigar
                                os riscos e vulnerabilidades do seu negócio.</p>
                            <a href="" class="btn btn-outline-primary">Fale com nossos consultores</a>
                        </div>
                    </div>
                </div>
                <div class="card-img-overlay mask"></div>
            </div>
        </div>
    </section>

    <!--  Box Text + Img -->
    <section class="container box-txt-img">
        <div class="row row-cols-lg-2 p-3">
            <div class="col-auto box-modulo order-1 d-flex flex-wrap align-items-center justify-content-center">
                <div class="col-auto box-text d-flex flex-column flex-lg-wrap">
                    <h3 class="titulo">Você sabia que o Brasil é o país <strong>mais propenso a sofrer
                            vazamentos</strong> no mundo?
                    </h3>
                    <p>Segundo o Instituto Ponemon, o risco é de 43% em uma empresa brasileira sofrer um ataque, muito
                        acima de países como Alemanha (14%) e Austrália (17%).</p>
                </div>
            </div>
            <div class="col-auto box-modulo order-1 d-flex flex-wrap align-items-center">
                <div class="col d-flex justify-content-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/grafico.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Exemplo de variação --- Atenção com a classe dark-theme precisa ser setada quando
    o usuario definir como dark-->
    <!-- Exemplo de variação --- Atente-se as classe orders -->
    <section class="container box-txt-img dark-theme">
        <div class="row row-cols-lg-2 p-3">
            <!-- aqui deverá ser definido a order -->
            <div class="col-auto box-modulo order-2 d-flex flex-wrap align-items-center justify-content-center">
                <div class="col-auto box-text d-flex flex-column flex-lg-wrap">
                    <h3 class="titulo">Você sabia que o Brasil é o país <strong>mais propenso a sofrer
                            vazamentos</strong> no mundo?
                    </h3>
                    <p>Segundo o Instituto Ponemon, o risco é de 43% em uma empresa brasileira sofrer um ataque, muito
                        acima de países como Alemanha (14%) e Austrália (17%).</p>
                </div>
            </div>
            <!--- Aqui deverá ser definido a order -->
            <div class="col-auto box-modulo order-1 d-flex flex-wrap align-items-center">
                <div class="col d-flex justify-content-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modulos/grafico.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Box Card + Icons-->
    <section class="container-fluid box-card-icons px-lg-0">
        <div class="container">
            <div class="col d-flex justify-content-center box-title-top">
                <h3 class="title-top">Por que contar com a TIVIT para realizar a segurança do seu negócio?</h3>
            </div>
            <div class="col box-cards h-100">
                <div class="row row-cols-1 row-cols-lg-2 g-4 p-1  px-lg-5">
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
                <a href="#" class="btn btn-primary">Conheça todas nossas soluções</a>
            </div>
        </div>
    </section>
    <!-- box alternativo, só passar a classe alternative no section -->
    <section class="container-fluid box-card-icons px-lg-0 alternative">
        <div class="container">
            <div class="col d-flex justify-content-center box-title-top">
                <h3 class="title-top">Por que contar com a TIVIT para realizar a segurança do seu negócio?</h3>
            </div>
            <div class="col box-cards h-100">
                <div class="row row-cols-1 row-cols-lg-2 g-4 p-1  px-lg-5">
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
                <a href="#" class="btn btn-primary">Conheça todas nossas soluções</a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
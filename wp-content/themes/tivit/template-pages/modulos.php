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
                <a href="#" class="btn btn-tivit1">Conheça todas nossas soluções</a>
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

    <!-- Box lista + img -->
    <section class="container-fluid px-0 box-list-img">
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
    <section class="container-fluid px-0 box-list-img alternative">
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
            <div class="col-12 col-lg box-solucoes order-2 position-relative" style="background: #F14517;">
                <div class="row justify-content-end align-items-center h-100">
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
            <div class="col-12 col-lg box-solucoes order-2 position-relative" style="background: #009EE3;">
                <div class="row justify-content-end align-items-center h-100">
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
        </div>
    </section>

    <!-- Box Big Numbers -->
    <!-- permitir que o usuario passar a cor desejada através do style background -->
    <section class="container-fluid p-0 box-big-number position-relative" style="background: transparent;">
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
    <section class="container-fluid p-0 box-big-number position-relative" style="background: #990017;">
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
    <section class="container-fluid p-0 box-big-number position-relative" style="background: #3A3A3A;">
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
    <section class="container-fluid p-0 box-big-number position-relative" style="background: #C7EDE3;">
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

<?php get_footer(); ?>
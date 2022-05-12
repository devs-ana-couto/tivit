<?php

$num_resul = $wp_query->found_posts;
if ($num_resul==0) {
    $linha1 = __('nenhum resultado para a pesquisa');
} elseif ($num_resul>1) {
    $linha1 = __('Foram encontrados').'<span class="pesquisa-numero-resultados"> '.$num_resul.__(' resultados').'</span>';
} else {
    $linha1 = __('Foi encontrado').'<span class="pesquisa-numero-resultados"> '.$num_resul.__(' resultado').'</span>';
}
$pesquisa = wp_strip_all_tags($_GET['s'], true);

/*
function vm50_origem($tipo, $post_id=0) {
    $saida = '';
    if ($tipo=='vm50_acaosocioam') {
        $saida = __('socioambiental');
    } elseif ($tipo=='vm50_contato') {
        $saida = __('contato');
    } elseif ($tipo=='vm50_equipe') {
        $saida = __('equipe');
    } elseif ($tipo=='vm50_governanca') {
        $saida = __('transparência');
    } elseif ($tipo=='vm50_home') {
        $saida = __('home');
    } elseif ($tipo=='vm50_quemsomos') {
        $saida = __('quem somos');
    } elseif ($tipo=='vm50_servicos') {
        $saida = __('seguro');
    } elseif ($tipo=='vm50_cobertura') {
        $saida = __('seguro');
    } elseif ($tipo=='vm50_socioambiental') {
        $saida = __('socioambiental');
    } elseif ($tipo=='vm50_documentos') {
        $saida = __('transparência');
    } elseif ($tipo=='vm50_endereco') {
        $saida = __('contato');
    } elseif ($tipo=='vm50_lideranca') {
        $saida = __('equipe');
    } elseif ($tipo=='vm50_nossojeito') {
        $saida = __('quem somos');
    } elseif ($tipo=='vm50_reconhecimento') {
        $saida = __('quem somos');
    } elseif ($tipo=='vm50_guia') {
        $saida = __('guia austral');
    } elseif ($tipo=='page') {
        $saida = get_the_title($post_id);
        // $saida = $post_id;
    } elseif ($tipo=='post') {
        $saida = __('artigos');
    }
    return $saida;
}
*/

function vm50_pesquisa_link($tipo, $post_id=0) {
    if ($tipo=='page') {
        $identif = $post_id;
    } else {
        switch (vm50_origem($tipo)) {
            case 'socioambiental':
                $arg['name'] =  'socioambiental';
                break;
            case 'contato':
                $arg['name'] = 'contato';
                break;
            case 'equipe':
                $arg['name'] = 'equipe';
                break;
            case 'transparência':
                $arg['name'] = 'transparencia';
                break;
            case 'home':
                $arg['name'] = 'home';
                break;
            case 'quem somos':
                $arg['name'] = 'quem-somos';
                break;
            case 'seguro':
                $arg['name'] = 'seguros';
                break;
            case 'guia austral':
                $arg['name'] = 'guia-austral';
                break;
            case 'artigos':
                $arg['name'] = 'artigos';
                break;
            case 'page':
                return $post_id . '--'.get_permalink( $post_id );
                break;
        }
        $arg['post_type'] = 'page';
        $arg['post_status'] = 'publish';
        $pesquisa = new WP_Query($arg);
        unset($identif);
        // $identif  = 0;
        while ( $pesquisa->have_posts() ) {
            $pesquisa->the_post();
            $identif = $pesquisa->post->ID;
            // echo $pesquisa->post->ID . ' / '.$identif.'<br>';
        }
        wp_reset_query();
    }
    return get_permalink( $identif );
}

get_header(); ?>

<div id="content" class="site-content site-content page-pesquisa">
    <div class="pesquisa-bloco-miolo">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pesquisa-pesquisoupor">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="https://www.w3.org/2000/svg" class="icon-buscar"><circle cx="9" cy="9" r="8" stroke="#F20024" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M18.9999 19.0004L14.6499 14.6504" stroke="#F20024" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <?php
                        _e('Você procurou por:');
                        echo ' <div class="pesquisa-pesquisoupor-pesquisa">'.$pesquisa.'</div>';
                        ?>
                    </div>
                    <div class="pesquisa-pesquisoupor_resultado"><?php echo $linha1; ?></div>
                </div>
                <div class="col-12">
                <div class="pesquisa-lista">
                    <?php
                    while ( have_posts() ) {
                        the_post();
                        $identif = get_the_ID();
                        echo '<div class="pesquisa-cartao">';
                        echo '<a href="#">';
                        echo '<div class="pesquisa-cartao-titulo">'.get_the_title().'</div>';
                        echo '</a>';
                        echo '<div class="pesquisa-cartao-resumo">'.get_the_content().'</div>';
                        echo '</div>';
                        // echo '<div class="pesquisa-cartao">';
                        // echo '<a href="'.vm50_pesquisa_link( get_post_type($identif), $identif ).'">';
                        // echo '<div class="pesquisa-cartao-titulo">'.vm50_origem( get_post_type($identif), $identif ).'</div>';
                        // echo '<div class="pesquisa-cartao-resumo">'.vm50_resumo(250, '(...)').'</div>';
                        // echo '</a>';
                        // echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>

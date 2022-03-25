<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_62387fea24767',
        'title' => 'Citação',
        'fields' => array(
            array(
                'key' => 'field_62387ff2a4a27',
                'label' => 'Texto de Citação',
                'name' => 'texto_de_citacao',
                'type' => 'textarea',
                'instructions' => 'Coloque aqui uma citação',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'cases',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
        ),
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_6238e1ca3f4db',
        'title' => 'Conteúdo',
        'fields' => array(
            array(
                'key' => 'field_6238e1d86904e',
                'label' => 'Conteúdo',
                'name' => 'conteudo',
                'type' => 'repeater',
                'instructions' => 'Clique em Adicionar Conteúdo para acrescentar uma seção de edição.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => 'Adicionar Conteúdo',
                'sub_fields' => array(
                    array(
                        'key' => 'field_6238e1fa6904f',
                        'label' => 'Texto',
                        'name' => 'texto',
                        'type' => 'wysiwyg',
                        'instructions' => 'Crie o conteúdo para seu case.',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'tabs' => 'all',
                        'toolbar' => 'full',
                        'media_upload' => 1,
                        'delay' => 0,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'cases',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
        ),
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_6238b48062178',
        'title' => 'Depoimento',
        'fields' => array(
            array(
                'key' => 'field_6238b599ee8f6',
                'label' => 'Depoimento',
                'name' => 'depoimento_2',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_6238b5a4ee8f7',
                        'label' => 'Nome',
                        'name' => 'nome',
                        'type' => 'text',
                        'instructions' => 'Coloque o nome',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '50',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_6238b5adee8f8',
                        'label' => 'Cargo',
                        'name' => 'cargo',
                        'type' => 'text',
                        'instructions' => 'Coloque o Cargo',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '50',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_6238b5bbee8f9',
                        'label' => 'Imagem',
                        'name' => 'imagem',
                        'type' => 'image',
                        'instructions' => 'Coloque a imagem. Dimensão: 60x60. Tipo: SVG',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '50',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'url',
                        'preview_size' => 'full',
                        'library' => 'all',
                        'min_width' => 60,
                        'min_height' => 60,
                        'min_size' => '',
                        'max_width' => 60,
                        'max_height' => 60,
                        'max_size' => '',
                        'mime_types' => 'svg',
                    ),
                    array(
                        'key' => 'field_6238b60243885',
                        'label' => 'Texto',
                        'name' => 'texto',
                        'type' => 'textarea',
                        'instructions' => 'Coloque o depoimento',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '50',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'maxlength' => '',
                        'rows' => '',
                        'new_lines' => '',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'cases',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
        ),
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_62348bff61580',
        'title' => 'Desafio',
        'fields' => array(
            array(
                'key' => 'field_62348c0823c30',
                'label' => 'Texto Desafio',
                'name' => 'texto_desafio',
                'type' => 'textarea',
                'instructions' => 'Coloque o texto de desafio',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_62348eb205998',
                'label' => 'Depoimento',
                'name' => 'depoimento',
                'type' => 'group',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layout' => 'row',
                'sub_fields' => array(
                    array(
                        'key' => 'field_62348ecf05999',
                        'label' => 'Texto',
                        'name' => 'texto',
                        'type' => 'textarea',
                        'instructions' => 'Coloque o depoimento',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '100',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'maxlength' => '',
                        'rows' => '',
                        'new_lines' => '',
                    ),
                    array(
                        'key' => 'field_62348ee30599a',
                        'label' => 'Autor',
                        'name' => 'autor',
                        'type' => 'text',
                        'instructions' => 'Coloque o nome do autor do depoimento',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '50',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_62348f030599b',
                        'label' => 'Função',
                        'name' => 'funcao',
                        'type' => 'text',
                        'instructions' => 'Coloque a função do autor do depoimento',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '50',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'cases',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
        ),
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_6233903abd526',
        'title' => 'Destaques do Projeto',
        'fields' => array(
            array(
                'key' => 'field_62339427a9564',
                'label' => 'Adicione seus destaques',
                'name' => 'adicione_seus_destaques',
                'type' => 'repeater',
                'instructions' => 'Clique no campo "Adicionar destaque" para ir adicionando destaques.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => 'Adicionar Destaque',
                'sub_fields' => array(
                    array(
                        'key' => 'field_62339474a9565',
                        'label' => 'Ícone',
                        'name' => 'icone',
                        'type' => 'image',
                        'instructions' => 'Selecione um ícone. Dimensão máxima de 50x50. Tipo de Arquivo: SVG',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'url',
                        'preview_size' => 'full',
                        'library' => 'all',
                        'min_width' => '',
                        'min_height' => '',
                        'min_size' => '',
                        'max_width' => 90,
                        'max_height' => 90,
                        'max_size' => '',
                        'mime_types' => 'svg',
                    ),
                    array(
                        'key' => 'field_623394ba365eb',
                        'label' => 'Texto',
                        'name' => 'texto',
                        'type' => 'text',
                        'instructions' => 'Coloque o texto de destaque',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'cases',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
        ),
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_6234dedee8f65',
        'title' => 'Diferenciais e Benefícios',
        'fields' => array(
            array(
                'key' => 'field_6234dee8bea36',
                'label' => 'Diferenciais e Benefícios',
                'name' => 'diferenciais_e_beneficios',
                'type' => 'repeater',
                'instructions' => 'Clique no botão',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => 'field_6234df19bea37',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => 'Adicionar Diferencial/Beneficio',
                'sub_fields' => array(
                    array(
                        'key' => 'field_6234df19bea37',
                        'label' => 'Texto',
                        'name' => 'texto',
                        'type' => 'wysiwyg',
                        'instructions' => 'Coloque o texto referente ao diferencial/beneficio',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'tabs' => 'all',
                        'toolbar' => 'full',
                        'media_upload' => 1,
                        'delay' => 0,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'cases',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
        ),
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_6233543ab502b',
        'title' => 'Empresa',
        'fields' => array(
            array(
                'key' => 'field_62336c826f4bb',
                'label' => 'Logo da Empresa',
                'name' => 'logo_da_empresa',
                'type' => 'image',
                'instructions' => 'Coloque o logo da empresa, tamanho máximo de 90x90. Tipo de Arquivo: SVG',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'full',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => 200,
                'max_height' => 200,
                'max_size' => '',
                'mime_types' => 'svg',
            ),
            array(
                'key' => 'field_62338904db6ed',
                'label' => 'Descrição',
                'name' => 'descricao',
                'type' => 'textarea',
                'instructions' => 'Coloque a descrição da empresa',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_62338b8174157',
                'label' => 'Download',
                'name' => 'download',
                'type' => 'file',
                'instructions' => 'Suba o arquivo que será disponibilizado através do botão "Download".',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'library' => 'all',
                'min_size' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'cases',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
        ),
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_623208c1af3bd',
        'title' => 'Header',
        'fields' => array(
            array(
                'key' => 'field_6232090a82b36',
                'label' => 'Banner (Desktop)',
                'name' => 'banner_desktop',
                'type' => 'image',
                'instructions' => 'Suba uma imagem com as dimensões de: 1440x520 para a versão desktop.',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'full',
                'library' => 'all',
                'min_width' => 1440,
                'min_height' => 520,
                'min_size' => '',
                'max_width' => 1920,
                'max_height' => 520,
                'max_size' => 1,
                'mime_types' => 'png, svg',
            ),
            array(
                'key' => 'field_623209fc82b37',
                'label' => 'Banner (Mobile)',
                'name' => 'banner_mobile',
                'type' => 'image',
                'instructions' => 'Suba uma imagem com as dimensões de: 360x530 para a versão mobile.',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'full',
                'library' => 'all',
                'min_width' => 360,
                'min_height' => 530,
                'min_size' => '',
                'max_width' => 460,
                'max_height' => 530,
                'max_size' => '0.6',
                'mime_types' => 'png, svg',
            ),
            array(
                'key' => 'field_6233502b30988',
                'label' => 'Logo 01',
                'name' => 'logo_01',
                'type' => 'image',
                'instructions' => 'Arquivo de imagem que representará o logo que fica a esquerda. Máximo de 100px de largura e 55px de altura. O tipo de arquivo deve ser SVG.',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'full',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => 100,
                'max_height' => 55,
                'max_size' => '',
                'mime_types' => 'svg',
            ),
            array(
                'key' => 'field_623350e3f7cbd',
                'label' => 'Logo 02',
                'name' => 'logo_02',
                'type' => 'image',
                'instructions' => 'Arquivo de imagem que representará o logo que fica a direita. Máximo de 180px de largura e 55px de altura. O tipo de arquivo deve ser SVG.',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'full',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => 180,
                'max_height' => 55,
                'max_size' => '',
                'mime_types' => 'svg',
            ),
            array(
                'key' => 'field_623385ef0280d',
                'label' => 'Nome do Cliente',
                'name' => 'nome_do_cliente',
                'type' => 'text',
                'instructions' => 'Coloque o nome do cliente',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'cases',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
            1 => 'excerpt',
        ),
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_623b54e3b211e',
        'title' => 'Links Externos',
        'fields' => array(
            array(
                'key' => 'field_623b54f7bb7b8',
                'label' => 'Links Externos',
                'name' => 'links_externos',
                'type' => 'repeater',
                'instructions' => 'Clique em "Adicionar Links Externo" para adicionar links externos.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => 'Adicionar Link Externo',
                'sub_fields' => array(
                    array(
                        'key' => 'field_623b552abb7b9',
                        'label' => 'Categoria',
                        'name' => 'categoria',
                        'type' => 'text',
                        'instructions' => 'Coloque a categoria do link',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_623b553cbb7ba',
                        'label' => 'Título',
                        'name' => 'titulo',
                        'type' => 'text',
                        'instructions' => 'Coloque a chamada principal',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_623b5569bb7bb',
                        'label' => 'Descrição',
                        'name' => 'descricao',
                        'type' => 'text',
                        'instructions' => 'Coloque uma descrição sobre o assunto do link externo',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_623b5588bb7bc',
                        'label' => 'Url do Link',
                        'name' => 'url_do_link',
                        'type' => 'url',
                        'instructions' => 'Coloque a URL do Link Externo',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'cases',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
        ),
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_6234d9366b0fd',
        'title' => 'Serviços Nuvem',
        'fields' => array(
            array(
                'key' => 'field_6234d93d140c1',
                'label' => 'Serviço Nuvem',
                'name' => 'servico_nuvem',
                'type' => 'repeater',
                'instructions' => 'Clique em "Adicionar Serviço Nuvem" para criar um novo.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => 'Adicionar Serviço Nuvem',
                'sub_fields' => array(
                    array(
                        'key' => 'field_6234d953140c2',
                        'label' => 'Icone',
                        'name' => 'icone',
                        'type' => 'image',
                        'instructions' => 'Selecione o ícone referente ao Serviço de Nuvem. Dimensão: 50x50. Tipo de Arquivo: SVG',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '20',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'url',
                        'preview_size' => 'full',
                        'library' => 'all',
                        'min_width' => '',
                        'min_height' => '',
                        'min_size' => '',
                        'max_width' => 60,
                        'max_height' => 60,
                        'max_size' => '',
                        'mime_types' => 'svg',
                    ),
                    array(
                        'key' => 'field_6234d99c140c3',
                        'label' => 'Texto',
                        'name' => 'texto',
                        'type' => 'wysiwyg',
                        'instructions' => 'Coloque o texto relacionado ao serviço nuvem.',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '80',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'tabs' => 'all',
                        'toolbar' => 'full',
                        'media_upload' => 1,
                        'delay' => 0,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'cases',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
        ),
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_6238855134021',
        'title' => 'Vídeo Destaque',
        'fields' => array(
            array(
                'key' => 'field_623885575f1c2',
                'label' => 'Vídeo',
                'name' => 'video',
                'type' => 'oembed',
                'instructions' => 'Coloque a URL de um vídeo do Youtube',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'width' => '',
                'height' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'cases',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
        ),
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
    
    endif;		
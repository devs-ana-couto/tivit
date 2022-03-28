<?php 
/**
 * Custom Meta Box
 * Nome: Cases
 */



/**
 * Parte do Template
 * Nome: Hero
 */
class Caseshero {
	private $config = '{"title":"Hero","prefix":"casesHero_","domain":"caseshero","class_name":"Caseshero","post-type":["page"],"context":"normal","priority":"high","fields":[{"type":"text","label":"Pr\u00e9 Chamada","default":"Cases","id":"casesHero_pre-chamada"},{"type":"text","label":"Chamada","default":"A TIVIT transforma pessoas e tecnologia com expertise em solu\u00e7\u00f5es de ponta a ponta.","id":"casesHero_chamada"}]}';

	public function __construct() {
		$this->config = json_decode( $this->config, true );
		add_action( 'add_meta_boxes', [ $this, 'add_meta_boxes' ] );
		add_action( 'save_post', [ $this, 'save_post' ] );
	}

	public function add_meta_boxes($post) {
		global $post;

		if(!empty($post)){

		$pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);

			if($pageTemplate == 'template-pages/cases.php' ){

				foreach ( $this->config['post-type'] as $screen ) {
					add_meta_box(
						sanitize_title( $this->config['title'] ),
						$this->config['title'],
						[ $this, 'add_meta_box_callback' ],
						$screen,
						$this->config['context'],
						$this->config['priority']
					);
				}
			}
		}
  	}


	public function save_post( $post_id ) {
		foreach ( $this->config['fields'] as $field ) {
			switch ( $field['type'] ) {
				default:
					if ( isset( $_POST[ $field['id'] ] ) ) {
						$sanitized = sanitize_text_field( $_POST[ $field['id'] ] );
						update_post_meta( $post_id, $field['id'], $sanitized );
					}
			}
		}
	}

	public function add_meta_box_callback() {
		$this->fields_table();
	}

	private function fields_table() {
		?><table class="form-table" role="presentation">
			<tbody><?php
				foreach ( $this->config['fields'] as $field ) {
					?><tr>
						<th scope="row"><?php $this->label( $field ); ?></th>
						<td><?php $this->field( $field ); ?></td>
					</tr><?php
				}
			?></tbody>
		</table><?php
	}

	private function label( $field ) {
		switch ( $field['type'] ) {
			default:
			printf(
				'<label class="" for="%s">%s</label>',
				$field['id'], $field['label']
			);
		}
	}

	private function field( $field ) {
		switch ( $field['type'] ) {
			default:
				$this->input( $field );
		}
	}

	private function input( $field ) {
		printf(
			'<input class="regular-text %s" id="%s" name="%s" %s type="%s" value="%s">',
			isset( $field['class'] ) ? $field['class'] : '',
			$field['id'], $field['id'],
			isset( $field['pattern'] ) ? "pattern='{$field['pattern']}'" : '',
			$field['type'],
			$this->value( $field )
		);
	}

	private function value( $field ) {
		global $post;
		if ( metadata_exists( 'post', $post->ID, $field['id'] ) ) {
			$value = get_post_meta( $post->ID, $field['id'], true );
		} else if ( isset( $field['default'] ) ) {
			$value = $field['default'];
		} else {
			return '';
		}
		return str_replace( '\u0027', "'", $value );
	}

}
new Caseshero;
	
/**
 * Parte do Template
 * Nome: Depoimento
 */
class Depoimento {
	private $config = '{"title":"Depoimento","prefix":"depoimento_","domain":"depoimento","class_name":"Depoimento","post-type":["post","page"],"context":"normal","priority":"default","fields":[{"type":"media","label":"Imagem da Pessoa","button-text":"Selecionar imagem","return":"url","modal-title":"Escolha a imagem","modal-button":"Selecionar imagem","id":"depoimento_imagem-da-pessoa"},{"type":"text","label":"Nome","default":"Courtney Hawkins","id":"depoimento_nome"},{"type":"text","label":"Fun\u00e7\u00e3o","default":"Ex-Diretora do Departamento de Servi\u00e7os Humanos","id":"depoimento_funcao"},{"type":"textarea","label":"Depoimento","rows":"3","id":"depoimento_depoimento"}]}';

	public function __construct() {
		$this->config = json_decode( $this->config, true );
		add_action( 'add_meta_boxes', [ $this, 'add_meta_boxes' ] );
		add_action( 'admin_enqueue_scripts', [ $this, 'admin_enqueue_scripts' ] );
		add_action( 'admin_head', [ $this, 'admin_head' ] );
		add_action( 'save_post', [ $this, 'save_post' ] );
	}

	public function add_meta_boxes() {
		global $post;

		if(!empty($post)){

			$pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);

			if($pageTemplate == 'template-pages/cases.php' ){
				foreach ( $this->config['post-type'] as $screen ) {
					add_meta_box(
						sanitize_title( $this->config['title'] ),
						$this->config['title'],
						[ $this, 'add_meta_box_callback' ],
						$screen,
						$this->config['context'],
						$this->config['priority']
					);
				}
			}
		}
	}

	public function admin_enqueue_scripts() {
		global $typenow;
		if ( in_array( $typenow, $this->config['post-type'] ) ) {
			wp_enqueue_media();
		}
	}

	public function admin_head() {
		global $typenow;
		if ( in_array( $typenow, $this->config['post-type'] ) ) {
			?><script>
				jQuery.noConflict();
				(function($) {
					$(function() {
						$('body').on('click', '.rwp-media-toggle', function(e) {
							e.preventDefault();
							let button = $(this);
							let rwpMediaUploader = null;
							rwpMediaUploader = wp.media({
								title: button.data('modal-title'),
								button: {
									text: button.data('modal-button')
								},
								multiple: true
							}).on('select', function() {
								let attachment = rwpMediaUploader.state().get('selection').first().toJSON();
								button.prev().val(attachment[button.data('return')]);
							}).open();
						});
					});
				})(jQuery);
			</script><?php
		}
	}

	public function save_post( $post_id ) {
		foreach ( $this->config['fields'] as $field ) {
			switch ( $field['type'] ) {
				default:
					if ( isset( $_POST[ $field['id'] ] ) ) {
						$sanitized = sanitize_text_field( $_POST[ $field['id'] ] );
						update_post_meta( $post_id, $field['id'], $sanitized );
					}
			}
		}
	}

	public function add_meta_box_callback() {
		$this->fields_table();
	}

	private function fields_table() {
		?><table class="form-table" role="presentation">
			<tbody><?php
				foreach ( $this->config['fields'] as $field ) {
					?><tr>
						<th scope="row"><?php $this->label( $field ); ?></th>
						<td><?php $this->field( $field ); ?></td>
					</tr><?php
				}
			?></tbody>
		</table><?php
	}

	private function label( $field ) {
		switch ( $field['type'] ) {
			case 'media':
				printf(
					'<label class="" for="%s_button">%s</label>',
					$field['id'], $field['label']
				);
				break;
			default:
				printf(
					'<label class="" for="%s">%s</label>',
					$field['id'], $field['label']
				);
		}
	}

  
	private function field( $field ) {
		switch ( $field['type'] ) {
			case 'media':
        $this->imagePreview( $field );
        echo '</br>';
				$this->input( $field );
				$this->media_button( $field );
				break;
			case 'textarea':
				$this->textarea( $field );
				break;
			default:
				$this->input( $field );
		}
	}

  private function imagePreview( $field ) {
    $image = get_post_meta( get_the_ID(), $field['id'], true );
    if ( $image ) {
      echo '<img src="' . $image . '" style="max-width:100%;">';
    }
  }

	private function input( $field ) {
		if ( $field['type'] === 'media' ) {
			$field['type'] = 'text';
		}
		printf(
			'<input class="regular-text %s" id="%s" name="%s" %s type="%s" value="%s">',
			isset( $field['class'] ) ? $field['class'] : '',
			$field['id'], $field['id'],
			isset( $field['pattern'] ) ? "pattern='{$field['pattern']}'" : '',
			$field['type'],
			$this->value( $field )
		);
	}

	private function media_button( $field ) {
		printf(
			' <button class="button rwp-media-toggle" data-modal-button="%s" data-modal-title="%s" data-return="%s" id="%s_button" name="%s_button" type="button">%s</button>',
			isset( $field['modal-button'] ) ? $field['modal-button'] : __( 'Select this file', 'depoimento' ),
			isset( $field['modal-title'] ) ? $field['modal-title'] : __( 'Choose a file', 'depoimento' ),
			$field['return'],
			$field['id'], $field['id'],
			isset( $field['button-text'] ) ? $field['button-text'] : __( 'Upload', 'depoimento' )
		);
	}

	private function textarea( $field ) {
		printf(
			'<textarea class="regular-text" id="%s" name="%s" rows="%d">%s</textarea>',
			$field['id'], $field['id'],
			isset( $field['rows'] ) ? $field['rows'] : 5,
			$this->value( $field )
		);
	}

	private function value( $field ) {
		global $post;
		if ( metadata_exists( 'post', $post->ID, $field['id'] ) ) {
			$value = get_post_meta( $post->ID, $field['id'], true );
		} else if ( isset( $field['default'] ) ) {
			$value = $field['default'];
		} else {
			return '';
		}
		return str_replace( '\u0027', "'", $value );
	}

}
new Depoimento;
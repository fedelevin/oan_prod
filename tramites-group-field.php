<?php
/**
 * Campo "grupo repetible sin límite" para los documentos de trámites de un
 * proyecto, construido a mano sobre WordPress core (add_meta_box + save_post),
 * sin depender de la extensión paga "MB Group" de Meta Box.
 *
 * Reemplaza el sistema anterior de N metaboxes fijos por grupo (hasta 40/10
 * cajas numeradas, siempre visibles aunque no se usaran) por UN metabox por
 * grupo con filas repetibles: botón "+ Agregar", arrastre para reordenar
 * (jQuery UI Sortable, ya viene con WP core) y botón para eliminar una fila.
 *
 * Cada grupo guarda TODAS sus filas en un único valor de postmeta (un array
 * serializado), en vez de un meta_key por caja. Estructura de cada fila:
 *   [ 'grupo_id' => int, 'tramite_id' => int, 'file_ids' => [int, ...] ]
 * El orden de las filas en el array ES el orden de exhibición — no hace
 * falta un campo "Orden" aparte (eso reemplaza el campo
 * observatorio_orden_tramite{i} de la version anterior).
 */

function observatorio_tramites_groups() {
	return array(
		'principal'    => array(
			'meta_key'   => 'observatorio_tramites_group',
			'metabox_id' => 'observatorio_tramites_group_box',
			'title'      => 'Documentación de Trámites',
			'add_label'  => '+ Agregar trámite',
			// meta_keys del formato viejo (para migrar datos existentes)
			'legacy'     => array(
				'grupo'   => 'observatorio_grupo_tramite',
				'tramite' => 'observatorio_tramite',
				'file'    => 'observatorio_file_tramite',
				'orden'   => 'observatorio_orden_tramite',
				'max'     => 40,
			),
		),
		'comision'     => array(
			'meta_key'   => 'observatorio_tramites_group_comision',
			'metabox_id' => 'observatorio_tramites_group_comision_box',
			'title'      => 'Comisión de seguimiento',
			'add_label'  => '+ Agregar documento de Comisión',
			'legacy'     => array(
				'grupo'   => 'observatorio_grupo_tramite_comision',
				'tramite' => 'observatorio_tramite_comision',
				'file'    => 'observatorio_file_tramite_comision',
				'orden'   => 'observatorio_orden_tramite_comision',
				'max'     => 10,
			),
		),
		'comision2'    => array(
			'meta_key'   => 'observatorio_tramites_group_comision2',
			'metabox_id' => 'observatorio_tramites_group_comision2_box',
			'title'      => 'Proceso de control y seguimiento',
			'add_label'  => '+ Agregar documento de Proceso',
			'legacy'     => array(
				'grupo'   => 'observatorio_grupo_tramite_comision2',
				'tramite' => 'observatorio_tramite_comision2',
				'file'    => 'observatorio_file_tramite_comision2',
				'orden'   => 'observatorio_orden_tramite_comision2',
				'max'     => 10,
			),
		),
		'esia'         => array(
			'meta_key'   => 'observatorio_tramites_group_esia',
			'metabox_id' => 'observatorio_tramites_group_esia_box',
			'title'      => 'Documentos EsIA',
			'add_label'  => '+ Agregar documento EsIA',
			'legacy'     => array(
				'grupo'   => 'observatorio_grupo_tramite_esia',
				'tramite' => 'observatorio_tramite_esia',
				'file'    => 'observatorio_file_tramite_esia',
				'orden'   => 'observatorio_orden_tramite_esia',
				'max'     => 10,
			),
		),
		'comision_aao' => array(
			'meta_key'   => 'observatorio_tramites_group_comision_aao',
			'metabox_id' => 'observatorio_tramites_group_comision_aao_box',
			'title'      => 'Documentación AAO',
			'add_label'  => '+ Agregar documento AAO',
			'legacy'     => array(
				'grupo'   => 'observatorio_grupo_tramite_comision_aao',
				'tramite' => 'observatorio_tramite_comision_aao',
				'file'    => 'observatorio_file_tramite_comision_aao',
				'orden'   => 'observatorio_orden_tramite_comision_aao',
				'max'     => 10,
			),
		),
	);
}

/**
 * Filas guardadas de un grupo para un post, ya normalizadas.
 * Cada fila: ['grupo_id'=>int, 'tramite_id'=>int, 'file_ids'=>[int,...]]
 */
function observatorio_get_tramites_rows( $post_id, $meta_key ) {
	$rows = get_post_meta( $post_id, $meta_key, true );
	if ( ! is_array( $rows ) ) {
		return array();
	}
	$clean = array();
	foreach ( $rows as $row ) {
		$clean[] = array(
			'grupo_id'   => isset( $row['grupo_id'] ) ? (int) $row['grupo_id'] : 0,
			'tramite_id' => isset( $row['tramite_id'] ) ? (int) $row['tramite_id'] : 0,
			'file_ids'   => isset( $row['file_ids'] ) && is_array( $row['file_ids'] )
				? array_values( array_map( 'intval', $row['file_ids'] ) )
				: array(),
		);
	}
	return $clean;
}

/* ---------------------------------------------------------------------
 * Registro de los 5 metaboxes
 * ------------------------------------------------------------------- */
add_action( 'add_meta_boxes', function () {
	foreach ( observatorio_tramites_groups() as $key => $cfg ) {
		add_meta_box(
			$cfg['metabox_id'],
			esc_html( $cfg['title'] ),
			'observatorio_render_tramites_group_box',
			'proyectos',
			'normal',
			'high',
			array( 'group_key' => $key )
		);
	}
} );

/* ---------------------------------------------------------------------
 * Render del metabox
 * ------------------------------------------------------------------- */
function observatorio_render_tramites_group_box( $post, $box ) {
	$group_key = $box['args']['group_key'];
	$groups    = observatorio_tramites_groups();
	$cfg       = $groups[ $group_key ];
	$rows      = observatorio_get_tramites_rows( $post->ID, $cfg['meta_key'] );

	wp_nonce_field( 'observatorio_tramites_save', 'observatorio_tramites_nonce' );

	$grupo_terms   = get_terms( array( 'taxonomy' => 'grupos', 'hide_empty' => false ) );
	$tramite_terms = get_terms( array( 'taxonomy' => 'tramites', 'hide_empty' => false ) );

	$render_row = function ( $index_placeholder, $row = null ) use ( $group_key, $grupo_terms, $tramite_terms ) {
		$grupo_id   = $row ? $row['grupo_id'] : 0;
		$tramite_id = $row ? $row['tramite_id'] : 0;
		$file_ids   = $row ? $row['file_ids'] : array();
		$name_base  = "observatorio_tramites[{$group_key}][{$index_placeholder}]";
		?>
		<li class="observatorio-tramites-row" style="border:1px solid #dcdcde;margin-bottom:10px;padding:12px;background:#fff;">
			<div style="display:flex;align-items:center;gap:8px;margin-bottom:8px;">
				<span class="observatorio-drag-handle" style="cursor:move;color:#888;" title="Arrastrar para reordenar">&#9776;</span>
				<label style="flex:1;">Grupo
					<select name="<?php echo esc_attr( $name_base ); ?>[grupo_id]" style="width:100%;">
						<option value="">—</option>
						<?php foreach ( $grupo_terms as $term ) : ?>
							<option value="<?php echo esc_attr( $term->term_id ); ?>" <?php selected( $grupo_id, $term->term_id ); ?>><?php echo esc_html( $term->name ); ?></option>
						<?php endforeach; ?>
					</select>
				</label>
				<label style="flex:2;">Trámite
					<select name="<?php echo esc_attr( $name_base ); ?>[tramite_id]" style="width:100%;">
						<option value="">—</option>
						<?php foreach ( $tramite_terms as $term ) : ?>
							<option value="<?php echo esc_attr( $term->term_id ); ?>" <?php selected( $tramite_id, $term->term_id ); ?>><?php echo esc_html( $term->name ); ?></option>
						<?php endforeach; ?>
					</select>
				</label>
				<button type="button" class="button observatorio-remove-row">Eliminar trámite</button>
			</div>
			<ul class="observatorio-existing-files" style="list-style:none;margin:0;padding:0;">
				<?php foreach ( $file_ids as $file_id ) :
					$url  = wp_get_attachment_url( $file_id );
					$name = $url ? wp_basename( $url ) : ( 'adjunto #' . $file_id );
					if ( ! $file_id || ! $url ) continue;
					?>
					<li style="display:flex;align-items:center;gap:6px;">
						<span class="observatorio-file-drag-handle" style="cursor:move;color:#888;" title="Arrastrar para reordenar">&#9776;</span>
						<label style="flex:1;">
							<input type="checkbox" name="<?php echo esc_attr( $name_base ); ?>[quitar_archivos][]" value="<?php echo esc_attr( $file_id ); ?>">
							Quitar: <?php echo esc_html( $name ); ?>
							(<a href="<?php echo esc_url( $url ); ?>" target="_blank">ver</a>)
						</label>
						<input type="hidden" name="<?php echo esc_attr( $name_base ); ?>[archivos_existentes][]" value="<?php echo esc_attr( $file_id ); ?>">
					</li>
				<?php endforeach; ?>
			</ul>
			<div>
				<label>Agregar archivos: <input type="file" name="<?php echo esc_attr( $name_base ); ?>[archivos_nuevos][]" multiple></label>
				<button type="button" class="button observatorio-pick-library">Seleccionar de la Biblioteca</button>
			</div>
		</li>
		<?php
	};

	?>
	<ul class="observatorio-tramites-rows" data-group="<?php echo esc_attr( $group_key ); ?>" data-next-index="<?php echo esc_attr( count( $rows ) ); ?>" style="list-style:none;margin:0;padding:0;">
		<?php foreach ( $rows as $index => $row ) : $render_row( $index, $row ); endforeach; ?>
	</ul>

	<template class="observatorio-tramites-row-template">
		<?php $render_row( '__INDEX__', null ); ?>
	</template>

	<p>
		<button type="button" class="button button-primary observatorio-add-row"><?php echo esc_html( $cfg['add_label'] ); ?></button>
	</p>
	<?php
}

/* ---------------------------------------------------------------------
 * Assets del admin (solo en la pantalla de edición de proyectos)
 * ------------------------------------------------------------------- */
add_action( 'admin_enqueue_scripts', function ( $hook ) {
	if ( ! in_array( $hook, array( 'post.php', 'post-new.php' ), true ) ) {
		return;
	}
	global $post;
	if ( ! $post || $post->post_type !== 'proyectos' ) {
		return;
	}
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery-ui-sortable' );
	wp_enqueue_media();

	$js = <<<'JS'
jQuery(function ($) {
	function bindRow($row) {
		$row.find('.observatorio-remove-row').on('click', function () {
			$row.remove();
		});
		var $fileList = $row.find('.observatorio-existing-files');
		$fileList.sortable({
			handle: '.observatorio-file-drag-handle',
			items: '> li'
		});

		$row.find('.observatorio-pick-library').on('click', function (e) {
			e.preventDefault();
			var nameBase = $row.find('select').first().attr('name').replace('[grupo_id]', '');
			var frame = wp.media({
				title: 'Seleccionar archivos existentes',
				button: { text: 'Agregar a este trámite' },
				multiple: true
			});
			frame.on('select', function () {
				var selection = frame.state().get('selection');
				selection.each(function (attachment) {
					var data = attachment.toJSON();
					if ($fileList.find('input[name="' + nameBase + '[archivos_existentes][]"][value="' + data.id + '"]').length) {
						return;
					}
					var name = data.filename || data.title || ('adjunto #' + data.id);
					var $li = $(
						'<li style="display:flex;align-items:center;gap:6px;">' +
						'<span class="observatorio-file-drag-handle" style="cursor:move;color:#888;" title="Arrastrar para reordenar">&#9776;</span>' +
						'<label style="flex:1;">' +
						'<input type="checkbox" name="' + nameBase + '[quitar_archivos][]" value="' + data.id + '"> ' +
						'Quitar: ' + name + ' (<a href="' + data.url + '" target="_blank">ver</a>)' +
						'</label>' +
						'<input type="hidden" name="' + nameBase + '[archivos_existentes][]" value="' + data.id + '">' +
						'</li>'
					);
					$fileList.append($li);
				});
				$fileList.sortable('refresh');
			});
			frame.open();
		});
	}

	$('.observatorio-tramites-rows').each(function () {
		$(this).sortable({ handle: '.observatorio-drag-handle', items: '> li' });
		$(this).find('.observatorio-tramites-row').each(function () {
			bindRow($(this));
		});
	});

	$('.observatorio-add-row').on('click', function () {
		var $btn = $(this);
		var $list = $btn.closest('.inside').find('.observatorio-tramites-rows');
		var nextIndex = parseInt($list.attr('data-next-index'), 10) || 0;
		var $template = $btn.closest('.inside').find('.observatorio-tramites-row-template');
		var html = $template.html().split('__INDEX__').join(nextIndex);
		var $newRow = $(html);
		bindRow($newRow);
		$list.append($newRow);
		$list.attr('data-next-index', nextIndex + 1);
	});
});
JS;
	wp_add_inline_script( 'jquery-ui-sortable', $js );
} );

/* ---------------------------------------------------------------------
 * Guardado
 * ------------------------------------------------------------------- */
add_action( 'save_post', function ( $post_id ) {
	if ( ! isset( $_POST['observatorio_tramites_nonce'] ) ||
		! wp_verify_nonce( $_POST['observatorio_tramites_nonce'], 'observatorio_tramites_save' ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}
	if ( get_post_type( $post_id ) !== 'proyectos' ) {
		return;
	}

	require_once ABSPATH . 'wp-admin/includes/image.php';
	require_once ABSPATH . 'wp-admin/includes/file.php';
	require_once ABSPATH . 'wp-admin/includes/media.php';

	$posted = isset( $_POST['observatorio_tramites'] ) && is_array( $_POST['observatorio_tramites'] )
		? $_POST['observatorio_tramites']
		: array();

	$upload_errors = array();

	foreach ( observatorio_tramites_groups() as $group_key => $cfg ) {
		$group_rows = isset( $posted[ $group_key ] ) && is_array( $posted[ $group_key ] )
			? $posted[ $group_key ]
			: array();

		$final_rows = array();

		foreach ( $group_rows as $index => $row ) {
			$grupo_id   = isset( $row['grupo_id'] ) ? (int) $row['grupo_id'] : 0;
			$tramite_id = isset( $row['tramite_id'] ) ? (int) $row['tramite_id'] : 0;

			$existentes = isset( $row['archivos_existentes'] ) && is_array( $row['archivos_existentes'] )
				? array_map( 'intval', $row['archivos_existentes'] )
				: array();
			$quitar = isset( $row['quitar_archivos'] ) && is_array( $row['quitar_archivos'] )
				? array_map( 'intval', $row['quitar_archivos'] )
				: array();
			$file_ids = array_values( array_diff( $existentes, $quitar ) );

			// Subir archivos nuevos de esta fila, si los hay.
			if ( isset( $_FILES['observatorio_tramites'] )
				&& isset( $_FILES['observatorio_tramites']['name'][ $group_key ][ $index ]['archivos_nuevos'] )
				&& is_array( $_FILES['observatorio_tramites']['name'][ $group_key ][ $index ]['archivos_nuevos'] ) ) {

				$count = count( $_FILES['observatorio_tramites']['name'][ $group_key ][ $index ]['archivos_nuevos'] );
				for ( $f = 0; $f < $count; $f++ ) {
					$file_name = $_FILES['observatorio_tramites']['name'][ $group_key ][ $index ]['archivos_nuevos'][ $f ];
					if ( empty( $file_name ) ) {
						continue;
					}
					$single_file = array(
						'name'     => $file_name,
						'type'     => $_FILES['observatorio_tramites']['type'][ $group_key ][ $index ]['archivos_nuevos'][ $f ],
						'tmp_name' => $_FILES['observatorio_tramites']['tmp_name'][ $group_key ][ $index ]['archivos_nuevos'][ $f ],
						'error'    => $_FILES['observatorio_tramites']['error'][ $group_key ][ $index ]['archivos_nuevos'][ $f ],
						'size'     => $_FILES['observatorio_tramites']['size'][ $group_key ][ $index ]['archivos_nuevos'][ $f ],
					);
					if ( $single_file['error'] !== UPLOAD_ERR_OK ) {
						$upload_errors[] = $file_name . ': ' . observatorio_upload_error_message( $single_file['error'] );
						continue;
					}
					$uploaded = wp_handle_upload( $single_file, array( 'test_form' => false ) );
					if ( isset( $uploaded['error'] ) ) {
						$upload_errors[] = $file_name . ': ' . $uploaded['error'];
						continue;
					}
					$attachment = array(
						'post_mime_type' => $uploaded['type'],
						'post_title'     => preg_replace( '/\.[^.]+$/', '', $file_name ),
						'post_status'    => 'inherit',
					);
					$attach_id = wp_insert_attachment( $attachment, $uploaded['file'], $post_id );
					if ( ! is_wp_error( $attach_id ) && $attach_id ) {
						wp_update_attachment_metadata( $attach_id, wp_generate_attachment_metadata( $attach_id, $uploaded['file'] ) );
						$file_ids[] = $attach_id;
					}
				}
			}

			// Ignorar filas totalmente vacías (sin grupo, sin trámite, sin archivos).
			if ( ! $grupo_id && ! $tramite_id && empty( $file_ids ) ) {
				continue;
			}

			$final_rows[] = array(
				'grupo_id'   => $grupo_id,
				'tramite_id' => $tramite_id,
				'file_ids'   => array_values( $file_ids ),
			);
		}

		update_post_meta( $post_id, $cfg['meta_key'], $final_rows );
	}

	if ( ! empty( $upload_errors ) ) {
		set_transient( 'observatorio_tramites_upload_errors_' . $post_id, $upload_errors, 60 );
	} else {
		delete_transient( 'observatorio_tramites_upload_errors_' . $post_id );
	}
} );

/**
 * Traduce un codigo de error de subida (UPLOAD_ERR_*) a un mensaje legible.
 */
function observatorio_upload_error_message( $code ) {
	switch ( $code ) {
		case UPLOAD_ERR_INI_SIZE:
		case UPLOAD_ERR_FORM_SIZE:
			return 'el archivo supera el tamaño máximo permitido ('
				. ini_get( 'upload_max_filesize' ) . ')';
		case UPLOAD_ERR_PARTIAL:
			return 'la subida se interrumpió, intentá de nuevo';
		case UPLOAD_ERR_NO_TMP_DIR:
		case UPLOAD_ERR_CANT_WRITE:
			return 'error del servidor al guardar el archivo';
		default:
			return 'no se pudo subir (código ' . $code . ')';
	}
}

/**
 * Muestra en el editor los errores de subida de la última vez que se guardó.
 */
add_action( 'admin_notices', function () {
	global $post;
	if ( ! $post || $post->post_type !== 'proyectos' ) {
		return;
	}
	$errors = get_transient( 'observatorio_tramites_upload_errors_' . $post->ID );
	if ( empty( $errors ) || ! is_array( $errors ) ) {
		return;
	}
	delete_transient( 'observatorio_tramites_upload_errors_' . $post->ID );
	?>
	<div class="notice notice-error is-dismissible">
		<p><strong>No se pudieron subir estos archivos de Documentación de Trámites:</strong></p>
		<ul style="list-style:disc;margin-left:20px;">
			<?php foreach ( $errors as $err ) : ?>
				<li><?php echo esc_html( $err ); ?></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php
} );

/* ---------------------------------------------------------------------
 * Helper para el template frontend (single-proyectos.php): reconstruye
 * los mismos arrays $files_docs[$i] / $nombre_grupo[$i] / $desc_tramite[$i]
 * que usaba el sistema viejo, a partir del nuevo formato agrupado, para no
 * tener que tocar los bloques de render existentes.
 *
 * Devuelve: [ $files_docs, $nombre_grupo, $desc_tramite ]
 */
function observatorio_build_tramites_display_arrays( $post_id, $meta_key ) {
	$rows          = observatorio_get_tramites_rows( $post_id, $meta_key );
	$grupo_terms   = get_terms( array( 'taxonomy' => 'grupos', 'hide_empty' => false ) );
	$tramite_terms = get_terms( array( 'taxonomy' => 'tramites', 'hide_empty' => false ) );

	$files_docs   = array();
	$nombre_grupo = array();
	$desc_tramite = array();

	$i = 1;
	foreach ( $rows as $row ) {
		$files = array();
		foreach ( $row['file_ids'] as $file_id ) {
			$url = wp_get_attachment_url( $file_id );
			if ( ! $url ) {
				continue;
			}
			$files[] = array(
				'ID'    => $file_id,
				'url'   => $url,
				'name'  => wp_basename( $url ),
				'title' => get_the_title( $file_id ),
			);
		}

		$files_docs[ $i ] = $files;

		foreach ( $grupo_terms as $term ) {
			if ( (int) $term->term_id === (int) $row['grupo_id'] ) {
				$nombre_grupo[ $i ] = $term->name . '<br>';
				break;
			}
		}
		foreach ( $tramite_terms as $term ) {
			if ( (int) $term->term_id === (int) $row['tramite_id'] ) {
				$desc_tramite[ $i ] = $term->description . '<br>';
				break;
			}
		}

		$i++;
	}

	return array( $files_docs, $nombre_grupo, $desc_tramite );
}

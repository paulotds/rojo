<?php
function Artigos() {

	$labels = array(
		'name'                       => _x( 'Artigos', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Artigos', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Artigos', 'text_domain' ),
		'all_items'                  => __( 'Todos os Itens', 'text_domain' ),
		'parent_item'                => __( 'Sub-Itens', 'text_domain' ),
		'parent_item_colon'          => __( 'Sub-Itens:', 'text_domain' ),
		'new_item_name'              => __( 'Novo Nome do Item', 'text_domain' ),
		'add_new_item'               => __( 'Adicionar Novo Item', 'text_domain' ),
		'edit_item'                  => __( 'Editar Item', 'text_domain' ),
		'update_item'                => __( 'Editar Item', 'text_domain' ),
		'view_item'                  => __( 'Visualizar', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separa itens com virgulas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Adicionar ou remover itens', 'text_domain' ),
		'choose_from_most_used'      => __( 'Escolha do mais usado', 'text_domain' ),
		'popular_items'              => __( 'Itens populares', 'text_domain' ),
		'search_items'               => __( 'Pesquisar Itens', 'text_domain' ),
		'not_found'                  => __( 'Nada Encontrado', 'text_domain' ),
		'no_terms'                   => __( 'Sem Itens', 'text_domain' ),
		'items_list'                 => __( 'Lista de Itens', 'text_domain' ),
		'items_list_navigation'      => __( 'Lista de Itens', 'text_domain' ),
		);
	$args = array(
		'label'               => __( 'Artigos', 'text_domain' ),
		'description'         => __( 'Post Type Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		);
	register_post_type( 'Artigos', $args );

}
add_action( 'init', 'Artigos', 0 );
?>
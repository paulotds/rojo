//URL Wordpress
<?php bloginfo('template_url') ?>/
<?php bloginfo('url') ?>/

//ASF
<?php the_field('campo') ?>
<?php the_sub_field('campo') ?>
<?php get_field('campo') ?>
<?php get_sub_field('campo') ?>

//Loop postagens
<?php $loop = new WP_Query( array( 'post_type' => 'index', 'posts_per_page' => -1 ) ); ?>
<?php while ( $loop->have_posts() ){ $loop->the_post(); ?>

<?php } ?>

//Loop repeater
<?php if( have_rows('discografia') ){
	$itens = 1;
	while (have_rows('discografia') ){ the_row(); ?>

		<?php
	}
}
?>

//Loop postagens com paginação
<?php
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
	'posts_per_page' => 10,
	'category_name' => 'index',
	'paged' => $paged
	);
$the_query = new WP_Query( $args );
?>
<?php if( $the_query->have_posts() ){ $viagens = 1;?>
	<?php while ( $the_query->have_posts() ) { $the_query->the_post(); ?>

		<?php
	}
}
?>
<nav class="pagination">
	<?php
	$total_pages = $the_query->max_num_pages;
	if ($total_pages > 1){
		$current_page = max(1, get_query_var('paged'));

		echo paginate_links(array(
			'base' => get_pagenum_link(1) . '%_%',
			'format' => 'page/%#%',
			'current' => $current_page,
			'total' => $total_pages,
			'prev_next'    => True,
			'type' => 'plain',
			));
	}
	?>
</nav>

//Listagem
<?php for($i = 0; $i < $itens; $i++){ ?>

<?php } ?>

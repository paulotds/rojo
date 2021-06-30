<?php get_header();?>
<!-- Slide Index -->
<div id="slideIndex" class="carousel slide fill" data-ride="carousel">
	<ol class="carousel-indicators" data-aos="fade-up" data-aos-duration="1300" data-aos-offset="00">
		<!-- <img src="<?php bloginfo('template_url') ?>/assets/img/roll_page.gif" alt=""> -->
		<div class="mouse"></div>
	</ol>
	<div class="carousel-inner fill">
		<?php $loop = new WP_Query( array( 'post_type' => 'slides', 'p' => 12 ) ); ?>
		<?php while ( $loop->have_posts() ){ $loop->the_post(); ?>
		<?php if( have_rows('slides') ){
			$active = 1;
			while (have_rows('slides') ){ the_row(); ?>
			<div class="carousel-item <?php if($active == 1){ echo 'active'; $active = 2;} ?> fill bg-cover" style="background-image: url('<?php the_sub_field('imagem_de_fundo') ?>');">
				<div class="container fill flexMode">
					<div>
						<h1 data-aos="fade-up" data-aos-duration="900"><?php the_sub_field('titulo') ?></h1>
						<p class="mar-auto" data-aos="fade-up" data-aos-duration="1100"><?php the_sub_field('descricao') ?></p>
						<div class="btnPadrao_b mar-auto" data-aos="fade-up" data-aos-duration="1300"><a href="<?php the_sub_field('link_do_botao') ?>">Saiba Mais</a></div>
					</div>
				</div>
			</div>
			<?php }
		} ?>
		<?php } ?>
	</div>
	<a class="carousel-control-prev" href="#slideIndex" role="button" data-slide="prev" data-aos="fade-up" data-aos-duration="1300" data-aos-offset="00">
		<span class="carousel-control-prev-icon" aria-hidden="true" ></span>
		<span class="sr-only" >Previous</span>
	</a>
	<a class="carousel-control-next" href="#slideIndex" role="button" data-slide="next" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="00">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<?php get_footer();?>
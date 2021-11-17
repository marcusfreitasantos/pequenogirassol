<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage None Plate
 * @since None Plate 1.0
 */

 
 get_header(); ?>

 <style>
	#header{
		background: linear-gradient(180deg, rgba(233,78,26,0.7) 40%, rgba(255,255,255,0) 100%);
		background-blend-mode: multiply;

	}

	.breadcrumb{
		display: none;
	}
</style>



<div id="content" class="home-content">

<!--
==========================================================================
Slide
========================================================================== -->
	<section class="slider" id="slider">
		<?php echo do_shortcode('[r2slider]'); ?>
	</section>


<div class="divisor"></div>

<!--
==========================================================================
Quem somos
========================================================================== -->
	<section class="quem-somos" id="quem-somos">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 wow fadeInLeft">
					<h2 class="section-title"> Quem Somos</h2>
					<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porta urna elit, ac sollicitudin sapien vulputate vitae. Duis gravida arcu erat. Nam id dictum felis, vel molestie sapien. Donec ac ipsum imperdiet, laoreet ipsum laoreet, faucibus eros. Etiam id posuere urna, quis ultricies lacus. Sed aliquam quam sed scelerisque egestas. Maecenas facilisis placerat nisi quis rutrum. Morbi ultrices nisi quis rutrum ornare. Aliquam vitae placerat eros, nec semper lectus.</p>
					<a class="btn btn-orange" href="/quem-somos">Saiba Mais</a>
				</div>

				<div class="col-md-6 wow fadeInRight">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/quem-somos-img.png">
				</div>
			</div>
		</div>

	</section>



<!--
==========================================================================
Diferenciais
========================================================================== -->
<section class="diferenciais" id="diferenciais">
	<div class="container">
		<div class="row">
		<img class="section-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/section.png">
			<h2 class="section-title text-center">Nossos Diferenciais</h2>
			<div class="row mt-4 mb-4">

				<div class="col-md-3 col-sm-12 wow fadeInUp">
					<div class="card">
						<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/img/section.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Diferencial 1</h5>
							<p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod ipsum quisquam ea qui consectetur! Eaque corrupti consequuntur tempore.</p>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-12 wow fadeInUp">
					<div class="card">
						<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/img/section.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Diferencial 2</h5>
							<p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod ipsum quisquam ea qui consectetur! Eaque corrupti consequuntur tempore.</p>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-12 wow fadeInUp">
					<div class="card">
						<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/img/section.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Diferencial 3</h5>
							<p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod ipsum quisquam ea qui consectetur! Eaque corrupti consequuntur tempore.</p>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-12 wow fadeInUp">
					<div class="card">
						<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/img/section.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Diferencial 4</h5>
							<p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod ipsum quisquam ea qui consectetur! Eaque corrupti consequuntur tempore.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--
==========================================================================
Nossos Momentos
========================================================================== -->
<section class="momentos text-center wow fadeInUp" id="momentos">
	<div class="container">
		<div class="row justify-content-center">
			<img class="section-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/section.png">
			<h2 class="section-title">Nossos Momentos</h2>
		</div>

		<div class="row galeria">
			<?php
			$galeria = new WP_Query(array(
			'posts_per_page' => 3,
			'post_type' => 'galerias',
			));

			while($galeria->have_posts()){
			$galeria->the_post();?>
					<div class="col-md-4 p-2">
						<div class="card-body">
							<a href="<?php the_permalink();?>">
								<img class="img-fluid" src="<?php the_field('imagem_principal');?>"/>
							</a>
							<a class="btn btn-orange" style="width:100%" href="<?php the_permalink();?>"><?php the_title(); ?> </a>
						</div>
					</div>
		
			<?php
			}
			?>
		</div>

		<a href="/galerias" class="btn btn-orange">Ver Galerias</a>
	</div>
</section>


<!--
==========================================================================
Tour Virtual
========================================================================== -->
<section id="tour" class="tour text-center wow fadeInUp">
	<div class="container ">
		<div class="row justify-content-center">
			<img class="section-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/section.png">
			<h2 class="section-title">Tour Virtual</h2>
		</div>

		<div class="row">
			<?php
			$tour = new WP_Query(array(
			'posts_per_page' => -1,
			'post_type' => 'tour_virtual',
			));

			while($tour->have_posts()){
			$tour->the_post();?>
					<div class="col-md-4 p-2">
						<a class="btn btn-orange" style="width:100%" href="<?php the_permalink();?>"><?php the_title(); ?> </a>
					</div>
		
			<?php
			}
			?>
		</div>
	</div>
</section>

	

<?php get_footer(); ?>
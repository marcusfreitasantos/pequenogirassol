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
.cta{
	display: none;
}
	
	.quem-somos{
		margin: 0 !important;
	}
</style>



<div id="content" class="home-content">



<!--
==========================================================================
Quem somos
========================================================================== -->
		<section class="quem-somos" id="quem-somos">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 wow fadeInLeft">
					<h2 class="section-title"> Quem Somos</h2>
					<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et odio massa. Donec at faucibus ligula, eu varius ex. Pellentesque ac mollis orci. Fusce ac neque vitae odio molestie ultrices sit amet at purus. Proin vitae dui ac eros tempus auctor quis vel nulla. Pellentesque sed lectus ligula. Sed ante neque, consequat sodales felis sed, sollicitudin posuere libero. Mauris et sapien id augue maximus dignissim nec tincidunt urna. Duis a commodo dolor. Duis purus mi, egestas eu semper sed, volutpat vel sapien. Etiam ornare quam quis libero pretium viverra.</p>

<p class="text">Maecenas eget nisi eros. Etiam suscipit enim ut nulla blandit, et ullamcorper est laoreet. Fusce elementum suscipit sapien in tincidunt. Phasellus eu magna nunc. Ut eu metus tristique, congue mi ac, porttitor massa. Nunc ligula urna, faucibus et porttitor vel, convallis at enim. Etiam gravida molestie ex ac finibus. Ut tempus, tortor quis commodo sodales, libero diam mattis nulla, ac pellentesque urna neque ut nulla. Etiam eu dui nunc. Duis a dolor orci.</p>
				</div>

				<div class="col-md-6 wow fadeInRight">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/quem-somos-img.png">
				</div>
			</div>
		</div>

	</section>
	<section class="galeria">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<a href="https://espacopequenogirassol.com.br/wp-content/uploads/2021/11/Salas-de-Referencia-12.jpeg" data-lightbox="estrutura">
					<img class="img-fluid" src="https://espacopequenogirassol.com.br/wp-content/uploads/2021/11/Salas-de-Referencia-12.jpeg"/>
				</a>
			</div>
			
			<div class="col-md-3">
				<a href="https://espacopequenogirassol.com.br/wp-content/uploads/2021/11/Salas-de-Referencia-9.jpeg" data-lightbox="estrutura">
					<img class="img-fluid" src="https://espacopequenogirassol.com.br/wp-content/uploads/2021/11/Salas-de-Referencia-9.jpeg" />
				</a>
			</div>
			
			<div class="col-md-3">
				<a href="https://espacopequenogirassol.com.br/wp-content/uploads/2021/11/Salas-de-Referencia-1.jpeg" data-lightbox="estrutura">
					<img class="img-fluid" src="https://espacopequenogirassol.com.br/wp-content/uploads/2021/11/Salas-de-Referencia-1.jpeg"/>
				</a>
			</div>
			
			<div class="col-md-3">
				<a href="https://espacopequenogirassol.com.br/wp-content/uploads/2021/11/Parquinho-da-Natureza-3.jpeg" data-lightbox="estrutura">
					<img class="img-fluid" src="https://espacopequenogirassol.com.br/wp-content/uploads/2021/11/Parquinho-da-Natureza-3.jpeg"/>
				</a>
			</div>
		</div>
		</div>
	</section>






	

<?php get_footer(); ?>
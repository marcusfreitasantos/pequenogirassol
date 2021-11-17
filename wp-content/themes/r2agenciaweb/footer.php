<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage None Plate
 * @since None Plate 1.0
 */
?>
<section class="cta" id="cta">
	<div class="container">
		<div class="row">
			<h2 class="cta-title wow fadeInUp">Venha nos conhecer</h2>
			<p class="cta-text wow fadeInUp">Agende uma visita e conheça <br>nossas instalações e serviços</p>
			<a class="cta-link btn btn-yellow wow fadeInUp" href="/contato">Clique Aqui</a>
		</div>
	</div>
</section>

<section class="text-center" id="footer">
		<div class="container" style="padding: 60px 0;">
			<img class="mx-auto logo-footer" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
			<div class="contato-footer">
				<h6>CNPJ: 36.764.846/0001-45</h6>
				<h6>Tel. +55 (79) 3027-0108</h6>
				<h6>R. Francisco Portugal, 566 | Salgado Filho</h6>
				<h6>Aracaju - Sergipe</h6>
			</div>
		</div>
		<div class="bottom-bar">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col-md-6 d-flex align-items-center justify-content-start">
						<h5>Copyright © <?php echo date('Y'); ?> - Todos os direitos reservados.</h5>
					</div>
					<div class="col-md-6 d-flex align-items-center justify-content-end">
								<h5>Feito com ♥ pela</h5>
								<a href="https://r2agenciadigital.com.br/" target="_blank">
									<img style=" width: 25px; margin-left: 10px;" src="<?php echo get_template_directory_uri(); ?>/assets/img/r2AgenciaDigital_branco.png">
								</a>		
					</div>
				</div>
			</div>
		</div>	
</section> 

<div class="to-top">
	<a href="#topbar"><i class="fas fa-chevron-up"></i></a>
</div>




<!-- Footer Links Libraries -->
    <!-- jQuery -->
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/jquery/jquery-1.11.1.min.js'></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<!-- Lightbox -->
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/lightbox/js/lightbox.min.js'></script>


	<!-- Bootstrap -->
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/bootstrap/bootstrap.min.js'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/bootstrap/bootstrap.bundle.min.js'></script>
	

	<!-- Owl -->
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/owl/owl.carousel.js'></script>



	<!--  if IE 8  -->
	<script type='text/javascript' src='http://r2server.com.br/plugins/oldbrowsers/ifIE.js'></script>

	<!-- Main JS -->
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/app.js'></script>

	<!--WOW-->
	 <script src='<?php echo get_template_directory_uri(); ?>/assets/libs/wow/wow.min.js'></script>
				  <script>
				  new WOW().init();
				  </script>

	<!-- Footer Tags -->
		<?php wp_footer(); ?>
    

	<script>
    //mobile-menu
    const btnMobile = document.querySelector("#hamburger");
    const mobileMenu = document.querySelector(".mobile-menu");

    function showMenu(){
        console.log("ok")
        mobileMenu.classList.toggle("showMenu");
    }

</script>
</body>
</html>

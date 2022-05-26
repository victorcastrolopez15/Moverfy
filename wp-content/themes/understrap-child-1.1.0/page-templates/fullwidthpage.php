<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<main>
	<div class="fondo_gris_claro mudan">
		<div class="container top0">
			<div class="row pt-5">
				<div class="col-lg-6 order-2 order-lg-1 d-flex align-items-center">
					<div class="container p-0">
						<div class="row">
							<div class="col-12 p-0">
								<h1 class="mayuscula texto_centrar_responsive font-size-20px tipografia_naranja"><?php the_field('pretitulo1')?></h1>
							</div>
						</div>
						<div class="row">
							<div class="col-12 p-0">
								<h2 class="mayuscula texto_centrar_responsive font-size-32px tipografia_azul_oscuro"><?php the_title()?></h2>
							</div>
						</div>
						<div class="row mt-5">
							<div class="col-12 p-0">
								<p class="tipografia_negra texto_centrar_responsive tipografia_regular"><?php the_field('texto_postitulo')?></p>
							</div>
						</div>
						<div class="row desaparece">
							<div class="col-9">
								<div class="container p-0">
									<div class="row">
										<div class="col-7 fondo_rojo p-0 d-flex align-items-center justify-content-center">
											<h2 class="tipografia_blanca font-size-25px mb-0 btn-popup">PEDIR PRESUPUESTO</h2>
										</div>
										<div class="col-5 p-0">
											<button class="boton_contacto"><a href="tel:+34<?php the_field('numero_contacto')?>" class="enlace_sin_decoracion"><i class="fa-solid fa-phone"></i>&nbsp; <?php the_field('numero_contacto')?></a></button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row fondo_azul_oscuro contacto_responsive">
							<div class="col-12">
								<div class="container p-3">
									<div class="row">
										<div class="col-12">
											<h2 class="mayuscula font-size-15px tipografia_blanca_opaca text-center">PIDE AHORA TU PRESUPUESTO</h2>
										</div>
									</div>
									<div class="row d-flex justify-content-center">
										<div class="d-flex justify-content-center">
											<div class="col-6">
												<button class="boton_contacto_responsive1"><a href="tel:+34<?php the_field('numero_contacto')?>" class="enlace_sin_decoracion"><i class="fa-solid fa-phone"></i>&nbsp; <?php the_field('numero_contacto')?></a></button>
											</div>
											<div class="col-6">
												<button class="boton_contacto_responsive2"><a href="tel:+34<?php the_field('numero_contacto')?>" class="enlace_sin_decoracion"><i class="fa-brands fa-whatsapp"></i>&nbsp; <?php the_field('numero_contacto')?></a></button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 order-1 order-lg-2">
					<img class="w-100" src="<?php the_field('imagen1')?>" alt="Imagen 1">
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-6 d-flex align-items-center">
				<img class="w-100" src="<?php the_field('imagen_titulo2')?>" alt="Imagen 2">
			</div>
			<div class="col-md-6 d-flex align-items-center">
				<div class="container p-0">
					<div class="row margen_responsive">
						<div class="col-12">
							<h2 class="mayuscula font-size-15px tipografia_azul_oscuro_opaca"><?php the_field('pretitulo2')?></h2>
						</div>
					</div>
					<div class="row height_141">
						<div class="col-12">
							<h2 class="mayuscula font-size-32px tipografia_azul_oscuro"><?php the_field('titulo2')?></h2>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-12">
							<p class="tipografia_negra tipografia_regular"><?php the_field('parrafo1_postitulo2')?></p>
							<p class="tipografia_negra tipografia_regular"><?php the_field('parrafo2_postitulo2')?></p>
							<p class="tipografia_negra tipografia_regular"><?php the_field('parrafo3_postitulo2')?></p>
						</div>
					</div>
					<div class="row header_responsive">
						<div class="col-12">
							<button class="boton_contacto btn-popup">PIDE PRESUPUESTO SIN COMPROMISO</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-12 texto_centrar">
				<h2 class="mayuscula font-size-15px tipografia_azul_oscuro_opaca"><?php the_field('pretitulo3')?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12 texto_centrar	">
				<h2 class="mayuscula font-size-32px tipografia_azul_oscuro"><?php the_field('titulo3')?></h2>
			</div>
		</div>
		<div class="row">
			<div class="organizar_servicios">
				<div class="col-md-3 servicios">
					<div class="container">
						<div class="row">
							<div class="col-3 d-flex align-items-center">
								<div class="fondo_cards tipografia_roja">
									<i class="fa-solid fa-box-open"></i>
								</div>
							</div>
							<div class="col-9">
								<h3 class="tipografia_negra font-size-20px"><?php the_field('texto_card1')?></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 servicios margen_izq_drc_servicios">
					<div class="container">
						<div class="row">
							<div class="col-3 d-flex align-items-center">
								<div class="fondo_cards tipografia_roja">
									<i class="fa-solid fa-trailer"></i>
								</div>
							</div>
							<div class="col-9 d-flex align-items-center">
								<h3 class="tipografia_negra font-size-20px mb-0"><?php the_field('texto_card2')?></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 servicios margin_right5rem">
					<div class="container d-flex align-items-center">
						<div class="row">
							<div class="col-3 d-flex align-items-center">
								<div class="fondo_cards tipografia_roja">
									<i class="fa-solid fa-truck"></i>
								</div>
							</div>
							<div class="col-9">
								<h3 class="tipografia_negra font-size-20px"><?php the_field('texto_card3')?></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 servicios">
					<div class="container">
						<div class="row">
							<div class="col-3 d-flex align-items-center">
								<div class="fondo_cards tipografia_roja">
									<i class="fa-solid fa-couch"></i>
								</div>
							</div>
							<div class="col-9">
								<h3 class="tipografia_negra font-size-20px"><?php the_field('texto_card4')?></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="fondo_gris_claro mt-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="container p-0">
						<div class="row mt-5">
							<div class="col-12">
								<h2 class="mayuscula font-size-15px tipografia_azul_oscuro_opaca"><?php the_field('pretitulo4')?></h2>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<h2 class="mayuscula font-size-32px tipografia_azul_oscuro"><?php the_field('titulo4')?></h2>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-12">
								<div class="container padding_left75rem">
									<div class="row">
										<div class="col-1 font-size-25px d-flex justify-content-center align-items-center fondo_naranja_claro tipografia_roja">
											<i class="fa-solid fa-check"></i>
										</div>
										<div class="col-11">
											<p class="tipografia_negra tipografia_regular"><?php the_field('texto1_postitulo4')?></p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-12">
								<div class="container padding_left75rem">
									<div class="row w-100">
										<div class="col-1 font-size-25px d-flex justify-content-center align-items-center fondo_naranja_claro tipografia_roja">
											<i class="fa-solid fa-check"></i>
										</div>
										<div class="col-11">
											<p class="tipografia_negra tipografia_regular"><?php the_field('texto2_postitulo4')?></p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-12">
								<div class="container padding_left75rem">
									<div class="row">
										<div class="col-1 font-size-25px d-flex justify-content-center align-items-center fondo_naranja_claro tipografia_roja">
											<i class="fa-solid fa-check"></i>
										</div>
										<div class="col-11">
											<p class="tipografia_negra tipografia_regular"><?php the_field('texto3_postitulo4')?></p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-12">
								<div class="container padding_left75rem">
									<div class="row">
										<div class="col-1 font-size-25px d-flex justify-content-center align-items-center fondo_naranja_claro tipografia_roja">
											<i class="fa-solid fa-check"></i>
										</div>
										<div class="col-11">
											<p class="tipografia_negra tipografia_regular"><?php the_field('texto4_postitulo4')?></p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row mt-5 desaparece">
							<div class="col-12">
								<button class="boton_contacto btn-popup">NECESITO UN PRESUPUESTO</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<img class="w-100" src="<?php the_field('imagen_titulo4')?> " alt="Imagen 3">
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row mt-5">
			<div class="col-12">
				<h2 class="mayuscula font-size-15px tipografia_azul_oscuro_opaca"><?php the_field('pretitulo5')?> </h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<h2 class="mayuscula font-size-32px tipografia_azul_oscuro"><?php the_field('titulo5')?> </h2>
			</div>
		</div>
		<div class="row fondo_carrousel d-flex alig-items-center">

			<!-- CARROUSEL 1 -->
			<div class="my-3 scroll carrousel">
				<div class="swipe-scroll mb-3">
					<div class="mx-2 bordes_menos_redondeados fondo_blanco">
						<div class="container p-2 tamanio_cards_carrousel">
							<div class="row">
								<div class="col-lg-12 cards_opiniones p-3">
									<h4 class="tipografia_azul_oscuro font-size-16px"><?php the_field('nombre_comentario1')?></h4>
									<p class="tipografia_azul_oscuro tipografia_italic font-size-15px"><?php the_field('lugar_comentario1')?></p>
									<p class="tipografia_amarilla font-size-15px">
										<?php 
											if(the_field('estrellas_comentario1')==0){
												echo"";
											}elseif(the_field('nombre_comentario1')==1){
												echo"<i class='fa-solid fa-star'></i>";
											}elseif(the_field('nombre_comentario1')==2){
												echo"<i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>";
											}elseif(the_field('nombre_comentario1')==3){
												echo"<i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>";
											}elseif(the_field('nombre_comentario1')==4){
												echo"<i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>";
											}elseif(the_field('nombre_comentario1')==5){
												echo"<i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>";
											}
										?>
									</p>
									<p class="tipografia_azul_oscuro tipografia_regular font-size-15px"><?php the_field('descripcion_comentario1')?></p>
								</div>
							</div>
						</div>
					</div>

					<div class="mx-2 bordes_menos_redondeados fondo_blanco">
						<div class="container p-2 tamanio_cards_carrousel">
							<div class="row">
								<div class="col-lg-12 cards_opiniones p-3">
									<h4 class="tipografia_azul_oscuro font-size-16px"><?php the_field('nombre_comentario2')?></h4>
									<p class="tipografia_azul_oscuro tipografia_italic font-size-15px"><?php the_field('lugar_comentario2')?></p>
									<p class="tipografia_amarilla font-size-15px">
										<?php 
											if(the_field('estrellas_comentario2')==0){
												echo"";
											}elseif(the_field('nombre_comentario1')==1){
												echo"<i class='fa-solid fa-star'></i>";
											}elseif(the_field('nombre_comentario1')==2){
												echo"<i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>";
											}elseif(the_field('nombre_comentario1')==3){
												echo"<i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>";
											}elseif(the_field('nombre_comentario1')==4){
												echo"<i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>";
											}elseif(the_field('nombre_comentario1')==5){
												echo"<i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>";
											}
										?>
									</p>
									<p class="tipografia_azul_oscuro tipografia_regular font-size-15px"><?php the_field('descripcion_comentario2')?></p>
								</div>
							</div>
						</div>
					</div>

					<div class="mx-2 bordes_menos_redondeados fondo_blanco">
						<div class="container p-2 tamanio_cards_carrousel">
							<div class="row">
								<div class="col-lg-12 cards_opiniones p-3">
									<h4 class="tipografia_azul_oscuro font-size-16px"><?php the_field('nombre_comentario3')?></h4>
									<p class="tipografia_azul_oscuro tipografia_italic font-size-15px"><?php the_field('lugar_comentario3')?></p>
									<p class="tipografia_amarilla font-size-15px">
										<?php 
											if(the_field('estrellas_comentario3')==0){
												echo"";
											}elseif(the_field('nombre_comentario1')==1){
												echo"<i class='fa-solid fa-star'></i>";
											}elseif(the_field('nombre_comentario1')==2){
												echo"<i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>";
											}elseif(the_field('nombre_comentario1')==3){
												echo"<i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>";
											}elseif(the_field('nombre_comentario1')==4){
												echo"<i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>";
											}elseif(the_field('nombre_comentario1')==5){
												echo"<i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>
													 <i class='fa-solid fa-star'></i>";
											}
										?>
									</p>
									<p class="tipografia_azul_oscuro tipografia_regular font-size-15px"><?php the_field('descripcion_comentario3')?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="row margin_top20 fondo_bajo_carrousel">
			<div class="div_asesorar">
				<div class="col-md-6">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h2 class="mayuscula font-size-15px padding_left20 tipografia_blanca_opaca"><?php the_field('pretitulo6')?> </h2>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-7">
								<h2 class="mayuscula font-size-32px tipografia_blanca"><?php the_field('titulo6')?> </h2>
							</div>
						</div>
						<div class="row desaparece">
							<div class="col-12">
								<button class="boton_contacto"><a href="tel:+34<?php the_field('numero_contacto')?>" class="enlace_sin_decoracion"><i class="fa-solid fa-phone"></i>&nbsp; <?php the_field('numero_contacto')?></a></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-12">
				<h2 class="mayuscula texto_centrar font-size-15px tipografia_azul_oscuro_opaca"><?php the_field('pretitulo7')?> </h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<h2 class="mayuscula texto_centrar font-size-32px tipografia_azul_oscuro"><?php the_field('titulo7')?> </h2>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-lg-6">
				<div class="container padding_left75rem">
					<div class="row">
						<div class="col-1 height_50 fondo_gris_claro d-flex align-items-center justify-content-center">
							<i class="fa-solid fa-phone"></i>
						</div>
						<div class="col-11">
							<div class="container">
								<div class="row">
									<div class="col-12">
										<h3 class="font-size-17px tipografia_azul_oscuro"><?php the_field('pregunta1_postitulo7')?> </h3>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p class="tipografia_azul_oscuro tipografia_regular"><?php the_field('respuesta1_postitulo7')?></p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row mt-2">
						<div class="col-1 height_50 fondo_gris_claro d-flex align-items-center justify-content-center">
							<i class="fa-solid fa-phone"></i>
						</div>
						<div class="col-11">
							<div class="container">
								<div class="row">
									<div class="col-12">
										<h3 class="mayuscula font-size-17px tipografia_azul_oscuro"><?php the_field('pregunta2_postitulo7')?></h3>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p class="tipografia_azul_oscuro tipografia_regular"><?php the_field('respuesta2_postitulo7')?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<img src="<?php echo get_stylesheet_directory_uri();?>/assets/img6.jpg" alt="Imagen 6">
			</div>
		</div>
		<div class="row mt-3 z_index10">
			<div class="col-lg-6 desaparece">
				<img src="<?php echo get_stylesheet_directory_uri();?>/assets/img7.jpg" alt="Imagen 7">
			</div>
			<div class="col-lg-6">
				<div class="container padding_left75rem">
					<div class="row">
						<div class="col-1 height_50 fondo_gris_claro d-flex align-items-center justify-content-center">
							<i class="fa-solid fa-phone"></i>
						</div>
						<div class="col-11">
							<div class="container">
								<div class="row">
									<div class="col-12">
										<h3 class="mayuscula font-size-17px tipografia_azul_oscuro"><?php the_field('pregunta3_postitulo7')?></h3>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p class="tipografia_azul_oscuro tipografia_regular"><?php the_field('respuesta3_postitulo7')?></p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row mt-2">
						<div class="col-1 height_50 fondo_gris_claro d-flex align-items-center justify-content-center">
							<i class="fa-solid fa-phone"></i>
						</div>
						<div class="col-11">
							<div class="container">
								<div class="row">
									<div class="col-12">
										<h3 class="mayuscula font-size-17px tipografia_azul_oscuro"><?php the_field('pregunta4_postitulo7')?></h3>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p class="tipografia_azul_oscuro tipografia_regular"><?php the_field('respuesta4_postitulo7')?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="overlay">
		<div class="popup">
			<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fa-solid fa-x"></i></a>
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h3 class="tipografia_blanca font-size-24px texto_popup_1">Solicita una llamada</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-12 text-center">
						<p class="tipografia_blanca font-size-12px texto_popup_2">
							Solicita aquí la llamada de uno de nuestros técnicos para conocer su problema. Te contactamos en 10 minutos.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<?php echo do_shortcode('[gravityform id="1" title="false"]')?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		jQuery( document ).ready(function() {
			jQuery(".popup").on('click', function (e) {
				e.stopPropagation();
			});

			jQuery(".btn-popup").on('click', function (e) {
				e.preventDefault();
				jQuery(".overlay").addClass('active');
			});

			jQuery("#btn-cerrar-popup").on('click', function (e) {
				jQuery(".overlay").removeClass('active');
			});

			jQuery(".overlay").on('click', function (e) {
				jQuery(".overlay").removeClass('active');
			});
		});
	</script>
</main>

<?php
get_footer();
?>
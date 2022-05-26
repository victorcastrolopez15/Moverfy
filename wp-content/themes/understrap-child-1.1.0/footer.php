<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<footer class="fondo_footer">
    <div class="container">
        <div class="row">
            <div class="div_asesorar_footer">
                <div class="col-md-6">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="mayuscula font-size-15px tipografia_blanca_opaca"><?php the_field('pretitulo_footer')?></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h2 class="mayuscula font-size-32px tipografia_blanca"><?php the_field('titulo_footer')?></h2>
                            </div>
                        </div>
                        <div class="row mt-5 desaparece">
                            <div class="col-12">
                                <button class="boton_contacto_rojo"><a href="tel:+34<?php the_field('numero_contacto')?>" class="enlace_sin_decoracion"><i class="fa-solid fa-phone"></i>&nbsp;LLAMANOS <?php the_field('numero_contacto')?></a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid fondo_azul_oscuro margin_top15 p-3">
        <div class="row">
            <div class="col-12">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'primary',
                            'container_id'    => 'navbarNavDropdown',
                            'menu_class'      => 'navbar-nav ml-auto',
                            'fallback_cb'     => '',
                            'menu_id'         => 'main-menu',
                            'depth'           => 2,
                            'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                        )
                    );
                ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>


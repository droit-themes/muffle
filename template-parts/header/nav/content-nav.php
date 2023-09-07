<?php 
$muffle_header_layout = muffle_options('muffle_header_layout', 'container'); 
?>

<nav class="navbar navbar-expand-lg menu_one">
    <div class="<?php if($muffle_header_layout == 'container'){echo "container";}else{echo "container-fluid";} ?>">
        <?php muffle_logo(); ?>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php 
                wp_nav_menu( array(
                        'menu_class' => 'navbar-nav menu ms-lg-auto',
                        'container'  => '',
                        'theme_location' => 'primary',
                        'walker'         => new muffle_Navwalker(),
                        'fallback_cb'     => false,
                ) ); 
            ?>
        </div>
        <?php get_template_part( 'template-parts/header/nav/content-nav', 'serch'); ?>
    </div>
</nav>
<?php 
$muffle_header_layout = muffle_options('muffle_header_layout', 'container'); 
$muffle_menu_layout = muffle_options('muffle_menu_layout', 'center'); 

?>

<nav class="navbar navbar-expand-lg menu_one">
    <div class="<?php if($muffle_header_layout == 'container'){echo "container";}else{echo "container-fluid";} ?>">
        <?php muffle_logo(); ?>
        <div class="collapse navbar-collapse <?php if($muffle_menu_layout == 'center'){echo "justify-content-center";}elseif($muffle_menu_layout == 'start'){echo "justify-content-start";}else{echo "justify-content-end";} ?>" id="navbarSupportedContent">
            <?php 
                wp_nav_menu( array(
                        'menu_class' => 'navbar-nav menu ',
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
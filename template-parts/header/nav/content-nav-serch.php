<?php
  $opt = get_option('muffle');

  $display_search  = isset( $opt['is_menu_btn']) ? $opt['is_menu_btn'] : '';
  $menu_btn_label  = isset( $opt['menu_btn_label']) ? $opt['menu_btn_label'] : '';
  $menu_btn_url    = isset( $opt['menu_btn_url']) ? $opt['menu_btn_url'] : '';

?>
<?php if(class_exists( 'Redux' ) &&  $display_search =='yes' ) { ?>
    <div class="header_area nav_bar">
    <a class="btn_get btn-meta btn_hover" href="<?php echo esc_url($menu_btn_url); ?>"><?php echo muffle_kses($menu_btn_label); ?></a>
</div>

<?php } ?>
<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
    aria-expanded="false" aria-label="Toggle navigation">
    <span></span><span></span><span></span><span></span><span></span><span></span>
</button>


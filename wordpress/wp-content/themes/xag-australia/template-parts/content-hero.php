<?php
$techup_enable_banner_section = get_theme_mod( 'techup_enable_banner_section', true );
$techup_banner_image = get_theme_mod( 'techup_banner_image', esc_url(  get_template_directory_uri() . '/assets/images/banner.jpg' ) );
$techup_banner_title = get_theme_mod( 'techup_banner_title','');
$techup_banner_content = get_theme_mod( 'techup_banner_content','');
$techup_banner_button_label1 = get_theme_mod( 'techup_banner_button_label1','');
$techup_banner_button_link1 = get_theme_mod( 'techup_banner_button_link1','');
      
if($techup_enable_banner_section==true ) {
?>  
<!-- ======= Hero Section ======= -->
<section class="hero-sec beg-img" style="background-image:url(<?php if($techup_banner_image) { echo esc_url($techup_banner_image); } else { echo esc_url(get_header_image()); } ?>); height: 50vh; background-opacity: 0.1;">
<video autoplay muted loop id="myVideo" style="position: fixed; min-width: 100%; max-height: 50vh; right: 0; top: 0; object-fit: cover;">
<source src="http://localhost:8080/wp-content/uploads/2023/07/file.mp4" type="video/mp4">      
<div class="container">
     
        <div class="row">
          <div class="content-sec">
              <h2 class="section-title">
                <?php echo esc_html($techup_banner_title); ?>
              </h2>
              <?php if($techup_banner_button_label1) :?>
              <div class="btn-wraper">
                <?php if(!empty($techup_banner_button_link1) && ($techup_banner_button_label1)) { ?>
              <a href="<?php echo esc_url($techup_banner_button_link1); ?>" class="readmore-btn"><?php echo esc_html($techup_banner_button_label1); ?></a>
              <?php } ?>
            </div>
             <?php endif; ?>
          </div>
      </div>
      </video>
      </div>
    </section>
	<div id="content" style="min-height: 50vh;"></div>

    <!--End Hero-->
 
<?php
}
?>
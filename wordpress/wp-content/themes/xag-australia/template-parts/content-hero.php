<?php
$techup_enable_banner_section = get_theme_mod( 'techup_enable_banner_section', true );
$techup_banner_image = get_theme_mod( 'techup_banner_image', esc_url(  get_template_directory_uri() . '/assets/images/banner.jpg' ) );
$techup_banner_title = get_theme_mod( 'techup_banner_title','');
$techup_banner_content = get_theme_mod( 'techup_banner_content','');
$techup_banner_button_label1 = get_theme_mod( 'techup_banner_button_label1','');
$techup_banner_button_link1 = get_theme_mod( 'techup_banner_button_link1','');
      
if($techup_enable_banner_section==true ) {
?>
<style>
  .hero-sec{

    display: none;
    opacity: 0;
    transition: opacity 1000ms;

    }
</style>

<!-- START Hero Section 1 -->

<section class="hero-sec beg-img" style="background-color: #000000;">
      <div class="container">
        <div class="row">
          <div class="content-sec">
              <h2 class="section-title" style="font-size: 52px;">
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
      </div>
</section>

<!-- END Hero Section 1 -->

<!-- START Hero Section 2 -->

<section class="hero-sec beg-img" style="background-color: #ffffff;">
      <div class="container">
        <div class="row">
          <div class="content-sec">
              <h2 class="section-title" style="font-size: 52px;">
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
      </div>
</section>

<!-- END Hero Section 2 -->

<!-- START Slider Script -->

<script>
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("hero-sec");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1} 
  x[slideIndex-1].style.display = "block"; 
  setTimeout(carousel, 6000); 
}
</script>

	
<div id="content"></div>

<?php
}
?>
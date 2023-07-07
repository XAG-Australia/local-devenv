<?php
$techup_enable_banner_section = get_theme_mod( 'techup_enable_banner_section', true );
$techup_banner_image = get_theme_mod( 'techup_banner_image', esc_url(  get_template_directory_uri() . '/assets/images/banner.jpg' ) );
$techup_banner_title = get_theme_mod( 'techup_banner_title','');
$techup_banner_content = get_theme_mod( 'techup_banner_content','');
$techup_banner_button_label1 = get_theme_mod( 'techup_banner_button_label1','');
$techup_banner_button_link1 = get_theme_mod( 'techup_banner_button_link1','');
      
if($techup_enable_banner_section==true ) { ?>

<style>

</style>

<script type="text/javascript" src="slidr-master/slidr-master/slidr.min.js"></script>
<script>
slidr.create('slidr-section', {
  after: function(e) { console.log('in: ' + e.in.slidr); },
  before: function(e) { console.log('out: ' + e.out.slidr); },
  breadcrumbs: true,
  controls: 'corner',
  direction: 'vertical',
  fade: false,
  keyboard: true,
  overflow: true,
  theme: '#222',
  timing: { 'linear': '0.5s ease-in' },
  touch: true,
  transition: 'linear'
}).start();

</script>

<!-- START HERO -->

<section id="slidr-section" class="hero-sec beg-img">

<!-- START Slide 1 -->

<div data-slidr="one" class="container" style="background: url('http://localhost:8080/wp-content/uploads/2023/07/pexels-rene-strgar-17402297-scaled-e1688618891603.jpg')";>
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

<!-- END Slide 1 -->

<!-- START Slide 2 -->

<div data-slidr="two" class="container">
        <div class="row">
          <div class="content-sec">
              <h2 class="section-title" style="font-size: 52px;">AERIAL DRONE SPRAYING</h2>
              <div class="btn-wraper">
              <a href="#" class="readmore-btn">LEARN MORE</a>
            </div>
          </div>
      </div>
      </div>

<!-- END Slide 2 -->

<!-- START Slide 3 -->

<div data-slidr="three" class="container">
        <div class="row">
          <div class="content-sec">
              <h2 class="section-title" style="font-size: 52px;">AERIAL DRONE SEEDING</h2>
              <div class="btn-wraper">
              <a href="#" class="readmore-btn">LEARN MORE</a>
            </div>
          </div>
      </div>
      </div>

<!-- END Slide 3 -->

<!-- START Slide 4 -->

<div data-slidr="four" class="container">
        <div class="row">
          <div class="content-sec">
              <h2 class="section-title" style="font-size: 52px;">AERIAL DRONE SURVEYING</h2>
              <div class="btn-wraper">
              <a href="#" class="readmore-btn">LEARN MORE</a>
            </div>
          </div>
      </div>
      </div>

<!-- END Slide 4 -->

</section>

<!-- END HERO -->

<div id="content"></div>

<?php
}
?>
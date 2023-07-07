<?php
$techup_enable_banner_section = get_theme_mod( 'techup_enable_banner_section', true );
$techup_banner_image = get_theme_mod( 'techup_banner_image', esc_url(  get_template_directory_uri() . '/assets/images/banner.jpg' ) );
$techup_banner_title = get_theme_mod( 'techup_banner_title','');
$techup_banner_content = get_theme_mod( 'techup_banner_content','');
$techup_banner_button_label1 = get_theme_mod( 'techup_banner_button_label1','');
$techup_banner_button_link1 = get_theme_mod( 'techup_banner_button_link1','');
      
if($techup_enable_banner_section==true ) { ?>

<script type="text/javascript" src="\slidr-master\slidr.min.js"></script>

<div id="slidr-div"  style="display: inline; min-width: 100vw; min-height: 100vh;" >
  <div data-slidr="one" style="min-width: 100vw; min-height: 100vh;">
    <section class="hero-sec">
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
                </div>
                </section>
  <div data-slidr="two">banana</div>
  <div data-slidr="three">coconut</div>
</div>

<div id="content"></div>
<script>
slidr.create('slidr-div', {
  after: function(e) { console.log('in: ' + e.in.slidr); },
  before: function(e) { console.log('out: ' + e.out.slidr); },
  breadcrumbs: true,
  controls: 'corner',
  direction: 'vertical',
  fade: false,
  keyboard: true,
  overflow: true,
  theme: '#222',
  timing: { 'cube': '0.5s ease-in' },
  touch: true,
  transition: 'cube'
}).start();
</script>
<?php
}
?>
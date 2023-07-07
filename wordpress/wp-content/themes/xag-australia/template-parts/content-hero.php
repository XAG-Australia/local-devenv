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
    <section class="hero-sec" style="background: url('http://localhost:8080/wp-content/uploads/2023/07/pexels-rene-strgar-17402297-scaled-e1688618891603.jpg');">
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
  auto: true,
  controls: 'center',
  direction: 'horizontal',
  fade: true,
  theme: '#222',
  timing: { 'linear': '0.5s ease-in' },
  transition: 'linear'
}).start();

function auto(opt_msec, opt_direction, opt_start) {};

</script>
<?php
}
?>
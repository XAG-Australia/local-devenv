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



<!-- START HERO -->
<ul id="slidr-ul" style="display: inline">
<!-- START Slide 1 -->
  <li data-slidr="one">
    <section class="hero-sec beg-img" style="background: url('http://localhost:8080/wp-content/uploads/2023/07/pexels-rene-strgar-17402297-scaled-e1688618891603.jpg');">

    <script>
      slidr.create('slidr-id', {
        after: function(e) { console.log('in: ' + e.in.slidr); },
        before: function(e) { console.log('out: ' + e.out.slidr); },
        breadcrumbs: true,
        controls: 'corner',
        direction: 'vertical',
        fade: true,
        keyboard: true,
        overflow: true,
        theme: '#222',
        timing: { 'linear': '0.5s ease-in' },
        touch: true,
        transition: 'linear'
      }).start();

    </script>

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
  </li>
<!-- END Slide 1 -->

<!-- START Slide 2 -->

<li data-slidr="two">
    <section class="hero-sec beg-img" style="background: url('http://localhost:8080/wp-content/uploads/2023/07/pexels-rene-strgar-17402297-scaled-e1688618891603.jpg');">
    <div class="container">
            <div class="row">
              <div class="content-sec">
                  <h2 class="section-title" style="font-size: 52px;"></h2>
                  <div class="btn-wraper">
                  <a href="#" class="readmore-btn"></a>
                </div>
              </div>
          </div>
          </div>
    </section>
  </li>

<!-- END Slide 2 -->

<!-- START Slide 3 -->



<!-- END Slide 3 -->

<!-- START Slide 4 -->



<!-- END Slide 4 -->
</ul>

<div id="content"></div>
<script type="text/javascript" src="\slidr-master\slidr.min.js"></script>
<?php
}
?>
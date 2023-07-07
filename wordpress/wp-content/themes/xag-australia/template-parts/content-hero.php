<?php
$techup_enable_banner_section = get_theme_mod( 'techup_enable_banner_section', true );
$techup_banner_image = get_theme_mod( 'techup_banner_image', esc_url(  get_template_directory_uri() . '/assets/images/banner.jpg' ) );
$techup_banner_title = get_theme_mod( 'techup_banner_title','');
$techup_banner_content = get_theme_mod( 'techup_banner_content','');
$techup_banner_button_label1 = get_theme_mod( 'techup_banner_button_label1','');
$techup_banner_button_link1 = get_theme_mod( 'techup_banner_button_link1','');
      
if($techup_enable_banner_section==true ) { ?>
<script type="text/javascript" src="http://localhost:8080/slidr-master/slidr.min.js"></script>
<script type="text/javascript" src="http://localhost:8080/slidr-master/slidr.js"></script>
<!-- START HERO -->
<ul id="slidr-ul" style="display: inline">
<script>
  /**
 * Start the Slidr!
 * Automatically finds slides to create if nothing was added prior to calling start().
 * @param {string} opt_start `data-slidr` id to start on.
 * @return {this}
 */
 function start(opt_start) {};

/**
 * Check whether we can slide.
 * @param {string} next a direction ('up', 'down', 'left', 'right') or a `data-slidr` id.
 * @return {boolean}
 */
 function canSlide(next) {};

/**
 * Slide!
 * @param {string} next a direction ('up', 'down', 'left', 'right') or a `data-slidr` id.
 * @return {this}
 */
 function slide(next) {};

/**
 * Adds a set of slides.
 * @param {string} direction `horizontal || h` or `vertical || v`.
 * @param {Array} ids A list of `data-slidr` id's to add to Slidr. Slides must be direct children of the Slidr.
 * @param {string=} opt_transition The transition to apply between the slides, or uses the default.
 * @param {boolean=} opt_overwrite Whether to overwrite existing slide mappings/transitions if conflicts occur.
 * @return {this}
 */
 function add(direction, ids, opt_transition, opt_overwrite) {};

/**
 * Automatically advance to the next slide after a certain timeout. Calls start() if not already called.
 * @param {int=} opt_msec The number of millis between each slide transition. Defaults to 5000 (5 seconds).
 * @param {string=} opt_direction 'up', 'down', 'left', or 'right'. Defaults to 'right'.
 * @param {string=} opt_start The `data-slidr` id to start at (only works if auto is called to start the Slidr).
 * @return {this}
 */
 function auto(opt_msec, opt_direction, opt_start) {};

/**
 * Stop auto transition if it's turned on.
 * @return {this}
 */
 function stop() {};

/**
 * Set custom animation timings.
 * @param {string|Object} transition Either a transition name (i.e. 'cube'), or a {'transition': 'timing'} object.
 * @param {string=} opt_timing The new animation timing (i.e "0.5s ease-in"). Not required if transition is an object.
 * @return {this}
 */
 function timing(transition, opt_timing) {};

/**
 * Toggle breadcrumbs.
 * @return {this}
 */
 function breadcrumbs() {};

/**
 * Toggle controls.
 * @param {string=} opt_scheme Toggle on/off if not present, else change layout. 'border', `corner` or `none`.
 * @return {this}
 */
 function controls(opt_scheme) {};
</script>
<script>
  slidr.create('slidr-ul', {
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
<!-- START Slide 1 -->
  <li data-slidr="one">
    <section class="hero-sec beg-img" style="background: url('http://localhost:8080/wp-content/uploads/2023/07/pexels-rene-strgar-17402297-scaled-e1688618891603.jpg');">
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

<?php
}
?>
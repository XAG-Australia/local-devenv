<?php
$techup_enable_banner_section = get_theme_mod( 'techup_enable_banner_section', true );
$techup_banner_image = get_theme_mod( 'techup_banner_image', esc_url(  get_template_directory_uri() . '/assets/images/banner.jpg' ) );
$techup_banner_title = get_theme_mod( 'techup_banner_title','');
$techup_banner_content = get_theme_mod( 'techup_banner_content','');
$techup_banner_button_label1 = get_theme_mod( 'techup_banner_button_label1','');
$techup_banner_button_link1 = get_theme_mod( 'techup_banner_button_link1','');
      
if($techup_enable_banner_section==true ) { ?>

<script type="text/javascript" src="/slidr-master/slidr.min.js"></script>

<div id="slidr-div" style="display: block">
  <div data-slidr="one">apple</div>
  <div data-slidr="two">banana</div>
  <div data-slidr="three">coconut</div>
</div>

<div id="content"></div>
<script>
slidr.create('slidr-id', {
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
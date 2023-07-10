<?php
$techup_enable_banner_section = get_theme_mod( 'techup_enable_banner_section', true );
$techup_banner_image = get_theme_mod( 'techup_banner_image', esc_url(  get_template_directory_uri() . '/assets/images/banner.jpg' ) );
$techup_banner_title = get_theme_mod( 'techup_banner_title','');
$techup_banner_content = get_theme_mod( 'techup_banner_content','');
$techup_banner_button_label1 = get_theme_mod( 'techup_banner_button_label1','');
$techup_banner_button_link1 = get_theme_mod( 'techup_banner_button_link1','');
      
if($techup_enable_banner_section==true ) { ?>

	<style>

	aside[id="slidr-div-control"].border .slidr-control.right {
     right: c
	   width: 50px !important;
	   height: 50px !important;
	   top: 50% !important;
	   margin-top: -25px !important;
	   border-radius: 25px !important;
	   background: url(http://localhost:8080/wp-content/uploads/2023/07/right-arrow-1.png) no-repeat rgb(0 0 0 /0.5) !important;
	   opacity: 1 !important;
	   background-size: 25px !important;
	   background-position: center !important;
	}

	aside[id*="-control"] .slidr-control.disabled {
	 opacity: 0.5 !important;
	}

	aside[id="slidr-div-control"].border .slidr-control.left {
	   left: right: calc((100vw - 1280px)/2);
	   width: 50px !important;
	   height: 50px !important;
	   top: 50% !important;
	   margin-top: -25px !important;
	   border-radius: 25px;
	   background: url('http://localhost:8080/wp-content/uploads/2023/07/left-arrow-1.png') no-repeat rgb(0 0 0 /0.5);
	   opacity: 1;
	   background-size: 25px;
	   background-position: center;
	}

  @media screen and (max-width: 1919px){
    aside[id="slidr-div-control"].border .slidr-control.left {
      left: 50px !important;
      right: initial !important;
    }

    aside[id="slidr-div-control"].border .slidr-control.right {
      right: 50px !important;
      left: initial !important;
    }
  }

	aside[id="slidr-div-control"].border .slidr-control.right:hover {
	 opacity: 1;
	}


	aside[id="slidr-div-control"].border .slidr-control.left:hover {
	 opacity: 1;
	}

	aside[id="slidr-div-control"] .slidr-control.left::after,  aside[id="slidr-div-control"] .slidr-control.right::after {
	 border: transparent !important;
	}
	</style>
	<script src="/slidr-master/slidr.min.js" type="text/javascript"></script>
  
  <!-- START HERO SLIDER -->

	<div id="slidr-div" style="display: inline; min-width: 100vw; min-height: 100vh;">
		<!-- START SLIDE 1 -->


		<div data-slidr="one" style="min-width: 100vw; min-height: 100vh;">
			<section class="hero-sec" style="background: url('http://localhost:8080/wp-content/uploads/2023/07/slide-1.png') no-repeat; background-size: cover;">
				<div class="container">
					<div class="row">
						<div class="content-sec">
							<h2 class="section-title" style="font-size: 52px;"><?php echo esc_html($techup_banner_title); ?>
							</h2>
							<?php if($techup_banner_button_label1) :?>

							<div class="btn-wraper">
								<?php if(!empty($techup_banner_button_link1) && ($techup_banner_button_label1)) { ?><a class="readmore-btn" href="%3C?php%20echo%20esc_url($techup_banner_button_link1);%20?%3E"><?php echo esc_html($techup_banner_button_label1); ?></a> <?php } ?>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- END SLIDE 1 -->
		<!-- START SLIDE 2 -->


		<div data-slidr="two" style="min-width: 100vw; min-height: 100vh;">
			<section class="hero-sec" style="background: url('http://localhost:8080/wp-content/uploads/2023/07/slide-2.png') no-repeat; background-size: cover;">
				<div class="container">
					<div class="row">
						<div class="content-sec">
							<h2 class="section-title" style="font-size: 52px;">AGRICULTURAL DRONE TECHNOLOGY</h2>


							<div class="btn-wraper">
								<a class="readmore-btn" href="#">SHOP NOW</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- END SLIDE 2 -->
		<!-- START SLIDE 3 -->


		<div data-slidr="three" style="min-width: 100vw; min-height: 100vh;">
			<section class="hero-sec" style="background: url('http://localhost:8080/wp-content/uploads/2023/07/slide-3.png') no-repeat; background-size: cover;">
				<div class="container">
					<div class="row">
						<div class="content-sec">
							<h2 class="section-title" style="font-size: 52px;">AERIAL SPRAYING, SEEDING & SURVEYING</h2>


							<div class="btn-wraper">
								<a class="readmore-btn" href="#">LEARN MORE</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- END SLIDE 3 -->
	</div>
	<!-- END HERO SLIDER -->


	<div id="content">
	</div>
	<script>

// Initialize a Slidr. 

  var s = slidr.create('slidr-div', {
   direction: 'horizontal',
	 breadcrumbs: true,
	 fade: true,
	 controls: 'border',
	 theme: '#ffffff',
	 timing: { 'fade': '1s ease-in' },
	 transition: 'fade',
	 overflow: false,
	 pause: false,
});

// Add horizontal slides with default linear transition.
// The extra "one" allows the slidr to circle back and loop infinitely.
s.add('h', ['one', 'two', 'three', 'one']);

// Now start.
s.auto(6000, 'right', 'one');

	function auto(opt_msec, opt_direction, opt_start) {};

	</script> <?php
	}
	?>
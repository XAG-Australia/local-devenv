<?php 
$techup_enable_features_section = get_theme_mod( 'techup_enable_features_section', false );
if($techup_enable_features_section==true ) {
        $techup_features_no        = 3;
        $techup_features_pages      = array();
        for( $i = 1; $i <= $techup_features_no; $i++ ) {
             $techup_features_pages[] = get_theme_mod('techup_features_page '.$i); 
             $techup_features_icon[]= get_theme_mod('techup_features_icon '.$i,'fa fa-user');
        }
        $techup_features_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $techup_features_pages ),
        'posts_per_page' => absint($techup_features_no),
        'orderby' => 'post__in'
        ); 
        $techup_features_query = new WP_Query( $techup_features_args );
?>
<div class="feature-sec buco" style="height: 50vh; padding-top: 20px !important; padding: 0px; background: #fafafa; background-attachment: fixed; background-size: cover; background-position: center;">
    <h2 class="section-title" style="display: none; font-size: 28px; text-align: left; color: #d0d0d0; font-weight: 400 !important; font-family: 'Roboto Condensed', sans-serif; letter-spacing: 0px; margin-bottom: 0px; margin-top: 25px; width: 1280px; margin-left: auto; margin-right: auto; padding-left: 40px;">XAG Australia specialises in providing aerial, and unmanned ground <b style="color:#c01920; ">drone technology.</b></h2>
    <div class="container-fluid" style="width: 100%; max-width: 1600px; padding-left: 0px; padding-right: 0px; height: 425px;">
      <div class="row" style="width: 100%; margin-left: auto; margin-right: auto;">
		<?php
		$count = 0;
		while($techup_features_query->have_posts() && $count <= 4 ) :
		$techup_features_query->the_post();
		?> 
        <div class="col-lg-4 col-md-6 col-sm-12" style="width: 100%; ">
          <div class="feature-box feature-box-one feature-box-1" style="width: 500px; background-color: #ffffff !important; max-width: 500px; height: 200px; border-radius: 20px; margin-left: auto; margin-right: auto;">
            <div class="icon" style="background: url('http://localhost:8080/wp-content/uploads/2023/07/service-1.png') no-repeat #ffffff; background-size: 110px; background-position: center; margin-bottom: 30px; transition: all 0.3s ease-in-out;"></div>
            <div class="content">
              <h5 class="title-box" style="color: #8d8d8d !important;">AERIAL SPRAYING</a></h5>
              <p style="text-align: left; color: #d0d0d0; margin-top: 40px;">Spray safely and efficiently with XAG agricultural drones.</p>
			      </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12" style="width: 100%;">
          <div class="feature-box feature-box-one feature-box-2" style="width: 500px; background-color: #ffffff !important; max-width: 500px; height: 200px; border-radius: 20px; margin-left: auto; margin-right: auto;">
            <div class="icon" style="background: url('http://localhost:8080/wp-content/uploads/2023/07/service-2.png') no-repeat #ffffff; background-size: 110px; background-position: center; margin-bottom: 30px; transition: all 0.3s ease-in-out;"></div>
            <div class="content">
            <h5 class="title-box" style="color: #8d8d8d !important; font-size: 14px;">UNMANNED GROUND VEHICLES</a></h5>
              <p style="text-align: left; color: #d0d0d0; margin-top: 40px;">Precision plant services, spreading systems, AI mowing and unmanned transportation.</p>
			      </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12" style="width: 100%;">
          <div class="feature-box feature-box-one feature-box-3" style="width: 500px; background-color: #ffffff !important; max-width: 500px; height: 200px; border-radius: 20px; margin-left: auto; margin-right: auto;">
            <div class="icon" style="background: url('http://localhost:8080/wp-content/uploads/2023/07/service-3.png') no-repeat #ffffff; background-size: 110px; background-position: center; margin-bottom: 30px; transition: all 0.3s ease-in-out;"></div>
            <div class="content">
            <h5 class="title-box" style="color: #8d8d8d !important;">AERIAL SURVEYING</a></h5>
            <p style="text-align: left; color: #d0d0d0; margin-top: 40px;">Survey high-resolution and detailed models of any terrain.</p>
			</div>
          
          </div>
        </div>
        <?php
			$count = $count + 1;
			endwhile;
			wp_reset_postdata();
		?> 
        
      </div>
    </div>
    <div class="btn-wraper" style="display: initial; left: 46%;">
								<a class="readmore-btn" href="#" style="transition: all 0.4s ease-in-out;">LEARN MORE</a>
							</div>
  </div>
  
  <div class="feature-sec" style="height: 33.33vw; width: 100vw; border: 0px !important;">
      <div class="featured-1" style="height: 33.33vw; width: 33.33%;  float: left; background-image: url('http://localhost:8080/wp-content/uploads/2023/07/product-1.png'); background-color: rgb(250 250 250 / 75%); background-blend-mode: lighten; background-size: cover; background-position: bottom; transition: all 0.5s ease-in-out;">
      <h2 class="section-title" style="opacity: 1; font-size: 38px; text-align: center; margin-top: 50px;">P100 PRO</h2>
      <div class="btn-wraper product" style="opacity: 0; padding-top: 85%; margin-top: -120px; transition: all 0.4s ease-in-out; left: 40%;">
				<a class="readmore-btn" href="#" style="transition: all 0.4s ease-in-out; ">LEARN MORE</a>
			</div>
    </div>
      <div class="featured-2" style="height: 33.33vw; width: 33.33%;  float: left; background-image: url('http://localhost:8080/wp-content/uploads/2023/07/product-2.png'); background-color: rgb(250 250 250 / 75%); background-blend-mode: lighten; background-size: cover; background-position: bottom; transition: all 0.5s ease-in-out;">
      <h2 class="section-title" style="opacity: 1; font-size: 38px; text-align: center; margin-top: 50px;">R150</h2>
      <div class="btn-wraper product" style="opacity: 0; padding-top: 85%; margin-top: -120px; transition: all 0.4s ease-in-out; left: 40%;">
				<a class="readmore-btn" href="#" style="transition: all 0.4s ease-in-out; ">LEARN MORE</a>
			</div>
    </div>
      <div class="featured-3" style="height: 33.33vw; width:33.33%;   float: left; background-image: url('http://localhost:8080/wp-content/uploads/2023/07/product-3.png'); background-color: rgb(250 250 250 / 75%); background-blend-mode: lighten; background-size: cover; background-position: bottom; transition: all 0.5s ease-in-out;">
      <h2 class="section-title" style="opacity: 1; font-size: 38px; text-align: center; margin-top: 50px;">v40</h2>
      <div class="btn-wraper product" style="opacity: 0; padding-top: 85%; margin-top: -120px; transition: all 0.4s ease-in-out; left: 40%;">
				<a class="readmore-btn" href="#" style="transition: all 0.4s ease-in-out; ">LEARN MORE</a>
			</div>
    </div>
  </div>
<!-- End About Section -->

<?php } ?>
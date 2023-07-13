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
<div class="feature-sec buco" style="height: 85vh; margin-top: 100px; padding: 0px;">
    <h2 class="section-title" style="font-size: 28px; text-align: center; color: #999999; font-weight: 400 !important; font-family: 'Roboto Condensed', sans-serif; letter-spacing: 0px; margin-bottom: 50px; margin-top: 50px;">XAG Australia specialises in providing aerial, and unmanned ground <b style="color:#c01920; ">drone technology.</b></h2>
    <div class="container-fluid" style="width: 1480px; padding-left: 0px; padding-right: 0px;">
      <div class="row">
		<?php
		$count = 0;
		while($techup_features_query->have_posts() && $count <= 4 ) :
		$techup_features_query->the_post();
		?> 
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="feature-box feature-box-one feature-box-1" style="width: 25vw; background-color: #fffffff !important; max-width: 480px; height: 480px; border-radius: 20px;">
            <div class="icon" style="background: url('http://localhost:8080/wp-content/uploads/2023/07/service-1.png') no-repeat #fafafa; background-size: 120px; background-position: center; margin-bottom: 30px;"></div>
            <div class="content">
              <h5 class="title-box" style="color: #999999 !important;">AERIAL SPRAYING</a></h5>
              <p style="text-align: justify; color: #999999 !important; margin-top: 50px;">Drones allow users to spray safely and efficiently with uniformity and precision. The XAG patented AI rotary atomising spraying system enables XAG agriculture & farming drones to contribute in reducing pesticide use and water waste. </p>
			      </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="feature-box feature-box-one feature-box-2" style="width: 25vw; background-color: #ffffff !important; max-width: 480px; height: 480px; border-radius: 20px;">
            <div class="icon" style="background: url('http://localhost:8080/wp-content/uploads/2023/07/service-2.png') no-repeat #fafafa; background-size: 120px; background-position: center; margin-bottom: 30px;"></div>
            <div class="content">
            <h5 class="title-box" style="color: #999999!important;">UNMANNED GROUND VEHICLES</a></h5>
              <p style="text-align: justify; color: #999999 !important; margin-top: 50px;">Our unmanned ground vehicles provide the agriculture and farming industry with precision plant services, spreading systems, AI mowing, unmanned transportation of agricultural materials, and contagion prevention.</p>
			      </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="feature-box feature-box-one feature-box-3" style="width: 25vw; background-color: #ffffff !important; max-width: 480px; height: 480px;  border-radius: 20px; ">
            <div class="icon" style="background: url('http://localhost:8080/wp-content/uploads/2023/07/service-3.png') no-repeat #fafafa; background-size: 120px; background-position: center; margin-bottom: 30px;"></div>
            <div class="content">
            <h5 class="title-box" style="color: #999999 !important;">AERIAL SURVEYING</a></h5>
            <p style="text-align: justify; color: #999999 !important; margin-top: 50px;">XAG Australia has developed field survey drones that can generate high-resolution and detailed models of difficult to access areas. Our agriculture and farming industry drones allow the quick and safe delivery of field surveying data.</p>
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
    <div class="btn-wraper" style="margin-bottom: 50px !important;">
								<a class="readmore-btn" href="#">LEARN MORE</a>
							</div>
  </div>
  
  <div class="feature-sec" style="height: calc(40vh + 80px); width: 100vw;">
      <div class="featured-1" style="height: calc(40vh + 80px); width: 33.33%;  float: left; background: url('http://localhost:8080/wp-content/uploads/2023/07/featured-1-2.png') no-repeat rgb(0 0 0 /0.1); background-size: cover; background-position: center;">
    
    </div>
      <div class="featured-2" style="height: calc(40vh + 80px); width: 33.33%;  float: left; background: url('http://localhost:8080/wp-content/uploads/2023/07/featured-2-1.png') no-repeat rgb(0 0 0 /0.1); background-size: cover; background-position: center;">
    
    </div>
      <div class="featured-3" style="height: calc(40vh + 80px); width:33.33%;  float: left; background: url('http://localhost:8080/wp-content/uploads/2023/07/featured-3-1.png') no-repeat rgb(0 0 0 /0.1); background-size: cover; background-position: center;">
    
    </div>
  </div>
<!-- End About Section -->

<?php } ?>
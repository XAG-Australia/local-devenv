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
<div class="feature-sec buco" style="height: 100vh; margin-top: 100px; padding: 0px;">
    <h2 class="section-title" style="font-size: 28px; text-align: center; color: #c01920; font-weight: 600 !important; font-family: 'Roboto Condensed', sans-serif; margin-top: 50px; letter-spacing: 2px; margin-bottom: 10px;">WHAT WE DO</h2>
    <h2 class="section-title" style="font-size: 36px; text-align: center; margin-bottom: 50px; letter-spacing: 2px;">AUSTRALIAN AGRICULTURAL & FARMING <b>DRONE TECHNOLOGY</b></h2>
    <h2 class="section-title" style="font-size: 28px; text-align: center; color: #999999; font-weight: 400 !important; font-family: 'Roboto Condensed', sans-serif; letter-spacing: 0px; margin-bottom: 50px;">XAG Australia specialises in providing aerial, and unmanned ground <b style="color:#c01920; ">drone technology.</b></h2>
    <div class="container-fluid" style="width: 1480px; padding-left: 0px; padding-right: 0px;">
      <div class="row">
		<?php
		$count = 0;
		while($techup_features_query->have_posts() && $count <= 2 ) :
		$techup_features_query->the_post();
		?> 
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="feature-box feature-box-one feature-box-<?php echo esc_attr($count); ?> first" style="width: 25vw; background-color: #fafafa !important; max-width: 480px; height: 480px; border-radius: 50px;">
            <div class="icon" style="background: url('http://localhost:8080/wp-content/uploads/2023/07/service-1.png') no-repeat #fafafa; background-size: contain; background-location: center;"></div>
            <div class="content">
              <h5 class="title-box"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <?php the_excerpt(); ?>
			</div>
            <div class="link-boxer">
              <a href="<?php the_permalink(); ?>" class="link-details">
                <i class="fa fa-arrow-right"></i> <?php esc_html('Learn More','fullscreen-techup'); ?></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="feature-box feature-box-one feature-box-<?php echo esc_attr($count); ?>" style="width: 25vw; background-color: #fafafa !important; max-width: 480px; height: 480px; border-radius: 50px;">
            <div class="icon" style="background: url('http://localhost:8080/wp-content/uploads/2023/07/service-2.png') no-repeat #fafafa; background-size: contain; background-location: center;"></div>
            <div class="content">
              <h5 class="title-box"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <?php the_excerpt(); ?>
			</div>
            <div class="link-boxer">
              <a href="<?php the_permalink(); ?>" class="link-details">
                <i class="fa fa-arrow-right"></i> <?php esc_html('Learn More','fullscreen-techup'); ?></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="feature-box feature-box-one feature-box-<?php echo esc_attr($count); ?>" style="width: 25vw; background-color: #fafafa !important; max-width: 480px; height: 480px;  border-radius: 50px;">
            <div class="icon" style="background: url('http://localhost:8080/wp-content/uploads/2023/07/service-3.png') no-repeat #fafafa; background-size: contain; background-location: center;"></div>
            <div class="content">
              <h5 class="title-box"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <?php the_excerpt(); ?>
			</div>
            <div class="link-boxer">
              <a href="<?php the_permalink(); ?>" class="link-details">
                <i class="fa fa-arrow-right"></i> <?php esc_html('Learn More','fullscreen-techup'); ?></a>
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
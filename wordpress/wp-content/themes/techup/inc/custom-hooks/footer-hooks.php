<?php
/**
 * Managed the custom functions and hooks for footer section of the theme.
 *
 * @subpackage techup
 * @since 1.0 
 */


if( ! function_exists( 'techup_footer_start' ) ):
	function techup_footer_start(){
		$footer_sticky = get_theme_mod( 'techup_footer_sticky_opt', true ); ?>
		
		    <footer class="footer footer-one" id="foot-wdgt" style="padding: 0px !important;">

<?php }
endif; 
if( ! function_exists( 'techup_footer_sidebar' ) ):
	function techup_footer_sidebar(){ ?>
	    <div class="foot-top" style="height: calc(100vh + 180px); width: 100vw; overflow: hidden; z-index: 9; padding: 0px !important;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3309.6632911974166!2d151.2197601765195!3d-33.949787273195724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12b16a9e88eaf9%3A0x26cb380defb0dc04!2sXAG%20Australia!5e0!3m2!1sen!2sau!4v1689663545448!5m2!1sen!2sau" style="border:0; width: 100vw; height: calc(30vh + 180px); z-index: 1; position: absolute;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="container-left" style="float: left; width: 100vw; height: calc(30vh + 180px); position: relative; z-index: 9999;">
            </div>
            <div class="container-right" style="float: left; width: 100vw; height: calc(70vh + 180px); position: relative; z-index: 9999;">
            
                
            </div>
        <div class="col-sm-12" style="width: 100%; text-align: center;">
                        <?php echo '©' ?> <?php bloginfo( 'name' ); ?> <?php echo '2023' ?>
                    </div>
	<?php }
endif;

/*----------------------------------------------------------------------------------------------------------------------*/

if( ! function_exists( 'techup_footer_end' ) ):
	function techup_footer_end(){ ?>
				
		</footer> 
		</div>
<?php }
endif; 
add_action( 'techup_footer', 'techup_footer_start', 5  );
add_action( 'techup_footer', 'techup_footer_sidebar', 10  );
add_action( 'techup_footer', 'techup_footer_site_info', 10  );
add_action( 'techup_footer', 'techup_footer_end', 20 );
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
		
		    <footer class="footer footer-one" id="foot-wdgt" style="padding: 0px !important; height: calc(50vh - 180px) !important; ">

<?php }
endif; 
if( ! function_exists( 'techup_footer_sidebar' ) ):
	function techup_footer_sidebar(){ ?>
	    <div class="foot-top" style="height: calc(50vh - 180px); width: 100vw; overflow: hidden; z-index: 9; padding: 0px !important;">
                
            <div class="container-left" style="float: left; width: 100vw; height: 10%; position: relative; z-index: 9999;">
            </div>
            <div class="container-right" style="float: left; width: 100vw; height: 80%; position: relative; z-index: 9999;">
            
                
            </div>
        <div class="col-sm-12" style="width: 100%; text-align: center; height: 10%;">
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
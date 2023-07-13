<script>
// Initialize and add the map
let map;

async function initMap() {
  // The location of Uluru
  const position = { lat: -25.344, lng: 131.031 };
  // Request needed libraries.
  //@ts-ignore
  const { Map } = await google.maps.importLibrary("maps");
  const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

  // The map, centered at Uluru
  map = new Map(document.getElementById("map"), {
    zoom: 4,
    center: position,
    mapId: "DEMO_MAP_ID",
  });

  // The marker, positioned at Uluru
  const marker = new AdvancedMarkerElement({
    map: map,
    position: position,
    title: "Uluru",
  });
}

initMap();
</script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script type="module" src="./index.js"></script>

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
		
		    <footer class="footer footer-one" id="foot-wdgt">

<?php }
endif; 
if( ! function_exists( 'techup_footer_sidebar' ) ):
	function techup_footer_sidebar(){ ?>
	    <div class="foot-top" style="height: calc(100% - 60px);">
            <div class="container">
            <div id="map" style="height: 100%;"></div>
            </div>
        </div>
	<?php }
endif; 
if( ! function_exists( 'techup_footer_site_info' ) ):
	function techup_footer_site_info(){ ?>
		<div class="foot-bottom" style="padding: 0px !important; box-shadow: none; height: 60px;">
            <div class="container" style="height: 60px; line-height: 60px;">
                <div class="row">
                    <div class="col-sm-12">
                        <?php echo '©' ?> <?php bloginfo( 'name' ); ?> <?php echo '2023' ?>
                    </div>
                </div>
            </div>
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
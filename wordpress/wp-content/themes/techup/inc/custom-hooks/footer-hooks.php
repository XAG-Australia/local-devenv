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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3309.6632911974166!2d151.2197601765195!3d-33.949787273195724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12b16a9e88eaf9%3A0x26cb380defb0dc04!2sXAG%20Australia!5e0!3m2!1sen!2sau!4v1689663545448!5m2!1sen!2sau" style="border:0; width: 100vw; height: calc(100vh + 180px); z-index: 1; position: absolute;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="container-left" style="float: left; width: 66.66vw; height: calc(100vh + 180px); position: relative; z-index: 9999;">
            </div>
            <div class="container-right" style="float: left; width: 33.33vw; height: calc(100vh + 180px); position: relative; z-index: 9999;">
            <h2 class="section-title" style="font-size: 22px; text-align: left; color: #FFFFFF; font-weight: 300 !important; font-family: 'Open Sans', sans-serif !important; letter-spacing: 16px; width: 100%; margin-left: auto; margin-right: auto; margin-top: 50px; margin-bottom: 50px; padding-bottom: 25px; border-bottom: solid 4px #FFFFFF;">CONTACT XAG</h2>
            <form action="/action_page.php">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">

                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                    <label for="country">Country</label>
                    <select id="country" name="country">
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                    </select>

                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                    <input type="submit" value="Submit">
            </form>
            <div class="social" style="width: 300px; height: 25px; margin-top: 35px; margin-bottom: 35px; margin-left: auto; margin-right: auto;">
                <ul style="width: 205px; height: 25px; margin-left: auto; margin-right: auto;">
                        <li style="width: 25px; height: 25px; float: left; margin-right: 20px; background: url('/wp-content/uploads/2023/07/social-fb.png') no-repeat transparent; background-size: 25px; background-position: center;"></li>
                        <li style="width: 25px; height: 25px; float: left; margin-right: 20px; background: url('/wp-content/uploads/2023/07/social-ig.png') no-repeat transparent; background-size: 25px; background-position: center;"></li>
                        <li style="width: 25px; height: 25px; float: left; margin-right: 20px; background: url('/wp-content/uploads/2023/07/social-tw.png') no-repeat transparent; background-size: 25px; background-position: center;"></li>
                        <li style="width: 25px; height: 25px; float: left; margin-right: 20px; background: url('/wp-content/uploads/2023/07/social-yt.png') no-repeat transparent; background-size: 25px; background-position: center;"></li>
                        <li style="width: 25px; height: 25px; float: left; background: url('/wp-content/uploads/2023/07/social-in.png') no-repeat transparent; background-size: 25px; background-position: center;"></li>
                </ul>
                
        </div>
        <div class="col-sm-12" style="width: 100%; text-align: center;">
                        <?php echo '©' ?> <?php bloginfo( 'name' ); ?> <?php echo '2023' ?>
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
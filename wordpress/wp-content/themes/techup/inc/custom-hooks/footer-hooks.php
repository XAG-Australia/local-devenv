<style>
    input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border-bottom: 2px solid #fafafa !important;
  box-sizing: border-box;
  margin-top: 20px;
  margin-bottom: 20px;
  resize: vertical;
  font-family: 'Roboto Condensed', sans-serif;
  background: transparent !important;
  border: 0px;
}

input[type=text]:hover, select:hover, textarea:hover {
    border-bottom: 2px solid #c01920 !important;
    border: 0px;
}

input[type=submit] {
  background-color: #c01920;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-top: 50px;
  font-family: 'Roboto Condensed', sans-serif;
}

input[type=submit]:hover {
  background-color: #ffffff;
}

.container-right {
  border-radius: 5px;
  background-color: #232323;
  padding: 50px;
  padding-top: 0px !important;
  font-family: 'Roboto Condensed', sans-serif;
}

.container-right label {
    margin-top: 20px;
    margin-bottom: 20px;
}
</style>
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
		
		    <footer class="footer footer-one" id="foot-wdgt" style="padding: 50px !important;">

<?php }
endif; 
if( ! function_exists( 'techup_footer_sidebar' ) ):
	function techup_footer_sidebar(){ ?>
<div class="footer-section" style="height: 100%; width: 100%">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3309.6632911974166!2d151.2197601765195!3d-33.949787273195724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12b16a9e88eaf9%3A0x26cb380defb0dc04!2sXAG%20Australia!5e0!3m2!1sen!2sau!4v1689663545448!5m2!1sen!2sau" style="border:0; width: 100vw; height: 100vh; z-index: 1;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	    <div class="foot-top" style="height: 100%; z-index: 999;">
            <div class="container-left" style="float: left; width: 50%; height: 100%;">
            </div>
            <div class="container-right" style="float: left; width: 50%; height: 100%;">
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
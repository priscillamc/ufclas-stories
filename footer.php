<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UF CLAS Stories
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div id="institutional-footer" class="container_24">
        	<div class="footer-logo grid_6 push_18">
                <a href="http://www.ufl.edu/"><img src="<?php bloginfo('template_url'); ?>/images/uf_logo_full.png" alt="University of Florida" /></a>
            </div>
            <div id="footer-links" class="grid_18 pull_6">
                <ul>
                    <li><a href="https://webmail.ufl.edu/">WebMail</a></li>
                    <li><a href="https://lss.at.ufl.edu/">e-Learning</a></li>
                    <li><a href="http://www.isis.ufl.edu/">ISIS</a></li>
                    <li><a href="https://my.ufl.edu/ps/signon.html">MyUFL</a></li>
                    <li><a href="http://campusmap.ufl.edu/">Campus Map</a></li>
                    <li><a href="http://news.ufl.edu/">News</a></li>
                    <li><a href="http://calendar.ufl.edu/">Calendar</a></li>
                    <li><a href="https://phonebook.ufl.edu/">Directory</a></li>
                    <li><a href="http://www.ufl.edu/websites/">Web Site Listing</a></li>
                    <li><a href="http://www.questions.ufl.edu/">Ask UF</a></li>
                </ul>
                <ul>
                    <li><a href="http://assistive.usablenet.com/tt/<?php if (is_home() || is_404()) { echo esc_url(home_url()); } else { echo esc_url(get_permalink( $post->ID )); } ?>" accesskey="t" title="Text-only version of this website">Text-only Version</a></li>
                    <li><a href="http://www.ufl.edu/disability/">Disability Services</a></li>
                    <li><a href="http://privacy.ufl.edu/privacystatement.html">Privacy Policy</a></li>
                    <li><a href="http://regulations.ufl.edu/">Regulations</a></li>
                    <li><a href="mailto:<?php echo get_option('admin_email'); ?>">Contact Webmaster</a></li>
                    <li><a href="https://www.uff.ufl.edu/OnlineGiving/Advanced.asp">Make a Gift</a></li>
                </ul>
                <ul>
                    <li>&copy; <?php echo date('Y'); ?> <a href="http://www.ufl.edu/">University of Florida</a>, Gainesville, FL 32611; (352) 392-3261</li>
                    <?php
                        if ( is_home() || is_404() ) {
                            ?> <li>Site Updated <?php ufl_site_last_updated(); ?></li> <?php
                        } else {
                            ?> <li>Page Updated <?php the_modified_time('F j, Y'); ?></li> <?php
                        }
                    ?>
                </ul>
            
                <p>This page uses <a href="http://www.google.com/analytics/">Google Analytics</a> (<a href="http://www.google.com/intl/en_ALL/privacypolicy.html">Google Privacy Policy</a>)</p>
                
              </div><!-- end #footer-links -->
        </div><!-- end institutional footer container -->
        
        <div class="site-info container_24">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'ufclas-stories' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'ufclas-stories' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'ufclas-stories' ), 'UF CLAS Stories', '<a href="http://it.clas.ufl.edu/" rel="designer">CLAS IT</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

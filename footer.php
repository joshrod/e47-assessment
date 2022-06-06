        <footer class="footer-main">
            <div class="primary-container footer-container">
                <div class="footer-company-info">
                    <div class="footer-company-logo-container">
                        <img src="<?php the_field('business_logo', 'option'); ?>" alt="InStream Logo with Company Name Beside It"
                            class="img-responsive">
                    </div>
                    <?php if ( get_field('footer_paragraph', 'option') ) { ?>
                        <p><?php the_field('footer_paragraph', 'option'); ?></p>
                    <?php } ?>
                    <div class="footer-company-copyright">
                        <p>©<?php echo date('Y'); ?> InStream, LLC. All Rights Reserved.</p>
                        <a href="javascript:void(0);">Privacy Policy</a>
                    </div>
                </div>
                <div class="footer-navs">
                    <div class="footer-navs-container">
                        <nav class="footer-primary-nav">
                            <?php 
                                wp_nav_menu( array(
                                    'theme_location' => 'menu-2'
                                ));
                            ?>
                        </nav>
                        <nav class="footer-secondary-nav">
                            <a href="/why-instream" class="bolded-link">Why InStream?</a>
                            <?php 
                                wp_nav_menu( array(
                                    'theme_location' => 'menu-3'
                                ));
                            ?>
                        </nav>
                        <nav class="footer-contact-nav">
                            <div class="footer-contact-nav-top">
                                <h3>Contact Us</h3>
                                <p>Tel: <a href="tel:+1<?php the_field('business_phone_url', 'option'); ?>"><?php the_field('business_phone', 'option'); ?></a></p>
                                <p>Email: <a href="mailto:<?php the_field('business_email', 'option'); ?>"
                                        class="underlined-link"><?php the_field('business_email', 'option'); ?></a></p>
                                <a href="javascript:void(0);" class="footer-contact-nav-cta">Let's Talk</a>
                            </div>
                            <div class="footer-contact-nav-social">
                                <h3>Follow InStream</h3>
                                <div class="footer-contact-nav-social-container">
                                    <?php if ( get_field('facebook_url', 'option') ) { ?>
                                    <a href="<?php the_field('facebook_url', 'option'); ?>" target="_blank">
                                        <svg id="facebook_icon" data-name="facebook icon" xmlns="http://www.w3.org/2000/svg" width="10.407" height="19.345" viewBox="0 0 10.407 19.345">
                                            <path id="Icon_zocial-facebook" data-name="Icon zocial-facebook" d="M13.257,10.388V6.694h2.98V4.836a4.861,4.861,0,0,1,1.305-3.424A4.152,4.152,0,0,1,20.7,0h2.96V3.695H20.7a.652.652,0,0,0-.522.319,1.3,1.3,0,0,0-.232.783v1.9h3.714v3.694H19.95v8.957H16.236V10.388Z" transform="translate(-13.257)" fill="#fff"/>
                                        </svg>

                                    </a>
                                    <?php } 
                                        if ( get_field('twitter_url', 'option') ) {
                                    ?>
                                    <a href="<?php the_field('twitter_url', 'option'); ?>" target="_blank">
                                        <svg id="twitter_icon" data-name="twitter icon" xmlns="http://www.w3.org/2000/svg" width="23.818" height="19.345" viewBox="0 0 23.818 19.345">
                                            <path id="Icon_awesome-twitter" data-name="Icon awesome-twitter" d="M21.37,8.2c.015.212.015.423.015.635A13.794,13.794,0,0,1,7.5,22.725,13.8,13.8,0,0,1,0,20.534a10.1,10.1,0,0,0,1.179.06,9.776,9.776,0,0,0,6.06-2.086,4.89,4.89,0,0,1-4.564-3.385A6.156,6.156,0,0,0,3.6,15.2a5.163,5.163,0,0,0,1.285-.166A4.882,4.882,0,0,1,.967,10.242v-.06a4.916,4.916,0,0,0,2.206.62A4.889,4.889,0,0,1,1.662,4.272,13.876,13.876,0,0,0,11.728,9.381a5.511,5.511,0,0,1-.121-1.118,4.886,4.886,0,0,1,8.448-3.34,9.611,9.611,0,0,0,3.1-1.179,4.868,4.868,0,0,1-2.146,2.69,9.786,9.786,0,0,0,2.811-.756A10.493,10.493,0,0,1,21.37,8.2Z" transform="translate(0 -3.381)" fill="#fff"/>
                                        </svg>
                                    </a>
                                    <?php } 
                                        if ( get_field('instagram_url', 'option') ) {
                                    ?>
                                    <a href="<?php the_field('instagram_url', 'option'); ?>" target="_blank">
                                        <svg id="insta_icon" data-name="insta icon" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19">
                                            <path id="Subtraction_5" data-name="Subtraction 5" d="M14.251,19h-9.5A4.756,4.756,0,0,1,0,14.248v-9.5A4.756,4.756,0,0,1,4.749,0h9.5A4.756,4.756,0,0,1,19,4.751v9.5A4.756,4.756,0,0,1,14.251,19ZM9.542,4.708a4.778,4.778,0,0,0-2.482.7,4.755,4.755,0,1,0,3.177-.649A5.234,5.234,0,0,0,9.542,4.708Zm4.475-1.827a1.235,1.235,0,1,0,.18.015A1.059,1.059,0,0,0,14.017,2.881ZM9.542,12.308a2.848,2.848,0,1,1,0-5.7,3.327,3.327,0,0,1,.416.027,2.851,2.851,0,0,1,.863,5.366A2.866,2.866,0,0,1,9.542,12.308Z" fill="#fff"/>
                                        </svg>
                                    </a>
                                    <?php } 
                                        if ( get_field('linkedin_url', 'option') ) {
                                    ?>
                                    <a href="<?php the_field('linkedin_url', 'option'); ?>" target="_blank">
                                        <svg id="linkedin_icon" data-name="linkedin icon" xmlns="http://www.w3.org/2000/svg" width="19.345" height="19.345" viewBox="0 0 19.345 19.345">
                                            <path id="Icon_awesome-linkedin" data-name="Icon awesome-linkedin" d="M17.963,2.25H1.377A1.388,1.388,0,0,0,0,3.645V20.2a1.388,1.388,0,0,0,1.377,1.395H17.963A1.391,1.391,0,0,0,19.345,20.2V3.645A1.391,1.391,0,0,0,17.963,2.25ZM5.847,18.831H2.979V9.6H5.851v9.232ZM4.413,8.338A1.662,1.662,0,1,1,6.075,6.676,1.663,1.663,0,0,1,4.413,8.338ZM16.594,18.831H13.727V14.34c0-1.071-.022-2.448-1.49-2.448-1.494,0-1.723,1.166-1.723,2.371v4.568H7.647V9.6H10.4V10.86h.039a3.02,3.02,0,0,1,2.716-1.49c2.9,0,3.441,1.913,3.441,4.4Z" transform="translate(0 -2.25)" fill="#fff"/>
                                        </svg>
                                    </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </footer>

<?php
    /*Call any footer widgets or other things pulled in at the footer hook, plus our theme JS*/
    wp_footer();
?>


    </body>

</html>

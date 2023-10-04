<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    echo '<h2>' . get_bloginfo('name') . '</h2>';
                }
                ?>
            </div>
            <div class="footer-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_class' => 'footer-menu',
                ));
                ?>
            </div>
            <div class="footer-info">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
                <?php
                if (get_theme_mod('footer_social_icons')) {
                    // Output social media icons or links here.
                }
                ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

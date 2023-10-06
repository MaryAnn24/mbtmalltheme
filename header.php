<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php
    $custom_logo = get_theme_mod('mbtmall_custom_logo');
    $header_background_color = get_theme_mod('mbtmall_header_background_color', '#ffffff');
?>

<header class="site-header" style="background: <?php echo $header_background_color; ?>">
    <div class="container">
        <div class="site-branding">
            
            <?php
            // if (has_custom_logo()) {
            //     the_custom_logo();
            // } else {
            //     echo '<h1 class="site-title"><a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a></h1>';
            //     echo '<p class="site-description">' . get_bloginfo('description') . '</p>';
            // }
            // Display the custom logo if available.
if ($custom_logo) {
    echo '<div class="custom-logo"><img src="' . esc_url($custom_logo) . '" alt="' . get_bloginfo('name') . '"></div>';
} else {
    echo '<h1>' . get_bloginfo('name') . '</h1>';
}
            ?>
        </div>
        
        <nav class="site-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'primary-menu',
            ));
            ?>
        </nav>
    </div>
</header>


<div id="content" class="site-content">

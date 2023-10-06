<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mtbmalltheme
 */

get_header(); // Include the header template.
?>

<main id="primary" class="site-main">
    <section class="error-404 not-found">
        <header class="page-header">
            <h1 class="page-title"><?php esc_html_e('404 - Page Not Found', 'mtbmalltheme'); ?></h1>
        </header>
        <div class="page-content">
            <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'mtbmalltheme'); ?></p>
            <?php get_search_form(); // Display a search form. ?>
        </div>
    </section>
</main>

<?php
get_sidebar(); // Include the sidebar template.
get_footer(); // Include the footer template.

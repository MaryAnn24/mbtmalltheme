<?php
/**
 * The template for displaying individual pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mtbmalltheme
 */

get_header(); // Include the header template.

while (have_posts()) :
    the_post();
    ?>
    <article <?php post_class(); ?>>
        <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
        <?php
        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'my-custom-theme'),
            'after'  => '</div>',
        ));
        ?>
    </article>
    <?php
endwhile;

get_sidebar(); // Include the sidebar template.
get_footer(); // Include the footer template.

<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme.
 * It is used to display a page when nothing more specific matches a query.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mtbmalltheme
 */

get_header(); // Include the header template.

if (have_posts()) :
    while (have_posts()) :
        the_post();
        ?>
        <article <?php post_class(); ?>>
            <header class="entry-header">
                <h2 class="entry-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
            </header>
            <div class="entry-content">
                <?php the_excerpt(); ?>
            </div>
        </article>
        <?php
    endwhile;

    the_posts_pagination();

else :
    ?>
    <p><?php esc_html_e('No posts found.', 'my-custom-theme'); ?></p>
<?php
endif;

get_sidebar(); // Include the sidebar template.
get_footer(); // Include the footer template.

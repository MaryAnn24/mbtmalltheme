<?php
/**
 * The template for displaying a single post.
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
            <div class="entry-meta">
                <span class="posted-on">Posted on <?php echo get_the_date(); ?></span>
                <span class="byline"> by <?php the_author_posts_link(); ?></span>
            </div>
        </header>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
        <footer class="entry-footer">
            <?php
            if (has_category()) {
                echo '<div class="cat-links">Categories: ' . get_the_category_list(', ') . '</div>';
            }

            if (has_tag()) {
                echo '<div class="tags-links">Tags: ' . get_the_tag_list('', ', ') . '</div>';
            }
            ?>
        </footer>
    </article>
    <?php
endwhile;

get_sidebar(); // Include the sidebar template.
get_footer(); // Include the footer template.

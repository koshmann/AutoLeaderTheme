<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package autoleader
 */

get_header();
?>


<section class="entry-header">

    <div class="bg">
        <img src="/wp-content/themes/autoleader/assets/blog-bg.jpg" alt="">
        <div class="bg-overlay"></div>
    </div>

    <div class="title dark">
        <h1> <?php the_archive_title() ?> </h1>

        <div class="breadcrumbs">
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb();
                }
            ?>
        </div>
    </div>

</section>


<section class="posts-index">

    <?php
                if ( have_posts() ) : ?>
    <div class="posts-grid">

        <?php while ( have_posts() ) : ?>
        <?php the_post(); ?>

        <div class="post dark">
            <div class="header">
                <h3>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
                <p class="excerpt"> <?php the_excerpt() ?> </p>
            </div>
            <div class="footer">
                <hr>
                <div class="date"> <?php echo get_the_date(); ?> </div>
                <div class="actions">

                    <?php if ( get_field("file-for-download") ) { ?>
                    <a href="<?php the_field("file-for-download"); ?>" class="download">
                        <svg width="42" height="42" fill="none" viewBox="0 0 42 42">
                            <rect width="41" height="41" x="-.5" y=".5" fill="#828282" rx="20.5"
                                transform="matrix(-1 0 0 1 41 0)" />
                            <path stroke="#fff" d="M21 13v12m0 0l4-3m-4 3l-4-3m-4 7h16" />
                            <rect width="41" height="41" x="-.5" y=".5" stroke="#4F4F4F" rx="20.5"
                                transform="matrix(-1 0 0 1 41 0)" /></svg>
                    </a>
                    <?php } ?>

                    <a href="<?php the_permalink(); ?>" class="view">
                        <svg width="42" height="42" fill="none" viewBox="0 0 42 42">
                            <rect width="42" height="42" fill="#E71923" rx="21" transform="matrix(-1 0 0 1 42 0)" />
                            <path stroke="#fff" stroke-linecap="round"
                                d="M24.875 22.714c0 2.082-1.725 3.786-3.875 3.786s-3.875-1.704-3.875-3.786c0-2.08 1.725-3.785 3.875-3.785s3.875 1.704 3.875 3.785zM14 18.429C15.453 16.37 18.045 15 21 15s5.547 1.37 7 3.429" />
                        </svg>
                    </a>

                </div>
            </div>
        </div>

        <?php endwhile; ?>

    </div>

    <div class="pagination">
        <?php wpex_pagination(); ?>
    </div>

    <?php else :
        get_template_part( 'template-parts/content', 'none' );
    endif; ?>

</section>

<?php
get_footer();
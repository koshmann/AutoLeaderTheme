<?php
/**
 * The single post template file
 *
 *
 * @package autoleader
 */

get_header();
?>

<section class="entry-header">

    <div class="bg">
        <img src="
        <?php
        if ( has_post_thumbnail() ) {
            echo get_the_post_thumbnail_url( get_the_ID(), 'full' );
        }
        else {
            echo '/wp-content/themes/autoleader/assets/blog-bg.jpg';
        }
        ?>
        " alt="">
        <div class="bg-overlay"></div>
    </div>

    <div class="title dark">
        <h1> <?php the_title(); ?> </h1>

        <div class="breadcrumbs">
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb();
                }
            ?>
        </div>
    </div>

    

</section>

<section class="post-body">

    <div class="all-news-btn">
        <a href="/news">Смотреть все новости</a>
    </div>

    <div class="content">
        <?php the_content(); ?>
    </div>
</section>

<?php
get_footer();
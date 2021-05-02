<?php
/**
 * Template part for displaying section 9 on homepage
 *
 * @package Linza
 */
?>

<section class="sec-9 blog">
    <div id="blog" class="section-ankor"></div>
    
    <div class="bg"></div>

    <div class="title-grid">
        <div class="col-title">
            <h2><span>Актуальные</span> новости за&nbsp;месяц</h2>
        </div>
        <div class="col-cta">
            <a href="/news">
                <button>
                    <span>За всё время</span>
                    <svg width="8" height="14" fill="none" viewBox="0 0 8 14">
                        <path stroke="#fff" d="M1 13l6-6-6-6" /></svg>
                </button>
            </a>
        </div>

    </div>

    <div class="posts-outer">
        <div class="posts swiper-container">
            <div class="posts-inner swiper-wrapper">

                <?php

                $args = array(
                    'post_type' => 'post',
                    'post_count' => 9,
                );

                $blog_query = new WP_Query( $args );
 
                // The Loop
                if ( $blog_query->have_posts() ) {
                    while ( $blog_query->have_posts() ) {
                        $blog_query->the_post();
                        ?>
                        <div class="slide swiper-slide">
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
                                                    <rect class="dark-circle-bg" width="41" height="41" x="-.5" y=".5" fill="#333" rx="20.5"
                                                        transform="matrix(-1 0 0 1 41 0)" />
                                                    <path stroke="#fff" d="M21 13v12m0 0l4-3m-4 3l-4-3m-4 7h16" />
                                                    <rect width="41" height="41" x="-.5" y=".5" stroke="#4F4F4F" rx="20.5"
                                                        transform="matrix(-1 0 0 1 41 0)" />
                                                    </svg>
                                            </a>
                                        <?php } ?>

                                        <a href="<?php the_permalink(); ?>" class="view">
                                            <svg width="42" height="42" fill="none" viewBox="0 0 42 42">
                                                <rect width="42" height="42" fill="#E71923" rx="21"
                                                    transform="matrix(-1 0 0 1 42 0)" />
                                                <rect class="white-circle-bg" width="42" height="42" fill="#fff" rx="21"
                                                    transform="matrix(-1 0 0 1 42 0)" />
                                                <path stroke="#fff" stroke-linecap="round"
                                                    d="M24.875 22.714c0 2.082-1.725 3.786-3.875 3.786s-3.875-1.704-3.875-3.786c0-2.08 1.725-3.785 3.875-3.785s3.875 1.704 3.875 3.785zM14 18.429C15.453 16.37 18.045 15 21 15s5.547 1.37 7 3.429" />
                                            </svg>
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php 
                    }
                } else {
                    // no posts found
                } ?>

        
            </div>
        </div>
    </div>

    <div class="nav">
        <div class="posts-nav">
            <div class="progress">
                <hr>
            </div>
            <div class="arrows">
                <div class="arrow prev">
                    <svg width="8" height="14" fill="none" viewBox="0 0 8 14">
                        <path stroke="#333" d="M7 1L1 7l6 6"></path>
                    </svg>
                </div>
                <div class="arrow next">
                    <svg width="8" height="14" fill="none" viewBox="0 0 8 14">
                        <path stroke="#333" d="M1 1l6 6-6 6"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

</section>
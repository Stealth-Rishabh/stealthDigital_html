<?php /* Template Name: blog */  ?>

<?php get_header(); ?>
<div id="smooth-wrapper">
    <div id="smooth-content">
        <!-- ==== main start ==== -->
        <main>
            <!-- ==== banner start ==== -->
            <section class="cmn-banner bg-img" style="background: url('https://www.stealthdigital.in/assets/images/banner/cmn-banner-bg.png')">
                <div class="container">
                    <div class="row gaper align-items-center">
                        <div class="col-12 col-lg-5 col-xl-7">
                            <div class="text-center text-lg-start">
                                <h2 class="title title-anim">Blogs</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="https://www.stealthdigital.in">
                                                <i class="fa-solid fa-house"></i>
                                                Home
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            <i class="fa-solid fa-book me-1"></i>
                                            Blogs
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 col-xl-5">
                            <div class="text-center text-lg-start">
                                <p class="primary-text">
                                    Browse through our latest blog posts and articles, where
                                    our team shares insights, tips and knowledge on digital
                                    marketing, web development and design.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ==== / banner end ==== -->

            <!-- ==== blog section start ==== -->
            <section class="section blog-main fade-wrapper">
                <div class="container">
                    <div class="row gaper">
                        <div class="col-12 col-xl-10 m-auto">
                            <div class="blog-main__content">
                                <?php
                                $paged = (get_query_var('page')) ? get_query_var('page') : 1;

                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 6,
                                    'paged' => $paged,
                                    'order' => 'DESC'
                                );

                                $latest_posts_query = new WP_Query($args);

                                if ($latest_posts_query->have_posts()) :
                                    while ($latest_posts_query->have_posts()) : $latest_posts_query->the_post();
                                ?>
                                        <div class="blog-main__single fade-top">
                                            <div class="thumb">
                                                <div class="thumb-link">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php 
                                                        if(has_post_thumbnail()) {
                                                            the_post_thumbnail('full', array('class' => 'img-fluid'));
                                                        }
                                                        ?>
                                                    </a>
                                                </div>
                                                <div class="meta">
                                                    <div class="meta__left">
                                                        <p>
                                                            <strong>Written by:</strong>
                                                            <?php the_author(); ?>
                                                        </p>
                                                        <span></span>
                                                        <p><?php echo get_the_date('d/m/Y'); ?></p>
                                                    </div>
                                                    <div class="meta__right">
                                                        <?php
                                                        $categories = get_the_category();
                                                        foreach($categories as $category) {
                                                            echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h4 class="h4">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php echo wp_trim_words(get_the_title(), 15, '...'); ?>
                                                    </a>
                                                </h4>
                                                <p>
                                                    <?php echo wp_trim_words(get_the_content(), 30, '...'); ?>
                                                </p>
                                                <div class="cta">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                else :
                                    echo '<p>No posts found.</p>';
                                endif;
                                ?>

                                <div class="pagination-wrapper">
                                    <ul class="pagination">
                                        <?php
                                        echo paginate_links(array(
                                            'total' => $latest_posts_query->max_num_pages,
                                            'current' => $paged,
                                            'prev_text' => '<button class="prev-page" aria-label="Previous Page"><i class="fa-solid fa-arrow-left"></i></button>',
                                            'next_text' => '<button class="next-page" aria-label="Next Page"><i class="fa-solid fa-arrow-right"></i></button>',
                                            'type' => 'list'
                                        ));
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ==== blog section end ==== -->
        </main>

<?php get_footer(); ?>
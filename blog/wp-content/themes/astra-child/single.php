<?php get_header(); ?>

<?php while (have_posts()):
  the_post(); ?>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main>
        <!-- Banner Section -->
        <section class="cmn-banner bg-img"
          data-background="<?php echo get_template_directory_uri(); ?>/assets/images/banner/cmn-banner-bg.png">
          <div class="container">
            <div class="row gaper align-items-center">
              <div class="col-12">
                <div class="text-center text-lg-start">
                  <h2 class="title title-anim text-wrapping"><?php the_title(); ?></h2>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="https://www.stealthdigital.in">
                          <i class="fa-solid fa-house"></i>
                          Home
                        </a>
                      </li>
                      <li class="breadcrumb-item">
                        <a href="<?php echo home_url(); ?>">
                          <i class="fa-solid fa-book"></i>
                          Blog
                        </a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        <?php the_title(); ?>
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Blog Details Section -->
        <section class="section blog-main blog-details fade-wrapper">
          <div class="container">
            <div class="row gaper">
              <div class="col-12 col-xl-10 m-auto">
                <div class="blog-details__content">
                  <div class="bd-thumb fade-top">
                    <?php if (has_post_thumbnail()): ?>
                      <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                    <?php endif; ?>
                  </div>
                  <div class="bd-content">
                    <div class="bd-meta">
                      <div class="meta__left">
                        <p>
                          <strong>Written by:</strong>
                          <?php the_author(); ?>
                        </p>
                        <span></span>
                        <p><?php echo get_the_date('d/m/Y'); ?></p>
                      </div>
                    </div>
                    <div class="bd-content-info">
                      <div class="paragraph">
                        <?php the_content(); ?>
                      </div>
                    </div>
                  </div>

                  <!-- Social Share Section -->
                  <div class="bd-tags">
                    <div class="tags-right">
                      <p>Share:</p>
                      <ul class="social">
                        <li>
                          <a href="javascript:void(0);" onclick="shareOnFacebook()" aria-label="Share on Facebook"
                            title="Share on Facebook">
                            <i class="fa-brands fa-facebook"></i>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:void(0);" onclick="shareOnLinkedIn()" aria-label="Share on LinkedIn"
                            title="Share on LinkedIn">
                            <i class="fa-brands fa-linkedin"></i>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:void(0);" onclick="shareOnInstagram()" aria-label="Share on Instagram"
                            title="Share on Instagram">
                            <i class="fa-brands fa-instagram"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Related Posts Section -->
        <section class="section blog-main">
          <div class="container">
            <div class="row text-center">
              <h2 class="article-heading">More Topics</h2>
            </div>
            <div class="row gaper">
              <?php
              $related = get_posts(array(
                'category__in' => wp_get_post_categories($post->ID),
                'numberposts' => 4,
                'post__not_in' => array($post->ID)
              ));

              if ($related)
                foreach ($related as $post) {
                  setup_postdata($post);
                  ?>
                  <div class="col-lg-3 col-md-6">
                    <div class="blog__single topy-tilt">
                      <?php if (has_post_thumbnail()): ?>
                        <div class="blog__thumb">
                          <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium', array('class' => 'img-fluid')); ?>
                          </a>
                        </div>
                      <?php endif; ?>
                      <div class="blog__content">
                        <h4>
                          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h4>
                      </div>
                    </div>
                  </div>
                <?php }
              wp_reset_postdata();
              ?>
            </div>
          </div>
        </section>
      </main>

      <!-- Social Share Script -->
      <script>
        const blogUrl = "<?php the_permalink(); ?>";

        function shareOnFacebook() {
          const facebookUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(blogUrl)}`;
          window.open(facebookUrl, '_blank', 'width=600,height=400');
        }

        function shareOnLinkedIn() {
          const linkedinUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(blogUrl)}`;
          window.open(linkedinUrl, '_blank', 'width=600,height=400');
        }

        function shareOnInstagram() {
          if (navigator.clipboard) {
            navigator.clipboard.writeText(blogUrl).then(function () {
              alert("Blog URL copied to clipboard. You can paste it in your Instagram bio or Stories.");
            }).catch(function (err) {
              console.error("Failed to copy text: ", err);
              alert("Oops! Something went wrong while copying the URL.");
            });
          } else {
            alert("Your browser does not support the Clipboard API. Please copy the URL manually.");
          }
        }
      </script>

    <?php endwhile; ?>

    <?php get_footer(); ?>


              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                <header class="article-header">

                </header> <?php // end article header ?>

                <section class="entry-content cf" itemprop="articleBody">
                  <blockquote>
                  <?php
                    // the content (pretty self explanatory huh)
                    the_content();

                  </blockquote>
                </section> <?php // end article section ?>

                <footer class="article-footer">
                  <p class="byline entry-meta vcard">

                    <i class="fa fa-calendar"></i> <?php echo get_the_time(get_option('date_format')); ?>
                     | <i class="fa fa-folder"></i> <?php echo get_the_category_list(', '); ?>
                    <?php the_tags( ' | <i class="fa fa-tags"></i> ', ', ', '' ); ?>


                  </p>
                </footer> <?php // end article footer ?>

                <?php //comments_template(); ?>

              </article> <?php // end article ?>

<?php get_header(); ?>

  <main>
    <section>
      <h2>エドベースブログ</h2>
        <?php while (have_posts()) : the_post(); ?>
          <article class="postcard">
            <div class="img">
              <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail( ); ?>
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/noimage.jpg" alt="">
              <?php endif; ?>
            </div>
            <div class="desc">
              <a href="<?php the_permalink(); ?>">
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
              </a>
            </div>
          </article>
        <?php endwhile; ?>
    </section>
  </main>

<?php get_footer(); ?>
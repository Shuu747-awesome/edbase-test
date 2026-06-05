<?php get_header(); ?>

    <main class="inquiry">
      <div>
        <img src="<?php echo get_template_directory_uri(); ?>/images/form.png" alt="エドベース株式会社-お問い合わせページトップ画像">
      </div>

      <section>
        <h2>お問い合わせ</h2>
        <?php while (have_posts()):the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      </section>
    </main>
    
<?php get_footer(); ?>
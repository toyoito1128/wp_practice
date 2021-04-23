<?php get_header(); ?>
<div class="main">
  <!-- <p class="purple">New Post</p>
    <h2>新着記事</h2> -->
  <div class="container">
    <div class="container__wrap__single">
      <!-- 1 -->
      <?php if (have_posts()) : the_post(); ?>
        <!-- <a href="" class="article"> -->
          <div class="article__item">
            <div class="item__text">
              <?php if (has_category()) : ?>
                <p class="item__head-tag__single">
                  <?php echo get_the_category_list(' '); ?>
              </p>
              <?php endif; ?>
                <h3 class="article__title__single"><?php the_title(); ?></h3>
                <span><?php echo get_the_date('Y-m-d'); ?>
                </span>
            </div>
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
            <?php else : ?>
              <div class="item__head__single">
                <img src="<?php echo get_template_directory_uri(); ?>/img/blog__first.jpg" alt="" class="single__img">
              </div>
            <?php endif; ?>
              <div class="main-text">
                <?php the_content(); ?>
              </div>
          </div>
        <!-- </a> -->
      <?php endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
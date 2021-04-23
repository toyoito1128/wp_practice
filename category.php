<?php get_header(); ?>
<div class="firstview-category">
  <h1><?php single_cat_title(); ?></h1>
</div>
<main>
  <div class="main">
    <!-- <p class="purple">New Post</p>
    <h2>新着記事</h2> -->
    <div class="container">
      <div class="container__wrap">
        <!-- 1 -->
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="article">
              <div class="article__item">
                <div class="item__head">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>img/blog__first.jpg" alt="">
                  <?php endif; ?>
                  <!-- カテゴリ -->
                  <?php if (!is_category() && has_category()) : ?>
                    <p class="item__head-tag">
                      <?php $postcat = get_the_category();
                      echo $postcat[0]->name;
                      ?>
                    </p>
                  <?php endif; ?>
                </div>
                <div class="item__text">
                  <!-- タイトル -->
                  <p>
                    <?php
                    if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                      $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                      echo $title . '…';
                    } else {
                      echo $post->post_title;
                    }
                    ?>
                  </p>
                  <span><?php echo get_the_date('Y-m-d'); ?></span>
                </div>
              </div>
            </a>
          <?php endwhile; ?>
        <?php else : ?>
          <p>投稿が見つかりません。</p>
        <?php endif; ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>
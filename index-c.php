    <?php get_header(); ?>
    <div class="firstview">
      <h1>Commit to the growth <br>for everyone</h1>
    </div>
    <div class="main">
      <p class="purple">New Post</p>
      <h2>新着記事</h2>
      <div class="container">
        <div class="container__wrap">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              　　　　　　
              <!-- メインループ開始 -->
              <a href="<?php the_permalink(); ?>">
                <!-- <?php if (has_post_thumbnail()) : ?> -->
                  <!-- <?php the_post_thumbnail(); ?> -->
                <?php else : ?>
                  <div class="article__item">
                    <div class="item__head">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/blog__first.jpg" alt="">
                    <?php endif; ?>
                    <?php if (!is_category() && has_category()) : ?>
                      <p class="item__head-tag">
                        <?php $postcat = get_the_category();
                        echo $postcat[0]->name;
                        ?>
                      </p>
                    </div>
                    <?php endif; ?>
                    <div class="item__text">
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
              </a>
            <?php endwhile; ?>
          <?php else : ?>
            <p>投稿が見つかりません。</p>
          <?php endif; ?>
          <!-- <a href="">
            <div class="article__item">
              <div class="item__head">
                <img src="img/blog__first.jpg" alt="">
                <p class="item__head-tag">MySQL</p>
              </div>
              <div class="item__text">
                <p>データベースのMySQLの解説。意外と簡単</p>
                <span>2021-02-26</span>
              </div>
            </div>
          </a>
          <a href="">
            <div class="article__item">
              <div class="item__head">
                <img src="img/blog__first.jpg" alt="">
                <p class="item__head-tag">PHP</p>
              </div>
              <div class="item__text">
                <p>PHPとは何かを世界一わかりやすく解説。</p>
                <span>2021-02-26</span>
              </div>
            </div>
          </a>
          <a href="">
            <div class="article__item">
              <div class="item__head">
                <img src="img/blog__first.jpg" alt="">
                <p class="item__head-tag">JavaScript</p>
              </div>
              <div class="item__text">
                <p>プログラミングとは何かを世界一分かりやすく解説。</p>
                <span>2021-02-26</span>
              </div>
            </div>
          </a>
          <a href="">
            <div class="article__item">
              <div class="item__head">
                <img src="img/blog__first.jpg" alt="">
                <p class="item__head-tag">CSS</p>
              </div>
              <div class="item__text">
                <p>プログラミングCSSの勉強方法を特集。HTMLも</p>
                <span>2021-02-26</span>
              </div>
            </div>
          </a>
          <a href="">
            <div class="article__item">
              <div class="item__head">
                <img src="img/blog__first.jpg" alt="">
                <p class="item__head-tag">HTML</p>
              </div>
              <div class="item__text">
                <p>プログラミング学習の勉強方法を特集。挫折しない秘訣とは？</p>
                <span>2021-02-26</span>
              </div>
            </div>
          </a> -->
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
    </main>
    <?php get_footer(); ?>
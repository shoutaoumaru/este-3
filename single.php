<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>エステテンプレート2/NEWS/single</title>
  <?php get_header(); ?>
</head>

<body>
  <div class="superwrapper animsition">
    <?php get_template_part('includes/c-header'); ?>     
    <!-- /.header -->
    <div class="c-top-view">
      <img src="<?php echo get_template_directory_uri(); ?>/images/home/towel_1@pc.jpg" alt="" />
    </div>
    <!-- /.c-top-view -->
    <section class="c-news-sl">
      <div class="c-container">
        <ul class="c-news-sl__list">
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <li class="c-news-sl__block">
              <div class="c-news-sl__tit">
                <p class="c-txt-md"><?php the_title(); ?></p>
                <span class="c-news-sl__date"><?php the_date(); ?></span>
              </div>
              <div class="c-news-sl__contents">
                <p><?php the_content(); ?></p>
              </div>
            </li>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <div class="c-news-sl__link">
          <a class="more-link animsition-link" href=" <?php echo esc_url( home_url('/news')); ?>"><span class="readmore">一覧へ戻る</span></a>
        </div>
      </div>
    </section>
    <!-- /.news-top -->
    <?php get_footer(); ?>
    <!-- /.footer -->
    <!-- /.mobile-menu -->
    <!------ /.mobile-menu ----->
  </div>
  <!-- .superwrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
</body>

</html>
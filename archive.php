<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>エステテンプレート2/NEWS</title>
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
    <section class="c-news">
      <div class="c-container">
        <h3 class="c-news__title">
          <span class="c-txt-lr">News</span>
        </h3>
        <ul class="c-news__list">
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <li class="c-news__item">
              <a href="<?php the_permalink() ;?>" class="c-news__link animsition-link">
                <?php the_post_thumbnail(); ?>
                <span class="c-news__date"><?php the_date(); ?></span>
                <p class="c-txt-sm"><?php the_title(); ?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <!-- pagenesion -->
        <?php if( function_exists ("the_pagination") ) the_pagination(); ?>
      </div>
    </section>
    <!-- /.news-top -->
    <!-- .p-footer -->
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
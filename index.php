<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>エステテンプレート3 | TOP</title>
  <?php get_header(); ?>
</head>

<body class="animsition">
  <div class="superwrapper">
    <?php get_template_part('includes/c-header'); ?>     
    <!-- /.header -->
    <!-- .p-firstview -->
    <section id="firstview" class="p-firstview">
      <div class="hero">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img class="view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/top_3@sp.jpg" />
              <img class="view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/top_3@pc.jpg" />
            </div>
            <div class="swiper-slide">
              <img class="view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/top_2@sp.jpg" />
              <img class="view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/top_2@pc.jpg" />
            </div>
            <div class="swiper-slide">
              <img class="view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/top_1@sp.jpg" />
              <img class="view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/top_1@pc.jpg" />
            </div>
          </div>
        </div>
        <div class="p-firstview__textbox clip-js1 skew">
          <div class="p-firstview__text">
            We Create Special with RivRound.
          </div>
        </div>
        <div class="scrolldown-wrap">
          <a class="scrolldown" href="#">Scroll</a>
        </div>
      </div>
    </section>
    <!-- .p-concept -->
    <section id="concept" class="p-concept">
      <div class="c-container">
        <div class="p-concept-wrap">
          <div class="p-concept__img cover-slide">
            <img class="parallax-img img-zoom" src="<?php echo get_template_directory_uri(); ?>/images/home/model_2@pc.jpg" />
          </div>
          <div class="p-concept__desc appear up">
            <h2 class="p-concept__title clip-js left">
              <span class="num">01</span>
              <span class="c-title">Concept</span>
            </h2>
            <div class="p-concept__text item">
              <p class="c-txt-md item">
                皆様のオアシスでありたい。キレイと癒し、ハッピーを届けたい。
              </p>
              <p class="c-txt-sm item">
                RivRoundは、常に進化し続けます。わくわくする、楽しいことをいつも探し、
              </p>
              <p class="c-txt-sm item">
                インスピレーションを与え自分自身をもっと好きでいる為の、エイジング術を提供致します。美を求めるすべての女性の願いを叶えるため、心をこめてお手伝いさせていただきます。
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- .p-feastures -->
    <section id="features" class="p-features">
      <div class="c-container">
        <h1 class="p-features__title clip-js left">
          <span class="num">02</span>
          <span class="c-title">Features</span>
        </h1>
        <div class="p-features__wrap">
          <div class="p-features__contaier appear up">
            <div class="p-features__main item01 item">
              <div class="p-features__text-label">
                <span class="c-txt-lr">Technic</span>
              </div>
              <div class="p-features__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/face_1@pc.jpg" />
              </div>
              <div class="p-features__desc Technic parallax-up">
                <h3 class="p-features__desc-title">技術</h3>
                <p class="c-txt-sm">
                  私たちはハンドケアを重視しており、メニューの多くはオールハンドでのトリートメントです。ハンド中心のメニューだからこそ、お客さま一人ひとりのお顔立ち、肌質、ご希望に合わせたオーダーメイドのケアの高い技術にこだわっています。
                </p>
              </div>
            </div>
          </div>
          <div class="p-features__container appear up">
            <div class="p-features__main item02 item">
              <div class="p-features__text-label space">
                <span class="c-txt-lr">Space</span>
              </div>
              <div class="p-features__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/top_1@pc.jpg" />
              </div>
              <div class="p-features__desc space parallax-up">
                <h3 class="p-features__desc-title">プライベート空間</h3>
                <p class="c-txt-sm">
                  RivRoundのエステは、周りを気にせずプライベートな空間でトリートメントを提供しております。思わず眠ってしまいそうな空間で癒やしのひとときをお過ごしください。
                </p>
              </div>
            </div>
          </div>
          <div class="p-features__contaier appear up">
            <div class="p-features__main item03 item">
              <div class="p-features__text-label">
                <span class="c-txt-lr">Fancility</span>
              </div>
              <div class="p-features__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/bet.jpg" />
              </div>
              <div class="p-features__desc facility parallax-up">
                <h3 class="p-features__desc-title">
                  リラックゼーションルーム
                </h3>
                <p class="c-txt-sm">
                  トリートメント後の余韻にひたりながら、ゆったりとしたひとときをお過ごしいただくために、リラクゼーションルームをご用意しております。パウダールームではソシエおすすめのスキンケア製品をお試しいただけます。身も心も癒される至福の時間をお楽しみください。
                </p>
              </div>
            </div>
          </div>
          <div class="p-features__contaier appear up">
            <div class="p-features__main item04 item">
              <div class="p-features__text-label treatment">
                <span class="c-txt-lr">Treatment</span>
              </div>
              <div class="p-features__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/oil_1@sp.jpg" />
              </div>
              <div class="p-features__desc parallax-up">
                <h3 class="p-features__desc-title">トリートメント</h3>
                <p class="c-txt-sm">
                  RivRoundでは一人ひとりのお肌質・年齢・お悩みにピッタリのスキンケア製品を用いて、ベストなトリートメントのご提供に努めています。日々のストレスや心身のトラブルをほぐす癒やしのひとときを提供いたします。
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="more-btn item">
          <a href=" <?php echo esc_url( home_url('/first')); ?>" class="more-btn__link slide-bg animsition-link">
            <span class="c-txt-sm">初めての方へ</span>
            <span class="bg"></span></a>
        </div>
      </div>
    </section>
    <!-- .p-eyecatch -->
    <div class="p-eyecatch">
      <div class="p-eyecatch__image cover-slide">
        <img class="parallax-img img-zoom" src="<?php echo get_template_directory_uri(); ?>/images/home/model_1@pc.jpg" />
      </div>
    </div>
    <!-- .p-price -->
    <section class="p-price">
      <div class="p-price__flex">
        <div class="p-price__left">
          <div class="p-price__img cover-slide">
            <img class="img-zoom" src="<?php echo get_template_directory_uri(); ?>/images/home/counseling_1@pc.jpg" alt="">
          </div>
          <div class="more-btn view-pc">
            <a href="/price/price.html" class="more-btn__link slide-bg animsition-link">
              <span class="c-txt-sm">メニュー詳細へ</span>
              <span class="bg"></span></a>
          </div>
        </div>
        <div class="c-container">
          <h2 class="p-concept__title clip-js left">
            <span class="num">03</span>
            <span class="c-title">Price</span>
          </h2>
          <div class="p-price__wrap">
            <dl class="p-price__detail">
              <dt class="p-price__detail_ttl">痩身<span>Slimming</span></dt>
              <dd class="p-price__detail_cont price-tit"><span class="yen">¥</span>12,000~<span class="tax">(税込)</span>
              </dd>
            </dl>
            <dl class="p-price__detail">
              <dt class="p-price__detail_ttl">フェイシャル<span>Facial</span></dt>
              <dd class="p-price__detail_cont price-tit"><span class="yen">¥</span>12,000~<span class="tax">(税込)</span>
              </dd>
            </dl>
            <dl class="p-price__detail">
              <dt class="p-price__detail_ttl">ヘッド<span>Head</span></dt>
              <dd class="p-price__detail_cont price-tit"><span class="yen">¥</span>12,000~<span class="tax">(税込)</span>
              </dd>
            </dl>
            <dl class="p-price__detail">
              <dt class="p-price__detail_ttl">トリートメント<span>Treatment</span></dt>
              <dd class="p-price__detail_cont price-tit"><span class="yen">¥</span>12,000~<span class="tax">(税込)</span>
              </dd>
            </dl>
            <dl class="p-price__detail">
              <dt class="p-price__detail_ttl">ボディケア・マッサージ<span>Body Care</span></dt>
              <dd class="p-price__detail_cont price-tit"><span class="yen">¥</span>12,000~<span class="tax">(税込)</span>
              </dd>
            </dl>
            <div class="more-btn view-sp">
              <a href=" <?php echo esc_url( home_url('/price')); ?>" class="more-btn__link slide-bg animsition-link">
                <span class="c-txt-sm">メニュー詳細へ</span>
                <span class="bg"></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- .p-staff -->
    <section id="staff" class="p-staff">
      <div class="c-container">
        <h2 class="p-staff__title clip-js left">
          <span class="num">04</span>
          <span class="c-title">Staff</span>
        </h2>
        <div class="p-staff__wrap">
          <div class="p-staff__block appear up">
            <div class="p-staff__img item">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/staff_1@pc.jpg" />
            </div>
            <div class="p-staff__desc item">
              <h3 class="p-staff__name">
                <span class="p-staff__name__ja">利部 美紀</span>
                <span class="p-staff__name__en">Miki Ribu</span>
              </h3>
              <div class="p-staff__text">
                <p class="c-txt-sm">
                  お肌は着替えのきかない、一生付き合う宝物
                  ぜひ、自分のお肌を知り、好きになり、上手に付き合い、一生の財産を手に入れて欲しいと思っています。
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="more-btn view-sp">
          <a href=" <?php echo esc_url( home_url('/staff')); ?>" class="more-btn__link slide-bg animsition-link">
            <span class="c-txt-sm">スタッフ紹介へ</span>
            <span class="bg"></span></a>
        </div>
      </div>
    </section>
    <!-- .p-voices -->
    <section class="p-voices">
      <div class="c-container appear up">
        <h2 class="p-concept__title clip-js left">
          <span class="num">05</span>
          <span class="c-title">Voices</span>
        </h2>
        <ul>
          <li id="voice01" class="p-voices__item item">
            <div class="p-voices__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/icon-woman.png" alt="">
            </div>
            <div class="p-voices__desc">
              <p class="name c-txt-sm">R.O様 / 42才 主婦女性</p>
              <p class="tit c-txt-sm">10年くらい前に戻った感じがします。<br></p>
              <p class="desc c-txt-sm">
                当初の目的はダイエットでしたが、体重減と体脂肪低下に加えて、何よりの成果だと思うのは、肌質が変わりました。ついつい鏡をよく見るようになりました。<br>
              </p>
            </div>
          </li>
          <li id="voice02" class="p-voices__item item">
            <div class="p-voices__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/icon-woman.png" alt="">
            </div>
            <div class="p-voices__desc">
              <p class="name c-txt-sm">A.I様 / 32才 会社員女性</p>
              <p class="tit c-txt-sm">キレイを実感できる喜びを感じています!<br></p>
              <p class="desc c-txt-sm">
                久しぶりに会った友人が昔とあまり変わっていないので驚きでした。<br>その友人がエステに通っていると聞いて私も行ってみたくなりました何よりお肌のハリ・ツヤの違いには感動しました。
              </p>
            </div>
          </li>
        </ul>
        <div class="more-btn item">
          <a href=" <?php echo esc_url( home_url('/faq')); ?>" class="more-btn__link slide-bg animsition-link">
            <span class="c-txt-sm">よくあるご質問へ</span>
            <span class="bg"></span></a>
        </div>
      </div>
    </section>
    <!-- .p-access -->
    <section class="p-access">
      <div class="c-container">
        <h2 class="p-concept__title clip-js left">
          <span class="num">06</span>
          <span class="c-title">ACCESS</span>
        </h2>
        <div class="p-access__wrap appear up">
          <div class="p-access__img item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/bet.jpg
            " alt="">
          </div>
          <div class="p-access__txt item">
            <div class="p-access__desc">
              <p class="c-txt-sm">住所:福岡県福岡市博多区3-27-25-9F</p>
              <a href="tel:092-686-7954" class="tel">
                <span class="c-txt-sm">電話番号:0120-123-456</span>
              </a>
              <p class="c-txt-sm">定休日:水曜日</p>
              <p class="c-txt-sm">平日:9:00~20:00</p>
              <p class="c-txt-sm">土日祝:9:00~19:00</p>
            </div>
            <div class="p-access__map item">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13294.424791215797!2d130.40662633372042!3d33.58957259174761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354191942250e0dd%3A0x7a79d2c5edd8fafe!2zUml2Um91bmQg5qCq5byP5Lya56S-!5e0!3m2!1sja!2sjp!4v1634181349900!5m2!1sja!2sjp"
                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="more-btn">
              <a target="_blank" href="https://goo.gl/maps/dtVSzDV7JT8DrTzo6"
                class="more-btn__link slide-bg animsition-link">
                <span class="c-txt-sm">Google Map</span>
                <span class="bg"></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.p-instagram -->
    <section id="instagram" class="p-instagram">
      <div class="c-container appear up">
        <h1 class="p-staff__title clip-js left">
          <span class="num">07</span>
          <span class="c-title">Instagram</span>
        </h1>
        <div class="p-instagram__img item">
          <a href="https://www.instagram.com/" class="animtion-link" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/este_3.jpg" alt="" />
          </a>
          <a href="https://www.instagram.com/" class="animtion-link" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/head.jpg" alt="" />
          </a>
          <a href="https://www.instagram.com/" class="animtion-link" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/towel_1@sp.jpg" alt="" />
          </a>
        </div>
        <div class="more-btn">
          <a target="_blank" href="https://www.instagram.com/?hl=ja" class="more-btn__link slide-bg">
            <span class="c-txt-sm">投稿を見る</span>
            <span class="bg"></span></a>
        </div>
      </div>
    </section>
    <!-- .p-news -->
    <section id="news" class="p-news">
      <div class="c-container">
        <h2 class="p-news__tit clip-js left">
          <span class="num">08</span>
          <span class="c-title">News</span>
        </h2>
        <div class="p-news__wrapper appear up">
          <ul class="p-news__list item">
            <?php query_posts('posts_per_page=3'); ?>
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
              <li class="p-news__item">
                <a class="p-news__link animsition-link" href="<?php the_permalink() ;?>">
                  <span class="thumbnail"><?php the_post_thumbnail(); ?></span>
                  <span class="c-txt-sm"><?php the_date(); ?></span>
                  <p class="c-txt-sm"><?php the_title(); ?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <?php endif; ?>
          </ul>
          <div class="more-btn">
            <a href=" <?php echo esc_url( home_url('/news')); ?>" class="more-btn__link slide-bg animsition-link">
              <span class="c-txt-sm">お知らせ一覧へ</span>
              <span class="bg"></span></a>
          </div>
        </div>
      </div>
    </section>
    <?php get_footer(); ?>
    <!-- /.footer -->
    <!-- /.mobile-menu -->
  </div>
  <!-- <script src="scripts/vendor/pace.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/swiper.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/simpleParallax.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/parallax.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/hero-slider.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/text-animation.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>
</body>

</html>
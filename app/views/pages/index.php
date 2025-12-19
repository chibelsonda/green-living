<?php require APPROOT . '/views/inc/main/header.php'; ?>

<!-- MAIN -->
<main role="main">
  <!-- Main Carousel -->
  <section class="background-dark">
    <div class="carousel-fade-transition owl-carousel carousel-main carousel-nav-white carousel-wide-arrows">
      <div class="item">
        <div class="s-12 center">
          <img src="<?php echo URLROOT; ?>/public/image/slide/01-boxed.jpg" alt="">
          <div class="carousel-content">
            <div class="padding-2x">
              <div class="s-12 m-12 l-8" style="margin-left:6%">
                <p class="text-white text-s-size-20 text-m-size-40 text-l-size-60 margin-bottom-40 text-thin text-line-height-1 animate">Green Living Natures Marketing Inc.</p>
                <p class="text-white text-size-20 margin-bottom-40">Vehicle to your dreams.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="s-12 center">
          <img src="<?php echo URLROOT; ?>/public/image/slide/marketing-plan.jpg" alt="">
          <div class="carousel-content">
            <div class="padding-2x">
              <div class="s-12 m-12 l-8" style="margin-left:6%">
                <p class="text-white text-s-size-20 text-m-size-40 text-l-size-60 margin-bottom-40 text-thin text-line-height-1"></p>
                <p class="text-white text-size-16 margin-bottom-30"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section background-white">
    <div class="line">
      <div class="s-12 m-10 l-12 center">
        <h2 class="headline text-thin">Welcome to Green Living Natures Marketing Inc.</h2>
        <div class="margin">
          <div class="s-12 m-12 l-4 margin-m-bottom">
            <a class="image-hover-zoom" href="#">
              <img src="<?php echo URLROOT; ?>/public/image/office.jpg" alt="">
            </a>
          </div>
          <div class="s-12 m-12 l-8 margin-m-bottom">
            <p>
              <?php echo $data['companyProfile']->body; ?>
            </p>
            <a class="text-more-info text-primary-hover" href="<?php echo URLROOT; ?>/pages/about">Read more</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr class="break margin-top-bottom-0">

  <!-- Section 1 -->
  <section class="section background-white">
    <div class="line">
      <h2 class="headline text-thin text-s-size-10 margin-bottom-30"> Why Green Living Natures Marketing? </h2>
      <div class="margin">
        <div class="s-12 m-12 l-4 margin-m-bottom">
          <img class="margin-bottom main-img" src="<?php echo URLROOT; ?>/public/image/help.png" alt="">
          <h2 class="text-thin">Help</h2>
          <p>In our existing program, we have ONLINE Generated System and Global Generated Fund put in..</p>
          <a class="text-more-info text-primary-hover" href="#">Read more</a>
        </div>
        <div class="s-12 m-12 l-4 margin-m-bottom">
          <img class="margin-bottom main-img" src="<?php echo URLROOT; ?>/public/image/program-fund.png" alt="">
          <h2 class="text-thin">Program Fund</h2>
          <p>From first purchase of all products going to help program fund...</p>
          <a class="text-more-info text-primary-hover" href="#">Read more</a>
        </div>
        <div class="s-12 m-12 l-4 margin-m-bottom">
          <img class="margin-bottom main-img" src="<?php echo URLROOT; ?>/public/image/nature-of-business.png" alt="">
          <h2 class="text-thin">Nature of Business</h2>
          <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
          <a class="text-more-info text-primary-hover" href="#">Read more</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 2 -->
  <section class="section background-primary text-center">
    <div class="line">
      <div class="s-12 m-10 l-8 center">
        <h2 class="headline text-s-size-30">1 YEAR MONITORING SYSTEM</h2>
        <p class="text-size-20">Weekly regular purchase of any single products then you have a perfect record of 12 months.</p>
      </div>
    </div>
  </section>

  <!-- Section 3 -->
  <section class="section background-white">
    <div class="full-width">
      <div class="line">
        <h2 class="headline text-thin text-s-size-10 margin-bottom-30"> Green Living Natures Marketing Inc. Products </h2>
        <div class="line">
          <div class="margin">
            <div class="s-12 m-12 l-3 margin-bottom">
              <img class="product-img" src="<?php echo URLROOT; ?>/public/image/products/chocolate-drink.png" alt="Chocolate Drink">
              <p class="">Chocolate Drink</p>
              <span>&#8369; --</span>
              <br>
              <a class="button background-primary text-size-12 text-white text-strong margin-bottom" href="#">GET MORE INFO</a>
            </div>
            <div class="s-12 m-12 l-3 margin-bottom">
              <img class="product-img" src="<?php echo URLROOT; ?>/public/image/products/happy-hour-tablet.png" alt="Happy Hour Tablet">
              <p>Happy Hour Tablet</p>
              <span>&#8369; --</span>
              <br>
              <a class="button background-primary text-size-12 text-white text-strong margin-bottom" href="#">GET MORE INFO</a>
            </div>
            <div class="s-12 m-12 l-3 margin-bottom">
              <img class="product-img" src="<?php echo URLROOT; ?>/public/image/products/mangosteen.png" alt="Mangosteen">
              <p>Mangosteen</p>
              <span>&#8369; --</span>
              <br>
              <a class="button background-primary text-size-12 text-white text-strong margin-bottom" href="#">GET MORE INFO</a>
            </div>
            <div class="s-12 m-12 l-3 margin-bottom">
              <img class="product-img" src="<?php echo URLROOT; ?>/public/image/products/herbal-coffee-brand.png" alt="Herbal Coffee Brand">
              <p>Herbal Coffee Brand</p>
              <span>&#8369; --</span>
              <br>
              <a class="button background-primary text-size-12 text-white text-strong margin-bottom" href="#">GET MORE INFO</a>
            </div>
            <a class="text-more-info text-primary-hover" href="<?php echo URLROOT; ?>/pages/products">See All Products</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr class="break margin-top-bottom-0">

  <!-- Section 4 -->
  <section class="section background-white">
    <div class="line">
      <h2 class="text-thin headline text-center text-s-size-30 margin-bottom-50">Fast Track</h2>
      <div class="carousel-default owl-carousel carousel-wide-arrows">
        <div class="item">
          <div class="margin">
            <div class="s-12 m-12 l-6">
              <div class="margin-m-bottom">
                <div class="margin">
                  <div class="s-12 m-12 l-10 margin-m-bottom center">
                    <a class="image-hover-zoom" href="#">
                      <img class="fast-track-img" src="<?php echo URLROOT; ?>/public/image/kit/bronze-kit.png" alt="">
                    </a>
                  </div>
                  <div class="s-12 m-12 l-10 margin-m-bottom center">
                    <h3>
                      <a class="text-dark text-primary-hover" href="#">Bronze Kit</a>
                    </h3>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <a class="text-more-info text-primary-hover" href="#">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="s-12 m-12 l-6">
              <div class="">
                <div class="margin">
                  <div class="s-12 m-12 l-10 margin-m-bottom center">
                    <a class="image-hover-zoom" href="#">
                      <img class="fast-track-img" src="<?php echo URLROOT; ?>/public/image/kit/silver-kit.png" alt="">
                    </a>
                  </div>
                  <div class="s-12 m-12 l-10 center">
                    <h3>
                      <a class="text-dark text-primary-hover" href="#">Silver Kit</a>
                    </h3>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <a class="text-more-info text-primary-hover" href="#">Read more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="margin">
            <div class="s-12 m-12 l-6">
              <div class="margin-m-bottom">
                <div class="margin">
                  <div class="s-12 m-12 l-10 margin-m-bottom center">
                    <a class="image-hover-zoom" href="#">
                      <img class="fast-track-img" src="<?php echo URLROOT; ?>/public/image/kit/gold-kit.png" alt="">
                    </a>
                  </div>
                  <div class="s-12 m-12 l-10 margin-m-bottom center">
                    <h3>
                      <a class="text-dark text-primary-hover" href="#">Gold Kit</a>
                    </h3>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <a class="text-more-info text-primary-hover" href="#">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="s-12 m-12 l-6">
              <div>
                <div class="margin">
                  <div class="s-12 m-12 l-10 margin-m-bottom center">
                    <a class="image-hover-zoom" href="#">
                      <img class="fast-track-img" src="<?php echo URLROOT; ?>/public/image/kit/diamond-kit.png" alt="">
                    </a>
                  </div>
                  <div class="s-12 m-12 l-10 center">
                    <h3>
                      <a class="text-dark text-primary-hover" href="#">Diamond Kit</a>
                    </h3>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <a class="text-more-info text-primary-hover" href="#">Read more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="margin">
            <div class="s-12 m-12 l-6">
              <div class="margin-m-bottom">
                <div class="margin">
                  <div class="s-12 m-12 l-10 margin-m-bottom center">
                    <a class="image-hover-zoom" href="#">
                      <img class="fast-track-img" src="<?php echo URLROOT; ?>/public/image/kit/platinum-kit.png" alt="">
                    </a>
                  </div>
                  <div class="s-12 m-12 l-10 margin-m-bottom center">
                    <h3>
                      <a class="text-dark text-primary-hover" href="#">Platinum Kit</a>
                    </h3>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <a class="text-more-info text-primary-hover" href="#">Read more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require APPROOT . '/views/inc/main/footer.php';?>
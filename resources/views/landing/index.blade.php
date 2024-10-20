<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Home</title>
    @include('layouts.headlink')
  </head>
  <body>
    @include('layouts.loading')
    <div class="page">
      @include('layouts.header')
      <!--Swiper-->
      <!-- Bagian untuk menampilkan banner -->
      <section class="section swiper-container swiper-slider swiper-slider-1 context-dark" data-loop="true" data-autoplay="5000" data-simulate-touch="false">
        <div class="swiper-wrapper">
          @foreach ($banners as $banner)
              <div class="swiper-slide" data-slide-bg="{{ asset('storage/images/banner/' .$banner->img_banner) }}">
                  <div class="swiper-slide-caption section-lg">
                      <div class="container">
                          <div class="row">
                              <div class="col-md-9 col-lg-7 offset-md-1 offset-xxl-0">
                                  <h1>
                                      <span class="d-block" data-caption-animate="fadeInUp" data-caption-delay="100">{{ $banner->text1_banner }}</span>
                                      <span class="d-block text-light" data-caption-animate="fadeInUp" data-caption-delay="200">{{ $banner->text2_banner }}</span>
                                  </h1>
                                  <p class="lead" data-caption-animate="fadeInUp" data-caption-delay="350">{{ $banner->text3_banner }}</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          @endforeach
        </div>
        <div class="swiper-pagination-wrap">
          <div class="container">
              <div class="row">
                  <div class="col-md-9 col-lg-7 offset-md-1 offset-xxl-0">
                      <div class="swiper-pagination"></div>
                  </div>
              </div>
          </div>
        </div>
      </section>
      <!--Icon List 2-->
      <section class="section section-sm section-sm-bottom-100 bg-primary">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 wow fadeInUp">
              <div class="box-icon-2">
                <div class="icon novi-icon mercury-icon-calc"></div>
                <h5 class="title">Accounting Services</h5>
                <p class="text">We offer a full range of comprehensive accounting services to companies throughout the US and European countries.</p>
              </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
              <div class="box-icon-2">
                <div class="icon novi-icon mercury-icon-chart"></div>
                <h5 class="title">Income Tax</h5>
                <p class="text">This Service allows you to submit and view your tax returns and receive instant notification of the return receipt.</p>
              </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.4s">
              <div class="box-icon-2">
                <div class="icon novi-icon mercury-icon-time-sand"></div>
                <h5 class="title">Financial Services</h5>
                <p class="text">Our company provides various financial services including insurance, wealth management, tax consulting etc.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Our Mission-->
      <section class="section bg-default section-md">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-6">
              <h2 class="title-icon"><span class="icon icon-default mercury-icon-target-2"></span><span>Our <span class="text-light">Mission</span></span></h2>
              <p class="big">Our mission is to provide accounting and tax services of a superior quality. The responsive, personal attention we provide for each client, regardless how large or small, is the key to our approach.</p>
              <ul class="list-marked-2">
                <li>Providing high-quality accounting & tax services</li>
                <li>Sharing professional experience in tax management</li>
                <li>Offering full support to all our clients</li>
              </ul>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-6">
                  <!--Box counter-->
                  <div class="box-counter">
                    <div class="box-counter-main">
                      <div class="counter">750</div>
                    </div>
                    <p class="box-counter-title">Satisfied Clients</p>
                  </div>
                </div>
                <div class="col-6">
                  <!--Box counter-->
                  <div class="box-counter">
                    <div class="box-counter-main">
                      <div class="counter">68</div>
                    </div>
                    <p class="box-counter-title">Team Members</p>
                  </div>
                </div>
                <div class="col-6">
                  <!--Box counter-->
                  <div class="box-counter">
                    <div class="box-counter-main">
                      <div class="counter">243</div>
                    </div>
                    <p class="box-counter-title">Successful Cases</p>
                  </div>
                </div>
                <div class="col-6">
                  <!--Box counter-->
                  <div class="box-counter">
                    <div class="box-counter-main">
                      <div class="counter">99</div><span>%</span>
                    </div>
                    <p class="box-counter-title">Satisfaction Rate</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="parallax-container" data-parallax-img="/images/parallax-1-1920x1026.png">
        <div class="parallax-content section-xl context-dark text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-10 col-xl-9">
                <h2>Monthly <span class="text-light">Offer</span></h2>
                <div class="heading-5 font-weight-normal">Get our FREE financial consultation for your business taxes</div>
                <!--TimeCircles-->
                      <div class="countdown" data-countdown data-to="2019-12-31">
                        <div class="countdown-block countdown-block-days">
                          <svg class="countdown-circle" x="0" y="0" width="200" height="200" viewbox="0 0 200 200" data-progress-days="">
                            <circle class="countdown-circle-bg" cx="100" cy="100" r="90"></circle>
                            <circle class="countdown-circle-fg clipped" cx="100" cy="100" r="90"></circle>
                          </svg>
                          <div class="countdown-wrap">
                            <div class="countdown-counter" data-counter-days="">00</div>
                            <div class="countdown-title">days</div>
                          </div>
                        </div>
                        <div class="countdown-block countdown-block-hours">
                          <svg class="countdown-circle" x="0" y="0" width="200" height="200" viewbox="0 0 200 200" data-progress-hours="">
                            <circle class="countdown-circle-bg" cx="100" cy="100" r="90"></circle>
                            <circle class="countdown-circle-fg clipped" cx="100" cy="100" r="90"></circle>
                          </svg>
                          <div class="countdown-wrap">
                            <div class="countdown-counter" data-counter-hours="">00</div>
                            <div class="countdown-title">hours</div>
                          </div>
                        </div>
                        <div class="countdown-block countdown-block-minutes">
                          <svg class="countdown-circle" x="0" y="0" width="200" height="200" viewbox="0 0 200 200" data-progress-minutes="">
                            <circle class="countdown-circle-bg" cx="100" cy="100" r="90"></circle>
                            <circle class="countdown-circle-fg clipped" cx="100" cy="100" r="90"></circle>
                          </svg>
                          <div class="countdown-wrap">
                            <div class="countdown-counter" data-counter-minutes="">00</div>
                            <div class="countdown-title">minutes</div>
                          </div>
                        </div>
                        <div class="countdown-block countdown-block-seconds">
                          <svg class="countdown-circle" x="0" y="0" width="200" height="200" viewbox="0 0 200 200" data-progress-seconds="">
                            <circle class="countdown-circle-bg" cx="100" cy="100" r="90"></circle>
                            <circle class="countdown-circle-fg clipped" cx="100" cy="100" r="90"></circle>
                          </svg>
                          <div class="countdown-wrap">
                            <div class="countdown-counter" data-counter-seconds="">00</div>
                            <div class="countdown-title">seconds</div>
                          </div>
                        </div>
                      </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<!-- resources/views/artikel/index.blade.php -->
<section class="section bg-default section-md">
  <div class="container">
      <h2 class="title-icon">
          <span class="icon icon-default mercury-icon-news"></span>
          <span>Latest <span class="text-light">Articles</span></span>
      </h2>
      @foreach($artikels as $artikel)
      <div class="box-image-small {{ $loop->iteration % 2 == 0 ? 'box-image-small-right' : 'box-image-small-left' }}">
          <div class="item-image bg-image novi-background" style="background-image: url({{ asset('storage/images/artikel/' . $artikel->img_artikel) }})"></div>
          <div class="item-body wow {{ $loop->iteration % 2 == 0 ? 'fadeInLeft' : 'fadeInRight' }}">
              <p>{{ $artikel->created_at->format('F d, Y') }}</p>
              <h4><a href="{{ route('showartikel', $artikel->id) }}">{{ $artikel->judul_artikel }}</a></h4>
              <p class="big ul-list ol-list">{!! Str::limit(strip_tags($artikel->isi_artikel), 150) !!}</p>
          </div>
      </div>
      @endforeach
  </div>
</section>

      @include('layouts.footer')
    </div>
    @include('layouts.footlink')
  </body>
</html>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Typography</title>
    @include('layouts.headlink')
  </head>
  <body>
    @include('layouts.loading')
    <div class="page">
      @include('layouts.header')
      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image novi-background bg-primary">
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Home</a></li>
            <li class="active">Typography</li>
          </ul>
        </div>
      </section>
      <!--Base typography -->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-30 flex-lg-row-reverse justify-content-between">
            <div class="col-lg-4">
              <ul class="list-type-2">
                <li>
                  <h1><span class="text-light">Heading</span> 1</h1>
                </li>
                <li>
                  <h2><span class="text-light">Heading</span> 2</h2>
                </li>
                <li>
                  <h3><span class="text-light">Heading</span> 3</h3>
                </li>
                <li>
                  <h4>Heading 4</h4>
                </li>
                <li>
                  <h5>Heading 5</h5>
                </li>
                <li>
                  <h6>Heading 6</h6>
                </li>
              </ul>
            </div>
            <div class="col-lg-7">
              <ul class="list-type-1">
                <li>
                  <h1><span class="text-light">Heading</span> 1</h1>
                  <p class="big">Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </li>
                <li>
                  <h2><span class="text-light">Heading</span> 2</h2>
                  <p class="big">Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </li>
                <li>
                  <h3><span class="text-light">Heading</span> 3</h3>
                  <p class="big">Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </li>
                <li>
                  <h4>Heading 4</h4>
                  <p class="big">Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </li>
                <li>
                  <h5>Heading 5</h5>
                  <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </li>
                <li>
                  <h6>Heading 6</h6>
                  <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!--Blockquote-->
      <section class="section bg-gray-100 box-image-left">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="section-md section-md-bottom-50">
                <h2 class="title-icon"><span class="icon icon-default mercury-icon-speak"></span><span>Testimonials</span></h2>
                <!-- Owl Carousel-->
                <div class="owl-carousel owl-carousel-1" data-items="1" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false">
                  <blockquote class="quote quote-simple">
                    <q>Costrax is one of the best when it comes to high-quality corporate structuring, financial strategy, and tax management.</q>
                    <div class="quote-meta">
                      <div class="author">
                        <cite>Sara Parker</cite>
                      </div>
                      <div class="position">Chief executive officer</div>
                    </div>
                  </blockquote>
                  <blockquote class="quote quote-simple">
                    <q>I've had the pleasure of working with these guys for over 7 years. Over the time, they've been the best accountants to work with.</q>
                    <div class="quote-meta">
                      <div class="author">
                        <cite>Sam Jackson</cite>
                      </div>
                      <div class="position">Lawyer</div>
                    </div>
                  </blockquote>
                  <blockquote class="quote quote-simple">
                    <q>The staff members at Costrax are friendly, knowledgeable, and experienced. That’s what I like most about them.</q>
                    <div class="quote-meta">
                      <div class="author">
                        <cite>Ann White</cite>
                      </div>
                      <div class="position">Regional Manager</div>
                    </div>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="box-image-item novi-background bg-image" style="background-image: url(images/typography-1-946x485.jpg)"></div>
      </section>
      <!-- Testimonials-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50">
            <div class="col-md-10 col-lg-4">
              <h2>Testimonials</h2>
              <blockquote class="quote quote-left-align">
                <q class="big">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut interdum quam. In hac habitasse platea dictumst. Phasellus ex metus, mattis et elit et, varius semper urna.</q>
                <div class="quote-meta unit">
                  <div class="unit-left"><img class="quote-img" src="images/testimonials-1-138x138.jpg" alt="" width="138" height="69"/>
                  </div>
                  <div class="unit-body">
                    <div class="author">
                      <cite>Kate White</cite>
                    </div>
                    <div class="position">Manager</div>
                  </div>
                </div>
              </blockquote><a class="button button-primary" href="#">More testimonials</a>
            </div>
            <div class="col-lg-8">
              <h2>Customer <span class="text-light">Testimonials</span></h2>
              <div class="row row-30">
                <div class="col-sm-6">
                  <blockquote class="quote quote-center quote-center-active">
                    <q class="big">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut interdum quam. In hac habitasse platea dictumst. Phasellus ex metus, mattis et elit et.</q>
                    <div class="quote-meta"><img class="quote-img" src="images/testimonials-2-138x138.jpg" alt="" width="138" height="69"/>
                      <div class="author">
                        <cite>Victor Jackson</cite>
                      </div>
                      <div class="position">Lawyer</div>
                    </div>
                  </blockquote>
                </div>
                <div class="col-sm-6">
                  <div class="owl-item-simulate">
                    <blockquote class="quote quote-center">
                      <q class="big">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</q>
                      <div class="quote-meta"><img class="quote-img" src="images/testimonials-3-138x138.jpg" alt="" width="138" height="69"/>
                        <div class="author">
                          <cite>Olivia White</cite>
                        </div>
                        <div class="position">Business owner</div>
                      </div>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--HTML Text Elements-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 col-xl-8">
              <h5>HTML Text</h5>
              <p class="text-block"><span>Welcome to our wonderful world. This is a bold text</span>
                <mark>This is a highlighted text</mark><span>We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login</span><span class="tooltip-custom" data-toggle="tooltip" data-placement="top" title="Default text">Tooltips widgets</span><span>you will definitely have a great experience of using our web page.</span><span class="text-strike">This is a strickethrough text</span><span class="text-underline">This is an underlined text.</span><a href="#">Link</a><a class="link-hover" href="#">Hover link</a><a class="link-active" href="#">Press link</a>
              </p>
            </div>
          </div>
        </div>
      </section>
      <!--Unordered List-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50">
            <div class="col-xl-7">
              <h5>Unordered List</h5>
              <p>We specialize in a variety of services. Our aim is to deliver the top level of customer service based on your requests</p>
              <ul class="list-marked list-marked-primary">
                <li>Consulting</li>
                <li>Customer Service</li>
                <li>Innovation</li>
                <li>Management</li>
                <li>Ethics</li>
              </ul>
              <p>We hope that with our services you will receive the most personalized help in purchasing any kind of products you are looking for.</p>
            </div>
          </div>
        </div>
      </section>
      <!--Ordered List-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50">
            <div class="col-xl-7">
              <h5>Ordered List</h5>
              <p>We specialize in a variety of services. Our aim is to deliver the top level of customer service based on your requests.</p>
              <ol class="list-ordered">
                <li>Consulting</li>
                <li>Customer Service</li>
                <li>Innovation</li>
                <li>Management</li>
                <li>Ethics</li>
              </ol>
              <p>We hope that with our services you will receive the most personalized help in purchasing any kind of products you are looking for.</p>
            </div>
          </div>
        </div>
      </section>
      <!--Icon List 1-->
      <section class="section section-lg bg-default">
        <div class="container">
          <h5>Icon List 1</h5>
          <div class="row box-icon-1-wrap">
            <div class="col-md-4 box-icon-1">
              <div class="icon novi-icon mercury-icon-calc"></div>
              <h5 class="title">Accounting Services</h5>
              <p class="text">We offer a full range of comprehensive accounting services to companies throughout the US and European countries.</p>
            </div>
            <div class="col-md-4 box-icon-1">
              <div class="icon novi-icon mercury-icon-chart"></div>
              <h5 class="title">Income Tax</h5>
              <p class="text">This Service allows you to submit and view your tax returns and receive instant notification of the return receipt.</p>
            </div>
            <div class="col-md-4 box-icon-1">
              <div class="icon novi-icon mercury-icon-time-sand"></div>
              <h5 class="title">Financial Services</h5>
              <p class="text">Our company provides various financial services including insurance, wealth management, tax consulting etc.</p>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-title">
        <div class="container">
          <h5>Icon List 2</h5>
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
      <!--Icon List 3-->
      <section class="section section-lg bg-default">
        <div class="container text-center text-lg-left">
          <h5>Icon List 3</h5>
          <div class="row row-30 row-lg-50">
            <div class="col-sm-6 col-md-4">
              <div class="box-icon-3 unit flex-column flex-lg-row">
                <div class="unit-left">
                  <div class="icon novi-icon mercury-icon-wallet"></div>
                </div>
                <div class="unit-body">
                  <h5 class="title">Bookkeeping</h5>
                  <p class="text">We offer comprehensive bookkeeping services to companies throughout the US.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="box-icon-3 unit flex-column flex-lg-row">
                <div class="unit-left">
                  <div class="icon novi-icon mercury-icon-presentation-2"></div>
                </div>
                <div class="unit-body">
                  <h5 class="title">QuickBooks Consulting</h5>
                  <p class="text">As Certified QuickBooks ProAdvisors®, we have access to QuickBooks tools &amp; training.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="box-icon-3 unit flex-column flex-lg-row">
                <div class="unit-left">
                  <div class="icon novi-icon mercury-icon-calc"></div>
                </div>
                <div class="unit-body">
                  <h5 class="title">Tax Preparation Services</h5>
                  <p class="text">Costrax offers professional, friendly, and accurate tax preparation services.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="box-icon-3 unit flex-column flex-lg-row">
                <div class="unit-left">
                  <div class="icon novi-icon mercury-icon-chat"></div>
                </div>
                <div class="unit-body">
                  <h5 class="title">Business Consulting</h5>
                  <p class="text">We help you grow your business, increase revenue, and be more effective.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="box-icon-3 unit flex-column flex-lg-row">
                <div class="unit-left">
                  <div class="icon novi-icon mercury-icon-house"></div>
                </div>
                <div class="unit-body">
                  <h5 class="title">Estate Planning</h5>
                  <p class="text">Our company provides comprehensive estate planning services tailored to your goals.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="box-icon-3 unit flex-column flex-lg-row">
                <div class="unit-left">
                  <div class="icon novi-icon mercury-icon-time-sand"></div>
                </div>
                <div class="unit-body">
                  <h5 class="title">Retirement Plans</h5>
                  <p class="text">Our team of professionals will help you prepare a perfect retirement plan for the nearest future.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Image Left-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-6"><img src="images/typography-2-544x342.jpg" alt="" width="544" height="171"/>
            </div>
            <div class="col-md-6 col-xl-4">
              <h5>Image Left</h5>
              <p class="big">Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
            </div>
          </div>
        </div>
      </section>
      <!--Image Right-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-30 flex-md-row-reverse justify-content-end">
            <div class="col-md-6"><img src="images/typography-2-544x342.jpg" alt="" width="544" height="171"/>
            </div>
            <div class="col-md-6 col-xl-4">
              <h5>Image Right</h5>
              <p class="big">Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
            </div>
          </div>
        </div>
      </section>
      <!--Image Centered-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-6">
              <h5>Image Centered</h5>
              <figure class="figure-light"><img class="img-centered" src="images/typography-2-544x342.jpg" alt="" width="544" height="171"/>
              </figure>
              <p class="big">Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
            </div>
          </div>
        </div>
      </section>
      @include('layouts.footer')
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Contacts</title>
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
            <li class="active">Contacts</li>
          </ul>
        </div>
      </section>
      <!-- Contacts-->
      <section class="section section-md">
        <div class="container">
          <h2>Contacts</h2>
          <div class="row row-40">
            <div class="col-md-10 col-lg-6">
              <h5>Our main office</h5>
              <div class="group-lg group-wrap-3">
                <div class="group-item">
                  <dl class="list-terms-2">
                    <dt>Phone:</dt>
                    <dd><a href="tel:#">+1 (800) 123 1234</a></dd>
                  </dl>
                  <dl class="list-terms-2">
                    <dt>Fax:</dt>
                    <dd><a href="tel:#">+1 (800) 123 1234</a></dd>
                  </dl><a class="d-inline-block font-weight-bold big link-underline" href="mailto:#">mail@demolink.org</a>
                </div>
                <div class="group-item">
                  <ul class="list list-0">
                    <li class="text-secondary">14973 Interurban Ave <br>Suite 101 <br>New York, NY 98168</li>
                    <li>Mon-Fri: 8:00 AM - 5:00 PM</li>
                  </ul>
                </div>
              </div>
              <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
              <!--Please note that YOUR_API_KEY should replaced with your key.-->
              <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
              <div class="google-map-container google-map-container-2" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-zoom="5" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:60}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:40},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:30}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ef8c25&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b6c54c&quot;},{&quot;lightness&quot;:40},{&quot;saturation&quot;:-40}]},{}]">
                <div class="google-map"></div>
                <ul class="google-map-markers">
                  <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
                </ul>
              </div>
            </div>
            <div class="col-md-10 col-lg-6">
              <h5>Get in Touch</h5>
              <!--RD Mailform-->
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="row row-10">
                  <div class="col-md-6">
                    <div class="form-wrap">

                      <label class="form-label" for="contact-first-name">First Name</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">

                      <label class="form-label" for="contact-last-name">Last Name</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-message">Message</label>

                    </div>
                  </div>
                  <div class="col-md-7 col-xl-8">
                    <div class="form-wrap">

                      <label class="form-label" for="contact-email">E-mail</label>
                    </div>
                  </div>
                  <div class="col-md-5 col-xl-4">
                    <button class="button button-size-1 button-block button-primary" type="submit">Send</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <footer class="section footer-classic">
        <div class="footer-inner-1">
          <div class="container">
            <div class="row row-40">
              <div class="col-md-5 col-lg-3">
                <h5>Our Contacts</h5>
                <ul class="contact-list font-weight-bold">
                  <li>
                    <div class="unit unit-spacing-xs">
                      <div class="unit-left">
                        <div class="icon icon-sm icon-primary novi-icon mdi mdi-map-marker"></div>
                      </div>
                      <div class="unit-body"><a href="#">14973 Interurban Ave <br>New York, NY 98168</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs">
                      <div class="unit-left">
                        <div class="icon icon-sm icon-primary novi-icon mdi mdi-phone"></div>
                      </div>
                      <div class="unit-body"><a href="tel:#">+1 (800) 123 1234</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs">
                      <div class="unit-left">
                        <div class="icon icon-sm icon-primary novi-icon mdi mdi-clock"></div>
                      </div>
                      <div class="unit-body">
                        <ul class="list-0">
                          <li>Weekdays: 8:00–17:00</li>
                          <li>Weekends: Closed</li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul><a class="d-inline-block big" href="mailto:#">mail@demolink.org</a>
              </div>
              <div class="col-md-6 col-lg-5">
                <h5>Links</h5>
                <div class="row row-5 justify-content-between">
                  <div class="col-sm-6">
                    <ul class="footer-list big">
                      <li><a href="#">IRS Publications</a></li>
                      <li><a href="#">Record Retention Guide</a></li>
                      <li><a href="#">Tax Due Dates</a></li>
                      <li><a href="#">Tax Forms</a></li>
                      <li><a href="#">Tax Rates</a></li>
                      <li><a href="#">Where is my refund?</a></li>
                      <li><a href="#">Retirement</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-4 col-lg-6 col-xxl-5">
                    <ul class="footer-list big">
                      <li><a href="#">Retirement</a></li>
                      <li><a href="#">Investment</a></li>
                      <li><a href="#">Real Estate</a></li>
                      <li><a href="#">Insurance</a></li>
                      <li><a href="#">Tax</a></li>
                      <li><a href="#">Money</a></li>
                      <li><a href="#">Other Resources</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-lg-4">
                <h5>Partners</h5>
                <div class="row row-30 align-items-center text-center">
                  <div class="col-6 col-md-4 col-lg-6"><a class="link-image" href="#"><img src="images/footer-1-brand-1-144x70.png" alt="" width="144" height="35"/></a></div>
                  <div class="col-6 col-md-4 col-lg-6"><a class="link-image" href="#"><img src="images/footer-1-brand-2-121x68.png" alt="" width="121" height="34"/></a></div>
                  <div class="col-6 col-md-4 col-lg-6"><a class="link-image" href="#"><img src="images/footer-1-brand-3-121x33.png" alt="" width="121" height="16"/></a></div>
                  <div class="col-6 col-md-4 col-lg-6"><a class="link-image" href="#"><img src="images/footer-1-brand-4-101x76.png" alt="" width="101" height="38"/></a></div>
                  <div class="col-6 col-md-4 col-lg-6"><a class="link-image" href="#"><img src="images/footer-1-brand-5-107x53.png" alt="" width="107" height="26"/></a></div>
                  <div class="col-6 col-md-4 col-lg-6"><a class="link-image" href="#"><img src="images/footer-1-brand-6-97x52.png" alt="" width="97" height="26"/></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-inner-2">
          <div class="container">
            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span>. All Rights Reserved. Design by <a href="https://www.templatemonster.com">TemplateMonster</a></p>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
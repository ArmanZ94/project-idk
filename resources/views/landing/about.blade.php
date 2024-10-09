<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>About</title>
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
            <li><a href="{{route('landing')}}">Home</a></li>
            <li class="active">About</li>
          </ul>
        </div>
      </section>
      <!-- Our Story-->
      <section class="section section-md bg-default">
        <div class="container">
          <h2><span class="text-light">Our</span> Story</h2>
          <div class="row row-30 justify-content-xl-between" style="display: block;">
              <div class='segoe-font' style='font-size: 16px'>{!! $about->isi_about !!}</div>
          </div>
        </div>
      </section>
      <!-- Our Team-->
      <section class="section section-md bg-default">
        <div class="container text-center text-lg-left">
          <h2><span class="text-light">Our</span> Team</h2>
          <div class="row row-40">
            <div class="col-md-4">
              <div class="team-box-left">
                <div class="team-meta unit align-items-center">
                  <div class="unit-left"><img class="img" src="/images/testimonials-1-138x138.jpg" alt="" width="138" height="69"/>
                  </div>
                  <div class="unit-body">
                    <h5 class="title">Kate White</h5>
                    <div class="subtitle">Manager</div>
                  </div>
                </div>
                <div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a fermentum turpis. Nulla metus diam, feugiat ac lectus vitae, tempus porttitor sem. Vestibulum non lacus vulputate, placerat ligula ut, dignissim tortor.</div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-box-left">
                <div class="team-meta unit align-items-center">
                  <div class="unit-left"><img class="img" src="/images/testimonials-2-138x138.jpg" alt="" width="138" height="69"/>
                  </div>
                  <div class="unit-body">
                    <h5 class="title">Victor Jackson</h5>
                    <div class="subtitle">Financial Consultant</div>
                  </div>
                </div>
                <div class="content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-box-left">
                <div class="team-meta unit align-items-center">
                  <div class="unit-left"><img class="img" src="/images/testimonials-3-138x138.jpg" alt="" width="138" height="69"/>
                  </div>
                  <div class="unit-body">
                    <h5 class="title">Olivia Smith</h5>
                    <div class="subtitle">Tax Manager</div>
                  </div>
                </div>
                <div class="content">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima.</div>
              </div>
            </div>
          </div>
        </div>
      </section>
      @include('layouts.footer')
    </div>
    @include('layouts.footlink')
  </body>
</html>
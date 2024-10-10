<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Show Artikel</title>
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
            <li><a href="{{route('article')}}">Article</a></li>
            <li class="active">{{ $artikel->judul_artikel }}</li>
          </ul>
        </div>
      </section>
      <section class="section bg-default section-md">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <h2>{{ $artikel->judul_artikel }}</h2>
                      <p>{{ $artikel->created_at->format('F d, Y') }}</p>
                      <div class="item-image bg-image" style="background-image: url({{ asset('storage/images/artikel/' . $artikel->img_artikel) }}); height: 400px; background-size: cover; background-position: center;"></div>
                      <div class="content mt-4">
                          <div class="big ul-list ol-list">{!! ($artikel->isi_artikel)!!}</div>
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
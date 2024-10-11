<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Gallery</title>
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
            <li class="active">Gallery</li>
          </ul>
        </div>
      </section>
      <!-- Gallery-->
      <section class="section section-md">
        <div class="container" style="box-sizing: border-box;">
          <h2>Gallery</h2>
          <div class="row row-30 justify-content-xl-between" style="display: block;">
            <div class="row-g">
              @for ($i = 0; $i < 4; $i++) <!-- Loop to create 4 columns -->
                <div class="column-g">
                  @foreach($galeris->slice($i * ceil($galeris->count() / 4), ceil($galeris->count() / 4)) as $galeri)
                    <img src="{{ asset('storage/images/galeri/' . $galeri->img_galeri) }}" alt="Gambar Galeri" style="width:100%">
                  @endforeach
                </div>
              @endfor
            </div>
          </div>
        </div>
      </section>
      @include('layouts.footer')
    </div>
    @include('layouts.footlink')
  </body>
</html>
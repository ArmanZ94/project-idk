<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Artikel</title>
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
            <li class="active">Article</li>
          </ul>
        </div>
      </section>
      <!-- article container -->
      <section class="section bg-default section-md">
        <div class="container">
            <h2 class="title-icon">
                <span class="icon icon-default mercury-icon-news"></span>
                <span>Article <span class="text-light">Lists</span></span>
            </h2>
            @foreach($artikels as $artikel)
            <div class="box-image-small {{ $loop->iteration % 2 == 0 ? 'box-image-small-right' : 'box-image-small-left' }}">
                <div class="item-image bg-image novi-background" style="background-image: url({{ asset('storage/images/artikel/' . $artikel->img_artikel) }})"></div>
                <div class="item-body wow {{ $loop->iteration % 2 == 0 ? 'fadeInLeft' : 'fadeInRight' }}">
                    <p>{{ $artikel->created_at->format('F d, Y') }}</p>
                    <h4><a href="{{ route('showartikel', $artikel->id) }}">{{ $artikel->judul_artikel }}</a></h4>
                    <p class="big ul-list ol-list">{!! Str::limit($artikel->isi_artikel, 150) !!}</p>
                </div>
            </div>
            @endforeach
            <div class="pagination-container">
              {{ $artikels->links('pagination::bootstrap-5') }}
          </div>
        </div>
      </section>
    
      @include('layouts.footer')
      
    </div>
    @include('layouts.footlink')
  </body>
</html>
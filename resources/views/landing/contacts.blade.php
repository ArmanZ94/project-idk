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
            <li><a href="{{route('landing')}}">Home</a></li>
            <li class="active">Contacts</li>
          </ul>
        </div>
      </section>
      <!-- Contacts-->
      <section class="section section-md">
        <div class="container">
          <h2>Contacts</h2>
          <div class="row row-30 justify-content-xl-between" style="display: block;">
            <div class='segoe-font ul-list ol-list' style='font-size: 16px'>{!! $contact->isi_contact !!}</div>
          </div>
        </div>
      </section>
      @include('layouts.footer')
    </div>
    @include('layouts.footlink')
  </body>
</html>
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
          <div class="row-30 justify-content-xl-between" style="display: block;">
            <div class='segoe-font ul-list ol-list' style='font-size: 16px'>{!! $contact->isi_contact !!}</div>
          </div>
          <div class="col-lg-6" style="padding-top: 20px; padding-left: 0px">
            <div class="card" style="border: 2px solid #00c271;">
              <div class="card-head" style="flex: 1 1 auto; padding: 1.25rem">
                <div class="text-center">
                  <h5><strong>Quick Message</strong></h5>
                </div>
              </div>
              <div class="card-body">
                <form action="{{ route('contactus.simpan') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                      <label for="nama_contact_us"><h6><strong>Nama</strong></h6></label>
                      <input type="text" name="nama_contact_us" class="form-control" id="nama_contact_us" placeholder="Nama Anda" required>
                  </div>
                  <div class="mb-3">
                    <label for="email_contact_us"><h6><strong>Email</strong></h6></label>
                    <input type="email" name="email_contact_us" class="form-control" id="email_contact_us" placeholder="Email Anda" required>
                  </div>
                  <div class="mb-3">
                    <label for="isi_contact_us"><h6><strong>Isi Pesan</strong></h6></label>
                    <textarea name="isi_contact_us" class="form-control" id="isi_contact_us" rows="5" placeholder="Pesan Anda"></textarea>
                  </div>
                  <div class="d-grid gap-2" style="grid-template-columns: repeat(2, 1fr);">
                    <button class="btn btn-primary">Kirim</button>
                  </div>
                </form>
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
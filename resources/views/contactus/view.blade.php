<!DOCTYPE html>
<html lang="en">
<head>
	<title>View ContactUs</title>
    @include('layouts.headlinkbe')
</head>
<body class="body-color">
    @include('layouts.headerbe')
	<div class="container">
        <h1 class="text-center mt-3">View Pesan ContactUs</h1>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @if(Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <div class="mb-3">{{$contactus->nama_contact_us." | ".$contactus->email_contact_us}}</div>
                        <div class="mb-3"></div>
                        <div class="mb-3">{{$contactus->isi_contact_us}}</div>
                        <div class="mb-3">
                            <div class="d-grid gap-2" style="grid-template-columns: repeat(1, 1fr);">
                                <a href="{{ route('contactus.daftarcontactus') }}" class="btn btn-md btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</body>
</html>
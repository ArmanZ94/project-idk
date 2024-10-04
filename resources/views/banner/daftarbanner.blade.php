<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar Banner</title>
	@include('layouts.headlinkbe')
</head>
<body style="background-color:#121212; font-family: Segoe UI; color: #ffffff;">
	<header class="header" style="background-color: #303030;">
		<nav class="navbar navbar-expand-lg">
		   	<div class="container">
			 	<img src="{{asset('Arifuwulogo.png')}}" alt="Arifuwu" width="200" height="45">     
			 	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			   		<span class="navbar-toggler-icon"></span>
			 	</button>
			 	<div class="collapse navbar-collapse" id="navbarSupportedContent">
			   		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				 		<li class="nav-item">
				   			<a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
				 		</li>
				 		<li class="nav-item">
				   			<a class="nav-link active" aria-current="page" href="{{route('karyawan.daftarkarya')}}">Daftar Karyawan</a>
				 		</li>
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="{{route('user.daftaruser')}}">Daftar User</a>
					  	</li>
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="{{route('artikel.daftarartikel')}}">Daftar Artikel</a>
					  	</li>
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="{{route('banner.daftarbanner')}}">Daftar Banner</a>
					  	</li>
			   		</ul>
			   		<form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
				   		@csrf
				   		@method('DELETE')
				   		<button class="btn btn-light" type="submit">Logout</button>
			   		</form>
			 	</div>
		   	</div>
		</nav>
	</header>
	<div class="container">
		<h1 class="text-center mt-3">Daftar Banner</h1>
		<table class="table table-bordered text-left mt-4" style="vertical-align: middle; white-space: nowrap; color:#ffffff; width:100%;">
			<thead style="vertical-align: middle;">
				<tr>
					<th style="width:2%">ID</th>
					<th>Text1</th>
					<th>Text2</th>
					<th>Text3</th>
					<th style="width:11%">IMAGE</th>
					<th style="width:11%">
						<a href="{{route('banner.tambah')}}"class="btn btn-success text-center" style="display: flex;">Tambah</a>
					</th>
				</tr>
			</thead>	
			<tbody>
				@foreach($banners as $banner)
				<tr>
					<td>{{ $banner->id }}</td>
					<td style="word-wrap: break-word; white-space: normal;">{{ Str::limit($banner->text1_banner, 500) }}</td>
					<td style="word-wrap: break-word; white-space: normal;">{{ Str::limit($banner->text2_banner, 500) }}</td>
					<td style="word-wrap: break-word; white-space: normal;">{{ Str::limit($banner->text3_banner, 500) }}</td>
					<td>
						@if($banner->img_banner)
                            <img src="{{asset('storage/images/banner/' . $banner->img_banner) }}" width="100" alt="Gambar Banner">
                        @else
                        	Tidak ada gambar
                        @endif
					</td>

					<td>
						<form onsubmit="return confirm('Apakah Anda Yakin ?');"
							action="{{ route('banner.hapus', $banner->id) }}" method="POST">
							<a href="{{ route('banner.edit', $banner->id) }}" class="btn btn-primary">Edit</a>
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger">Hapus</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{ $banners->links('pagination::bootstrap-5') }}
	</div>
</body>
</html>
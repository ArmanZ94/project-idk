<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar Artikel</title>
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
		<h1 class="text-center mt-3">Daftar Artikel</h1>
		<table class="table table-bordered text-left mt-4" style="vertical-align: middle; white-space: nowrap; color:#ffffff; width:100%;">
			<thead style="vertical-align: middle;">
				<tr>
					<th style="width:2%">ID</th>
					<th>JUDUL</th>
					<th>ISI</th>
					<th>IMAGE</th>
					<th style="width:11%">
						<a href="{{route('artikel.tambah')}}"class="btn btn-success text-center" style="display: flex;">Tambah</a>
					</th>
				</tr>
			</thead>	
			<tbody>
				@foreach($artikels as $artikel)
				<tr>
					<td>{{ $artikel->id }}</td>
					<td>{{ $artikel->judul_artikel }}</td>
					<td style="word-wrap: break-word; white-space: normal;">{{ Str::limit($artikel->isi_artikel, 500) }}</td>
					<td>
						@if($artikel->img_artikel)
                            <img src="{{asset('storage/images/artikel/' . $artikel->img_artikel) }}" width="100" alt="Gambar Artikel">
                        @else
                        	Tidak ada gambar
                        @endif
					</td>

					<td>
						<form onsubmit="return confirm('Apakah Anda Yakin ?');"
							action="{{ route('artikel.hapus', $artikel->id) }}" method="POST">
							<a href="{{ route('artikel.edit', $artikel->id) }}" class="btn btn-primary">Edit</a>
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger">Hapus</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{ $artikels->links('pagination::bootstrap-5') }}
	</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar Banner</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<style>
	  	.navbar-nav .nav-link.active{
        	color: #ffffff;
      	}
      	.navbar-nav .nav-link:hover{
        	color: #bbff00;
      	}
		.pagination .page-link {
       		color: #ffffff; /* White text color */
       		background-color: #303030; /* Match the background color */
       		border-color: #505050; /* Slightly lighter border color */
   		}
		.pagination .page-item.active .page-link {
       		background-color: #505050; /* Slightly lighter for active item */
       		border-color: #505050;
   		}
	</style>
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
					<th>NOTE</th>
					<th>IMAGE</th>
					<th style="width:11%">
						<a href="{{route('banner.tambah')}}"class="btn btn-success text-center" style="display: flex;">Tambah</a>
					</th>
				</tr>
			</thead>	
			<tbody>
				@foreach($banners as $banner)
				<tr>
					<td>{{ $banner->id }}</td>
					<td>{{ $banner->note_banner }}</td>
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
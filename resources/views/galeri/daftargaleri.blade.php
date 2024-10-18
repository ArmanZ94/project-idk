<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar Galeri</title>
	@include('layouts.headlinkbe')
</head>
<body class="body-color">
	@include('layouts.headerbe')
	<div class="container">
		<h1 class="text-center mt-3">Daftar Galeri</h1>
		<table class="table table-bordered text-left mt-4" style="vertical-align: middle; white-space: nowrap; color:#ffffff; width:100%;">
			<thead style="vertical-align: middle;">
				<tr>
					<th style="width:2%">ID</th>
					<th>IMAGE</th>
					<th style="width:11%">
						<a href="{{route('galeri.tambah')}}"class="btn btn-success text-center" style="display: flex;">Tambah</a>
					</th>
				</tr>
			</thead>	
			<tbody>
				@foreach($galeris as $galeri)
				<tr>
					<td>{{ $galeri->id }}</td>
					<td>
						@if($galeri->img_galeri)
                            <img src="{{asset('storage/' . $galeri->img_galeri) }}" width="100" alt="Gambar Galeri">
                        @else
                        	Tidak ada gambar
                        @endif
					</td>
					<td>
						<form onsubmit="return confirm('Apakah Anda Yakin ?');"
							action="{{ route('galeri.hapus', $galeri->id) }}" method="POST">
							<a href="{{ route('galeri.edit', $galeri->id) }}" class="btn btn-primary">Edit</a>
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger">Hapus</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{ $galeris->links('pagination::bootstrap-5') }}
	</div>
</body>
</html>
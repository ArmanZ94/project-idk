<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar Artikel</title>
	@include('layouts.headlinkbe')
</head>
<body class="body-color">
	@include('layouts.headerbeuser')
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
						<a href="{{route('artikel.user.tambah')}}"class="btn btn-success text-center" style="display: flex;">Tambah</a>
					</th>
				</tr>
			</thead>	
			<tbody>
				@foreach($artikels as $artikel)
				<tr>
					<td>{{ $artikel->id }}</td>
					<td>{{ $artikel->judul_artikel }}</td>
					<td style="word-wrap: break-word; white-space: normal;">{!! Str::limit(strip_tags( $artikel->isi_artikel), 250) !!}</td>
					<td>
						@if($artikel->img_artikel)
                            <img src="{{asset('storage/images/artikel/' . $artikel->img_artikel) }}" width="100" alt="Gambar Artikel">
                        @else
                        	Tidak ada gambar
                        @endif
					</td>
					<td>
						<form onsubmit="return confirm('Apakah Anda Yakin ?');"
							action="{{ route('artikel.user.hapus', $artikel->id) }}" method="POST">
							<a href="{{ route('artikel.user.edit', $artikel->id) }}" class="btn btn-primary">Edit</a>
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
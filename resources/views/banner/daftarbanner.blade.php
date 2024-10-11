<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar Banner</title>
	@include('layouts.headlinkbe')
</head>
<body class="body-color">
	@include('layouts.headerbe')
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
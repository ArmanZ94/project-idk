<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar Karyawan</title>
	@include('layouts.headlinkbe')
</head>
<body class="body-color">
	@include('layouts.headerbe')
	<div class="container">
		<h1 class="text-center mt-3">Daftar Karyawan</h1>
		<table class="table table-bordered text-left mt-4" style="vertical-align: middle; white-space: nowrap; color:#ffffff; width:100%;">
			<thead style="vertical-align: middle;">
				<tr>
					<th style="width:2%">ID</th>
					<th>NAMA</th>
					<th>JABATAN</th>
					<th>RUANGAN</th>
					<th>GAJI</th>
					<th style="width:11%">
						<a href="{{route('karyawan.tambah')}}"class="btn btn-success text-center" style="display: flex;">Tambah</a>
					</th>
				</tr>
			</thead>	
			<tbody>
				@foreach($karyawans as $karyawan)
				<tr>
					<td>{{ $karyawan->id }}</td>
					<td>{{ $karyawan->nama }}</td>
					<td>{{ optional($karyawan->jabatan)->nama_jabatan ?? '---'}}</td>
					<td>{{ optional($karyawan->ruangan)->nama_ruangan ?? '---'}}</td>
					<td>{{ optional($karyawan->gaji)->gaji_pokok ?? '---'}}</td>
					<td>
						<form onsubmit="return confirm('Apakah Anda Yakin ?');"
							action="{{ route('karyawan.hapus', $karyawan->id) }}" method="POST">
							<a href="{{ route('karyawan.edit', $karyawan->id) }}" class="btn btn-primary">Edit</a>
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger">Hapus</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{ $karyawans->links('pagination::bootstrap-5') }}
	</div>
</body>
</html>
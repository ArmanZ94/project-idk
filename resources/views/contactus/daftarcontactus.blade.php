<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar ContactUs</title>
	@include('layouts.headlinkbe')
</head>
<body class="body-color">
	@include('layouts.headerbe')
	<div class="container">
		<h1 class="text-center mt-3">Daftar Pesan ContactUs</h1>
		<table class="table table-bordered text-left mt-4" style="vertical-align: middle; white-space: nowrap; color:#ffffff; width:100%;">
			<thead style="vertical-align: middle;">
				<tr>
					<th style="width:2%">ID</th>
					<th>NAMA</th>
					<th>EMAIL</th>
					<th>ISI</th>
					<th style="width:11%">
						<a href="#"class="btn btn-success text-center" style="display: flex;">Promosi</a>
					</th>
				</tr>
			</thead>	
			<tbody>
				@foreach($contactus as $contactu)
				<tr>
					<td>{{ $contactu->id }}</td>
					<td>{{ $contactu->nama_contact_us }}</td>
					<td>{{ $contactu->email_contact_us }}</td>
					<td style="word-wrap: break-word; white-space: normal;">{!! Str::limit( $contactu->isi_contact_us, 250) !!}</td>
					<td>
						<form onsubmit="return confirm('Apakah Anda Yakin ?');"
							action="{{ route('contactus.hapus', $contactu->id) }}" method="POST">
							<a href="{{ route('contactus.view', $contactu->id) }}" class="btn btn-primary">View</a>
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger">Hapus</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{ $contactus->links('pagination::bootstrap-5') }}
	</div>
</body>
</html>
@extends('layouts.app')
@section('content')
<div class="container"> 
<h3>Lihat Data Ikan</h3>
	@csrf
		<table border="1" cellpadding="10">
			<tr>
				<td>KODE IKAN</td>
				<td>{{ $row->ikan_kode }}</td>
			</tr>
			<tr>
				<td>NAMA IKAN</td><td>{{ $row->ikan_nama }}</td>
			</tr>
			<tr>
				<td>JENIS IKAN</td><td>{{ $row->ikan_jenis }}</td>
			</tr>
			<tr>
				<td>HARGA</td><td>{{ $row->ikan_harga }}</td>
			</tr>
		</table>
</div>
@endsection
@extends('layouts.app')

@section('content')

<div class="container">
<h3>Penjualan Ikan</h3>
<form class="form" method="get" action="{{ route('search') }}">
		    <div class="form-group w-25 mb-2">
		        <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Cari Nama Ikan">
		        <button type="submit" class="btn btn-primary mb-1">Cari</button>
		    </div>
		</form>
	<table border="2" cellpadding="10">
	<tr>
		<td>KODE IKAN</td>
		<td>NAMA IKAN</td>
		<td>JENIS IKAN</td>
		<td>HARGA IKAN</td>
		<td><a href="{{ url('ikan/create') }}">Tambah Data</a></td>
	</tr>
	@foreach($rows as $row)
	<tr>
		<td>{{ $row->ikan_kode }}</td>
		<td>{{ $row->ikan_nama }}</td>
		<td>{{ $row->ikan_jenis }}</td>
		<td>{{ $row->ikan_harga }}</td>
		<td><a href="{{ url('ikan/' . $row->ikan_id . '/edit') }}">Edit</a></td>
		<td><a href="{{ url('ikan/' . $row->ikan_id . '/lihat') }}">Lihat</a></td>
		<td>
			<form action="{{ url('ikan/' . $row->ikan_id) }}" method="POST">
			<input name="_method" type="hidden" value="DELETE">
			@csrf
			<button>Hapus</button>
			<td>
		
		</td>
			</form>			
		</td>
	</tr>
	@endforeach
	</table>
	<a class="btn btn-secondary" href="http://localhost/penjualan-ikan/public/home"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali Ke Dashboard</a>
</div>
@endsection
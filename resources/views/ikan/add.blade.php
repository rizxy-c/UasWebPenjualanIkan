@extends('layouts.app')
@section('content')
<div class="container">
	<h3>Tambah Data Ikan</h3>
	<form method="post"action="{{ url('/ikan') }}">
    @csrf
		<table>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="ikan_kode"></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td><input type="text" name="ikan_nama"></td>
			</tr>
			<tr>
				<td>JURUSAN</td>
				<td>
				<select name="ikan_jenis" id="ikan_jenis">			
					@foreach($jenis_rows as $row)
					  <option value="{{ $row->nama_jenis }}">{{ $row->nama_jenis }}</option>
					@endforeach
				</select>
			</td>
			</tr>
			<tr>
				<td>ALAMAT</td>
				<td><input type="text" name="ikan_harga"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</div>
@endsection

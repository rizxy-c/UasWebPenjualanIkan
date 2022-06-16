@extends('layouts.app')
@section('content')
<div class="container"> 
<h3>Edit Data Ikan</h3>
    <form action="{{ url('/ikan/' . $row->ikan_id) }}" method="POST">
    <input name="_method" type="hidden" value="PATCH"> 
    @csrf
        <table>
            <tr>
                <td>KODE IKAN</td>
                <td><input type="text" name="ikan_kode" value="{{ $row->ikan_kode }}"></td>
            </tr>
            <tr>
                <td>NAMA IKAN</td><td><input type="text" name="ikan_nama" value="{{ $row->ikan_nama }}"></td>
            </tr>
            <tr>
                <td>JENIS IKAN</td><td><input type="text" name="ikan_jenis" value="{{ $row->ikan_jenis }}"></td>
            </tr>
            <tr>
                <td>HARGA IKAN</td><td><input type="text" name="ikan_harga" value="{{ $row->ikan_harga }}"></td>
            </tr>
            <tr>
                <td></td><td><input type="submit" value="UPDATE"></td>
            </tr>
        </table>
    </form>
</div>
@endsection
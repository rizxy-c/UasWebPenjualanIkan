<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ikan;
use App\Models\Jenis;

class IkanController extends Controller
{
    public function index()
    {
        $rows = Ikan::all();
        return view('ikan.index', compact('rows'));
    }

    public function create()
    {
        $jenis_rows = Jenis::all();
        return view('ikan.add', compact('jenis_rows'));        
        //return view('ikan.add');
    }


    public function store(Request $request)
    {
        $request->validate([

        'ikan_kode' => 'bail|required|unique:tb_ikan',
        'ikan_nama' => 'required'
        ],
        [
        'ikan_kode.required' => 'KODE wajib diisi',
        'ikan_kode.unique' => 'Nama Tahun sudah ada',
        'ikan_nama.required' => 'Nama wajib diisi'
        ]);

        Ikan::create([
        'ikan_kode' => $request->ikan_kode,
        'ikan_nama' => $request->ikan_nama,
        'ikan_jenis' => $request->ikan_jenis,
        'ikan_harga' => $request->ikan_harga
        ]);

        return redirect('ikan');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $rows = Ikan::where('ikan_nama', 'like', "%" . $keyword . "%")->paginate();
        return view('Ikan.index', compact('rows'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $row = Ikan::findOrFail($id);
        return view('ikan.edit', compact('row'));
    }

    public function lihat($id)
    {
        $row = Ikan::findOrFail($id);
        return view('ikan.lihat', compact('row'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
        'ikan_kode' => 'bail|required|unique:tb_ikan',
        'ikan_nama' => 'required'
        ],
        [
        'ikan_kode.required' => 'NIM wajib diisi',
        'ikan_kode.unique' => 'Nama Tahun sudah ada',
        'ikan_nama.required' => 'Nama wajib diisi'
        ]);

        $row = Ikan::findOrFail($id);
        $row->update([
        'ikan_kode' => $request->ikan_kode,
        'ikan_nama' => $request->ikan_nama,
        'ikan_jenis' => $request->ikan_jenis,
        'ikan_harga' => $request->ikan_harga
        ]);

        return redirect('ikan');
    }

    public function destroy($id)
    {
        $row = Ikan::findOrFail($id);
        $row->delete();
        return redirect('ikan');
    }
}
<?php

namespace App\Http\Controllers;

use App\Konseling;
use Illuminate\Http\Request;

class KonselingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $data = Konseling::all();
        return response($data);
    }

    public function show($id)
    {
        $data =Konseling::where('id', $id)->get();
        return response($data);
    }
    public function store(Request $request)
    {
        $data = new Konseling();
        $data->nama_guru = $request->input('nama_guru');
        $data->kelas = $request->input('kelas');
        $data->jadwal = $request->input('jadwal');
        $data->save();

        return response('Berhasil Tambah Data');
    }
    public function update(Request $request, $id)
    {
        $data = Konseling::where('id', $id)->first();
        $data->nama_guru = $request->input('nama_guru');
        $data->kelas = $request->input('kelas');
        $data->jadwal = $request->input('jadwal');
        $data->save();

        return response('Berhasil Merubah Data');
    }

    public function destroy($id)
    {
        $data = Konseling::where('id', $id)->first();
        $data->delete();

        return response('Berhasil Menghapus Data');
    }
}

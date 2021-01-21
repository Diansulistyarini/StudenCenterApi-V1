<?php

namespace App\Http\Controllers;

use App\Extracurricular;
use Illuminate\Http\Request;

class ExtracurricularsController extends Controller
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
        $data = Extracurricular::all();
        return response($data);
    }

    public function show($id)
    {
        $data =Extracurricular::where('id', $id)->get();
        return response($data);
    }
    public function store(Request $request)
    {
        $data = new Extracurricular();
        $data->nama_extracurricular = $request->input('nama_extracurricular');
        $data->pelatih = $request->input('pelatih');
        $data->jadwal = $request->input('jadwal');
        $data->jml_anggota = $request->input('jml_anggota');
        $data->save();

        return response('Berhasil Tambah Data');
    }
    public function update(Request $request, $id)
    {
        $data = Extracurricular::where('id', $id)->first();
        $data->nama_extracurricular = $request->input('nama_extracurricular');
        $data->pelatih = $request->input('pelatih');
        $data->jadwal = $request->input('jadwal');
        $data->jml_anggota = $request->input('jml_anggota');
        $data->save();

        return response('Berhasil Merubah Data');
    }

    public function destroy($id)
    {
        $data = Extracurricular::where('id', $id)->first();
        $data->delete();

        return response('Berhasil Menghapus Data');
    }
}

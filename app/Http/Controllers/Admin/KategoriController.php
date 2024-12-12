<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KategoriOrmas;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $categories = KategoriOrmas::all();
        return view('admin.kategori.index', compact(['categories']));
    }

    public function tambah()
    {
        return view('admin.kategori.create');
    }

    public function simpan(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'string|unique:kategori_ormas,nama'
        ]);
        $model = new KategoriOrmas;
        $model->nama = $validated['nama'];
        $model->save();

        return redirect()->route('admin.kategori.index');
    }

    public function detail($id)
    {
        $model = KategoriOrmas::find($id);
        return view('admin.kategori.detail', compact(['model']));
    }

    public function ubah($id)
    {
        $model = KategoriOrmas::find($id);
        return view('admin.kategori.ubah', compact(['model']));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'string|unique:kategori_ormas,nama'
        ]);
        $model = KategoriOrmas::find($id);
        $model->nama = $validated['nama'];
        $model->update();

        return redirect()->route('admin.kategori.index', $model['id']);
    }

    public function delete($id)
    {
        $model = KategoriOrmas::find($id);
        $model->delete();
        return back();
    }
}

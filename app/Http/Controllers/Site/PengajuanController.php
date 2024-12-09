<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Dokumen;
use App\Models\KategoriOrmas;
use App\Models\Ormas;
use Illuminate\Http\Request;
use File;

class PengajuanController extends Controller
{
    public function request()
    {
        $kategories = KategoriOrmas::all();
        return view('pengajuan', compact(['kategories']));
    }

    public function simpan(Request $request)
    {
        $validated = $request->validate([
            'pemohon' => 'required|string|unique:ormas,pemohon',
            'no_telp' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'nama_ormas' => 'required|string|unique:ormas,nama_ormas',
            'alamat' => 'required|string',
            'struktur_pengurus' => 'required|string',
            'dokumen' => 'required|mimes:pdf|max:10240',
            'kategori_ormas' => 'required|integer',
        ]);

        $file = $request->file('dokumen');
        $fileName = $validated['pemohon'] . '_' . $validated['nama_ormas'] . '_' . $file->getClientOriginalName();
        $pathFile = public_path('dokumen_ormas') . '/' . $validated['nama_ormas'];

        $model = new Ormas;
        $model->pemohon = $validated['pemohon'];
        $model->telp = $validated['no_telp'];
        $model->email = $validated['email'];
        $model->password = $validated['password'];
        $model->nama_ormas = $validated['nama_ormas'];
        $model->alamat = $validated['alamat'];
        $model->struktur_pengurus = $validated['struktur_pengurus'];
        $model->status = 'pending';
        $model->kategori_ormas_id = $validated['kategori_ormas'];
        if ($model->save()) {
            if (!File::isDirectory($pathFile)) {
                File::makeDirectory($pathFile, 0755, true);
            }
            $file->move($pathFile, $fileName);
            $modelDokumen = new Dokumen;
            $modelDokumen->ormas_id = $model['id'];
            $modelDokumen->nama = $fileName;
            $modelDokumen->path = $fileName;
            $modelDokumen->save();
            return redirect()->route('site.index');
        } else {
            return back()->withErrors(['msg' => 'Terjadi Kesalahan saat Mengirimkan Data']);
        }
    }
}

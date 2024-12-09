<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Login;
use App\Models\Ormas;
use Illuminate\Http\Request;

class OrmasController extends Controller
{
    public function index(Request $request)
    {
        // Ambil keyword dari request
        $keyword = $request->get('keyword');

        // Jika ada keyword, lakukan pencarian
        if ($keyword) {
            $ormaes = Ormas::with('kategoriOrmas', 'dokumen')
                ->where('nama_ormas', 'like', '%' . $keyword . '%')  // Pencarian berdasarkan nama ormas
                ->orWhere('pemohon', 'like', '%' . $keyword . '%')  // Pencarian berdasarkan nama pemohon
                ->orderBy('created_at', 'desc')
                ->get();
        } else {
            // Jika tidak ada keyword, tampilkan semua data
            $ormaes = Ormas::with('kategoriOrmas', 'dokumen')
                ->orderBy('created_at', 'desc')
                ->get();
        }

        return view('admin.ormas.index', compact('ormaes'));
    }

    public function detail($id)
    {
        $ormas = Ormas::with('kategoriOrmas')->find($id);
        return view('admin.ormas.detail', compact(['ormas']));
    }

    public function setuju($id)
    {
        $ormas = Ormas::find($id);
        $password = bcrypt($ormas['password']);
        $login = new Login;
        $login->email = $ormas['email'];
        $login->password = $password;
        $login->role = 'ormas';
        if ($login->save()) {
            $ormas->status = 'setuju';
            $ormas->save();
            return back()->with('success', 'Akun Ormas Bisa Login Sekarang');
        } else {
            return back()->with('error', 'Gagal Dalam Menyetujui Akun Ormas');
        }
    }

    public function hapusAkses($id)
    {
        $ormas = Ormas::find($id);
        $login = Login::firstWhere('email', $ormas->email);
        if ($login->delete()) {
            $ormas->status = 'pending';
            $ormas->save();
            return back()->with('success', 'Berhasil Menghapus Akses Login dari ormas ' . $ormas['nama_ormas']);
        } else {
            return back()->with('error', 'Gagal menghapus login dari ormas ' . $ormas['nama_ormas']);
        }
    }
}

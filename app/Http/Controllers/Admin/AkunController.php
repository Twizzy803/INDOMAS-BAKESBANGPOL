<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Login;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function index(Request $request)
    {
        // Ambil keyword dari request
        $keyword = $request->get('keyword');

        // Jika ada keyword, lakukan pencarian
        if ($keyword) {
            // Cari data login berdasarkan email atau role yang sesuai dengan keyword
            $models = Login::where('email', 'like', '%' . $keyword . '%')
                ->orWhere('role', 'like', '%' . $keyword . '%')
                ->orderBy('created_at', 'desc')
                ->get();
        } else {
            // Jika tidak ada keyword, tampilkan semua data
            $models = Login::orderBy('created_at', 'desc')->get();
        }

        // Kirim data ke tampilan
        return view('admin.akun.index', compact('models'));
    }

    public function tambah()
    {
        return view('admin.akun.create');
    }

    public function simpan(Request $request)
    {
        $validated = $request->validate([
            'email' => 'string|unique:logins,email',
            'password' => 'string',
            'role' => 'string'
        ]);
        $password = bcrypt($validated['password']);
        $model = new Login;
        $model->email = $validated['email'];
        $model->password = $password;
        $model->role = $validated['role'];
        $model->save();

        return redirect()->route('admin.akun.index');
    }

    public function detail($id)
    {
        $model = Login::find($id);
        return view('admin.akun.detail', compact(['model']));
    }

    public function ubah($id)
    {
        $model = Login::find($id);
        return view('admin.akun.ubah', compact(['model']));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'email' => 'string',
            'password' => 'string',
            'role' => 'string'
        ]);
        $password = bcrypt($validated['password']);
        $model = Login::find($id);
        $model->email = $validated['email'];
        $model->password = $password;
        $model->role = $validated['role'];
        $model->update();

        return redirect()->route('admin.akun.index', $model['id']);
    }

    public function delete($id)
    {
        $model = Login::find($id);
        $model->delete();
        return back();
    }
}

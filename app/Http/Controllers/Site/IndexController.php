<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Login;
use App\Models\Ormas;
use App\Models\Stories;
use Illuminate\Http\Request;
use File;

class IndexController extends Controller
{
    public function Index()
    {
        $stories = Stories::with('galleries', 'ormas')->orderBy('created_at', 'desc')->get();
        return view('index', compact(['stories']));
    }

    public function createStory(Request $request, $login_id)
    {
        $validated = $request->validate([
            'content_cerita' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,bmp,tiff',
        ]);
        $userEmail = $request->user()->email;
        $ormas = Ormas::firstWhere('email', $userEmail);

        $story = new Stories;
        $story->ormas_id = $ormas['id'];
        $story->cerita = $validated['content_cerita'];

        $file = $request->file('image');
        $fileName = $ormas['nama_ormas'] . '_' . $file->getClientOriginalName();
        $pathFile = public_path('story') . '/' . $ormas['nama_ormas'];

        if ($story->save()) {
            if (!File::isDirectory($pathFile)) {
                File::makeDirectory($pathFile, 0755, true);
            }
            $file->move($pathFile, $fileName);
            $gambar = new Gallery;
            $gambar->stories_id = $story['id'];
            $gambar->path = $fileName;
            $gambar->save();
            return back();
        } else {
            return back()->with('failed', 'Gagal Membuat Story');
        }
    }
}

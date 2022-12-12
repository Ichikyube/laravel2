<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class landingController extends Controller
{
    function landing(Request $request) {
        return view('blog.index')
            ->with('post', Post::orderBy('updated_at', 'DESC')->GET());
    }
    function slicing(Request $request) {
        return view('slicing', [
            "judul" => $request->get("title"),
            "peserta" => [
                "jojo",
                "putri",
                "duta",
                "shampoo"
            ],
            "tampilkanPeserta" => "true"
        ]);
    }
    function slicing2(Request $request) {
        return view('slicing2');
    }
    function upload(Request $request) {
        // if($request->method() == "GET") {
        //     $publicFile = public_path("gambar\\6392a8ef735ed.png");
        //     unlink($publicFile);
        //     return view('upload');
        // }
        if($request->method() == "GET") return view('upload');
        $file = $request->file("gambar");
        //$file->move("gambar", uniqid() . "." . $file->getClientOriginalName());
        //$file->move("gambar", $file->hashName());
        $path = $request->getHost() . "/gambar/" . $file->hashName();
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use carbon\Carbon;
use App\Models\Post as ModelsPost;
use Hamcrest\Description;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $post = ModelsPost::with('category')->orderBy('created_at', 'DESC');

        if (!empty($request->id)) {
            $post->where('title', 'like', '%' . $request->q . '%');
        }

        if (!empty($request->status)) {
            $post->where('is_active', $request->status);
        }

        if (!empty($request->from_date)) {
            $from = Carbon::parse($request->from_date)->format(format: 'Y-M-D' . '00:00:01');
            $to = Carbon::parse($request->from_date)->format(format: 'Y-M-D' . '23:23:59');

            $post->whereBetween('created_at', [$from, $to]);
        }

        $post = $post->paginate(10);


        return view('dashboard.post.index', [
            'data' => $post
        ]);
    }

    public function store(Request $request)
    {

        $filename = "";

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = "image/" . date('YmdHi') . $file->getClientOriginalExtension();
            $file->move(public_path('image'), $filename);
        }

        $post = ModelsPost::create([
            'title' => $request->title,
            'photo' => $filename,
            'description' => $request->description,
            'is_active' => $request->status,
            'category_id' => $request->category
        ]);
        if ($post) {
            return redirect('post')->with('success', 'data berhasil ditambahkan');
        } else {
            return redirect('post')->with('gagal', 'data tidak berhasil disimpan');
        }
    }

    public function create()
    {
        return view('dashboard.post.create', [
            'data' => Category::all()
        ]);
    }

    public function edit($id)
    {
    }

    public function update($id, Request $request)
    {
    }

    public function destroy($id)
    {
    }

    public function show($id)
    {
    }
}

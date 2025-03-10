<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Post::all();
        return view('sections.home',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'descripcion' => 'required',
            'user_id' => 'required'
        ]);
        if ($request->hasFile('foto')) {
            $path = Storage::disk('public')->put('', $request->file('foto'));
            $validated['foto'] = $path; 
        }
        Post::create($validated);
        return redirect()->route('posts.index');
    }




    public function destroy(int $id)
    {
        $post=Post::find($id);
        Storage::disk('public')->delete($post->foto);
        $post->delete();
        return redirect()->route('posts.index');
    }
    public function misposts(int $id)
    {
        $posts=Post::where('user_id',$id)->get();
        return view('sections.miperfil',compact('posts'));
    }
}

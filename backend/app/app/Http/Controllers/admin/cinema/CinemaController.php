<?php

namespace App\Http\Controllers\admin\cinema;

use App\Http\Controllers\Controller;
use App\Models\Cinema;
use Illuminate\Http\Request;

class CinemaController extends Controller
{
    public function index()
    {
        $cinemas = Cinema::all();
        return view('admin.cinemas.cinema',['cinemas'=>$cinemas]);
    }

    public function create()
    {
        return view('admin.cinemas.create');
    }

    #[NoReturn] public function store(StoreRequest $request)
    {

        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('posts.index');
    }

    public function show(Cinema $cinema)
    {
        return view('admin.cinemas.show', ['cinema' => $cinema]);
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.edit', ['post' => $post, 'categories' => $categories, 'tags' => $tags]);
    }

    public function update(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();

        $this->service->update($post, $data);

        return redirect()->route('posts.show', ['post' => $post]);
    }

    public function destroy($id)
    {
        $this->service->destroy($id);
        return redirect()->route('posts.index');
    }

}

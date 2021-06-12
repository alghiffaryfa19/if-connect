<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Storage;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'post' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
            'description' => 'required'
        ]);

        Post::create([
            'profile_id' => auth()->user()->profile->id,
            'description' => $request->description,
            'post' => $request->file('post')->store('post'),  
        ]);

        return redirect()->route('profile');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.editpost', compact('post'));        
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'description' => 'required',
        ]);

        $post = Post::find($id);

        if (empty($request->file('post'))) {
            $post->update([
                'post' => $request->nama_jenjang,
            ]);
        } else {
            Storage::delete($post->post);
            $post->update([
                'description' => $request->description,
                'post' => $request->file('post')->store('post'),  
            ]);
        }

        return redirect()->route('profile');
      }
 
    public function destroy($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return redirect()->back();
        }
        
        Storage::delete($post->post);
        $post->delete();
        return redirect()->route('profile');
    }
}

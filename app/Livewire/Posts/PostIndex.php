<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class PostIndex extends Component
{
    public function deletePost($id)
    {
        $post = Post::findOrFail($id);
        Storage::disk(name:'public')->delete($post->image);
        $post->delete();
        session()->flash('success', 'Post deleted successfully');
        return redirect()->to(path:'/posts');
    }

    public function render()
    {
        return view('livewire.posts.post-index',[
            'posts' => auth()->user()->posts()->latest()->get(),
        ]);
    }
}

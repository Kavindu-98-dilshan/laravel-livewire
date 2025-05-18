<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\Posts\PostForm;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostEdit extends Component
{
    use WithFileUploads;
    public PostForm $form;

    public function mount(Post $post)
    {
        $this->form->setPost($post);
    }

    public function updatePost(Post $post)
    {
        $this->form->update($post);
        session()->flash('success', 'Post updated successfully');
        return redirect()->to(path:'/posts');
    }
    
    public function render()
    {
        return view('livewire.posts.post-edit');
    }
}

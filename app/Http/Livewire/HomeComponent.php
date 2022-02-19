<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\PostComment;
use App\Models\PostCommentLike;
use App\Models\PostCommentReply;
use App\Models\PostLike;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class HomeComponent extends Component
{
    use WithFileUploads;
    public $body, $image, $post, $content, $reply, $comReply;
    public $amount = 3;
    public $commentDisplay = 3;
    public $commentId;
    protected $listeners = ['refreshHome' => '$refresh'];

    protected function rules()
    {
        return [
            'content' => 'required',
            'image' => 'nullable|image',
        ];
    }

    public function addPost()
    {
      $this->dispatchBrowserEvent('show-form');
    }

    public function showComment($commentId)
    {
        $this->commentId = $commentId;
    }

    public function hideComment($commentId)
    {
        $this->commentId = null;
    }

    public function post()
    {
        if(auth()->user()->userIsVerified() == 0){
            session()->flash('message', 'Please complete your location information.');
            return redirect()->route('home');
        }

        $validatedData = $this->validate();
        $user = User::find(auth()->id());
        DB::beginTransaction();
        if($user){
            if($this->image){
                $validatedData['image'] = $this->image->store('/', 'uploads');
            }
            $user->addPost($validatedData);
            DB::commit();
            session()->flash('message', 'Post was added.');
            $this->dispatchBrowserEvent('hide-form');

        }else{
            DB::rollBack();
            return redirect()->back();
        }

    }

    private function resetInputFields(){
        $this->body = '';
    }

    public function render()
    {
        $posts = Post::with('user')->take($this->amount)->latest()->get();
        $allPost = Post::pluck('id')->count();
        $friendList = auth()->user()->userFriendIds();
        // $users = User::where('id', '!=', auth()->id())->inRandomOrder()->take(5)->get();
        // dd($friendList);
        $users = User::where('id', '!=', auth()->id())
            ->whereNotIn('id',$friendList)
            ->inRandomOrder()->take(5)->get();

        return view('livewire.home-component', compact('posts', 'users', 'allPost'))->extends('layouts.master');
    }

    public function like($postId)
    {
        $post = Post::find($postId);
        $post->likes()->create([
            'user_id' => auth()->id()
        ]);
    }

    public function unLike($postId)
    {
        $like = PostLike::whereuser_id(auth()->id())
            ->wherepost_id($postId)
            ->first();
        $like->delete();
    }

    public function addComment($postId)
    {
        if(!$this->content){
            session()->flash('content', 'Please add comment.');
            return redirect()->back();
        }
        $post = Post::find($postId);
        $post->comments()->create([
            'user_id' => auth()->id(),
            'content' => $this->content
        ]);
        $this->content = '';
    }

    public function commentLike($commentId)
    {
        $commentLike = new PostCommentLike();
        $commentLike->create([
            'post_comment_id' => $commentId,
            'user_id' => auth()->id()
        ]);
    }

    public function commentUnlike($commentId)
    {
        $like = PostCommentLike::whereuser_id(auth()->id())
            ->wherepost_comment_id($commentId)
            ->first();
        $like->delete();
    }

    public function replyComment($commentId)
    {
        $this->reply = $commentId;
    }

    public function addComReply($commentId)
    {
        $reply = new PostCommentReply();
        $reply->create([
            'post_comment_id' => $commentId,
            'user_id' => auth()->id(),
            'content' => $this->comReply,
        ]);
        $this->comReply = '';
        $this->reply = '';
    }

    public function addFriend($friendID)
    {
       auth()->user()->friends()->create(
          [ 'friend_id' => $friendID]
       );
       session()->flash('message', 'Friend request was successfully sent and waiting for approval.');
       return redirect()->route('home');
    }

    public function load()
    {
        $this->amount += 3;
    }

    public function loadComment()
    {
        $this->commentDisplay += 3;
    }

}

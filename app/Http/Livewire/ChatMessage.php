<?php

namespace App\Http\Livewire;

use App\Message;
use App\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChatMessage extends Component
{
    public $allmessages = [];
    public $contacts;
    public $logUser;
    public $fromUser;
    public $messages = [];

    public function mount() {
        $this->allmessages = Message::where('user_id', Auth::id())->get();
        $this->contacts = User::all();
        $this->logUser = Auth::user();
    }

    public function findUser($id) {
        $this->messages = Message::where('user_id',$id)->limit(6)->get();
        $this->fromUser = User::where('id',$id)->get();
        $this->fromUser = $this->fromUser[0];
    }

    public function render()
    {
        return view('livewire.chat-message',['messages' => $this->messages,'fromUser' => $this->fromUser]);
    }
}

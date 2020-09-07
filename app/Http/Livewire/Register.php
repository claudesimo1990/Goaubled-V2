<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\FileExistsException;
use Intervention\Image\ImageManagerStatic;

class Register extends Component
{
    use WithFileUploads;
    
    /**
     * name
     *
     * @var mixed
     */
    public $name;    
    /**
     * email
     *
     * @var mixed
     */
    public $email;    
    /**
     * avatar
     *
     * @var mixed
     */
    public $avatar;    
    /**
     * password
     *
     * @var mixed
     */
    public $password;    
    /**
     * password_confirmation
     *
     * @var mixed
     */
    public $password_confirmation;
    
    /**
     * render
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.register');
    }
    
    /**
     * register
     *
     * @return void
     */
    public function register()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'avatar' => 'required|image|max:1024',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6'
        ]);
        $this->password = Hash::make($this->password); 

        $filename = md5($this->email).'.jpg';
        $img = ImageManagerStatic::make($this->avatar)->encode('jpg');
        Storage::disk('public')->put('UsersAvatars/'.$filename, $img);

        User::create(['name' => $this->name, 'email' => $this->email, 'avatar' => $filename, 'password' => $this->password]);
        session()->flash('message', 'vous etes bien enregistrer.');

        return redirect()->route('login');

    }
}

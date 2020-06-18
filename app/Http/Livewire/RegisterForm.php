<?php

namespace App\Http\Livewire;

use App\User;
use Illuminate\Support\Facades\Hash;
use Kdion4891\LaravelLivewireForms\Field;
use Kdion4891\LaravelLivewireForms\FormComponent;

class RegisterForm extends FormComponent
{
    public function fields()
    {
        return [
            Field::make('Name')->input()->rules('required'),
            Field::make('Email')->input('email')->rules(['required', 'email', 'unique:users,email']),
            Field::make('Password')->input('password')->rules(['required', 'min:8', 'confirmed']),
            Field::make('Confirm Password', 'password_confirmation')->input('password'),
        ];
    }

    public function success()
    {
        $data = $this->form_data;
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function saveAndStayResponse()
    {
        return redirect()->route('users.create');
    }

    public function saveAndGoBackResponse()
    {
        return redirect()->route('login');
    }
}

<?php

namespace App\Http\Livewire;

use App\User;
use Illuminate\Support\Facades\Auth;
use Kdion4891\LaravelLivewireForms\ArrayField;
use Kdion4891\LaravelLivewireForms\Field;
use Kdion4891\LaravelLivewireForms\FormComponent;

class LoginForm extends FormComponent
{
    public function fields()
    {
        return [
            Field::make('Email')->input('email')->rules(['required']),
            Field::make('Password')->input('password')->rules(['required']),
        ];
    }

    public function success()
    {
        if (Auth::attempt($this->form_data)) {
            return  redirect()->route('accueil');
        }else{
            return redirect()->route('login');
        }
    }

    public function saveAndStayResponse()
    {
        //
    }

    public function saveAndGoBackResponse()
    {
        //
    }
}

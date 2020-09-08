<?php

namespace App\Http\Livewire;

use App\Coli;
use Illuminate\Support\Facades\Auth;
use Kdion4891\LaravelLivewireForms\Field;
use Kdion4891\LaravelLivewireForms\ArrayField;
use Kdion4891\LaravelLivewireForms\FormComponent;

class ColiForm extends FormComponent
{
    public function fields()
    {
        return [
            Field::make('depart de *','vilDepart')->input()->rules('required'),
            Field::make("Pour *",'vilArrive')->input()->rules('required'),
            Field::make('Date')->input('date','required')->rules(['required']),
            Field::make('Poids du coli')->input('number','required')->rules(['required', 'numeric']),
            Field::make('Prix du Coli')->input('number','required')->rules(['required','numeric']),
            Field::make("Photos du coli",'fotos')->file()->placeholder('vous povez selectionner plusieurs fotos')->multiple('required')->rules(['required']),
            Field::make("Message")->textarea('required')->rules(['required']),
        ];
    }

    public function success()
    {
        $req = $this->form_data;

        $coli = new Coli();
        $coli->name = Auth::user()->name;
        $coli->User_id = Auth::id();
        $coli->user_avatar = Auth::user()->avatar;
        $coli->categorie_id = '1';
        $coli->vilDepart = $req['vilDepart'];
        $coli->dateDepart = $req['date'];
        $coli->vilArrive = $req['vilArrive'];
        $coli->content = $req['message'];
        $coli->kilo = $req['poids_du_coli'];
        $coli->prix = $req['prix_du_coli'];
        $coli->photo = json_encode($req['fotos']);

        $coli->save();

        flashy()->success('votre Coli a ete bien enregistrer');
    }

    public function saveAndStayResponse()
    {
        return redirect()->route('packs.create');
    }

    public function saveAndGoBackResponse()
    {
        return redirect()->route('news.index');
    }
}

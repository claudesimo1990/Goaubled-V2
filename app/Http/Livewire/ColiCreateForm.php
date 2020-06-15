<?php

namespace App\Http\Livewire;

use App\Coli;
use App\Travel;
use Kdion4891\LaravelLivewireForms\ArrayField;
use Kdion4891\LaravelLivewireForms\Field;
use Kdion4891\LaravelLivewireForms\FormComponent;

class ColiCreateForm extends FormComponent
{
    public function fields()
    {
        return [
            Field::make('Ville de depart')->input()->rules('required'),
            Field::make('Pays')->input()->rules('required'),
            Field::make('Date Depart')->input('date','password')->rules(['required']),
            Field::make('Heure')->input('time','password')->rules(['required']),
            Field::make("Ville d'arrivee",'vilArrive')->input()->rules('required'),
            Field::make('Pays')->input('required')->rules(['required']),
            Field::make('Date Arrive')->input('date','required')->rules(['required']),
            Field::make('Heure')->input('time','required')->rules(['required']),
            Field::make('Poids du coli')->input('number','required')->rules(['required', 'numeric']),
            Field::make('Prix du Coli')->input('number','required')->rules(['required','numeric']),
            Field::make("Photos du coli",'fotos')->file()->placeholder('vous povez selectionner plusieurs fotos')->multiple('required')->rules(['required']),
            Field::make("Message")->textarea('required')->rules(['required']),
        ];
    }
    public function success()
    {
        $req = $this->form_data;

        $travel = new Travel();
        $travel->name = 'simo';
        $travel->User_id = '1';
        $travel->vilDepart = $req['ville_de_depart'];
        $travel->vilArrive = $req['ville_arrivee'];
        $travel->dateDepart = $req['date'];
        $travel->dateArrive = $req['date'];
        $travel->content = $req['message'];
        $travel->kiloAvalable = $req['kilos_disponibles'];
        $travel->prixKilo = $req['prix_du_kilo'];
        $travel->compagnie = $req['companie_aerienne'];
        $travel->hasCourrier = false;
        $travel->prixCourrier = 30;
        $travel->photoBielletAvion = 'liens vers la foto';

        $travel->save();
        flashy()->success('votre voyage a ete bien enregistrer');

    }

    public function saveAndStayResponse()
    {
        return redirect()->route('accueil');
    }

    public function saveAndGoBackResponse()
    {
        return redirect()->route('accueil');
    }
}

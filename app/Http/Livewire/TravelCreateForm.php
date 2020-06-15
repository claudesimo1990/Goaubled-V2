<?php

namespace App\Http\Livewire;

use App\Travel;
use Kdion4891\LaravelLivewireForms\ArrayField;
use Kdion4891\LaravelLivewireForms\Field;
use Kdion4891\LaravelLivewireForms\FormComponent;
use TijsVerkoyen\CssToInlineStyles\Css\Rule\Rule;

class TravelCreateForm extends FormComponent
{
    public function fields()
    {
        return [
            Field::make('Ville de depart')->input()->rules('required'),
            Field::make('Date')->input('date','password')->rules(['required']),
            Field::make('Heure')->input('time','password')->rules(['required']),
            Field::make("Ville arrivee")->input()->rules('required'),
            Field::make('Date')->input('date','required')->rules(['required']),
            Field::make('Heure')->input('time','required')->rules(['required']),
            Field::make('Kilos disponibles')->input('number','required')->rules(['required', 'numeric']),
            Field::make('Prix du kilo')->input('number','required')->rules(['required','numeric']),
            Field::make('Companie aerienne')->input('required')->rules(['required']),
            Field::make("Photo du Billet d'avion")->file()->multiple('required')->rules(['required']),
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

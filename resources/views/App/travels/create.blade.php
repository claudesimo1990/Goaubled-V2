@extends('layouts.master')

@section('content')
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="quigo-title">Postez votre voyage ici</h2>
                </div>
            </div>
            <div class="container">
                <div id="accordion">
                    <form action="{{route('travels.store')}}" method="POST">
                        <div class="card card-default">
                            <div id="collapse2" class="collapse show">
                                <div class="card-body">
                                    <div class="row">
                                        @csrf
                                        <div class="col-md-3 col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label">Ville de Depart</label>
                                                <input type="text" name="from_city"
                                                       class="form-control @error('from_city') is-invalid @enderror"
                                                       value="{{ old('from_city') }}" id="city"/>
                                                @error('from_city')
                                                <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label">pays</label>
                                                <select
                                                    class="form-control selectpicker countrypicker @error('from_country') is-invalid @enderror"
                                                    data-default="DE" name="from_country"
                                                    value="{{ old('from_country') }}"
                                                    data-countries="AT,BE,BG,HR,CM,CY,CZ,DK,EE,FI,FR,DE,GR,HU,IE,IT,LV,LT,LU,MT,NL,PL,PT,RO,SK,SI,ES,SE"></select>
                                                @error('from_country')
                                                <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-lg-2">
                                            <div class="form-group">
                                                <label class="control-label">Date</label>
                                                <input type="text" id="depart"
                                                       class="form-control @error('from_date') is-invalid @enderror"
                                                       name="from_date" value="{{ old('from_date') }}"/>
                                                @error('from_date')
                                                <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-2">
                                            <div class="form-group">
                                                <label class="control-label">Heure</label>
                                                <input type="time" id=""
                                                       class="form-control @error('from_hour') is-invalid @enderror"
                                                       name="from_hour" value="{{ old('from_hour') }}"/>
                                                @error('from_hour')
                                                <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label">Ville d'arrivée</label>
                                                <input type="text"
                                                       class="form-control @error('to_city') is-invalid @enderror"
                                                       name="to_city" value="{{ old('to_city') }}"/>
                                                @error('to_city')
                                                <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label">pays</label>
                                                <select
                                                    class="form-control selectpicker countrypicker @error('to_country') is-invalid @enderror"
                                                    data-default="DE" name="to_country" value="{{ old('to_country') }}"
                                                    data-countries="AT,BE,BG,HR,CM,CY,CZ,DK,EE,FI,FR,DE,GR,HU,IE,IT,LV,LT,LU,MT,NL,PL,PT,RO,SK,SI,ES,SE"></select>
                                                @error('to_country')
                                                <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-lg-2">
                                            <div class="form-group">
                                                <label class="control-label">Date</label>
                                                <input type="text" id="arrivee"
                                                       class="form-control @error('to_date') is-invalid @enderror"
                                                       name="to_date" value="{{ old('to_date') }}"/>
                                                @error('to_date')
                                                <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-2">
                                            <div class="form-group">
                                                <label class="control-label">Heure</label>
                                                <input type="time" id=""
                                                       class="form-control @error('to_hour') is-invalid @enderror"
                                                       name="to_hour" value="{{ old('to_hour') }}"/>
                                                @error('to_hour')
                                                <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label">Kilos disponibles</label>
                                                <input type="text"
                                                       class="form-control @error('available_kilo') is-invalid @enderror"
                                                       name="available_kilo" value="{{ old('available_kilo') }}"/>
                                                @error('available_kilo')
                                                <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">Prix du Kilo(Euro)</label>
                                                <input type="text"
                                                       class="form-control @error('price_kilo') is-invalid @enderror"
                                                       name="price_kilo" value="{{ old('price_kilo') }}"/>
                                                @error('price_kilo')
                                                <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">Company de voyage</label>
                                                <input type="text"
                                                       class="form-control @error('company') is-invalid @enderror"
                                                       name="company" value="{{ old('company') }}"/>
                                                @error('company')
                                                <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-2">
                                            <div class="form-group">
                                                <label class="control-label">Photo du Billet d'avion</label>
                                                <input type="file"
                                                       class="form-control @error('fly_ticket') is-invalid @enderror"
                                                       name="fly_ticket" value="{{ old('fly_ticket') }}"/>
                                                @error('fly_ticket')
                                                <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <label class="control-label">Laissez nous un petit Text ici. N'oubliez pas de nous lister les produits souhaités</label><br>
                                        <textarea name="message" id="summernote"
                                                  class="summernote form-control @error('message') is-invalid @enderror"
                                                  value="{{ old('message') }}"></textarea>
                                        @error('message')
                                        <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-lg-12 btn-travel">
                                    <div class="pull-right pb-3">
                                        <input type="submit" value="poster votre voyage"
                                               class="btn btn-success btn-lg btn-recherche" id="btnSubmit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

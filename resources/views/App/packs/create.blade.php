@extends('layouts.master')

@section('content')
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-2">
                    <h2 class="quigo-title">Postez un Colis</h2>
                </div>
            </div>
            <div class="container">
                <div id="accordion">
                    <form action="{{route('travels.store')}}" method="POST">
                        <div class="card card-default">
                            <div id="collapse2" class="collapse show">
                                <div class="card-body mt-0 pt-0">
                                    <div class="row">
                                        <div class="col-md-5 pt-0 mt-0 dropzone" id="id_dropzone">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="row">
                                                @csrf
                                                <div class="col-md-3 col-lg-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Ville de Depart</label>
                                                        <input type="text" name="from_city"
                                                               class="form-control @error('from_city') is-invalid @enderror"
                                                               value="{{ old('from_city') }}"/>
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
                                                            data-default="DE" name="to_country"
                                                            value="{{ old('to_country') }}"
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
                                            <br/>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                            <textarea name="message" id="summernote"
                                      class="summernote form-control @error('message') is-invalid @enderror"
                                      value="{{ old('message') }}"></textarea>
                                        @error('message')
                                        <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="row w-100">
                                        <div class="col-lg-12 btn-travel w-100">
                                            <div class="pull-right pb-3">
                                                <input type="submit" value="poster votre voyage"
                                                       class="btn btn-success btn-lg btn-recherche w-100"
                                                       id="btnSubmit">
                                            </div>
                                        </div>
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

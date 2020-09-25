<div>
    @extends("layouts/master")
    @section('content')
    <section id="about" class="mb-5">
        <div class="row">
            <div class="col-lg-12 text-center mb-2">
                <h2 class="quigo-title">Publiez votre Voyage</h2>
            </div>
        </div>
        <div class="row" style="margin-left: 12px;margin-right: 12px;">
            <div class="col-sm-12 col-md-12 col-lg-8 mx-auto bg-poster">

                <form action="{{ route('post.travels.create') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-7 my-3">

                            <div class="input-group">
                                <input name="from" type="text" class="form-control border-right-0"
                                       id="exampleInputdepart"
                                       aria-describedby="departHelp" placeholder="Départ de *">
                                <span class="input-group-append bg-white border-left-0">
                                        <span class="input-group-text bg-transparent">
                                          <i class="fas fa-plane-departure"></i>
                                        </span>
                                    </span>
                            </div>
                            @error('from') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-5 my-3">

                            <div class="input-group">
                                <input name='dateFrom' class="form-control border-right-0"
                                       type="datetime-local" placeholder="Dates de voyage *"
                                       value="2011-08-19T13:45:00" id="example-datetime-local-input">
                            </div>
                            @error('dateFrom') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-7 my-3">

                            <div class="input-group">
                                <input name='to' type="text" class="form-control border-right-0"
                                       id="exampleInputdepart"
                                       aria-describedby="departHelp" placeholder="Arrivée à *">
                                <span class="input-group-append bg-white border-left-0">
                                        <span class="input-group-text bg-transparent">
                                          <i class="fas fa-plane-arrival"></i>
                                        </span>
                                    </span>
                            </div>
                            @error('to') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-5 my-3">

                            <div class="input-group">
                                <input name='dateTo' class="form-control border-right-0" id="picker"
                                       type="datetime-local" aria-describedby="departHelp"
                                       placeholder="Dates de voyage *"
                                       value="2011-08-19T13:45:00" id="example-datetime-local-input">
                            </div>
                            @error('dateTo') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-row my-2">
                        <div class="col-md-6 mb-3">
                            <div class="input-group">
                                <input name='compagnie' class="form-control border-right-0" id="picker"
                                       aria-describedby="departHelp" placeholder="Compagnie aerienne*">
                            </div>
                            @error('compagnie') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name='photoBielletAvion' type="file" class="custom-file-input"
                                           id="inputGroupFile02">
                                    <label class="custom-file-label" for="inputGroupFile02">Inserer votre billet
                                        d'Avion ... IMG, JPG, PNG</label>
                                </div>
                            </div>
                            @error('photoBielletAvion') <span class="error">{{ $message }}</span> @enderror
                        </div>

                    </div>
                    <div class="form-row my-2">
                        <div class="col-md-6">
                            <div class="input-group">
                                <input name='kilo' type="number" class="form-control border-right-0"
                                       id="exampleInputdepart"
                                       aria-describedby="departHelp" placeholder="Nombre de Kilo disponibble*">
                                <span class="input-group-append bg-white border-left-0">
                                        <span class="input-group-text bg-transparent">
                                          <i class="fas fa-weight"></i>
                                        </span>
                                     </span>
                            </div>
                            @error('kilo') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-6">

                            <div class="input-group">
                                <input name='prix' type="number" class="form-control border-right-0"
                                       id="exampleInputdepart"
                                       aria-describedby="departHelp" placeholder="Prix/Kg*">
                                <span class="input-group-append bg-white border-left-0">
                                        <span class="input-group-text bg-transparent">
                                            <i class="fas fa-euro-sign"></i>
                                        </span>
                                    </span>
                            </div>
                            @error('prix') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group my-2">
                        <label class="font-weight-bold" for="exampleFormControlTextarea1">Voulez vous ecrire
                            autre chose sur votre voyage?</label>
                        <textarea name='content' class="form-control" id="exampleFormControlTextarea1"
                                  rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary my-2 btn-recherche">Poster votre voyage</button>
                </form>

            </div>

        </div>
    </section>
    @endsection
</div>

<div>
    <section id="about" class="mb-5">
        <div class="row">
            <div class="col-lg-12 text-center mb-2">
                <h2 class="quigo-title">Poster votre coli</h2>
            </div>
        </div>
        <div class="row" style="margin-left: 12px;margin-right: 12px;">
            <div class="col-sm-12 col-md-12 col-lg-8 mx-auto bg-poster">

                <form wire:submit.prevent="submit" method="post">
                    <div class="form-row">
                        <div class="col-md-7 my-3">

                            <div class="input-group">
                                <input wire:model="vilDepart" type="text" class="form-control border-right-0"
                                       id="exampleInputdepart"
                                       aria-describedby="departHelp" placeholder="Départ de *">
                                <span class="input-group-append bg-white border-left-0">
                                        <span class="input-group-text bg-transparent">
                                          <i class="fas fa-plane-departure"></i>
                                        </span>
                                    </span>
                            </div>
                            @error('vilDepart') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-5 my-3">

                            <div class="input-group">
                                <input wire:model='date_depart' class="form-control border-right-0"
                                       type="datetime-local" placeholder="Dates de voyage *"
                                       value="2011-08-19T13:45:00" id="example-datetime-local-input">
                            </div>
                            @error('date_depart') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-7 my-3">

                            <div class="input-group">
                                <input wire:model='vilArrive' type="text" class="form-control border-right-0"
                                       id="exampleInputdepart"
                                       aria-describedby="departHelp" placeholder="Arrivée à *">
                                <span class="input-group-append bg-white border-left-0">
                                        <span class="input-group-text bg-transparent">
                                          <i class="fas fa-plane-arrival"></i>
                                        </span>
                                    </span>
                            </div>
                            @error('vilArrive') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-5 my-3">

                            <div class="input-group">
                                <input wire:model='date_arrive' class="form-control border-right-0" id="picker"
                                       type="datetime-local" aria-describedby="departHelp"
                                       placeholder="Dates de voyage *"
                                       value="2011-08-19T13:45:00" id="example-datetime-local-input">
                            </div>
                            @error('date_arrive') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-row my-2">
                        <div class="col-md-6 mb-3">
                            <div class="input-group">
                                <input wire:model='compagnie' class="form-control border-right-0" id="picker"
                                       aria-describedby="departHelp" placeholder="Compagnie aerienne*">
                            </div>
                            @error('compagnie') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input wire:model='photoBielletAvion' type="file" class="custom-file-input"
                                           id="inputGroupFile02">
                                    <label class="custom-file-label" for="inputGroupFile02">Inserer une ou plusieurs fotos du coli
                                       </label>
                                </div>
                            </div>
                            @error('photoBielletAvion') <span class="error">{{ $message }}</span> @enderror
                        </div>

                    </div>
                    <div class="form-row my-2">
                        <div class="col-md-6">
                            <div class="input-group">
                                <input wire:model='kiloAvalable' type="text" class="form-control border-right-0"
                                       id="exampleInputdepart"
                                       aria-describedby="departHelp" placeholder="poids du coli*">
                                <span class="input-group-append bg-white border-left-0">
                                        <span class="input-group-text bg-transparent">
                                          <i class="fas fa-weight"></i>
                                        </span>
                                     </span>
                            </div>
                            @error('kiloAvalable') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-6">

                            <div class="input-group">
                                <input wire:model='prixKilo' type="text" class="form-control border-right-0"
                                       id="exampleInputdepart"
                                       aria-describedby="departHelp" placeholder="Somme a payer*">
                                <span class="input-group-append bg-white border-left-0">
                                        <span class="input-group-text bg-transparent">
                                            <i class="fas fa-euro-sign"></i>
                                        </span>
                                    </span>
                            </div>
                            @error('prixKilo') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group my-2">
                        <label class="font-weight-bold" for="exampleFormControlTextarea1">Voulez vous ecrire
                            autre chose sur votre coli?</label>
                        <textarea wire:model='content' class="form-control" id="exampleFormControlTextarea1"
                                  rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary my-2 btn-recherche">Poster</button>
                </form>

            </div>

        </div>
    </section>
</div>

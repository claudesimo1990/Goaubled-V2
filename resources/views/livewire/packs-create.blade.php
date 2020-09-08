<div>
    <section id="about" class="mb-5">
        <div class="row">
            <div class="col-lg-12 text-center mb-2">
                <h2 class="quigo-title">Que souhaitez-vous envoyer ?</h2>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 mx-auto bg-poster">
                        <form class="needs-validation" wire:submit.prevent="submit">
                            <div class="form-row">
                                <div class="col-md-4 my-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control border-right-0" id="exampleInputdepart"
                                               aria-describedby="departHelp" placeholder="Départ de *" wire:model="vilDepart">
                                    <span class="input-group-append bg-white border-left-0">
                                        <span class="input-group-text bg-transparent">
                                                 <i class="fas fa-plane-departure"></i>
                                        </span>
                                     </span>
                                    </div>
                                    <small id="departHelp" class="form-text text-muted">Veuillez saisir une ville de
                                        départ.</small>
                                        @error('vilDepart')<span class="error small">{{ $message }}</span>@enderror
                                </div>
                                <div class="col-md-4 my-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control border-right-0" id="exampleInputdepart"
                                               aria-describedby="departHelp" placeholder="Arrivée à *" wire:model="vilArrive">
                                        <span class="input-group-append bg-white border-left-0">
                                          <span class="input-group-text bg-transparent">
                                            <i class="fas fa-plane-arrival"></i>
                                          </span>
                                        </span>
                                    </div>
                                    <small id="departHelp" class="form-text text-muted">Veuillez saisir une ville
                                        d'Arrivée .</small>
                                        @error('vilArrive')<span class="error small">{{ $message }}</span>@enderror
                                </div>
                                <div class="col-md-4 my-3">
                                    <div class="input-group">
                                        <input type="date" class="form-control border-right-0" id="picker"
                                               aria-describedby="departHelp" placeholder="Dates a expedier*" wire:model="dateDepart">
                                        <span class="input-group-prepend bg-white border-left-0">
                                          <button class="input-group-text" type="button" id="toggle">
                                            <i class="fas fa-calendar-alt"></i>
                                          </button>
                                        </span>
                                    </div>
                                    @error('dateDepart')<span class="error small">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="form-row my-2">
                                <div class="col-md-2 mb-3">
                                    <label for="exampleInputEmail1">Quantite</label>
                                    <div class="input-group">
                                        <input class="form-control border-right-0" id="picker" type="number"
                                               aria-describedby="departHelp" min="1" max="6" placeholder="1" wire:model="quantity">
                                    </div>
                                    @error('quantity')<span class="error small">{{ $message }}</span>@enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">Nom de l'Object</label>
                                    <div class="input-group">
                                        <input class="form-control border-right-0" id="picker" type="text"
                                               aria-describedby="departHelp" placeholder="Telephone, Enveloppe..." wire:model="nameColi">
                                    </div>
                                    @error('nameColi')<span class="error small">{{ $message }}</span>@enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1">Poids(kg)</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control border-right-0" id="exampleInputdepart"
                                               min="1" max="46" aria-describedby="departHelp"
                                               placeholder="Nombre de Kilo*" wire:model="kilo">
                                        <span class="input-group-append bg-white border-left-0">
                                          <span class="input-group-text bg-transparent">
                                            <i class="fas fa-weight"></i>
                                          </span>
                                        </span>
                                    </div>
                                    @error('kilo')<span class="error small">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="form-row my-2">
                                <div class="col-md-2">
                                    <label for="exampleInputEmail1">Prix/KG</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control border-right-0" id="exampleInputdepart"
                                               min="5" max="8" aria-describedby="departHelp"
                                               placeholder="7" wire:model="prix">
                                        <span class="input-group-append bg-white border-left-0">
                                          <span class="input-group-text bg-transparent">
                                            <i class="fas fa-euro-sign"></i>
                                          </span>
                                        </span>

                                    </div>
                                    @error('prix')<span class="error small">{{ $message }}</span>@enderror
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group  mr-5">
                                        <label for="exampleFormControlFile1">Veillez telecharger la Photo de l object a
                                            envoyer</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1"
                                               accept="image/png, image/jpeg" wire:model="photo">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group my-2">
                                <label class="font-weight-bold" for="exampleFormControlTextarea1">Voulez vous ecrire
                                    autre chose sur votre voyage?</label>
                                <textarea wire:model='content' class="form-control" id="exampleFormControlTextarea1"
                                          rows="3"></textarea>
                            </div>
                            <button class="btn btn-recherche btn-lg text-white my-2 mt-2 " type="submit">poster votre annonce</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

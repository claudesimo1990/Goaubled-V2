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

                        <form class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 my-3">

                                    <div class="input-group">
                                        <input type="text" class="form-control border-right-0" id="exampleInputdepart"
                                               aria-describedby="departHelp" placeholder="Départ de *">
                                    <span class="input-group-append bg-white border-left-0">
                                        <span class="input-group-text bg-transparent">
                                                 <i class="fas fa-plane-departure"></i>
                                        </span>
                                     </span>
                                    </div>
                                    <small id="departHelp" class="form-text text-muted">Veuillez saisir une ville de
                                        départ.</small>
                                </div>

                                <div class="col-md-4 my-3">

                                    <div class="input-group">
                                        <input type="text" class="form-control border-right-0" id="exampleInputdepart"
                                               aria-describedby="departHelp" placeholder="Arrivée à *">
                                        <span class="input-group-append bg-white border-left-0">
                                          <span class="input-group-text bg-transparent">
                                            <i class="fas fa-plane-arrival"></i>
                                          </span>
                                        </span>

                                    </div>
                                    <small id="departHelp" class="form-text text-muted">Veuillez saisir une ville
                                        d'Arrivée .</small>
                                </div>

                                <div class="col-md-4 my-3">

                                    <div class="input-group">
                                        <input class="form-control border-right-0" id="picker"
                                               aria-describedby="departHelp" placeholder="Dates a expedier*">
                                        <span class="input-group-prepend bg-white border-left-0">
                                          <button class="input-group-text" type="button" id="toggle">
                                            <i class="fas fa-calendar-alt"></i>
                                          </button>
                                        </span>

                                    </div>

                                </div>
                            </div>
                            <div class="form-row my-2">
                                <div class="col-md-2 mb-3">
                                    <label for="exampleInputEmail1">Quantite</label>
                                    <div class="input-group">
                                        <input class="form-control border-right-0" id="picker" type="number"
                                               aria-describedby="departHelp" min="1" max="6" placeholder="1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">Nom de l'Object</label>
                                    <div class="input-group">
                                        <input class="form-control border-right-0" id="picker" type="text"
                                               aria-describedby="departHelp" placeholder="Telephone, Enveloppe...">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1">Poids(kg)</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control border-right-0" id="exampleInputdepart"
                                               min="1" max="46" aria-describedby="departHelp"
                                               placeholder="Nombre de Kilo*">
                                        <span class="input-group-append bg-white border-left-0">
                                          <span class="input-group-text bg-transparent">
                                            <i class="fas fa-weight"></i>
                                          </span>
                                        </span>
                                    </div>
                                </div>

                            </div>


                            <div class="form-row my-2">

                                <div class="col-md-2">
                                    <label for="exampleInputEmail1">Prix/KG</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control border-right-0" id="exampleInputdepart"
                                               type="number" min="5" max="8" aria-describedby="departHelp"
                                               placeholder="7">
                                        <span class="input-group-append bg-white border-left-0">
                                          <span class="input-group-text bg-transparent">
                                            <i class="fas fa-euro-sign"></i>
                                          </span>
                                        </span>

                                    </div>

                                </div>

                                <div class="col-md-8">
                                    <div class="form-group  mr-5">
                                        <label for="exampleFormControlFile1">Veillez telecharger la Photo de l object a
                                            envoyer</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1"
                                               accept="image/png, image/jpeg">
                                    </div>

                                </div>


                            </div>

                            <button class="btn btn-recherche btn-lg text-white my-5 mt-2 " type="submit">Valider</button>
                        </form>

                    </div>


                </div>

            </div>
        </div>
    </section>
</div>

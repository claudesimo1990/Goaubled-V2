<template>
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
                        <form class="needs-validation" v-on:submit.prevent="sendData">
                           <input type="hidden" name="_token" :value="csrf_token">
                            <div class="form-row">
                                <div class="col-md-4 my-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control border-right-0" id="exampleInputdepart"
                                               aria-describedby="departHelp" placeholder="Veuillez saisir une ville de départ." v-model="coli.from">
                                        <span class="input-group-append bg-white border-left-0">
                                            <span class="input-group-text bg-transparent">
                                                <i class="fas fa-plane-departure"></i>
                                            </span>
                                        </span>
                                    </div>
                                    <small v-if="errors.from" id="departHelp" class="form-text text-muted error" v-html="errors.from[0]"></small>
                                </div>
                                <div class="col-md-4 my-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control border-right-0" id="exampleInputdepart"
                                               aria-describedby="departHelp" placeholder="Veuillez saisir une ville d'Arrivée ." v-model="coli.to">
                                    </div>
                                    <small v-if="errors.to" id="departHelp" class="form-text text-muted error" v-html="errors.to[0]"></small>
                                </div>
                                <div class="col-md-4 my-3">
                                        <vc-date-picker v-model="coli.dateFrom" :popover="{ placement: 'bottom' }"
                                        :input-props='{

                                            placeholder: "entrez la date d expedition",
                                            readonly: true
                                        }'
                                        ></vc-date-picker>
                                    <small v-if="errors.dateFrom" id="departHelp" class="form-text text-muted error" v-html="errors.dateFrom[0]"></small>
                                </div>
                            </div>
                            <div class="form-row my-2">
                                <div class="col-md-4 mb-3">
                                    <label for="exampleInputEmail1">Quantite</label>
                                    <div class="input-group">
                                        <input class="form-control border-right-0" id="picker" type="number"
                                               aria-describedby="departHelp" min="1" max="6" placeholder="1" v-model="coli.quantity">
                                    </div>
                                    <small v-if="errors.quantity" id="departHelp" class="form-text text-muted error" v-html="errors.quantity[0]"></small>
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1">Nom de l'Object</label>
                                    <div class="input-group">
                                        <input class="form-control border-right-0" id="picker" type="text"
                                               aria-describedby="departHelp" placeholder="Telephone, Enveloppe..." v-model="coli.coliName">
                                    </div>
                                    <small v-if="errors.colis_name" id="departHelp" class="form-text text-muted error" v-html="errors.colis_name[0]"></small>
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1">Poids(kg)</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control border-right-0" id="exampleInputdepart"
                                               min="1" max="46" aria-describedby="departHelp"
                                               placeholder="Nombre de Kilo*" v-model="coli.kilo">
                                        <span class="input-group-append bg-white border-left-0">
                                          <span class="input-group-text bg-transparent">
                                            <i class="fas fa-weight"></i>
                                          </span>
                                        </span>
                                    </div>
                                    <small v-if="errors.kilo" id="departHelp" class="form-text text-muted error" v-html="errors.kilo[0]"></small>
                                </div>
                            </div>
                            <div class="form-row my-2">
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1">Prix/KG</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control border-right-0" id="exampleInputdepart"
                                               min="5" max="8" aria-describedby="departHelp"
                                               placeholder="7" v-model="coli.prix">
                                        <span class="input-group-append bg-white border-left-0">
                                          <span class="input-group-text bg-transparent">
                                            <i class="fas fa-euro-sign"></i>
                                          </span>
                                        </span>

                                    </div>
                                    <small v-if="errors.prix" id="departHelp" class="form-text text-muted error" v-html="errors.prix[0]"></small>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group  mr-5">
                                        <label for="exampleFormControlFile1">Veillez telecharger la Photo de l object a
                                            envoyer</label>
                                        <input type="file" class="form-control-file" id="file" ref="file" v-on:change="onImageChange"
                                               accept="image/png, image/jpeg">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group my-2">
                                <label class="font-weight-bold" for="exampleFormControlTextarea1">Voulez vous ecrire
                                    autre chose sur votre voyage?</label>
                                <textarea v-model='coli.content' class="form-control" id="exampleFormControlTextarea1"
                                          rows="3"></textarea>
                            </div>
                            <small v-if="errors.content" id="departHelp" class="form-text text-muted error" v-html="errors.content[0]"></small>
                            <button class="btn btn-recherche btn-lg text-white my-2 mt-2" type="submit">poster votre annonce</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script lang="ts">

const moment = require('moment');

export default {
    props: ['csrf_token'],
    data: function() {
        return {
            coli: {
                from: '',
                to: '',
                dateFrom: '',
                dateTo: '',
                quantity: '',
                coliName: '',
                kilo: '',
                prix: '',
                colisPhoto: '',
                content: ''
            },
            date1: '',
            errors: [],
            file: ''
        }
    },
    methods: {
        sendData: function() {

            let config = {
                headers: {
                    'Content-Type': 'application/json;charset=UTF-8',
                    "Access-Control-Allow-Origin": "*",
                    "enctype": "multipart/form-data"
                    }
                };

            const el = this;

             let formData = new FormData();

              formData.append('colisPhoto',  this.file);
              formData.append('colis_name',  this.coli.coliName);
              formData.append('from',  this.coli.from);
              formData.append('to',  this.coli.to);
              formData.append('dateFrom',  this.date1);
              formData.append('kilo',  this.coli.kilo);
              formData.append('prix',  this.coli.prix);

            axios.post('/coli-form', formData , config)
            .then(function (response) {

                window.location = response.data.redirect;
            })
            .catch(function (error) {
                if(error.response.data){
                    el.errors = error.response.data.errors;
                }
            });
        },
        onImageChange(e){
            this.file = e.target.files[0];
      }
    },
    watch: 
    {
        'coli.dateFrom': function(val) 
        {
            this.date1 = moment().format('DD.MM.YYYY');
        }
    }
    
}
</script>

<style>
.error{
    color: red !important;
}
</style>

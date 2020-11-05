<template>
    <div>
        <section id="about" class="mb-5">
            <div class="row">
                <div class="col-lg-12 text-center mb-2">
                    <h2 class="quigo-title">Publiez votre Voyage</h2>
                </div>
            </div>
            <div class="row" style="margin-left: 12px;margin-right: 12px;">
                <div class="col-sm-12 col-md-12 col-lg-8 mx-auto bg-poster">
                    <form class="needs-validation" v-on:submit.prevent="sendData">
                        <div class="form-row">
                            <div class="col-md-6 my-3">

                                <div class="input-group">
                                    <input v-model="travel.from" type="text" class="form-control border-right-0"
                                        id="exampleInputdepart"
                                        aria-describedby="departHelp" placeholder="Départ de *">
                                    <span class="input-group-append bg-white border-left-0">
                                            <span class="input-group-text bg-transparent">
                                            <i class="fas fa-plane-departure"></i>
                                            </span>
                                        </span>
                                </div>
                                <small v-if="errors.from" id="departHelp" class="form-text text-muted error" v-html="errors.from[0]"></small>
                            </div>

                            <div class="col-md-6 my-3">
                                <vc-date-picker v-model="travel.dateFrom" :popover="{ placement: 'bottom' }"
                                    :input-props='{
                                        placeholder: "Date de depart *",
                                        readonly: true
                                    }'
                                ></vc-date-picker>
                                <small v-if="errors.dateFrom" id="departHelp" class="form-text text-muted error" v-html="errors.from[0]"></small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 my-3">

                                <div class="input-group">
                                    <input v-model='travel.to' type="text" class="form-control border-right-0"
                                        id="exampleInputdepart"
                                        aria-describedby="departHelp" placeholder="Arrivée à *">
                                    <span class="input-group-append bg-white border-left-0">
                                            <span class="input-group-text bg-transparent">
                                            <i class="fas fa-plane-arrival"></i>
                                            </span>
                                        </span>
                                </div>
                                <small v-if="errors.to" id="departHelp" class="form-text text-muted error" v-html="errors.from[0]"></small>
                            </div>

                            <div class="col-md-6 my-3">
                                <vc-date-picker v-model="travel.dateTo" :popover="{ placement: 'bottom' }"
                                    :input-props='{
                                        placeholder: "Date d arrivee *",
                                        readonly: true
                                    }'
                                ></vc-date-picker>
                                <small v-if="errors.dateTo" id="departHelp" class="form-text text-muted error" v-html="errors.from[0]"></small>
                            </div>
                        </div>
                        <div class="form-row my-2">
                            <div class="col-md-6 mb-3">
                                <div class="input-group">
                                    <input v-model='travel.compagnie' class="form-control border-right-0" id="picker"
                                        aria-describedby="departHelp" placeholder="Compagnie aerienne*">
                                </div>
                                <small v-if="errors.compagnie" id="departHelp" class="form-text text-muted error" v-html="errors.from[0]"></small>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input"
                                            id="inputGroupFile02" ref="file" v-on:change="onImageChange">

                                        <label class="custom-file-label" for="inputGroupFile02">Inserer votre billet
                                            d'Avion ... IMG, JPG, PNG</label>
                                    </div>
                                </div>
                                <small v-if="errors.photoBielletAvion" id="departHelp" class="form-text text-muted error" v-html="errors.from[0]"></small>
                            </div>

                        </div>
                        <div class="form-row my-2">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input v-model='travel.kilo' type="number" class="form-control border-right-0"
                                        id="exampleInputdepart"
                                        aria-describedby="departHelp" placeholder="Nombre de Kilo disponibble*">
                                        <span class="input-group-append bg-white border-left-0">
                                            <span class="input-group-text bg-transparent">
                                                <i class="fas fa-weight"></i>
                                            </span>
                                        </span>
                                </div>
                                <small v-if="errors.kilo" id="departHelp" class="form-text text-muted error" v-html="errors.from[0]"></small>
                            </div>

                            <div class="col-md-6">

                                <div class="input-group">
                                    <input v-model='travel.prix' type="number" class="form-control border-right-0"
                                        id="exampleInputdepart"
                                        aria-describedby="departHelp" placeholder="Prix/Kg*">
                                    <span class="input-group-append bg-white border-left-0">
                                            <span class="input-group-text bg-transparent">
                                                <i class="fas fa-euro-sign"></i>
                                            </span>
                                        </span>
                                </div>
                                <small v-if="errors.prix" id="departHelp" class="form-text text-muted error" v-html="errors.from[0]"></small>
                            </div>
                        </div>
                        <div class="form-group my-2">
                            <label class="font-weight-bold" for="exampleFormControlTextarea1">Voulez vous ecrire
                                autre chose sur votre voyage?</label>
                            <textarea v-model='travel.content' class="form-control" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                        </div>
                        <small v-if="errors.content" id="departHelp" class="form-text text-muted error" v-html="errors.from[0]"></small>

                        <button type="submit" class="btn btn-primary my-2 btn-recherche">Poster votre voyage</button>
                    </form>

                </div>

            </div>
        </section>
    </div>
</template>

<script lang='ts'>

const moment = require('moment');

export default {
    props: ['csrf_token'],
    data: function() {
        return {

            travel: {
                from: '',
                to: '',
                dateFrom: '',
                dateTo: '',
                quantity: '',
                kilo: '',
                prix: '',
                photoBielletAvion: '',
                compagnie: '',
                content: ''
            },
            date1: '',
            date2: '',
            'errors': [],
            'file': ''
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

              formData.append('photoBielletAvion',  this.file);
              formData.append('compagnie',  this.travel.compagnie);
              formData.append('from',  this.travel.from);
              formData.append('to',  this.travel.to);
              formData.append('dateFrom',  this.date1);
              formData.append('dateTo',  this.date2);
              formData.append('kilo',  this.travel.kilo);
              formData.append('prix',  this.travel.prix);
              formData.append('content',  this.travel.content);

            axios.post('/travel-form', formData , config)
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
        'travel.dateFrom': function(val) 
        {
            this.date1 = moment().format('DD.MM.YYYY');
        },
        'travel.dateTo': function(val) 
        {
            this.date2 = moment().format('DD.MM.YYYY');
        }
    }
}
</script>

<style>

</style>

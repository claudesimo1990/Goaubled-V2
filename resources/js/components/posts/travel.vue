<template>
    <div id="about" class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center mb-2">
                <h2 class="quigo-title">Publiez votre Voyage</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 mx-auto pt-2 bg-poster">
                <ValidationObserver v-slot="{ handleSubmit }">
                    <form @submit.prevent="handleSubmit(onSubmit)">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" for="from">Depart de :</label>
                                    <validation-provider rules="required" v-slot="{ errors }">
                                        <input type="text" v-model="travel.from" id="from" name="from" class="form-control" :class="{ 'is-invalid': errors[0] !== undefined }" />
                                        <small class="form--error">{{ errors[0] }}</small>
                                    </validation-provider>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" for="dateFrom">Date (Date et Heure)</label>
                                        <validation-provider rules="required" v-slot="{ errors }">
                                        <datetime
                                        type="datetime"
                                        v-model="travel.dateFrom"
                                        input-class="form-control"
                                        zone="Europe/Paris"
                                        :format="{ year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: '2-digit'}"
                                        :phrases="{ok: 'Continue', cancel: 'Exit'}"
                                        :min-datetime="minDate.toString()"
                                        use24-hour
                                        auto
                                        ></datetime>
                                        <small class="form--error">{{ errors[0] }}</small>
                                    </validation-provider>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" for="to">Arrive a :</label>
                                    <validation-provider rules="required" v-slot="{ errors }">
                                        <input type="text" v-model="travel.to" id="to" name="to" class="form-control" :class="{ 'is-invalid': errors[0] !== undefined }" />
                                        <small class="form--error">{{ errors[0] }}</small>
                                    </validation-provider>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" for="dateTo">Date d'arrivee (Date et Heure)</label>
                                    <validation-provider rules="required" v-slot="{ errors }">
                                        <datetime
                                        type="datetime"
                                        v-model="travel.dateTo"
                                        input-class="form-control"
                                        zone="Europe/Paris"
                                        :format="{ year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: '2-digit' }"
                                        :phrases="{ok: 'Continue', cancel: 'Exit'}"
                                        :min-datetime="minDate.toString()"
                                        use24-hour
                                        auto
                                        ></datetime>
                                        <small class="form--error">{{ errors[0] }}</small>
                                    </validation-provider>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" for="compagnie">Companie aerienne</label>
                                    <validation-provider rules="required" v-slot="{ errors }">
                                        <input type="text" v-model="travel.compagnie" id="compagnie" name="compagnie" class="form-control" :class="{ 'is-invalid': errors[0] !== undefined }" />
                                        <small class="form--error">{{ errors[0] }}</small>
                                    </validation-provider>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" for="photoBielletAvion">Inserer votre billet d'Avion</label>
                                    <validation-provider rules="required" v-slot="{ errors }">
                                        <b-form-file id="photoBielletAvion" v-model="travel.photoBielletAvion" class="form-control" v-on:change="onImageChange" :class="{ 'is-invalid': errors[0] !== undefined }" placeholder="IMG, JPG, PNG, PDF"></b-form-file>
                                        <small class="form--error">{{ errors[0] }}</small>
                                    </validation-provider>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" for="compagnie">Nombre de Kilo disponibble</label>
                                    <validation-provider rules="required|integer" v-slot="{ errors }">
                                        <input type="text" v-model="travel.kilo" id="kilo" name="kilo" class="form-control" :class="{ 'is-invalid': errors[0] !== undefined }" />
                                        <small class="form--error">{{ errors[0] }}</small>
                                    </validation-provider>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" for="photoBielletAvion">Prix/Kg</label>
                                    <validation-provider rules="required|numeric" v-slot="{ errors }">
                                        <input type="text" v-model="travel.prix" id="prix" name="prix" class="form-control" :class="{ 'is-invalid': errors[0] !== undefined }" />
                                        <small class="form--error">{{ errors[0] }}</small>
                                    </validation-provider>
                                </div>
                            </div>
                        </div>
                        <div class="form-group my-2">
                            <label class="font-weight-bold" for="exampleFormControlTextarea1">Voulez vous ecrire autre chose sur votre voyage?</label>
                            <validation-provider rules="required" v-slot="{ errors }">
                                <textarea v-model='travel.content' class="form-control" id="exampleFormControlTextarea1" rows="3" :class="{ 'is-invalid': errors[0] !== undefined }"></textarea>
                                <small class="form--error">{{ errors[0] }}</small>
                            </validation-provider>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary my-2 btn-recherche">Poster votre voyage</button>
                        </div>
                    </form>
                </ValidationObserver>
            </div>
        </div>
    </div>
</template>

<script>

import { ValidationProvider,ValidationObserver, extend } from 'vee-validate';
import { required,integer,numeric } from 'vee-validate/dist/rules';

extend('required', {
  ...required,
  message: 'ce champs est obligatoire'
})
extend('integer', {
  ...integer,
  message: 'ce champs est un entier'
})
extend('numeric', {
  ...numeric,
  message: 'ce champs est numeric'
})
  export default {
    components: {
        ValidationProvider,
        ValidationObserver
    },
    data() {
      return {
        travel: {
            from: '',
            to: '',
            dateFrom: null,
            dateTo: null,
            quantity: '',
            kilo: '',
            prix: '',
            photoBielletAvion: null,
            compagnie: '',
            content: ''
        },
        aktDate: '',
        minDate: '',
        file:  ''
      }
    },
    watch: {
        'travel.dateFrom': function(val) {
            this.minDate = val;
        }
    },
    computed: {
        getMinDate: function() {
            return this.minDate;
        }
    },
    methods: {
      onSubmit(evt) {
          
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
              formData.append('dateFrom',  this.travel.dateFrom);
              formData.append('dateTo',  this.travel.dateTo);
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
    mounted() {
        this.aktDate = moment(new Date).format('DD.MM.YYYY' + ' à ' +  'HH:mm:ss');
        this.minDate = new Date();
    }
  }
</script>
<style lang="scss" scoped>
.form--error {
    color: red;
}
</style>

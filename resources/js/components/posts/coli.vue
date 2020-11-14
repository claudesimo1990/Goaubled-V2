<template>
    <div id="about" class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center mb-2">
                <h2 class="quigo-title">Que souhaitez-vous envoyer ?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 mx-auto pt-2 bg-poster">
                <ValidationObserver v-slot="{ handleSubmit }">
                    <form @submit.prevent="handleSubmit(onSubmit)">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="font-weight-bold" for="from">Ville de depart:</label>
                                    <validation-provider rules="required" v-slot="{ errors }">
                                        <input type="text" v-model="coli.from" id="from" name="from" class="form-control" :class="{ 'is-invalid': errors[0] !== undefined }" />
                                        <small class="form--error">{{ errors[0] }}</small>
                                    </validation-provider>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="font-weight-bold" for="coli.to">Ville d'arrivee:</label>
                                    <validation-provider rules="required" v-slot="{ errors }">
                                        <input type="text" v-model="coli.to" id="coli.to" name="coli.to" class="form-control" :class="{ 'is-invalid': errors[0] !== undefined }" />
                                        <small class="form--error">{{ errors[0] }}</small>
                                    </validation-provider>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="font-weight-bold" for="dateFrom">Date (Date et Heure)</label>
                                        <validation-provider rules="required" v-slot="{ errors }">
                                        <datetime
                                        type="datetime"
                                        v-model="coli.dateFrom"
                                        input-class="form-control"
                                        zone="Europe/Paris"
                                        :format="{ year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: '2-digit'}"
                                        :phrases="{ok: 'Continue', cancel: 'Exit'}"
                                        :min-datetime="(new Date()).toString()"
                                        use24-hour
                                        auto
                                        ></datetime>
                                        <small class="form--error">{{ errors[0] }}</small>
                                    </validation-provider>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="font-weight-bold" for="Quantite">Quantite</label>
                                    <validation-provider rules="required|integer" v-slot="{ errors }">
                                        <input type="text" v-model="coli.quantity" id="Quantite" name="Quantite" class="form-control" :class="{ 'is-invalid': errors[0] !== undefined }" />
                                        <small class="form--error">{{ errors[0] }}</small>
                                    </validation-provider>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="font-weight-bold" for="form.coliName">Nom de l'Objet à envoyer</label>
                                    <validation-provider rules="required" v-slot="{ errors }">
                                        <input type="text" v-model="coli.coliName" id="form.coliName" name="form.coliName" class="form-control" :class="{ 'is-invalid': errors[0] !== undefined }" />
                                        <small class="form--error">{{ errors[0] }}</small>
                                    </validation-provider>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="font-weight-bold" for="form.kilo">Poids de l'objet</label>
                                    <validation-provider rules="required|integer" v-slot="{ errors }">
                                        <input type="text" v-model="coli.kilo" id="form.kilo" name="form.kilo" class="form-control" :class="{ 'is-invalid': errors[0] !== undefined }" />
                                        <small class="form--error">{{ errors[0] }}</small>
                                    </validation-provider>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" for="form.prix">Prix/Kg</label>
                                    <validation-provider rules="required|numeric" v-slot="{ errors }">
                                        <input type="text" v-model="coli.prix" id="form.prix" name="form.prix" class="form-control" :class="{ 'is-invalid': errors[0] !== undefined }" />
                                        <small class="form--error">{{ errors[0] }}</small>
                                    </validation-provider>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" for="coli.colisPhoto">Une photo de l'objet</label>
                                    <validation-provider rules="required" v-slot="{ errors }">
                                        <b-form-file v-model="coli.colisPhoto" class="form-control" @change="onImageChange" :class="{ 'is-invalid': errors[0] !== undefined }" placeholder="IMG, JPG, PNG, PDF"></b-form-file>
                                        <small class="form--error">{{ errors[0] }}</small>
                                    </validation-provider>
                                </div>
                            </div>
                        </div>
                        <div class="form-group my-2">
                            <label class="font-weight-bold" for="form.content">Voulez vous ecrire autre chose sur votre voyage?</label>
                            <validation-provider rules="required" v-slot="{ errors }">
                                <textarea v-model='coli.content' class="form-control" id="form.content" rows="3" :class="{ 'is-invalid': errors[0] !== undefined }"></textarea>
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

  export default {
    data() {
      return {
        coli: 
            {
                from: '',
                to: '',
                dateFrom: null,
                dateTo: null,
                quantity: '',
                coliName: '',
                colisPhoto: null,
                kilo: '',
                prix: '',
                photo: '',
                content: ''
            },
        aktDate: '',
        minDate: ''
      }
    },
    watch: {
        'form.dateFrom': function(val) {
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

              formData.append('colisPhoto',  this.colisPhoto);
              formData.append('colis_name',  this.coli.coliName);
              formData.append('from',  this.coli.from);
              formData.append('to',  this.coli.to);
              formData.append('dateFrom',  this.coli.dateFrom);
              formData.append('kilo',  this.coli.kilo);
              formData.append('prix',  this.coli.prix);
              formData.append('content',  this.coli.content);

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
            this.coli.colisPhoto = e.target.files[0];
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

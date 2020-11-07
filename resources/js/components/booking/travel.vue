<template>
    <div>
    <section id="about" class="mb-5 reservation-component">
        <h1 class="text-justify text-center headline-text">Reserver un Voyage </h1>
        <div class="container shadow">
            <div class="row">
                <div class="col-lg-3 col-sm-12 justify-content-center">
                    <div class="">
                        <div class="user-bild-home">
                            <vue-letter-avatar class="user-bild" :name="owner.name !== undefined ? owner.name : 'Ramdom' " size='90' :rounded=true />
                        </div>
                    </div>
                    <div class="user-infos">
                        <strong>Name:</strong> <span>{{owner.name}}</span><br>
                        <strong>Email:</strong> <span>{{owner.email}}</span>
                    </div>
                    <hr class="hr-sepace">
                    <span>
                        <svg v-if="owner.email_verified_at != null" class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd"
                              d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
						<path fill-rule="evenodd"
                              d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/>
					</svg>
                        <svg v-else class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg" style="color: red">
						<path fill-rule="evenodd"
                              d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
						<path fill-rule="evenodd"
                              d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/>
					</svg>
					Numéro vérifier
				</span><br>

                    <span>
                        <svg v-if="owner.email_verified_at != null" class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd"
                              d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
						<path fill-rule="evenodd"
                              d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/>
					</svg>
                        <svg v-else class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg" style="color: red">
						<path fill-rule="evenodd"
                              d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
						<path fill-rule="evenodd"
                              d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/>
					</svg>
					E-Mail vérifier
				</span><br>
                        <div class="starrr" data-rating="0"></div>
                    <div>

                        <div class="rating"><input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                            <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input
                                type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio"name="rating"value="2"id="2"><label
                                for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label
                                for="1">☆</label>
                        </div>
                    </div>

                </div>
                <div class="col-lg-9  col-sm-12 travel-detail">
                    <h3> Details du trajet</h3>
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="timeline offset-md-3">
                                <span class="step-heure">{{ post.dateFrom }}</span>
                                <li>
                                    <p>{{ post.from }}</p>
                                </li>

                                <span class="step-heure">{{ post.dateTo }}</span>
                                <li>
                                    <p>{{ post.to }}</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 border pt-2 bg-white text-uppercase font-weight-bold rounded" style="color:#0c2e8a">
                            <p>Kilos Disponibles : <span class="float-right font-weight-bold"><h5><b-badge variant="info">{{ getKilos }}</b-badge></h5></span></p>
                            <p>Prix du Kilo : <span class="float-right font-weight-bold"><h5><b-badge variant="info">{{ post.prix }}<i class="fas fa-euro-sign pl-1"></i></b-badge></h5></span></p>
                            <hr>
                            <h5 class="text-center">
                                <b-badge variant="info">{{ post.compagnie }}</b-badge>
                            </h5>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-6 reservation-form">
                            <b-button data-toggle="collapse" data-target="#reserver">je reserve</b-button>
                            <b-button @click.prevent="startConversationWith"  variant="success">contacter le voyageur</b-button>
                            <div id="reserver" class="collapse">
                                <form  @submit.prevent="booking">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input v-model="form.kilo" type="text" class="form-control" placeholder="Combien de Kilos ?">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <b-button variant="info" type="submit" @click.prevent="bookingKilo">reserver</b-button>
                                                <b-spinner v-show="bookingSpinerShow" small label="Small Spinner" type="grow"></b-spinner>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <contact-user :user="owner" :current="currentUser" :messages="messages" @new="saveNewMessage(message)" :path="path"></contact-user>
</div>
</template>

<script>
import contactUser from "./contact";

export default {

    props: ['post', 'owner', 'currentUser', 'path'],

    components: {contactUser},

    data: function() {
        return {
            setisActiveChat: true,
            messages: [],
            bookingSpinerShow: false,
            form: {
                kilo: 0,
            }
        }
    },
    computed: {
        getKilos: function() {
            return Store.getters.getKilos;
        },
        getisActiveChat: function() {
            return Store.getters.getisActiveChat;
        }
    },
    methods: {
        booking: function() {
            if(this.form.kilo > 0) { Store.dispatch('bookKilo', this.form.kilo);}
        },
        startConversationWith() {
            Store.dispatch('setisActiveChat', !this.getisActiveChat);
            axios.get(`/conversation/${this.owner.id}`)
                .then((response) => {
                this.messages = response.data;
            })
        },
        saveNewMessage(message) {
            this.messages.push(message);
        },
        bookingKilo() {
            if (this.form.kilo > this.getKilos) {

                Vue.$toast.warning('le nombre de kilo disponible est inferieur a votre demande.', {
                    position: 'top-right'
                });
                return; 
            }
            this.bookingSpinerShow = true;

                axios.post(`/booking/${this.post.id}/${this.owner.id}`,
                {
                    kilos: this.form.kilo,
                    owner: this.owner

                }).then((response) => {
                    Store.dispatch('bookKilo', this.form.kilo);
                    this.form.kilo = 0;
                    Vue.$toast.success('votre reservation a ete soumise avec success.', {
                        position: 'top-right'
                    });
                    this.bookingSpinerShow = false;
                }).catch(() => {
                    Vue.$toast.warning('Ups une erreur est survenue lors de la soumission, veuillez verifier votre addresse email.', {
                        position: 'top-right'
                    });
                })
        }
    },
    mounted() {
       Store.dispatch('setisActiveChat', true);
       Store.dispatch('setKilos', this.post.kilo);
    }

}
</script>

<style>

</style>

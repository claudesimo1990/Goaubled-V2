<template>
<div>
    <section id="about" class="mb-0">
        <h1 class="text-justify text-center headline-text">Proposer un Colis </h1>
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
                                type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio"
                                name="rating" value="2" id="2"><label
                                for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label
                                for="1">☆</label>
                        </div>
                    </div>

                </div>
                <div class="col-lg-9  col-sm-12 travel-detail">
                    <h3> Details du Colis</h3>

                    <ul class="timeline offset-md-2">
                        <span class="step-heure">26-03-19 15:00</span>
                        <li>
                            <p>ServiceStore DB - S-Bahnhof Berlin Frankfurter Allee, Berlin</p>
                            <span>Douala (Cameroun)</span>
                        </li>

                        <span class="step-heure">26-03-19 15:00</span>
                        <li>
                            <p>ServiceStore DB - S-Bahnhof Berlin Frankfurter Allee, Berlin</p>
                            <span>Douala (Cameroun)</span>
                        </li>
                    </ul>

                    <div class="row">
                        <div class="col-md-12 detail-sub">
                            <p>Poid: <span>89kg</span></p>
                            <p>Tarif: <span>20 Euro</span></p>
                        </div>
                    </div>

                    <div class="row description-row">
                        <div class="col-md-2 colis-description">
                            <img class="colis-img"
                                    src="https://cdn.shopify.com/s/files/1/0026/3592/3491/products/livraison-colis-png-5_1_600x600.png">
                        </div>

                        <div class="col-md-9 colis-description">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. </p>
                        </div>
                    </div>


                    <div class="row ">
                        <div class="col-md-6 reservation-form">
                            <button class="btn btn-reserve"  data-toggle="collapse" data-target="#reserver" type="submit">je me propose</button>
                            <button @click="startConversationWith" class="btn btn-primary btn-contact-reserve">contacter l'expéditeur</button>

                            <div id="reserver" class="collapse">
                                <div class="form-group">
                                    <label for="email">Votre message:</label>
                                    <textarea type="textarea" class="form-control voyageur-textarea" id="message"
                                                name="message"></textarea>
                                    <button class="btn btn-primary" type="submit">envoyer</button>
                                </div>
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
            form: {
                kilo: 0,
                message: '',
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
            if(this.owner.id == this.currentUser.id){
                return;
            }
            Store.dispatch('setisActiveChat', !this.getisActiveChat);
            axios.get(`/conversation/${this.owner.id}`)
                .then((response) => {
                this.messages = response.data;
            })
        },
        saveNewMessage(message) {
            this.messages.push(message);
        },
    },
    mounted() {
       Store.dispatch('setisActiveChat', true);
    }
}
</script>

<style>

</style>

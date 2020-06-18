<template>
    <section id="about" class="pb-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="quigo-title">{{title}}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mt-3 cathergorie">
                    <h3 class="my-4">Affiner votre recherche</h3>
                    <div class="list-group">
                        <a href="#" @click.prevent="sortNews('travel')" class="list-group-item">Voyages</a>
                        <a href="#" @click.prevent="sortNews('pack')" class="list-group-item">Colis</a>
                        <a href="#" @click.prevent="showAllNews()" class="list-group-item">toutes les annonces</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div v-for="(item,index) in allnews">
                        <div v-show="travel.show">
                            <div class="container py-3" v-if="item.categorie_id == 2">
                                <div class="card runde-ecke">
                                    <div class="row shadow">
                                        <div class="col-md-3">
                                            <a href="#" @click.prevent="showProfile(item.User_id)">
                                                <img src="/img/avatar.jpg"
                                                     class="testimonial-img rund" alt="">
                                                <div class="font-italic font-weight-bold pl-5 mt-0 pb-2">{{item.name}}
                                                </div>
                                            </a>
                                            <div class="notice justify-center text-center notice-success stars">
                                                <p class="strong">Bewertung</p>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <p class="">Membre verifié <span class="fa fa-star verify"></span></p>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <ul class="timeline">
                                                <li>
                                                    <a target="_blank" href="#">{{item.vilDepart}}</a>
                                                    <a href="#" class="float-right pr-4">{{item.date_depart}}</a>
                                                </li>
                                                <li>
                                                    <a href="#">{{item.vilArrive}}</a>
                                                    <a href="#" class="float-right pr-4">{{item.date_arrive}}</a>
                                                </li>
                                            </ul>
                                            <hr>
                                            <div class="notice notice-warning">
                                                <strong>Kilo disponibles :</strong> {{item.kiloAvalable}} Kg <span
                                                class="float-right kilo-price">{{item.prixKilo}}€</span>
                                            </div>
                                            <div class="notice notice-warning">
                                                <strong>Message : </strong>
                                                <p>{{item.content}}</p>
                                            </div>
                                            <div class="notice notice-success text-right">
                                                <a href="#"  @click.prevent="contactUser(item.User_id)" class="btn btn-primary btn-lg btn-recherche contact-btn">Contactez le
                                                    voyageur</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div v-show="pack.show">
                            <div class="container py-3" v-if="item.categorie_id == 1">
                                <div class="card runde-ecke">
                                    <div class="row shadow">
                                        <div class="col-md-3">
                                            <a href="#" @click.prevent="contactUser(item.User_id)">
                                                <img src="/img/pack.jpeg"
                                                     class="testimonial-img rund" alt="">
                                                <div class="font-italic font-weight-bold pl-5 mt-0 pb-2">{{item.name}}
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-9">
                                            <ul class="timeline">
                                                <li>
                                                    <a target="_blank" href="#">{{item.vilDepart}}</a>
                                                    <a href="#" class="float-right pr-4">{{item.date_depart}}</a>
                                                </li>
                                                <li>
                                                    <a href="#">{{item.vilArrive}}</a>
                                                    <a href="#" class="float-right pr-4">{{item.date_arrive}}</a>
                                                </li>
                                            </ul>
                                            <hr>
                                            <div class="notice notice-warning">
                                                <strong>Poids du Packet :</strong> {{item.kilo}} Kg <span
                                                class="float-right kilo-price">{{item.prix}}€</span>
                                            </div>
                                            <div class="notice notice-warning">
                                                <strong>Message : </strong>
                                                <p>{{item.content}}</p>
                                            </div>
                                            <div class="notice notice-success text-right">
                                                <a href="#" @click="contactUser(item.User_id)" class="btn btn-primary btn-lg btn-recherche contact-btn">Contactez l'expediteur</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
    export default {
        data: function () {
            return {
                messages: [],
                text: null,
                allnews: [],
                pack: {
                    show: true
                },
                travel: {
                    show: true
                },
                title: "Listes d'annonces"
            }
        },
        methods: {
            contactVoyageur: function (userid) {
                axios.get("/contact/"+userid, {
                    body: this.postBody
                }).then(response => {
                    window.location.replace = "/contact/" + userid;
                })
                    .catch(e => {
                        this.errors.push(e)
                    })
            },
            save: function () {
                this.messages.push(this.text);
            },
            sortNews: function(cat) {
                if (cat === 'travel') {
                    this.pack.show = false;
                    this.travel.show = true;
                    this.title = "Annonces de voyages";
                } else if (cat === 'pack') {
                    this.travel.show = false;
                    this.pack.show = true;
                    this.title = "Annonces de packets";
                }
            },
            showAllNews: function() {
                this.title = "Listes d' annonces";
                this.pack.show = true;
                this.travel.show = true;
            },
            contactUser: function (user_id) {
                axios.post('/contact/user/'+ user_id,{'id': user_id}).then((response) => {
                    window.location.href = response.data;
                }).catch((error) => {

                });

            },
            showProfile: function (user_id) {
                axios.post('/profile/user/'+ user_id,{'id': user_id}).then((response) => {
                    window.location.href = response.data;
                }).catch((error) => {

                });
            }
        },
        computed: {
            datefns: function (dateString) {
                var dateString = '17-09-2013 10:08',
                    dateTimeParts = dateString.split(' '),
                    timeParts = dateTimeParts[1].split(':'),
                    dateParts = dateTimeParts[0].split('-'),
                    date;
                date = new Date(dateParts[2], parseInt(dateParts[1], 10) - 1, dateParts[0], timeParts[0], timeParts[1]);
            }
        },
        mounted() {
            axios.get('api/api/allnews').then((response) => {
                this.allnews = response.data;
            }).catch((error) => {
                console.log(error)
            })
        },
    }
</script>
<style scoped>
    ul.timeline {
        list-style-type: none;
        position: relative;
    }

    ul.timeline:before {
        content: ' ';
        background: #d4d9df;
        display: inline-block;
        position: absolute;
        left: 29px;
        width: 2px;
        height: 100%;
        z-index: 400;
    }

    ul.timeline > li {
        margin: 20px 0;
        padding-left: 20px;
    }

    ul.timeline > li:before {
        content: ' ';
        background: white;
        display: inline-block;
        position: absolute;
        border-radius: 50%;
        border: 3px solid #8BC73D;
        left: 20px;
        width: 20px;
        height: 20px;
        z-index: 400;
    }

    .stars {
        width: 96% !important;
        height: 40% !important;
    }
    .kilo-price {
        font-size: 17px;
        font-weight: bold;
        padding-top: 12px;
        height: 50px;
        width: 50px;
        text-align: center;
        background-color: #8bc73d;
        color: white;
        border-radius: 50%;
        display: inline-block;
        margin-top: -15px;
    }
    .contact-btn{
        margin-bottom: 36px !important;
    }
</style>

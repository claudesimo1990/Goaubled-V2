<template>
    <section id="about" class="pb-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-12 text-center">
                    <h2 class="quigo-title">{{title}}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 mt-3 cathergorie">
                    <h3 class="my-4">Affiner votre recherche</h3>
                    <div class="list-group search-box rounded">
                        <div class="col-sm-12">
                            <div class="form-check border-bottom mb-3" @click="showAllNews()">
                                <input class="form-check-input" type="radio" name="gridRadios" id="allnews"
                                       value="all"   :checked="sortKey === 'allNews'">
                                <label class="form-check-label" for="allnews">
                                    Toutes les annonces
                                </label>
                            </div>
                            <div class="form-check border-bottom mb-3" @click="sortNews('travel')">
                                <input class="form-check-input" type="radio" name="gridRadios" id="Voyages"
                                       value="travel"
                                       :checked="sortKey === 'travel'">
                                <label class="form-check-label" for="Voyages">
                                    Voyages
                                </label>
                            </div>
                            <div class="form-check border-bottom mb-3" @click="sortNews('pack')">
                                <input class="form-check-input" type="radio" name="gridRadios" id="Colis"
                                       :checked="sortKey === 'pack'">
                                <label class="form-check-label" for="Colis">
                                    Colis
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-md-9 col-lg-9">
                    <div v-for="item in laravelData.data" :key="item.id">
                        <div v-show="travel.show">
                            <div class="container py-3" v-if="item.categorie_id == 2">
                                <div class="card runde-ecke">
                                    <div class="row shadow">
                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 pb-5">
                                            <div class="border my-2 px-2 rounded">
                                                <div class="profile-block">
                                                    <vue-letter-avatar class="user-bild text-center" :name="item.user.name !== undefined ? item.user.name : 'Ramdom' " size='80' :rounded=true />
                                                    <h5 class="text-center mt-2"><b-badge variant="dark">{{ item.user.name }}</b-badge></h5>
                                                    <div class="notice justify-center text-center notice-success stars">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="strong">VOTES :</div>
                                                            <div>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="d-flex justify-content-between"> 
                                                        <span>Membre verifié</span>
                                                        <span class="fa fa-star verify mr-2"></span>
                                                    </div>
                                                    <span class="vorHumanns">{{ item.created_at }}</span>
                                                </div>
                                            </div>
                                            <div class="icon--card">
                                                <img :src="item.categorie_id == 1 ? '/img/cube-outline.svg' : '/img/icons8-airport-100.png'" class="mt-2" alt="SVG mit img Tag laden" width="50" height="50" >
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                            <ul class="timeline">
                                                <li>
                                                    <a target="_blank" href="#">{{ item.from }}</a>
                                                    <a href="#" class="float-right pr-4">{{item.dateFrom}}</a>
                                                </li>
                                                <li>
                                                    <a href="#">{{item.to}}</a>
                                                    <a href="#" class="float-right pr-4">{{item.dateTo}}</a>
                                                </li>
                                            </ul>
                                            <hr>
                                            <div class="notice notice-warning">
                                                <strong>Kilo disponibles :</strong> {{item.kilo}} Kg <span
                                                class="float-right kilo-price">{{item.prix}} €</span>
                                            </div>
                                            <div class="notice notice-warning">
                                                <strong>Message : </strong>
                                                <div class="text-break overflow-auto text-muted bg-white rounded mb-4 mt-1 px-2">
                                                    {{item.content}}
                                                </div>
                                            </div>
                                            <div class="notice notice-success text-right">
                                                <a :href="item.Path" class="btn btn-primary btn-lg btn-recherche contact-btn">
                                                   Contactez le voyageur
                                                </a>
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
                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 pb-5">
                                            <div class="border my-3 px-2 rounded">
                                                <div class="profile-block">
                                                    <vue-letter-avatar class="user-bild text-center" :name="item.user.name !== undefined ? item.user.name : 'Ramdom' " size='100' :rounded=true />
                                                    <h5 class="text-center mt-2"><b-badge variant="dark">{{ item.user.name }}</b-badge></h5>
                                                    <div class="notice justify-center text-center notice-success stars">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="strong">VOTES :</div>
                                                            <div>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="d-flex justify-content-between"> 
                                                        <span>Membre verifié</span>
                                                        <span class="fa fa-star verify mr-2"></span>
                                                    </div>
                                                    <span class="vorHumanns">{{ item.created_at }}</span>
                                                </div>
                                            </div>
                                            <div class="icon--card">
                                                <img :src="item.categorie_id == 1 ? '/img/cube-outline.svg' : '/img/icons8-airport-100.png'" class="mt-2" alt="SVG mit img Tag laden" width="50" height="50" >
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <ul class="timeline">
                                                <li>
                                                    <a target="_blank" href="#">{{ item.to }}</a>
                                                    <a href="#" class="float-right pr-4">{{ item.dateFrom }}</a>
                                                </li>
                                                <li>
                                                    <a href="#">{{item.to}}</a>
                                                    <a href="#" class="float-right pr-4">{{ item.dateTo }}</a>
                                                </li>
                                            </ul>
                                            <hr>
                                            <div class="notice notice-warning">
                                                <strong>Poids du Coli :</strong> {{ item.kilo }} Kg <span
                                                class="float-right kilo-price pack-price">{{ item.prix }} €</span>
                                            </div>
                                            <div class="notice notice-warning border-4">
                                                <strong>Message : </strong>
                                                <div class="text-break overflow-auto text-muted bg-white rounded mb-4 mt-1 px-2">
                                                    {{item.content}}
                                                </div>
                                            </div>
                                            <div class="notice notice-success text-right">
                                                <a :href="item.Path" class="btn btn-primary btn-lg btn-recherche contact-btn">
                                                   Contactez l'expediteur
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="row mt-4 py-2 px-4">
                        <pagination :data="laravelData" size="small" align="right" @pagination-change-page="getResults">
                            <span slot="prev-nav">&lt; Previous</span>
                            <span slot="next-nav">Next &gt;</span>
                        </pagination>
                   </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    props: ["keyWatch"],
    data: function () {
        return {
            laravelData: {},
            messages: [],
            text: null,
            sortKey: '',
            posts: [],
            pack: {
                show: true
            },
            travel: {
                show: true
            },
            title: "Listes d'annonces"
        }
    },
    watch: {

        sortKey: function(val) {

            if (val == 'allNews') {
                this.showAllNews();
                return;
                
            }
            this.sortNews(val);
        
        }

    },
    methods: {
        sortNews: function(cat) {
            if (cat === 'travel') {
                Store.dispatch('setOverlayShow', true);
                axios.get('travels').then((response) => {
                    this.laravelData = response.data;
                    this.title = "Annonces de voyages";
                    Store.dispatch('setOverlayShow', false);
                })
            } else if (cat === 'pack') {
                Store.dispatch('setOverlayShow', true);
                axios.get('packs').then((response) => {
                    this.laravelData = response.data;
                    this.title = "Annonces de packets";
                    Store.dispatch('setOverlayShow', false);
                })
            }
        },
        showAllNews: function () {
            axios.get('api/listeNews').then((response) => {
                    this.laravelData = response.data;
                    this.title = "Liste d'annonces";
                    Store.dispatch('setOverlayShow', false);
                })
        },
        // Our method to GET results from a Laravel endpoint
        getResults(page = 1) {
            axios.get('api/listeNews?page=' + page)
                .then(response => {
                    this.laravelData = response.data;
                });
        }
    },
    mounted() {
        this.getResults();
        this.sortKey = this.keyWatch !== undefined ? this.keyWatch : 'allNews' ;
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
            margin-top: -7px;
    }
    .contact-btn {
        margin-bottom: 36px !important;
    }
    .packs {
        background-color:  #8bc73d !important;
    }
    .icon--card {
        position: absolute;
        bottom: 10px;
        left: 0;
    }
    span.vorHumanns {
        font-weight: bold;
        color: gray;
        position: absolute;
        bottom: 25px;
        left: 54px;
}
.text-content {
    padding: 18px;
    margin: 14px;
}
</style>
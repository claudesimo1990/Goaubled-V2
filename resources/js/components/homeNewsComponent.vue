<template>
    <section id="services" :style="{'background-color':background}" v-if="lastNews.length > 0">
        <div class="container">
            <div class="section-header">
                <h2 class="text-center text-white">Les dernieres annonces</h2>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 mb-4" v-for="item in lastNews" :key="item.id">
                    <div class="image-flip">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="mt-2"><img class="user--news--avatar" :src="item.user_avatar" alt="card image" width="100" height="100"></div>
                                        <div class="card-title text-uppercase font-weight-bold">{{ item.vilDepart }}<i class="fas fa-long-arrow-alt-right px-1"></i>{{ item.vilArrive }}</div>
                                        <div class="my-4 d-flex flex-column">
                                            <div class="my-2 card-text mt-0">Date de Depart: <span>{{ item.date_depart }}</span></div>
                                            <div class="d-flex justify-content-center">
                                                <div class="my-2 card-text">Total Kilo:<span> {{ item.kiloAvalable }}</span></div>
                                                <div class="my-2 card-text pl-2">Prix/Kg: {{ item.prixKilo }}<i class="fas fa-euro-sign pl-1"></i></div>
                                            </div>
                                        </div>
                                        <img :src="item.categorie_id == 1 ? '/img/cube-outline.svg' : '/img/icons8-airport-100.png'" class="card-logo mt-2" alt="SVG mit img Tag laden" width="50" height="50" >
                                        <a :href="item.path" type="button" class="btn btn-outline-success bouton-look" v-html="item.categorie_id == 2 ? 'contactez le voyageur' : 'contactez l expediteur'"></a>
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
    props: ["news","background"],
    data: function() {
        return {
            lastNews: [],
        };
    },
    mounted() {
        this.lastNews = this.news;
    },
    methods: {
        goToPath(path) {
            console.log(path);
        }
    }
};
</script>

<style lang="scss">
.card-logo{
    position: absolute;
    top: 0;
    left: 0;
    border-radius: 50%;
}
.user--news--avatar{
    border-radius: 50%;
}
</style>

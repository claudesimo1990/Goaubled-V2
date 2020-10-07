<template>
    <section id="services" :style="{ 'background-color': background }" v-if="lastNews.length > 0">
        <div class="container">
            <div class="section-header">
                <h2 class="text-center title__annonce">
                    Les dernieres annonces
                </h2>
            </div>
            <b-card-group>
                <b-card class="my-4 mx-2 w-auto" v-for="item in lastNews" :key="item.id">
                    <b-card-text>
                        <img
                            :src="
                                item.categorie_id == 1
                                    ? '/img/cube-outline.svg'
                                    : '/img/icons8-airport-100.png'
                            "
                            class="card-logo mt-2"
                            alt="SVG mit img Tag laden"
                            width="50"
                            height="50"
                        />
                    </b-card-text>
                    <b-card-text class="text-center">
                        <vue-letter-avatar class="card-user-logo" :name="item.user.name !== undefined ? item.user.name : 'Ramdom' " size='60' :rounded=true />
                    </b-card-text>
                    <div class="">
                        <h5 class="text-nowrap"><b-badge variant="info">{{ item.from }}</b-badge><b-icon class="mx-1" icon="arrow-right-circle-fill" variant="info" aria-hidden="true"></b-icon><b-badge variant="info">{{ item.to }}</b-badge></h5>
                        <hr>
                        <p>Kilos Disponibles : <span class="float-right font-weight-bold"><h5><b-badge variant="secondary">{{ item.kilo }}</b-badge></h5></span></p>
                        <p>Prix du Kilo : <span class="float-right font-weight-bold"><h5><b-badge variant="secondary">{{ item.prix }}<i data-v-4e9a6efe="" class="fas fa-euro-sign pl-1"></i></b-badge></h5></span></p>
                        <hr>
                        <h5 class="text-center"><b-badge variant="secondary">{{ item.compagnie }}</b-badge></h5>
                    </div>
                    <template v-slot:footer>
                        <small class="text-muted">{{ item.created_at }}</small>
                    </template>
                </b-card>
            </b-card-group>
        </div>
    </section>
</template>

<script>
export default {
    props: ["news", "background"],
    data: function() {
        return {
            lastNews: []
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

<style lang="scss" scoped>
.card-user-logo {
    width: 90px;
    height: 90px;
    border-radius: 100%;
    background: rgb(139 199 61) !important;
}
</style>
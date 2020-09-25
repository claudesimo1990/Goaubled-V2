<template>
    <section
        id="services"
        :style="{ 'background-color': background }"
        v-if="lastNews.length > 0"
    >
        <div class="container">
            <div class="section-header">
                <h2 class="text-center title__annonce">
                    Les dernieres annonces
                </h2>
            </div>
            <div class="row">
                <div
                    class="col-xs-12 col-sm-6 col-md-4 mb-4"
                    v-for="item in lastNews"
                    :key="item.id"
                >
                    <div class="image-flip">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card card-body text-center w-100" Style="height: 100%">
                                        <div class="mt-2">
                                            <img
                                                v-if="
                                                    item.user.avatar_original !=
                                                        null
                                                "
                                                class="user--news--avatar"
                                                :src="item.user.avatar_original"
                                                alt="card image"
                                                width="100"
                                                height="100"
                                            />
                                            <img
                                                v-else
                                                class="user--news--avatar"
                                                :src="
                                                    'storage/UsersAvatars/' +
                                                        item.user_avatar
                                                "
                                                alt="card image"
                                                width="100"
                                                height="100"
                                            />
                                        </div>
                                        <div class="card-title text-uppercase font-weight-bold mt-3">
                                            <span class="post__info">{{ item.from }}</span> <i class="fas fa-long-arrow-alt-right px-1"></i> <span class="post__info">{{ item.to }}</span>
                                        </div>
                                        <div class="my-4 d-flex flex-column">
                                            <div class="my-2 card-text mt-0">
                                                Date de Depart:
                                                <span>{{
                                                    item.dateFrom
                                                }}</span>
                                            </div>
                                            <div
                                                class="d-flex justify-content-center"
                                            >
                                                <div class="my-2 card-text">
                                                    Total Kilo:<span>
                                                        {{ item.kilo }}</span
                                                    >
                                                </div>
                                                <div
                                                    class="my-2 card-text pl-2"
                                                >
                                                    Prix/Kg: {{ item.prix
                                                    }}<i
                                                        class="fas fa-euro-sign pl-1"
                                                    ></i>
                                                </div>
                                            </div>
                                        </div>
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
                                        <div class="notice notice-success button_home">
                                                <a :href="item.Path"
                                                class="btn btn-primary btn-lg btn-recherche contact-btn"
                                                v-html="item.categorie_id == 1 ? 'Contactez l expediteur' : 'Contactez le voyageur' "
                                                ></a>
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
.card-logo {
    position: absolute;
    top: 0;
    left: 0;
    border-radius: 50%;
}
.user--news--avatar {
    border-radius: 50%;
}
.title__annonce {
    color: #0c2e8a;
}
.card-news--home{
    height: 380px;
}
.button_home{
    position: absolute;
    bottom: 4px;
    left: 10%;
    right: 10%;
}
.post__info{
    color: #555;
    font-family: "Raleway", sans-serif;
    font-weight: 700;
    font-size: 14px;
    outline: none;
}
</style>

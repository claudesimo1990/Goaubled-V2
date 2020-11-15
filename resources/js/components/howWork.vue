<template>
<div>
    <section id="intro" :style="{ backgroundImage: `url('${getImg}')`,  'height':  '400px' }">
        <div class="intro-content mt-0">
            <h2 class="text-center title__annonce pt-2 text-white">{{ getTitle }}</h2>
        </div>
    </section>
        <ul class="nav nav-pills nav-justified mt-1">
            <li class="nav-item border border-bottom-4 m-1">
                <a class="nav-link" v-bind:class="{ active: isActive_1, }" @click.prevent="changeImage(0)">Poster un voyage</a>
            </li>
            <li class="nav-item border border-bottom-4 m-1">
                <a class="nav-link" v-bind:class="{ active: isActive_2, }" @click.prevent="changeImage(1)">Envoyer un colis</a>
            </li>
            <li class="nav-item border border-bottom-4 m-1">
                <a class="nav-link" v-bind:class="{ active: isActive_3, }" @click.prevent="changeImage(2)">Chercher un voyage</a>
            </li>
        </ul>
    <section style="min-height: 600px;">
        <transition name="slide-fade">
            <component :is="currentTabComponent"></component>
        </transition>
    </section>
</div>
</template>

<script>

import howPostTravel from './howitwork/howPostTravel';
import findPostTravel from './howitwork/findPostTravel';
import howPostPack from './howitwork/howPostPack';

export default {
    props: ['title'],

    components: {
       howPostTravel,
       findPostTravel,
       howPostPack,
    },
    data: function () {
        return {
            current: '',
            images: [
                '/images/pack-bild-3.jpg',
                '/images/pack-bild.jpeg',
                '/images/pack-bild-2.jpg'
            ],
            titels: [
                "comment poster un voyage ?",
                "comment envoyer un colis ?",
                "Comment rechercher un trajet ?"
            ],

            titel: '',
            replace: '',
            img: '',
            isActive_1: true,
            isActive_2: false,
            isActive_3: false,

        }
    },
    computed: {
        getImg: function () {
            return this.img;

        },

        getTitle: function () {
            return this.titel;
        },
       currentTabComponent() {
            return this.current;
       },

    },
    watch: {
        current: function(val) {
        }
    },
    methods: {
        changeImage(index) {

            this.img = this.images[index];
            this.titel = this.titels[index];

            switch (index) {
                case 0:
                    this.isActive_1 = true;
                    this.isActive_2 = false;
                    this.isActive_3 = false;
                    this.current = howPostTravel;
                    break;
                case 1:
                    this.isActive_1 = false;
                    this.isActive_2 = true;
                    this.isActive_3 = false;
                    this.current = findPostTravel;
                    break;
                case 2:
                    this.isActive_1 = false;
                    this.isActive_2 = false;
                    this.isActive_3 = true;
                    this.current = howPostPack;
                    break;
            }

        },

    },

    mounted() {
        this.current = howPostTravel;
        this.titel = this.titels[0];
        this.img = this.images[0];
    },

}
</script>

<style lang="scss" scoped>
@import "./../../sass/_variables.scss";

.header-title {
    color: $quigo-second;
}

h1 {
    color: #fff;
    font-size: 50px;
    line-height: 95px;
    font-weight: 400;
    padding-top: 75px;
}

.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
    color: #fff;
    background-color: #8bc73d;
}

.nav-item {
    cursor: pointer;
}

.slide-fade-enter, .slide-fade-leave-to
 {
  transform: translateX(10px);
  opacity: 0;
}

</style>
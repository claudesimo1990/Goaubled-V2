<template>
<div>
    <!--==========================
  Intro Section
============================-->
    <section id="intro" :style="{ backgroundImage: `url('${getImg}')`,  'height':  '400px' }">
        <div class="intro-content mt-0">
            <h2 class="text-center title__annonce pt-2 text-white">{{ getTitle }}</h2>
        </div>

    </section><!-- #intro -->
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

        <!-- poster un voyager -->
        <section v-if="section_1" class="our-blog pt-5 m-0 bg-silver">
            <div class="container work-process  pb-5 pt-5">
                <div class="section-header">
                    <h2 class="text-center title__annonce">Poster Un Voyager!</h2>
                </div>
                <!-- ============ step 1 =========== -->
                <div class="row">
                    <div class="col-md-5">
                        <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="process-step">
                                        <p class="m-0 p-0">Step</p>
                                        <h2 class="m-0 p-0">01</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h5>What is Lorem Ipsum?</h5>
                                    <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p>
                                </div>
                            </div>
                            <div class="process-line-l"></div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="process-point-right"></div>
                    </div>
                </div>
                <!-- ============ step 2 =========== -->
                <div class="row">

                    <div class="col-md-5">
                        <div class="process-point-left"></div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="process-box process-right" data-aos="fade-left" data-aos-duration="1000">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="process-step">
                                        <p class="m-0 p-0">Step</p>
                                        <h2 class="m-0 p-0">02</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h5>What is Lorem Ipsum?</h5>
                                    <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p>
                                </div>
                            </div>
                            <div class="process-line-r"></div>
                        </div>
                    </div>

                </div>
                <!-- ============ step 3 =========== -->
                <div class="row">
                    <div class="col-md-5">
                        <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="process-step">
                                        <p class="m-0 p-0">Step</p>
                                        <h2 class="m-0 p-0">03</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h5>What is Lorem Ipsum?</h5>
                                    <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p>
                                </div>
                            </div>
                            <div class="process-line-l"></div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="process-point-right"></div>
                    </div>
                </div>
                <!-- ============ step 4 =========== -->
                <div class="row">
                    <div class="col-md-5">
                        <div class="process-point-left"></div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="process-box process-right" data-aos="fade-left" data-aos-duration="1000">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="process-step">
                                        <p class="m-0 p-0">Step</p>
                                        <h2 class="m-0 p-0">04</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h5>What is Lorem Ipsum?</h5>
                                    <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p>
                                </div>
                            </div>
                            <div class="process-line-r"></div>
                        </div>
                    </div>

                </div>
                <!-- ============ step 3 =========== -->
                <div class="row">
                    <div class="col-md-5">
                        <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="process-step">
                                        <p class="m-0 p-0">Step</p>
                                        <h2 class="m-0 p-0">05</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h5>What is Lorem Ipsum?</h5>
                                    <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p>
                                </div>
                            </div>
                            <div class="process-line-l"></div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="process-point-right process-last"></div>
                    </div>
                </div>
                <!-- ============ -->
            </div>
        </section>

        <!-- expedier un coli -->

        <section v-if="section_2" class="our-blog p-0 m-0 bg-silver">
            <div class="container work-process  pb-5 pt-5">
                <div class="section-header">
                    <h2 class="text-center title__annonce">Envoyer un colis</h2>
                </div>
                <!-- ============ step 1 =========== -->
                <div class="row">
                    <div class="col-md-5">
                        <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="process-step">
                                        <p class="m-0 p-0">Step</p>
                                        <h2 class="m-0 p-0">01</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h5>What is Lorem Ipsum?</h5>
                                    <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p>
                                </div>
                            </div>
                            <div class="process-line-l"></div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="process-point-right"></div>
                    </div>
                </div>
                <!-- ============ step 2 =========== -->
                <div class="row">

                    <div class="col-md-5">
                        <div class="process-point-left"></div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="process-box process-right" data-aos="fade-left" data-aos-duration="1000">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="process-step">
                                        <p class="m-0 p-0">Step</p>
                                        <h2 class="m-0 p-0">02</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h5>What is Lorem Ipsum?</h5>
                                    <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p>
                                </div>
                            </div>
                            <div class="process-line-r"></div>
                        </div>
                    </div>

                </div>
                <!-- ============ step 3 =========== -->
                <div class="row">
                    <div class="col-md-5">
                        <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="process-step">
                                        <p class="m-0 p-0">Step</p>
                                        <h2 class="m-0 p-0">03</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h5>What is Lorem Ipsum?</h5>
                                    <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p>
                                </div>
                            </div>
                            <div class="process-line-l"></div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="process-point-right"></div>
                    </div>
                </div>
                <!-- ============ step 4 =========== -->
                <div class="row">
                    <div class="col-md-5">
                        <div class="process-point-left"></div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="process-box process-right" data-aos="fade-left" data-aos-duration="1000">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="process-step">
                                        <p class="m-0 p-0">Step</p>
                                        <h2 class="m-0 p-0">04</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h5>What is Lorem Ipsum?</h5>
                                    <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p>
                                </div>
                            </div>
                            <div class="process-line-r"></div>
                        </div>
                    </div>

                </div>
                <!-- ============ step 3 =========== -->
                <div class="row">
                    <div class="col-md-5">
                        <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="process-step">
                                        <p class="m-0 p-0">Step</p>
                                        <h2 class="m-0 p-0">05</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h5>What is Lorem Ipsum?</h5>
                                    <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p>
                                </div>
                            </div>
                            <div class="process-line-l"></div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="process-point-right process-last"></div>
                    </div>
                </div>
                <!-- ============ -->
            </div>
        </section>

        <!-- recherche -->
        <section v-if="section_3" class="our-blog p-0 m-0 bg-silver">
            <div class="container work-process  pb-5 pt-5">
                <div class="section-header">
                    <h2 class="text-center title__annonce">Rechercher un trajet</h2>
                </div>
                <!-- ============ step 1 =========== -->
                <div class="row">
                    <div class="col-md-5">
                        <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="process-step">
                                        <p class="m-0 p-0">Step</p>
                                        <h2 class="m-0 p-0">01</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h5>What is Lorem Ipsum?</h5>
                                    <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p>
                                </div>
                            </div>
                            <div class="process-line-l"></div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="process-point-right"></div>
                    </div>
                </div>
                <!-- ============ step 2 =========== -->
                <div class="row">

                    <div class="col-md-5">
                        <div class="process-point-left"></div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="process-box process-right" data-aos="fade-left" data-aos-duration="1000">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="process-step">
                                        <p class="m-0 p-0">Step</p>
                                        <h2 class="m-0 p-0">02</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h5>What is Lorem Ipsum?</h5>
                                    <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p>
                                </div>
                            </div>
                            <div class="process-line-r"></div>
                        </div>
                    </div>

                </div>
                <!-- ============ step 3 =========== -->
                <div class="row">
                    <div class="col-md-5">
                        <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="process-step">
                                        <p class="m-0 p-0">Step</p>
                                        <h2 class="m-0 p-0">03</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h5>What is Lorem Ipsum?</h5>
                                    <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p>
                                </div>
                            </div>
                            <div class="process-line-l"></div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="process-point-right"></div>
                    </div>
                </div>
                <!-- ============ step 4 =========== -->
                <div class="row">
                    <div class="col-md-5">
                        <div class="process-point-left"></div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="process-box process-right" data-aos="fade-left" data-aos-duration="1000">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="process-step">
                                        <p class="m-0 p-0">Step</p>
                                        <h2 class="m-0 p-0">04</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h5>What is Lorem Ipsum?</h5>
                                    <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p>
                                </div>
                            </div>
                            <div class="process-line-r"></div>
                        </div>
                    </div>

                </div>
                <!-- ============ step 3 =========== -->
                <div class="row">
                    <div class="col-md-5">
                        <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="process-step">
                                        <p class="m-0 p-0">Step</p>
                                        <h2 class="m-0 p-0">05</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h5>What is Lorem Ipsum?</h5>
                                    <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p>
                                </div>
                            </div>
                            <div class="process-line-l"></div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="process-point-right process-last"></div>
                    </div>
                </div>
                <!-- ============ -->
            </div>
        </section>

    </section>

</div>
</template>

<script>
export default {
    props: ['title'],

    data: function () {
        return {

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

            section_1: true,
            section_2: false,
            section_3: false,
            isActive_1: true,
            isActive_2: false,
            isActive_3: false,
            img: ''

        }
    },
    computed: {
        getImg: function () {
            return this.img;

        },

        getTitle: function () {
            return this.titel;
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
                    this.section_1 = true;
                    this.section_2 = false;
                    this.section_3 = false;

                    break;
                case 1:

                    this.isActive_1 = false;
                    this.isActive_2 = true;
                    this.isActive_3 = false;
                    this.section_1 = false;
                    this.section_2 = true;
                    this.section_3 = false;

                    break;
                case 2:

                    this.isActive_1 = false;
                    this.isActive_2 = false;
                    this.isActive_3 = true;
                    this.section_1 = false;
                    this.section_2 = false;
                    this.section_3 = true;

                    break;
            }

        },

    },

    mounted() {
        this.section_1 = true;
        this.section_2 = false;
        this.section_3 = false;

        this.isActive_1 = true;
        this.isActive_2 = false;
        this.isActive_3 = false;
        this.titel = this.titels[0];
        this.img = this.images[0];

    },

}
</script>

<style lang="scss" scoped>
@import "./../../../sass/_variables.scss";

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
</style>
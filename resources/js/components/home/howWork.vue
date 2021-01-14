<template>
    <section id="services" class="how-it-work">
        <div class="container">
            <div class="section-header pl-5">
                <div class="row">
                    <div class="col-xs-12 col-lg-4">&nbsp;</div>
                    <div class="col-xs-12 col-lg-8">
                        <h2 class="text-center text-center">Comment ca marche</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-4 mb-4">
                <div class="col-xs-12 col-lg-4 d-flex align-items-center justify-content-center text-center">
                    <h2 class="howItWork__etape-number">Etape 1</h2>
                </div>
                <div class="col-xs-12 col-lg-8 p-2 text-center border shadow">
                    <h4 class="border-2">Rechercher un voyage</h4>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. In ipsa nobis atque doloribus voluptates asperiores cupiditate soluta aperiam laboriosam itaque reiciendis vitae, nesciunt ad dicta rerum magnam architecto laborum modi.
                </div>
            </div>
            <div class="row mt-4 mb-4">
                <div class="col-xs-12 col-lg-4 d-flex align-items-center justify-content-center">
                    <h2 class="howItWork__etape-number">Etape 2</h2>
                </div>
                <div class="col-xs-12 col-lg-8 p-2 text-center border shadow">
                    <h4 class="border-2">S'authentifier</h4>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. In ipsa nobis atque doloribus voluptates asperiores cupiditate soluta aperiam laboriosam itaque reiciendis vitae, nesciunt ad dicta rerum magnam architecto laborum modi.
                </div>
            </div>
            <div class="row mt-4 mb-4">
                <div class="col-xs-12 col-lg-4 d-flex align-items-center justify-content-center">
                    <h2 class="howItWork__etape-number">Etape 3</h2>
                </div>
                <div class="col-xs-12 col-lg-8 p-2 text-center border shadow">
                    <h4 class="border-2">Contacter le voyageur</h4>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. In ipsa nobis atque doloribus voluptates asperiores cupiditate soluta aperiam laboriosam itaque reiciendis vitae, nesciunt ad dicta rerum magnam architecto laborum modi.
                </div>
                <div class="col-xs-12 col-lg-4">&nbsp;</div>
                <div class="col-xs-12 col-lg-8">
                    <b-link :href="howItWork" class="btn btn-secondary btn-lg btn-block mt-4">lire la suite</b-link>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    props: ['howItWork']

}
</script>

<style lang="scss">
@import "./../../../sass/_variables.scss";

.how-it-work {
    background-color: $gray-50;
    margin-top: 30px;
    margin-bottom: 30px;

    .container {
        padding-top:20px;
        padding-bottom: 20px;
    }
}

</style>

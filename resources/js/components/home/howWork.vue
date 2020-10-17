<template>
    <section id="services" class="how-it-work"> 
        <div class="container">
            <div class="section-header">
                <h2 class="text-center title__annonce">
                    Comment ca marche
                </h2>
            </div>
            <div class="row mt-4 mb-4">
                <div class="col-2">
                    <div class="numberCircle">Step 1</div>
                </div>
                <div class="col-6">
                    <h4 class="border-2">Rechercher un voyage</h4>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. In ipsa nobis atque doloribus voluptates asperiores cupiditate soluta aperiam laboriosam itaque reiciendis vitae, nesciunt ad dicta rerum magnam architecto laborum modi.
                </div>
                <div class="offset-4"></div>
            </div>
            <div class="row mt-4 mb-4">
                <div class="offset-1"></div>
                <div class="col-2">
                    <div class="numberCircle">Step 2</div>
                </div>
                <div class="col-9">
                    <h4 class="border-2">S'authentifier</h4>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. In ipsa nobis atque doloribus voluptates asperiores cupiditate soluta aperiam laboriosam itaque reiciendis vitae, nesciunt ad dicta rerum magnam architecto laborum modi.
                </div>
            </div>
            <div class="row mt-4 mb-4">
                <div class="offset-2"></div>
                <div class="col-2">
                    <div class="numberCircle">Step 3</div>
                </div>
                <div class="col-8">
                    <h4 class="border-2">Contacter le voyageur</h4>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. In ipsa nobis atque doloribus voluptates asperiores cupiditate soluta aperiam laboriosam itaque reiciendis vitae, nesciunt ad dicta rerum magnam architecto laborum modi.
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {

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
.numberCircle {
    border-radius: 50%;
    width: 120px;
    height: 120px;
    padding: 26px;
    background: #f6f6f6;
    border: 2px solid #666;
    color: #008931;
    text-align: center;
    font-size: 22px;
    font-weight: 800;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.4);
}
</style>

<template>
<div class="card runde-ecke">
    <div class="row shadow">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 pb-5">
            <user :user="item.user" :post-date="item.created_at"></user>
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
                    <a href="#" class="float-right pr-4" v-show="false">{{ item.dateTo }}</a>
                </li>
            </ul>
            <hr>
            <div class="notice notice-warning">
                <h6>Poids du Coli : <b-badge variant="info" class="mx-2 si" v-html="item.kilo+ ' kg'"></b-badge><span class="float-right kilo-price">{{ item.prix }}€</span></h6>
            </div>
            <div class="notice notice-warning border-4">
                <strong>Message : </strong>
                <div class="text-break overflow-auto text-muted bg-white border rounded mb-4 mt-1 px-2">
                    {{ item.content }}
                </div>
            </div>
            <div class="notice notice-success text-right">
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-lg-6">
                        <h6 class="small text-left text-success">quelques photos de l'object</h6>
                        <div class="row">
                            <div class="col-3 w-100 h-100 zoom"><img class="img-rounded img-responsive" width="100px" height="50px" :src="asset + '/' + item.colisPhoto"></div>
                            <div class="col-3 w-100 h-100 zoom"><img class="img-rounded img-responsive" width="100px" height="50px" :src="asset + '/' + item.colisPhoto"></div>
                            <div class="col-3 w-100 h-100 zoom"><img class="img-rounded img-responsive" width="100px" height="50px" :src="asset + '/' + item.colisPhoto"></div>
                            <div class="col-3 w-100 h-100 zoom"><img class="img-rounded img-responsive" width="100px" height="50px" :src="asset + '/' + item.colisPhoto"></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-lg-6 pt-5">
                        <a :href="item.Path" class="btn btn-primary w-100 btn-recherche contact-btn">Contactez l'expediteur</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>

import user from './user'

export default {
    props: ['item','asset'],
    components: {
        user
    }

}
</script>

<style>
.zoom {
    transition: transform .2s;
}
.zoom:hover {
  transform: scale(3.5);
  z-index: 1040;
}
</style>

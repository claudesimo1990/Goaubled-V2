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
                <strong>Poids du Coli :</strong> {{ item.kilo }} Kg<span
                class="float-right kilo-price pack-price">{{ item.prix }} €</span>
            </div>
            <div class="notice notice-warning border-4">
                <strong>Message : </strong>
                <div class="text-break overflow-auto text-muted bg-white rounded mb-4 mt-1 px-2">
                    {{ item.content }}
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
</template>

<script>

import user from './user'

export default {
    props: ['item'],
    components: {
        user
    }

}
</script>

<style>

</style>

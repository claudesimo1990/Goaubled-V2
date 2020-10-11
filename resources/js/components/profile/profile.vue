<template>
<div class="d-flex h-100" id="wrapper">

    <!-- Sidebar -->
    <div class="profile-sidebar border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">
            <router-link class="text-white" :to="{ name: 'home' }"><b-icon icon="house-door" aria-hidden="true"></b-icon>Dashboard</router-link>
        </div>
        <b-link class="text-white" href="#">Messageries</b-link>
        <b-navbar toggleable type="dark" variant="dark">
            <b-navbar-brand href="#">Mes Expeditions</b-navbar-brand>
            <b-navbar-toggle target="navbar-toggle-collapse">
            <template v-slot:default="{ expanded }">
                <b-icon v-if="expanded" icon="chevron-bar-up"></b-icon>
                <b-icon v-else icon="chevron-bar-down"></b-icon>
            </template>
            </b-navbar-toggle>
            <b-collapse id="navbar-toggle-collapse" is-nav>
            <b-navbar-nav class="ml-auto">
                <b-link :to="{ name: 'progressColis' }">Mes expéditions en cours</b-link>
                <b-link :to="{ name: 'colisPostDone' }">Mes expéditions effectuées</b-link>
                <b-link :to="{ name: 'progressColis' }">Mes annonces en cours</b-link>
                <b-link :to="{ name: 'progressColis' }">Vue sur les dépenses</b-link>
                <b-link :to="{ name: 'progressColis' }">Expédier un colis</b-link>
            </b-navbar-nav>
            </b-collapse>
        </b-navbar>
        <b-navbar toggleable type="dark" variant="dark">
            <b-navbar-brand href="#">Mes Trajets</b-navbar-brand>
            <b-navbar-toggle target="navbar-toggle-collapse2">
            <template v-slot:default="{ expanded }">
                <b-icon v-if="expanded" icon="chevron-bar-up"></b-icon>
                <b-icon v-else icon="chevron-bar-down"></b-icon>
            </template>
            </b-navbar-toggle>
            <b-collapse id="navbar-toggle-collapse2" is-nav>
            <b-navbar-nav class="ml-auto">
                <b-link :to="{ name: 'progressColis' }">Mes Trajets en cours</b-link>
                <b-link :to="{ name: 'colisPostDone' }">Nombre de Trajets effectués</b-link>
                <b-link :to="{ name: 'progressColis' }">Mes annonces en cours</b-link>
                <b-link :to="{ name: 'progressColis' }">Vue sur les gains</b-link>
                <b-link :to="{ name: 'progressColis' }">Ajouter un Trajet</b-link>
            </b-navbar-nav>
            </b-collapse>
        </b-navbar>
    </div>
    <div id="page-content-wrapper" class="mt-4">

        <div class="container-fluid">
             <router-view></router-view>
        </div>

    </div>

  </div>
</template>

<script>
export default {

    data() {
        return {
            users: null
        }
    },
    mounted() {

       Echo.join('users')
       .here( (users) => {
           this.users = users
       })
       .joining((user) => {
           this.users.push(user)
       })
       .leaving((user) => {
           this.users.splice(this.users.indexof(user),1);
       })
    }
}
</script>
<style lang="scss" scoped>
  @import "./../../../sass/_variables.scss";
  
  .profile-sidebar {
      background-color: $gray-300;
      color: $white;
      width: 25%;
      font-size: 18px;
      padding-right: 5px;
    }
    .ul-nav-profile {
        border: 2px solid red;
        background: $white;
       li {
            color: $quigo !important;
            margin: 5px 5px;
       }
    }
    .ul-iten-nav-profile {
        border-bottom: 1px gray solid;
    }
</style>



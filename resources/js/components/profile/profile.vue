<template>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav profile-sidebar">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <b-link :to="{ name: 'home' }" class="nav-link" @click="setTitle('Dashboard')">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Dashboard
                    </b-link>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Expéditions
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="layout-static.html">Static Navigation</a>
                            <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Voyages
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Authentication
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="login.html">Login</a>
                                    <a class="nav-link" href="register.html">Register</a>
                                    <a class="nav-link" href="password.html">Forgot Password</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                Error
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="401.html">401 Page</a>
                                    <a class="nav-link" href="404.html">404 Page</a>
                                    <a class="nav-link" href="500.html">500 Page</a>
                                </nav>
                            </div>
                        </nav>
                    </div>
                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="charts.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Charts
                    </a>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="content w-100">
                    <router-view></router-view>
                </div>
            </div>
        </main>
    </div>
</div>
</template>

<script>
export default {

    props: ['currentUser'],

    data() {
        return {
            currentUser: {},
            users: null,
            title: 'Dashboard',
            msg: 'hallo les gens'
        }
    },
    computed: {
        getCurrentUser: function() {
            return Store.getters.getCurrentUser;
        },
        getTitle: function() {
            return this.title;
        }
    },
    created() {
        Store.dispatch('setCurrentUser', this.currentUser);

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
    },
    methods: {
        setTitle(val) {
            this.title = val;
        }
    }
}
</script>
<style lang="scss" scoped>
  @import "./../../../sass/_variables.scss";
  #layoutSidenav #layoutSidenav_nav {
    z-index: 0 !important;
}
.sb-sidenav-dark {
    background-color: #2c3e50 !important;
    color: $white !important;
}
</style>

<!--

<b-link :to="{ name: 'progressColis' }">Mes expéditions en cours</b-link>
                <b-link :to="{ name: 'colisPostDone' }">Mes expéditions effectuées</b-link>
                <b-link :to="{ name: 'progressColis' }">Mes annonces en cours</b-link>
                <b-link :to="{ name: 'progressColis' }">Vue sur les dépenses</b-link>
                <b-link :to="{ name: 'progressColis' }">Expédier un colis</b-link>

-->

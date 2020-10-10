<template>

<div class="mt-5 mb-5">
<section class="our-blog p-0 m-0 bg-silver">
    <div class="container work-process  pb-5 pt-5">
        <div class="section-header">
            <h2 class="text-center">Utilisateurs actifs</h2>
        </div>
    </div>
    <div class="row">
        <div class="offset-2"></div>
        <div class="col-md-8">
            <b-list-group>
                <b-list-group-item v-for="user in users" :key="user.id">{{user.name}}</b-list-group-item>
            </b-list-group>
        </div>
        <div class="offset-2"></div>
    </div>
</section>
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


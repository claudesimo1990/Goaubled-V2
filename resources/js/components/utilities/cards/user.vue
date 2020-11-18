<template>
<div class="border my-3 px-2 rounded">
    <div class="profile-block">
        <vue-letter-avatar class="user-bild text-center" :name="user.name !== undefined ? user.name : 'Ramdom' " size='100' :rounded=true />
        <h5 class="text-start mt-2"><b-badge variant="Light">{{ user.name }}</b-badge></h5>
        <div class="notice justify-center text-center notice-success stars">
            <div class="d-flex justify-content-between">
                <div class="strong">VOTES :</div>
                <div>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="d-flex justify-content-between"> 
            <span class="text-success">Membre verifié</span>
            <span v-if="user.email_verified_at"><i class="fa fa-user-check mr-2 text-success"></i></span>
            <span v-else><i class="fa fa-user-check mr-2 text-danger"></i></span>
        </div>
        <span class="vorHumanns">{{ postDate }}</span>
    </div>
</div>
</template>

<script>
export default {
    props: ['user','postDate']

}
</script>

<style>

</style>

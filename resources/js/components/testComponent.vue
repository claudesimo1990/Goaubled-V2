<template>
    <div>
        <h1>salut les gars</h1>
    </div>
</template>

<script>
export default {

mounted: function () {
    console.log('test');
    Echo.join(`chat`)
    .here((users) => {
        console.log(users);
    })
}
}
</script>

<style>

</style>

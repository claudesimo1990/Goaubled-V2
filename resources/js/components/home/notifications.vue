<template>
    <li class="nav-item mx-4 mt-2">
        <span style="font-size:1,8em;"><b-icon icon="bell-fill" variant="info" class="rounded"></b-icon><b-badge variant="info p-1 rounded">{{ notifications }}</b-badge></span>
    </li>
</template>

<script>
export default {
props: ['notifications']
}
</script>

<style>

</style>

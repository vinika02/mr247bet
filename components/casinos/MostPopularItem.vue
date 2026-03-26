<script setup>
const { casino } = defineProps(['casino'])
</script>

<template>
    <li class="list-group-item">
        <img :src="casino._embedded['wp:featuredmedia'][0].source_url" class="img-fluid thumbnail" alt="">
        <NuxtLink :to="`/casinos/all/${casino.slug}`">
            <!-- <NuxtLink :to="casino.acf.casinoUrl" target="_blank"> -->
            <span class="sidebar-name">{{ casino.acf.casinoName }}</span>
        </NuxtLink>
    </li>
</template>

<style scoped></style>
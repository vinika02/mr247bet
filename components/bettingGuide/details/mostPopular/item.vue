<script setup>
const { imgUrl, casinoName } = defineProps(['imgUrl', 'casinoName'])
</script>

<template>
    <li class="list-group-item">
        <img :src="imgUrl" class="img-fluid thumbnail" :alt="casinoName">
        <a href="#">
            <span class="sidebar-name">{{ casinoName }}</span>
        </a>
    </li>
</template>

<style scoped></style>
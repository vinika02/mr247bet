<script setup>
const { casinoItems } = defineProps(['casinoItems'])
let items = [...casinoItems.carousel1, ...casinoItems.carousel2, ...casinoItems.carousel3]
let firstItem = items[0]
let restItems = items.slice(1, items.length)
// console.log('restItems:', restItems)
</script>

<template>
    <div id="carouselCasinosMob" class="carousel slide d-md-none">
        <div class="carousel-inner">
            <HomeCardMob :item="firstItem" itemClass="carousel-item active" />
            <HomeCardMob v-for="item in restItems" :item="item" itemClass="carousel-item" />
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselCasinosMob" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselCasinosMob" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</template>


<style scoped></style>
<script setup>
const { sportsbookItems } = defineProps(['sportsbookItems'])
let items = [...sportsbookItems.carousel1, ...sportsbookItems.carousel2, ...sportsbookItems.carousel3]
let firstItem = items[0]
let restItems = items.slice(1, items.length)
// console.log('restItems:', restItems)

</script>

<template>
    <div id="sportsBookCarouselSmall" class="carousel slide d-md-none">
        <div class="carousel-inner">
            <HomeCardSportsbookMob :item="firstItem" itemClass="carousel-item active" />
            <HomeCardSportsbookMob v-for="item in restItems" :item="item" itemClass="carousel-item" />
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#sportsBookCarouselSmall" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#sportsBookCarouselSmall" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</template>


<style scoped></style>
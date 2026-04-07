<script setup>
const { sportsbookItems } = defineProps(['sportsbookItems']);
</script>

<template>
    <div id="sportsBookCarousel" class="carousel slide d-none d-lg-block">
        <div class="carousel-inner">
            <HomeSportsCarouselItem itemClass="carousel-item active" v-if="sportsbookItems.carousel1.length > 0" :items="sportsbookItems.carousel1" />
            <HomeSportsCarouselItem itemClass="carousel-item" v-if="sportsbookItems.carousel2.length > 0" :items="sportsbookItems.carousel2" />
            <HomeSportsCarouselItem itemClass="carousel-item" v-if="sportsbookItems.carousel3.length > 0" :items="sportsbookItems.carousel3" />
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#sportsBookCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#sportsBookCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</template>


<style scoped></style>
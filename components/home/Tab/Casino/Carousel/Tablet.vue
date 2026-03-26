<script setup>
const { casinoItems } = defineProps(['casinoItems'])
</script>

<template>
    <div id="carouselCasinosTablet" class="carousel slide d-none d-md-block d-lg-none">
        <div class="carousel-inner">
            <HomeTabCasinoCarouselItem itemClass="carousel-item active" :items="casinoItems.carousel1" />
            <HomeTabCasinoCarouselItem itemClass="carousel-item" :items="casinoItems.carousel2" />
            <HomeTabCasinoCarouselItem itemClass="carousel-item" :items="casinoItems.carousel3" />
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselCasinosTablet" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselCasinosTablet" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</template>


<style scoped></style>
<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <div id="carouselBonuses" class="carousel slide d-none d-lg-block">
        <div class="carousel-inner">
            <HomeTabBonusesCarouselItem itemClass="carousel-item active" :items="items" />
            <HomeTabBonusesCarouselItem itemClass="carousel-item" :items="items" />
            <HomeTabBonusesCarouselItem itemClass="carousel-item" :items="items" />
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselBonuses" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselBonuses" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</template>


<style scoped></style>
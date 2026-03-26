<script setup>
const { items, carouselId } = defineProps(['items', 'carouselId'])
</script>

<template>
    <div :id="carouselId" class="carousel slide d-none d-lg-block">
        <div class="carousel-inner">
            <CasinosIndexCarouselItem itemClass="carousel-item active" :items="items" />
            <CasinosIndexCarouselItem itemClass="carousel-item" :items="items" />
            <CasinosIndexCarouselItem itemClass="carousel-item" :items="items" />
        </div>
        <button class="carousel-control-prev" type="button" :data-bs-target="`#${carouselId}`" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" :data-bs-target="`#${carouselId}`" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>

        </button>
    </div>
</template>


<style scoped></style>
<script setup>
const { items, carouselId } = defineProps(['items', 'carouselId'])
</script>

<template>
    <div :id="`${carouselId}mob`" class="carousel slide d-md-none">
        <div class="carousel-inner">
            <CardCarouselMob v-for="item in items" :itemClass="item.class" :imgUrl="item.imgUrl" :name="item.name" />
        </div>
        <button class="carousel-control-prev" type="button" :data-bs-target="`#${carouselId}mob`" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" :data-bs-target="`#${carouselId}mob`" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</template>


<style scoped></style>
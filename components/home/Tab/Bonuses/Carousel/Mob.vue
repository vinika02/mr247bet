<script setup>
const { items } = defineProps(['items'])

</script>

<template>
    <div id="carouselBonusesMob" class="carousel slide d-md-none">
        <div class="carousel-inner">
            <CardCarouselMob v-for="item in items" :itemClass="item.class" :imgUrl="item.imgUrl" :name="item.name" />
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselBonusesMob" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselBonusesMob" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</template>


<style scoped></style>
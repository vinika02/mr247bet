<script setup>
const { itemClass, items } = defineProps(['itemClass', 'items'])
</script>

<template>
    <div :class="itemClass">
        <div class="cards-wrapper">
            <CardCarousel v-for="item in items" :imgUrl="item.imgUrl" :name="item.name" />
        </div>
    </div>
</template>


<style  scoped></style>
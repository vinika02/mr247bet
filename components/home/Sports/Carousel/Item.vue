<script setup>
const { itemClass, items } = defineProps(['itemClass', 'items'])
</script>

<template>
    <div :class="itemClass">
        <div class="cards-wrapper">
            <HomeCardSportsbook v-for="item in items" :item="item" :key="item?.id" />
        </div>
    </div>
</template>


<style  scoped></style>
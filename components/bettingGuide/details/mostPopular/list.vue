<script setup>
const { listItems } = defineProps(['listItems'])
</script>

<template>
    <div class="sidebar">
        <p class="sidebar-title">Most Popular Casinos</p>
        <ul class="list-group list-group-flush">
            <BettingGuideDetailsMostPopularItem v-for="item in listItems" :imgUrl="item.imgUrl" :casinoName="item.name" />
        </ul>

        <div class="see-all">
            <NuxtLink to="/"><span>Mr247</span></NuxtLink>Rankings
        </div>
    </div>
</template>


<style scoped>
span {
    margin-right: 5px;
}
</style>
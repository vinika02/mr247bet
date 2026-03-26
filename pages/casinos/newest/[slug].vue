<script setup>
const route = useRoute()
// Fetching single post 
const { data: post } = await useFetch(() => `/AWS/post?slug=${route.params.slug}`)
</script>

<template>
    <CasinosReview :post="post[0]" />
</template>


<style scoped>
div {
    padding-top: 8rem;
    display: flex;
    justify-content: center;
}
</style>
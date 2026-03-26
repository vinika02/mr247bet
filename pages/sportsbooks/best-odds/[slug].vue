<script setup>
const route = useRoute()
// Fetching single post 
const { data: post } = await useFetch(() => `/AWS/post?slug=${route.params.slug}`)

// console.log('SportsBooks post:', post.value[0])
</script>

<template>
    <SportsBooksReview :post="post[0]" />
</template>


<style scoped>
div {
    padding-top: 8rem;
    display: flex;
    justify-content: center;
}
</style>
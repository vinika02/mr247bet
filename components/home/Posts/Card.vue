<script setup>
const { post } = defineProps(['post'])
</script>

<template>
    <div class="col-xl-3 col-md-6">
        <article>
            <div class="post-img">
                <img :src="post?._embedded['wp:featuredmedia'][0].source_url" alt="" class="img-fluid">
            </div>

            <h4 class="title">
                <NuxtLink :to="post.link" target="_blank">
                    {{ post.title.rendered }}</NuxtLink>
            </h4>
        </article>
    </div>
</template>


<style scoped>
.title {
    font-size: 15px;
}
</style>
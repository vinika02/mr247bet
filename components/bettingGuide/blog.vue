<script setup>

let perPage = ref(100)
let page = ref(1)
// page and perPage params will be used for pagination
const { data: posts } = await useFetch(() => `/AWS/bettingGuidesPosts?categoryId=77&perPage=${perPage.value}&page=${page.value}`)

</script>

<template>
    <section id="blog" class="blog">
        <div class="container">
            <div class="row gy-4 posts-list">
                <BettingGuidePost v-for="post in posts" :imgUrl="post?._embedded['wp:featuredmedia'][0].source_url"
                    :title="post.title.rendered" category="Betting guides" :published="post?.date" :slug="post?.slug"
                    :key="post?.id" />
            </div>
            <!-- <BettingGuidePagination /> -->
        </div>
    </section>
</template>


<style scoped></style>
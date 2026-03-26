<script setup>
const {
    postImg,
    postTitle,
    postCategories,
    postContent,
    postTags,
    postPublished
} = defineProps(['postImg', 'postTitle', 'postCategories', 'postContent', 'postTags', 'postPublished'])

let day = new Date(`${postPublished}`).toLocaleString("default", { day: "numeric" });
let month = new Date(`${postPublished}`).toLocaleString("default", { month: "long" });
let year = new Date(`${postPublished}`).toLocaleString("default", { year: "numeric" });
</script>


<template>
    <section id="blog" class="blog">

        <div class="container">
            <div class="row g-5">
                <div class="col-lg-9">
                    <article class="blog-details">
                        <div class="post-img">
                            <img :src="postImg" alt="" class="img-fluid">
                        </div>
                        <h1 class="title">{{ postTitle }}</h1>
                        <div class="meta-top">
                            <ul>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-clock"></i>
                                    <a href="blog-details.html">
                                        <time>{{ month }} {{ day }}, {{ year }}</time>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="content">
                            <div v-html="postContent"></div>
                        </div>

                        <div class="meta-bottom">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li>{{ postCategories }}</li>
                            </ul>
                            <!-- <i class="bi bi-tags"></i>
                            <ul class="tags">
                                <li>{{ postTags }}</li>
                            </ul> -->
                        </div>
                    </article>
                </div>
                <CasinosMostPopular class="mostPopular" />
            </div>
        </div>
    </section>
</template>


<style scoped>
.img-fluid {
    width: 100%;
}

.bi-folder {
    margin-right: 8px;
}

.mostPopular {
    margin-top: 50px !important;
}
</style>
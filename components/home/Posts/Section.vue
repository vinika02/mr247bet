<script setup>
// !!! Experiment with this until the best solution is found !!!
// const { data: sportPosts } = await useFetch(() => '/AWS/sportPosts?perPage=4&page=1')
const { pending, data: sportPosts } = await useLazyFetch(() => '/AWS/sportPosts?perPage=4&page=1')


// console.log('sportPosts:', sportPosts.value)
</script>

<template>
    <section id="recent-posts" class="recent-posts sections-bg">
        <div class="container">

            <div class="section-header">
                <h2>Our Latest News</h2>
                <p>Get the latest worldwide news before anyone else.</p>
            </div>

            <div class="row gy-4">

                <div v-if="pending">
                    Loading ...
                </div>

                <HomePostsCard v-else v-for="post in sportPosts" :post="post" :key="post.id" />
                <!-- <HomePostsCard  v-for="post in sportPosts" :post="post" /> -->

                <div class="text-center read-more-btn">
                    <NuxtLink to="https://mr247bet.com/news" class="primary-btn">+ View More</NuxtLink>
                </div>

            </div>
            <!-- ======= Promotion ======= -->
            <div class="row gy-4 mt-4">
                <div class="col-md-12 d-none d-md-block">
                    <NuxtLink
                        to="https://rembrandtcasino.com/deep/player--register/mediaCode/textlink/affiliate/36761/campaign/eng-dl-rembrandt"
                        target="_blank">
                        <img src="~/assets/img/promos/rem-aff-kalimabusiness-1272x80-1.jpg" class="img-fluid" alt="">
                    </NuxtLink>
                </div>
            </div>

        </div>
    </section>
</template>


<style scoped></style>
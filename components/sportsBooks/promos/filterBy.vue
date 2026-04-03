<script setup>
const route = useRoute()
let fullPath = route.fullPath
const { mostPopularCasinos } = defineProps(['mostPopularCasinos'])
const { data: posts } = await useFetch(() => '/AWS/posts?perPage=20&page=1&categories=76',
    {
        transform: (posts) =>
            posts.filter((post) =>
                post.acf.sportsbookSubcategory.includes('Promos')
            )
    }
)
</script>

<template>
    <section id="category" class="category sections-bg">
        <div class="container">
            <hr>
            <div class="row filters">
                <div class="col-md-6">
                    <!-- Button trigger modal -->
                    <!-- <button type="button" class="primary-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Filter By <i class="bi bi-sort-down"></i>
                    </button> -->

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title fs-5" id="staticBackdropLabel">Filter Casinos</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="secondary-btn" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="primary-btn">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6" style="display:flex; justify-content: end;">
                    <div class="dropdown">
                        <!-- <button class="primary-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Highest Rated
                        </button> -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Newest</a></li>
                            <li><a class="dropdown-item" href="#">Oldest</a></li>
                            <li><a class="dropdown-item" href="#">Most player reviews</a></li>
                            <li><a class="dropdown-item" href="#">Latest player reviews</a></li>
                            <li><a class="dropdown-item" href="#">Highest rated</a></li>
                            <li><a class="dropdown-item" href="#">Lowest reviews</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Category List -->
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <SportsBooksCard v-for="post in posts" :imgUrl="post?._embedded['wp:featuredmedia'][0]?.source_url"
                            :name="post.acf?.sportsbookName" :sportsbookUrl="post.acf?.sportsbookUrl"
                            :affiliateLink="post?.acf.affiliateLink" :affiliateTerms="post?.acf.affiliateTerms"
                            :sportsbookTerms="post.acf?.sportsbookTerms" size="3" :key="post?.id"
                            :sportsbookRating="post.acf?.sportsbookRating" :fullPath="fullPath" :slug="post?.slug" />
                    </div>
                    <!-- <CasinosPagination /> -->
                </div>

                <!-- Sidebar List -->
                <CasinosMostPopular :listItems="mostPopularCasinos" />
            </div>
        </div>
    </section>
</template>


<style scoped></style>
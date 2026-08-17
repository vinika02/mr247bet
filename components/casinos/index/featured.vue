<script setup>
const { data: featuredCasinos } = await useFetch(() => '/AWS/posts?perPage=20&page=1&categories=28',
    {
        transform: (featuredCasinos) =>
            featuredCasinos.filter((casino) =>
                casino?.acf.casinoSubcategory.includes('Featured')
            )
    }
)
// console.log('featuredCasinos:', featuredCasinos.value)

let pledoo = featuredCasinos.value[0]
let dreamVegas = featuredCasinos.value[1]
let playOjo = featuredCasinos.value[2]
let slotNite = featuredCasinos.value[3]
let pubCasino = featuredCasinos.value[4]
let tonyBet = featuredCasinos.value[5]

let orderedFeaturedCasinos = [playOjo, pledoo, slotNite, dreamVegas, pubCasino, tonyBet]
</script>

<template>
    <section id="featured" class="featured sections-bg">
        <div class="container position-relative">
            <div class="row justify-content-center gy-4 mt-5">
                <div class="section-header">
                    <h2>Featured Casinos</h2>
                </div>
                <CardFeatured v-for="casino in orderedFeaturedCasinos" :casino="casino" :key="casino?.id" />
            </div>
            <!-- ======= Promotion ======= -->
            <div class="row gy-4 mt-4">
                <div class="col-md-12 d-none d-md-block">
                    <a href="#">
                        <img src="~/assets/img/promos/bb-100-up-to-eur-250-100-free-spins.jpg" class="img-fluid"
                            alt="free-spins"></a>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
<script setup>
const { pending, data: featuredCasinos } = await useLazyFetch(() => '/AWS/posts?perPage=20&page=1&categories=28',
    {
        transform: (featuredCasinos) =>
            featuredCasinos.filter((casino) =>
                casino.acf.casinoSubcategory.includes('Featured')
            )
    }
)
// console.log('featuredCasinos:', featuredCasinos.value)

let orderedFeaturedCasinos = computed(() => {
    if (featuredCasinos.value) {
        let pledoo = featuredCasinos.value[1]
        let dreamVegas = featuredCasinos.value[2]
        let playOjo = featuredCasinos.value[3]
        let slotNite = featuredCasinos.value[4]
        let pubCasino = featuredCasinos.value[5]
        let tonyBet = featuredCasinos.value[0]
        return [playOjo, pledoo, slotNite, dreamVegas, pubCasino, tonyBet]
    } else {
        return
    }
})

// console.log('orderedFeaturedCasinos:', orderedFeaturedCasinos)

useState('featuredCasinos', () => orderedFeaturedCasinos.value)

</script>

<template>
    <!-- ======= Featured Casinos ======= -->
    <section id="featured" class="featured sections-bg">
        <div class="container position-relative">
            <div class="row gy-4 mt-5">
                <div class="section-header">
                    <h2>Featured Casinos</h2>
                </div>
                <div v-if="pending">
                    Loading...
                </div>
                <CardFeatured v-else v-for="casino in orderedFeaturedCasinos" :casino="casino" :key="casino.id" />
            </div>
            <!-- ======= Promotion ======= -->
            <div class="row gy-4 mt-4">
                <div class="col-md-12 d-none d-md-block">
                    <NuxtLink
                        to="https://b-bets.com/deep/player--register/mediaCode/textlink/affiliate/36761/campaign/eng-dl-bbets"
                        target="_blank" rel="noopener"><img
                            src="~/assets/img/promos/bb-100-up-to-eur-250-100-free-spins.jpg" class="img-fluid" alt="">
                    </NuxtLink>
                </div>
            </div>

        </div>
    </section>
    <!-- ======= Featured Casinos ======= -->
</template>


<style scoped></style>
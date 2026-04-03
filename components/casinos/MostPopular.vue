<script setup>
// set computed on top
// check if computed has value, if not call API

// let items;

let items = computed(() => {
    return useState('featuredCasinos').value
})

if (items.value === undefined) {
    const { data: featuredCasinos } = await useFetch(() => '/AWS/posts?perPage=20&page=1&categories=28',
        {
            transform: (featuredCasinos) =>
                featuredCasinos.filter((casino) =>
                    casino?.acf.casinoSubcategory.includes('Featured')
                )
        }
    )

    let pledoo = featuredCasinos.value[0]
    let dreamVegas = featuredCasinos.value[1]
    let playOjo = featuredCasinos.value[2]
    let slotNite = featuredCasinos.value[3]
    let pubCasino = featuredCasinos.value[4]
    let tonyBet = featuredCasinos.value[5]

    items = [playOjo, pledoo, slotNite, dreamVegas, pubCasino, tonyBet]
}

// console.log('items:', items)

</script>

<template>
    <div class="col-lg-3 mt-4">
        <div class="sidebar">
            <p class="sidebar-title">Most Popular Casinos</p>

            <ul class="list-group list-group-flush">
                <CasinosMostPopularItem v-for="casino in items" :casino="casino" />
            </ul>

            <div class="see-all">
                <NuxtLink to="/"><span>Mr247</span> </NuxtLink> Rankings
                <!-- <a href="all-casinos.html">See all casinos</a> -->
            </div>
        </div>
    </div>
</template>


<style scoped>
span {
    margin: 0 5px
}
</style>
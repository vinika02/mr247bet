<script setup>
const { pending, data: featuredCasinos } = await useLazyFetch(
  () => '/AWS/posts?perPage=20&page=1&categories=28',
  {
    transform: (data) => {
      return data
        // ✅ remove undefined / null
        .filter(casino => casino && casino.acf)

        // ✅ ensure subcategory exists + includes 'Featured'
        .filter(casino =>
          Array.isArray(casino.acf.casinoSubcategory) &&
          casino.acf.casinoSubcategory.includes('Featured')
        )

        // ✅ limit to 6 immediately
        .slice(0, 6);
    }
  }
);

let orderedFeaturedCasinos = computed(() => {
  const list = featuredCasinos.value;

  if (!list || list.length === 0) return [];

  return [
    list[3],
    list[1],
    list[4],
    list[2],
    list[5],
    list[0],
  ].filter(Boolean); // ✅ removes any undefined just in case
});

// console.log('orderedFeaturedCasinos:', orderedFeaturedCasinos)

useState('featuredCasinos', () => orderedFeaturedCasinos.value)

</script>

<template>
    <!-- ======= Featured Casinos ======= -->
    <section id="featured" class="featured sections-bg">
        <div class="container position-relative">
            <div class="row justify-content-center gy-4 mt-5">
                <div class="section-header">
                    <h2>Featured Casinos</h2>
                </div>
                <div v-if="pending">
                    Loading...
                </div>
                <CardFeatured v-else v-for="casino in orderedFeaturedCasinos" :casino="casino" :key="casino?.id" />
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
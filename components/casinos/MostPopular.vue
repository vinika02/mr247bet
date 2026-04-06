<script setup>
// set computed on top
// check if computed has value, if not call API

// let items;
const items = useState('featuredCasinos', () => []);

if (!items.value || items.value.length === 0) {
  const { data: featuredCasinos } = await useFetch(
    () => '/AWS/posts?perPage=20&page=1&categories=28',
    {
      transform: (data) => {
        return data
          // ✅ remove undefined/null
          .filter(casino => casino && casino.acf)

          // ✅ safe check for subcategory
          .filter(casino =>
            Array.isArray(casino.acf.casinoSubcategory) &&
            casino.acf.casinoSubcategory.includes('Featured')
          )

          // ✅ limit to 6 early
          .slice(0, 6);
      }
    }
  );

  const list = featuredCasinos.value || [];

  // ✅ reorder + auto-remove undefined
  items.value = [
    list[2], // playOjo
    list[0], // pledoo
    list[3], // slotNite
    list[1], // dreamVegas
    list[4], // pubCasino
    list[5], // tonyBet
  ].filter(Boolean); // 🔥 removes undefined
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
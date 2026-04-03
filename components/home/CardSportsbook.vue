<script setup>
const { item } = defineProps(['item'])
</script>

<template>
    <div class="card-wrapper">
        <div class="card">
            <NuxtLink :to="`/sportsbooks/all/${item?.slug}`" class="info"><i class="bi bi-info"></i></NuxtLink>
            <div class="img-wrapper">
                <NuxtLink :to="`/sportsbooks/all/${item?.slug}`">
                    <img :src="item?._embedded['wp:featuredmedia'][0].source_url" class="card-img-top"
                        :alt="`${item.acf.sportsbookName.replace(/\s+/g, '-')}-image`"
                        :title="`Image of ${item.acf.sportsbookName} brand`" loading="eager" width="120" height="80">
                </NuxtLink>
            </div>
            <div class="card-body">
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <p>{{ item.acf.sportsbookRating }}</p>
                </div>
                <h4 class="card-title">{{ item.acf.sportsbookName }}</h4>
                <div class="text-center">
                    <NuxtLink class="primary-btn"
                        :to="item.acf.affiliateLink ? item.acf.affiliateLink : item.acf.sportsbookUrl" target="_blank"
                        :rel="item.acf.affiliateLink ? 'noopener' : 'nofollow noopener'">
                        Play
                    </NuxtLink>
                </div>
            </div>
        </div>
    </div>
</template>


<style scoped>
h4 {
    font-size: 20px;
}

.card {
    background-color: #FFFFFF;
}

.info {
    cursor: default;
}

.bi-info {
    cursor: pointer;
}
</style>
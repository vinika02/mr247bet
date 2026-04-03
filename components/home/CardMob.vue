<script setup>
const { item, itemClass } = defineProps(['item', 'itemClass'])
</script>

<template>
    <div :class="itemClass">
        <!-- <div> -->
        <div class="card">
            <NuxtLink :to="`/casinos/all/${item?.slug}`" class="info"><i class="bi bi-info"></i></NuxtLink>
            <div class="img-wrapper">
                <NuxtLink :to="`/casinos/all/${item?.slug}`">
                    <img :src="item?._embedded['wp:featuredmedia'][0].source_url" class="card-img-top"
                        :alt="`${item.acf.casinoName.replace(/\s+/g, '-')}-image`"
                        :title="`Image of ${item.acf.casinoName} brand`" loading="eager" width="120" height="80">
                </NuxtLink>
            </div>
            <div class="card-body">
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <p>{{ item.acf.casinoRating }}</p>
                </div>
                <h5 class="card-title">{{ item.acf.casinoName }}</h5>
                <div class="text-center">
                    <NuxtLink class="primary-btn" :to="item.acf.affiliateLink ? item.acf.affiliateLink : item.acf.casinoUrl"
                        target="_blank" :rel="item.acf.affiliateLink ? 'noopener' : 'nofollow noopener'">
                        Play
                    </NuxtLink>
                </div>
            </div>
        </div>
    </div>
</template>


<style scoped>
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
<script setup>
const { casino } = defineProps(['casino'])
</script>

<template>
    <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="featured-card">
            <NuxtLink :to="`/casinos/all/${casino.slug}`" class="info"><i class="bi bi-info"></i></NuxtLink>
            <div class="featured-card-img">
                <NuxtLink :to="`/casinos/all/${casino.slug}`">
                    <img :src="casino._embedded['wp:featuredmedia'][0].source_url" class="img-fluid"
                        :alt="`${casino.acf.casinoName.replace(/\s+/g, '-')}-image`"
                        :title="`Image of ${casino.acf.casinoName} brand`" loading="eager" width="87.19" height="57.13" />
                </NuxtLink>
            </div>
            <div class="featured-card-body">
                <h3 class="featured-card-title">{{ casino.acf.casinoName }}</h3>
                <div class="text-center">
                    <NuxtLink class="primary-btn"
                        :to="casino.acf.affiliateLink ? casino.acf.affiliateLink : casino.acf.casinoUrl" target="_blank"
                        :rel="casino.acf.affiliateLink ? 'noopener' : 'nofollow noopener'">
                        Play
                    </NuxtLink>

                </div>
                <p class="featured-card-text">
                    <NuxtLink :to="casino.acf.affiliateTerms ? casino.acf.affiliateTerms : casino.acf.casinoTerms"
                        target="_blank" :rel="casino.acf.affiliateTerms ? 'noopener' : 'nofollow noopener'">T&C Apply
                    </NuxtLink>
                </p>
            </div>
        </div>
    </div>
</template>


<style scoped>
.featured-card {
    background-color: #FFFFFF;
}
</style>
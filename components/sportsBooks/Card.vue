<script setup>
const { imgUrl, name, size, sportsbookRating, sportsbookTerms, sportsbookUrl, fullPath, slug, affiliateLink, affiliateTerms } = defineProps(['fullPath', 'slug', 'imgUrl', 'name', 'sportsbookRating', 'sportsbookUrl', 'sportsbookTerms', 'size', 'affiliateLink', 'affiliateTerms'])
</script>

<template>
    <div :class="`col-xl-${size ? size : '2'} col-md-6 mt-4`">
        <div class="category-card">
            <NuxtLink :to="`${fullPath}/${slug}`" class="info"><i class="bi bi-info"></i></NuxtLink>
            <div class="img-wrapper">
                <NuxtLink :to="`${fullPath}/${slug}`"> <img :src=imgUrl class="card-img-top"
                        :alt="`${name.replace(/\s+/g, '-')}-image`"></NuxtLink>
            </div>
            <div class="card-body">
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <p class="rating-num">{{ sportsbookRating }}</p>
                </div>
                <h5 class="card-title">{{ name }}</h5>
                <div class="text-center">

                    <NuxtLink class="primary-btn" :to="affiliateLink ? affiliateLink : sportsbookUrl" target="_blank"
                        :rel="affiliateLink ? 'noopener' : 'nofollow noopener'">
                        Play
                    </NuxtLink>
                </div>
                <p class="card-terms">
                    <NuxtLink :to="affiliateTerms ? affiliateTerms : sportsbookTerms" target="_blank"
                        :rel="affiliateTerms ? 'noopener' : 'nofollow noopener'">
                        T&C Apply
                    </NuxtLink>
                </p>
            </div>
        </div>
    </div>
</template>


<style scoped>
.category-card {
    position: relative;
    overflow: hidden;
    background: var(--color-light);
    background: #FFFFFF;
    box-shadow: 0 0 29px 0 rgba(0, 0, 0, 0.08);
    border-radius: 6px;
    z-index: 1;
    width: 100%;
    text-align: center;
    border: 1px solid var(--color-light-darker);
}

.card-img-top {
    width: fit-content;
}

.category-card .img-wrapper {
    height: 9vh;
    margin: 0 2.5rem;
}

.category-card .card-title {
    font-weight: 700;
    font-size: 1rem;
    margin-bottom: 0.5rem;
}

.category-card .card-terms {
    position: absolute;
    left: 0;
    right: 0;
    font-size: 10px;
    margin: 0 auto;
}

.card-title {
    text-align: center;
}

.rating p {
    margin-top: 0;
    margin-bottom: 1rem;
}

.card-body {
    padding: 18px;
}

a {
    text-decoration: none;
}

.card-items {
    font-size: 10px;
}

.card-terms a {
    color: #ff4f30;
}
</style>
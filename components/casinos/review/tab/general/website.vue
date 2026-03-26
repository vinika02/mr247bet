<script setup>
const { website, affiliateLink } = defineProps(['website', 'affiliateLink'])
</script>

<template>
    <div class="details-item">
        <p class="details-title">
            <i class="bi bi-diagram-2"></i>
            <span>Website</span>
        </p>
        <div class="details-text">
            <NuxtLink :to="affiliateLink ? affiliateLink : website" target="_blank"
                :rel="affiliateLink ? 'noopener' : 'nofollow noopener'">{{ website }}</NuxtLink>
        </div>
    </div>
</template>


<style scoped>
/* a {
    color: #4b4b4b;
} */
</style>
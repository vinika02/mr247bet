<script setup>
const { affiliateProgram } = defineProps(['affiliateProgram'])
</script>

<template>
    <div class="details-item">
        <p class="details-title">
            <i class="bi bi-share-fill"></i>
            <span>Affiliate Program</span>
        </p>
        <div class="details-text">{{ affiliateProgram }}</div>
    </div>
</template>


<style scoped></style>
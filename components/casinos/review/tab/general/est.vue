<script setup>
const { established } = defineProps(['established'])
</script>

<template>
    <div class="details-item">
        <p class="details-title">
            <i class="bi bi-rocket"></i>
            <span>Established</span>
        </p>
        <div class="details-text">{{ established }}</div>
    </div>
</template>


<style scoped></style>
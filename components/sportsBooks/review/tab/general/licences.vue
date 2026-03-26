<script setup>
const { licenses } = defineProps(['licenses'])
</script>

<template>
    <div class="details-item">
        <p class="details-title">
            <i class="bi bi-check2-circle"></i>
            <span>Licences</span>
        </p>
        <div class="details-text">{{ licenses }}</div>
    </div>
</template>

<style scoped></style>
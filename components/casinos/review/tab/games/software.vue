<script setup>
const { gameProviders } = defineProps(['gameProviders'])
</script>

<template>
    <div class="details-item">
        <p class="details-title">
            <i class="bi bi-controller"></i>
            <span>Software</span>
        </p>
        <div class="details-text">
            {{ gameProviders }}
        </div>
    </div>
</template>


<style scoped></style>
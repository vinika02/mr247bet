<script setup>
const { company } = defineProps(['company'])
</script>

<template>
    <div class="details-item">
        <p class="details-title">
            <i class="bi bi-person-circle"></i>
            <span>Company</span>
        </p>
        <div class="details-text">{{ company }}</div>
    </div>
</template>


<style scoped></style>
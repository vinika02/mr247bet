<script setup>
const { languages } = defineProps(['languages'])
</script>

<template>
    <div class="details-item">
        <p class="details-title">
            <i class="bi bi-translate"></i>
            <span>Languages</span>
        </p>
        <div class="details-text">{{ languages }}</div>
    </div>
</template>


<style scoped></style>
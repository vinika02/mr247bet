<script setup>
const { currencies } = defineProps(['currencies'])
</script>

<template>
    <div class="details-item">
        <p class="details-title">
            <i class="bi bi-cash-coin"></i>
            <span>Currencies</span>
        </p>
        <div class="details-text">
            {{ currencies }}
        </div>
    </div>
</template>


<style scoped></style>
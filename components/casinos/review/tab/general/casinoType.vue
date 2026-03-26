<script setup>
const { casinoType } = defineProps(['casinoType'])
</script>

<template>
    <div class="details-item">
        <p class="details-title">
            <i class="bi bi-joystick"></i>
            <span>Casino Type</span>
        </p>
        <div class="details-text">{{ casinoType }}</div>
    </div>
</template>


<style scoped></style>
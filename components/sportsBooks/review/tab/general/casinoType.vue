<script setup>
const { sportsbookType } = defineProps(['sportsbookType'])
</script>

<template>
    <div class="details-item">
        <p class="details-title">
            <i class="bi bi-joystick"></i>
            <span>Sportsbook Type</span>
        </p>
        <div class="details-text">{{ sportsbookType }}</div>
    </div>
</template>


<style scoped></style>
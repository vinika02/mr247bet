<script setup>
const { withdrawalTimes } = defineProps(['withdrawalTimes'])
</script>

<template>
    <div class="details-item">
        <p class="details-title">
            <i class="bi bi-clock"></i>
            <span>Withdrawal Times</span>
        </p>
        <div class="details-text">
            <ul>
                <li v-for="time in withdrawalTimes">{{ time }}</li>
            </ul>
        </div>
    </div>
</template>


<style scoped></style>
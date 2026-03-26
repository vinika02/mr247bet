<script setup>
const { withdrawalLimit } = defineProps(['withdrawalLimit'])
</script>

<template>
    <div class="details-item">
        <p class="details-title">
            <i class="bi bi-clock-history"></i>
            <span>Withdrawal Limit</span>
        </p>
        <div class="details-text">
            {{ withdrawalLimit }}
        </div>
    </div>
</template>


<style scoped></style>
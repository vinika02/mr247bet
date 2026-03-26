
<script setup>
const { withdrawalMethods } = defineProps(['withdrawalMethods'])
</script>

<template>
    <div class="details-item">
        <p class="details-title">
            <i class="bi bi-database-dash"></i>
            <span>Withdrawal Methods</span>
        </p>
        <div class="details-text">
            {{ withdrawalMethods }}
        </div>
    </div>
</template>

<style scoped></style>
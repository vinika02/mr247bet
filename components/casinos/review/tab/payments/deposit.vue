<script setup>
const { depositMethods } = defineProps(['depositMethods'])
</script>

<template>
    <div class="details-item">
        <p class="details-title">
            <i class="bi bi-database-add"></i>
            <span>Deposit Methods</span>
        </p>
        <div class="details-text">
            {{ depositMethods }}
        </div>
    </div>
</template>


<style scoped></style>
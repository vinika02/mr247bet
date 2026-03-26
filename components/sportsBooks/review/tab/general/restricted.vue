<script setup>
const { restrictedCountries } = defineProps(['restrictedCountries'])
</script>

<template>
    <div class="details-item">
        <p class="details-title">
            <i class="bi bi-x-circle"></i>
            <span>Restricted Countries</span>
        </p>
        <div class="details-text">
            {{ restrictedCountries }}
        </div>
    </div>
</template>


<style scoped></style>
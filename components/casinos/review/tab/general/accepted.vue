<script setup>
const { acceptedCountries } = defineProps(['acceptedCountries'])
</script>

<template>
    <div class="details-item">
        <p class="details-title">
            <i class="bi bi-check-circle"></i>
            <span>Accepted Countries</span>
        </p>
        <div class="details-text">
            {{ acceptedCountries }}
        </div>
    </div>
</template>


<style scoped></style>
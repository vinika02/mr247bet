<script setup>
const route = useRoute()
</script>

<template>
    <div>
        <h1>
            {{ route.params.slug }} page
        </h1>
    </div>
</template>


<style scoped>
div {
    padding-top: 8rem;
    display: flex;
    justify-content: center;
}
</style>
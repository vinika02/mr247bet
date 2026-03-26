<script setup>
const { imgUrl, name } = defineProps(['imgUrl', 'name'])
</script>

<template>
    <div class="card-wrapper">
        <div class="card">
            <span href="#" class="info"><i class="bi bi-info"></i></span>
            <div class="img-wrapper">
                <img :src=imgUrl class="card-img-top" :alt="`${name.replace(/\s+/g, '-')}-image`"
                    :title="`Image of ${name} brand`" loading="eager" width="120" height="80">
            </div>
            <div class="card-body">
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <p>9.2</p>
                </div>
                <h4 class="card-title">{{ name }}</h4>
                <div class="text-center">
                    <NuxtLink to="/" class="primary-btn">Play</NuxtLink>
                </div>
            </div>
        </div>
    </div>
</template>


<style scoped>
h4 {
    font-size: 20px;
}

.card {
    background-color: #FFFFFF;
}
</style>
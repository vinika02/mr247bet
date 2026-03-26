<script setup>
const { imgUrl, name, itemClass } = defineProps(['imgUrl', 'name', 'itemClass'])
</script>

<template>
    <div :class="itemClass">
        <div class="card">
            <a href="#" class="info"><i class="bi bi-info"></i></a>
            <div class="img-wrapper">
                <img :src=imgUrl class="card-img-top" :alt="`${name.replace(/\s+/g, '-')}-image`">
            </div>
            <div class="card-body">
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <p>9.2</p>
                </div>
                <h5 class="card-title">{{ name }}</h5>
                <div class="text-center"><a href="#" class="primary-btn">Play</a></div>
            </div>
        </div>
    </div>
</template>


<style scoped></style>
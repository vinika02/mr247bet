<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="newest-casinos-section" class="newest-casinos-section">
        <div class="container">
            <div class="row">
                <div class="newest-casinos">
                    <h3>Newest Casinos</h3>
                    <p>Browse reliable Newest Casinos wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselNewest" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselNewest" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselNewest" />
                    <div class="text-center read-more-btn">
                        <NuxtLink to="/casinos/newest" class="primary-btn">+ View More</NuxtLink>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
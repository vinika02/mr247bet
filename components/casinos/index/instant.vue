<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="instant-play-casinos-section" class="instant-play-casinos-section">
        <div class="container">
            <div class="row">
                <div class="instant-play-casinos">
                    <h3>Instant Play Casinos</h3>
                    <p>Browse reliable Instant Play Casinos wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouseInstantPlay" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouseInstantPlay" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouseInstantPlay" />
                    <div class="text-center read-more-btn">
                        <NuxtLink to="/casinos/instant-play" class="primary-btn">+ View More</NuxtLink>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="spotlight" class="spotlight">
        <div class="container">
            <div class="row">
                <div class="in-play-sportsbooks">
                    <h3>In-Play Betting Sportsbooks</h3>
                    <p class="sub-header">
                        Browse reliable Best-Odds In-Play Betting wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselInPlay" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselInPlay" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselInPlay" />
                    <div class="text-center read-more-btn">
                        <a href="#" class="secondary-btn">+ View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
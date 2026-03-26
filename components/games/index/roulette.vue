<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="roulette-games-section" class="roulette-games-section">
        <div class="container">
            <div class="row">
                <div class="roulette-games">
                    <h3>Roulette Games</h3>
                    <p>Browse reliable Roulette Games wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselRouletteGames" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselRouletteGames" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselRouletteGames" />
                    <div class="text-center read-more-btn"><a href="#" class="primary-btn">+ View More</a></div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="casino-games-section" class="casino-games-sectio">
        <div class="container">
            <div class="row">
                <div class="casino-games">
                    <h3> Casino Games</h3>
                    <p>Browse reliable Casino Game wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselCasinoGames" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselCasinoGames" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselCasinoGames" />
                    <div class="text-center read-more-btn"><a href="#" class="primary-btn">+ View More</a></div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
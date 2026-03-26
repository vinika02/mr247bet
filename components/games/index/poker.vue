<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="poker-games-section" class="poker-games-section">
        <div class="container">
            <div class="row">
                <div class="poker-games">
                    <h3>Poker Games</h3>
                    <p>Browse reliable Poker Games wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselPokerGames" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselPokerGames" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselPokerGames" />
                    <div class="text-center read-more-btn"><a href="#" class="primary-btn">+ View More</a></div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
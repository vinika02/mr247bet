<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="lotto-games-section" class="lotto-games-section">
        <div class="container">
            <div class="row">
                <div class="lotto-games">
                    <h3>Lotto Games</h3>
                    <p>Browse reliable Lotto Games wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselLottoGames" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselLottoGames" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselLottoGames" />
                    <div class="text-center read-more-btn"><a href="#" class="primary-btn">+ View More</a></div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
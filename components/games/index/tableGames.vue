<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="table-games-section" class="table-games-section">
        <div class="container">
            <div class="row">
                <div class="table-games">
                    <h3>Table Games</h3>
                    <p>Browse reliable Table Games wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselTableGames" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselTableGames" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselTableGames" />
                    <div class="text-center read-more-btn"><a href="#" class="primary-btn">+ View More</a></div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
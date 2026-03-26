<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="slot-games-section" class="slot-games-section">
        <div class="container">
            <div class="row">
                <div class="slot-games">
                    <h3>Slot Games</h3>
                    <p>Browse reliable Slot Games wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselSlotGames" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselSlotGames" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselSlotGames" />
                    <div class="text-center read-more-btn"><a href="#" class="primary-btn">+ View More</a></div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
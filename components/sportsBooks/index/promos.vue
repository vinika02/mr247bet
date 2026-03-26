<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="promos-sportsbooks-section" class="promos-sportsbooks-section">
        <div class="container">
            <div class="row">
                <div class="crypto-sportsbooks">
                    <h3>Promos & Bonuses Sportsbooks</h3>
                    <p>Browse reliable Promos & Bonuses Sportsbooks wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselPromos" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselPromos" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselPromos" />
                    <div class="text-center read-more-btn"><a href="#" class="primary-btn">+ View More</a></div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
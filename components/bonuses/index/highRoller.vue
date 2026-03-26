<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="high-roller-bonuses-section" class="high-roller-bonuses-section">
        <div class="container">
            <div class="row">
                <div class="crypto-sportsbooks">
                    <h3>High Roller Bonuses</h3>
                    <p>High Roller Bonuses wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselHighRoller" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselHighRoller" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselHighRoller" />
                    <div class="text-center read-more-btn"><a href="#" class="primary-btn">+ View More</a></div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
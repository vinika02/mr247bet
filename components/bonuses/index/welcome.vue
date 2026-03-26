<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="welcome-bonuses-section" class="welcome-bonuses-section">
        <div class="container">
            <div class="row">
                <div class="crypto-sportsbooks">
                    <h3>Welcome Bonuses</h3>
                    <p>Browse reliable Welcome Bonuses wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselWelcome" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselWelcome" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselWelcome" />
                    <div class="text-center read-more-btn"><a href="#" class="primary-btn">+ View More</a></div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="no-wagering-bonuses-section" class="welcome-bonuses-section">
        <div class="container">
            <div class="row">
                <div class="crypto-sportsbooks">
                    <h3>No Wagering Bonuses</h3>
                    <p>Browse reliable No Wagering Bonuses wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselNoWagering" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselNoWagering" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselNoWagering" />
                    <div class="text-center read-more-btn"><a href="#" class="primary-btn">+ View More</a></div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="crypto-sportsbooks-section" class="crypto-sportsbooks-section">
        <div class="container">
            <div class="row">
                <div class="crypto-sportsbooks">
                    <h3>Crypto Sportsbooks</h3>
                    <p>Browse reliable Crypto Sportsbooks wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselCrypto" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselCrypto" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselCrypto" />
                    <div class="text-center read-more-btn"><a href="#" class="primary-btn">+ View More</a></div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
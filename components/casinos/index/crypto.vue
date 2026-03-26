<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="crypto-casinos-section" class="crypto-casinos-section">
        <div class="container">
            <div class="row">
                <div class="crypto-casinos">
                    <h3>Crypto Casinos</h3>
                    <p>Browse reliable Crypto Casinos wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselCrypto" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselCrypto" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselCrypto" />
                    <div class="text-center read-more-btn">
                        <NuxtLink to="/casinos/crypto" class="primary-btn">+ View More</NuxtLink>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="spotlight" class="spotlight">
        <div class="container">
            <div class="row">
                <div class="cashback-bonuses">
                    <h3>Cashback Bonuses</h3>
                    <p class="sub-header">
                        Browse reliable Cashback Bonuses wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselCashback" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselCashback" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselCashback" />
                    <div class="text-center read-more-btn">
                        <a href="#" class="secondary-btn">+ View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
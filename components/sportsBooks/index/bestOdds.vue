<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="spotlight" class="spotlight">
        <div class="container">
            <div class="row">
                <div class="best-odds-sportsbooks">
                    <h3>Best-Odds Sportsbooks</h3>
                    <p class="sub-header">
                        Browse reliable Best-Odds Sportsbooks wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselBestOdds" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselBestOdds" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselBestOdds" />
                    <div class="text-center read-more-btn">
                        <a href="#" class="secondary-btn">+ View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
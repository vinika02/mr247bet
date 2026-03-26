<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="spotlight" class="spotlight">
        <div class="container">
            <div class="row">
                <div class="baccarat-games">
                    <h3>Baccarat Games</h3>
                    <p class="sub-header">
                        Browse reliable Baccarat Games wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselBaccarat" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselBaccarat" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselBaccarat" />
                    <div class="text-center read-more-btn">
                        <a href="#" class="secondary-btn">+ View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
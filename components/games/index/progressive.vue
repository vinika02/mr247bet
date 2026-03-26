<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="spotlight" class="spotlight">
        <div class="container">
            <div class="row">
                <div class="progressive-games">
                    <h3>Progressive Jackpot Slots</h3>
                    <p class="sub-header">
                        Browse reliable Progressive Jackpot Slots wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselProgressive" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselProgressive" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselProgressive" />
                    <div class="text-center read-more-btn">
                        <a href="#" class="secondary-btn">+ View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
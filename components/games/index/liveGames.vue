<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="spotlight" class="spotlight">
        <div class="container">
            <div class="row">
                <div class="live-games">
                    <h3>Live Games</h3>
                    <p class="sub-header">
                        Browse reliable Live Games wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselLiveGames" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselLiveGames" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselLiveGames" />
                    <div class="text-center read-more-btn">
                        <a href="#" class="secondary-btn">+ View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
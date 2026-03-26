<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="spotlight" class="spotlight">
        <div class="container">
            <div class="row">
                <div class="free-to-play-games">
                    <h3>Free To Play Games</h3>
                    <p class="sub-header">
                        Browse reliable Free To Play Games wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselFreeToPlay" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselFreeToPlay" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselFreeToPlay" />
                    <div class="text-center read-more-btn">
                        <a href="#" class="secondary-btn">+ View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
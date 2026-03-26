<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="spotlight" class="spotlight">
        <div class="container">
            <div class="row">
                <div class="bingo-games">
                    <h3>Bingo Games</h3>
                    <p class="sub-header">
                        Browse reliable Bingo Games wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselBingo" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselBingo" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselBingo" />
                    <div class="text-center read-more-btn">
                        <a href="#" class="secondary-btn">+ View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
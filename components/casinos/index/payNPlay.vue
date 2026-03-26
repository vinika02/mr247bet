<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="spotlight" class="spotlight">
        <div class="container">
            <div class="row">
                <div class="Pay-N-Play-casinos">
                    <h3>Pay 'N' Play Casinos</h3>
                    <p class="sub-header">
                        Browse reliable Pay 'N' Play Casinos wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselPayNPlay" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselPayNPlay" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselPayNPlay" />
                    <div class="text-center read-more-btn">
                        <NuxtLink to="/casinos/pay-n-play" class="secondary-btn">+ View More</NuxtLink>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
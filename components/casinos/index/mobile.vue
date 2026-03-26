<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="spotlight" class="spotlight">
        <div class="container">
            <div class="row">
                <div class="mobile-casinos">
                    <h3>Mobile Casinos</h3>
                    <p class="sub-header">
                        Browse reliable Mobile Casinos wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselMobile" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselMobile" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselMobile" />
                    <div class="text-center read-more-btn">
                        <NuxtLink to="/casinos/mobile" class="secondary-btn">+ View More</NuxtLink>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
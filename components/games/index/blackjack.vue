<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="spotlight" class="spotlight">
        <div class="container">
            <div class="row">
                <div class="blackjack-games">
                    <h3>Blackjack Games</h3>
                    <p class="sub-header">
                        Browse reliable Blackjack Games wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselBlackjack" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselBlackjack" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselBlackjack" />
                    <div class="text-center read-more-btn">
                        <a href="#" class="secondary-btn">+ View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
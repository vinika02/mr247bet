<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="spotlight" class="spotlight">
        <div class="container">
            <div class="row">
                <div class="match-deposit">
                    <h3>Match Deposit Bonuses</h3>
                    <p class="sub-header">
                        Browse reliable Match Deposit Bonuses wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselMatchDeposit" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselMatchDeposit" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselMatchDeposit" />
                    <div class="text-center read-more-btn">
                        <a href="#" class="secondary-btn">+ View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
<script setup>
const { items } = defineProps(['items'])
</script>

<template>
    <section id="no-deposit-section" class="no-deposit-section">
        <div class="container">
            <div class="row">
                <div class="no-deposit-bonuses">
                    <h3>No-Deposit Bonuses</h3>
                    <p>Browse reliable No-Deposit Bonuses wearing the Mr247Bet Certificate of Trust.</p>
                    <CasinosIndexCarouselPc :items="items" carouselId="carouselNoDeposit" />
                    <CasinosIndexCarouselTablet :items="items" carouselId="carouselNoDeposit" />
                    <CasinosIndexCarouselMob :items="items" carouselId="carouselNoDeposit" />
                    <div class="text-center read-more-btn"><a href="#" class="primary-btn">+ View More</a></div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>
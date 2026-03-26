<script setup>
const { data: sportsbooks } = await useFetch(() => '/AWS/posts?perPage=18&page=1&categories=76')
let sportsbooks1 = sportsbooks.value.slice(0, 6)
let sportsbooks2 = sportsbooks.value.slice(6, 12)
let sportsbooks3 = sportsbooks.value.slice(12, sportsbooks.length)

let sportsbookItems = {
    carousel1: sportsbooks1,
    carousel2: sportsbooks2,
    carousel3: sportsbooks3
}

// console.log('sportsbookItems:', sportsbookItems)
</script>

<template>
    <!-- ======= Sport Review Section ======= -->
    <section id="sport-review" class="sport-review">
        <div class="container">

            <h3>Sportsbooks Review</h3>
            <p class="sub-header">Discover new Sportsbook Reviews, bonuses and tips by Mr247Bet</p>

            <HomeSportsCarouselPc :sportsbookItems="sportsbookItems" />
            <HomeSportsCarouselTablet :sportsbookItems="sportsbookItems" />
            <HomeSportsCarouselMob :sportsbookItems="sportsbookItems" />

            <div class="text-center read-more-btn">
                <!-- <NuxtLink to="/sportsbooks" class="secondary-btn">+ View More</NuxtLink> -->
            </div>

        </div>
    </section><!-- End Tab Section -->
</template>


<style scoped></style>
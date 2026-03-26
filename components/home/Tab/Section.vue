<script setup>
const { data: casinos } = await useFetch(() => '/AWS/posts?perPage=18&page=1&categories=28')
let casinos1 = casinos.value.slice(0, 6)
let casinos2 = casinos.value.slice(6, 12)
let casinos3 = casinos.value.slice(12, casinos.length)

let casinoItems = {
    carousel1: casinos1,
    carousel2: casinos2,
    carousel3: casinos3
}

// console.log('posts:', posts.value)
// console.log('casinos1:', casinos1)
// console.log('casinos2:', casinos2)
// console.log('casinos3:', casinos3)
// console.log('casinoItems:', casinoItems)


</script>

<template>
    <!-- Tabs Section  -->
    <section id="tab-section" class="tab-section">
        <div class="container">
            <div class="row">
                <!-- Tabs selectors -->
                <div class="d-flex justify-content-around">
                    <!-- <ul class="nav nav-tabs" id="myTab" role="tablist"> -->
                    <!-- <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true">Casinos</button>
                        </li> -->
                    <!-- <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                                aria-selected="false">Bonuses</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane"
                                aria-selected="false">Games</button>
                        </li> -->
                    <!-- </ul> -->
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                        tabindex="0">
                        <!-- Casino Tab -->
                        <h3>Casinos</h3>
                        <p>Discover the latest news and the best casino offers in one place.</p>
                        <HomeTabCasinoCarouselPc :casinoItems="casinoItems" />
                        <HomeTabCasinoCarouselTablet :casinoItems="casinoItems" />
                        <HomeTabCasinoCarouselMob :casinoItems="casinoItems" />
                        <div class="text-center read-more-btn">
                            <!-- <NuxtLink to="/casinos" class="primary-btn">+ View More</NuxtLink> -->
                        </div>
                    </div>
                    <!-- End of Casino Tab -->

                    <!-- <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                        tabindex="0">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                            tabindex="0">
                            <h3>Bonuses</h3>
                            <p>Discover the latest bonuses and offers from Mr247Bet, all in one place.</p>
                            <HomeTabBonusesCarouselPc :items="items" />
                            <HomeTabBonusesCarouselTablet :items="items" />
                            <HomeTabBonusesCarouselMob :items="items" />
                            <div class="text-center read-more-btn">
                                <NuxtLink to="/bonuses" class="primary-btn">+ View More</NuxtLink>
                            </div>
                        </div>
                    </div>  -->

                    <!-- End of Bonuses Tab -->

                    <!-- <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                        tabindex="0">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                            tabindex="0">

                            <h3>Games</h3>
                            <p>Easily access the latest games and enjoy the best selection of new online casinos through
                                Mr247Bet.</p>
                            <HomeTabGamesCarouselPc :items="items" />
                            <HomeTabGamesCarouselTablet :items="items" />
                            <HomeTabGamesCarouselMob :items="items" />
                            <div class="text-center read-more-btn">
                                <NuxtLink to="/games" class="primary-btn">+ View More</NuxtLink>
                            </div>
                        </div>
                    </div>  -->

                    <!-- End of Games Tab -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Tab Section -->
</template>


<style scoped></style>
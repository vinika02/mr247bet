<script setup>
import casinos from '../../assets/img/hero/casino.jpg'
import sportbooks from '../../assets/img/hero/sport.jpg'
import bonuses from '../../assets/img/hero/bonus.jpg'
import games from '../../assets/img/hero/games.jpg'
</script>

<template>
    <!-- Home Hero Section  -->
    <section id="heroHome" class="hero">
        <div class="container position-relative">
            <div class="row gy-5">
                <div
                    class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h1>Get the most relevant information before making any decisions!</h1>
                    <p>Casino reviews made by Mr247Bet experts</p>
                    <!-- <label for="exampleDataList" class="form-label">
                        <div class="input-group mb-12">
                            <input type="text" class="form-control" list="datalistOptions" id="exampleDataList"
                                placeholder="Search for the best casinos, sportsbooks, bonuses and games"
                                aria-describedby="basic-addon2">
                            <datalist id="datalistOptions">

                            </datalist>
                            <div class="input-group-append">
                                <span class="primary-btn"><i class="bi bi-search"></i></span>
                            </div>
                        </div>
                    </label> -->
                </div>
            </div>
        </div>

        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">

                    <div class="col-xl-3 col-md-6">
                        <div class="icon-box">
                            <h2 class="title">
                                <NuxtLink to="/casinos/all" class="stretched-link">Casinos</NuxtLink>
                            </h2>
                            <div class=""><img :src=casinos class="img-fluid" alt="casinos-image"></div>
                        </div>
                    </div>
                    <!--End Icon Box -->

                    <div class="col-xl-3 col-md-6">
                        <div class="icon-box">
                            <h2 class="title">
                                <NuxtLink to="/sportsbooks/all" class="stretched-link">Sportsbooks</NuxtLink>
                            </h2>
                            <div class=""><img :src=sportbooks class="img-fluid" alt="sportbooks-image"></div>
                        </div>
                    </div>
                    <!--End Icon Box -->

                    <div class="col-xl-3 col-md-6">
                        <div class="icon-box">
                            <h2 class="title">
                                <!-- <NuxtLink to="/bonuses" class="stretched-link">Bonuses</NuxtLink> -->
                                <div class="temp">
                                    <a class="comingSoonText" href="">Bonuses</a>
                                    <a class="comingSoonText" href="">Coming soon</a>
                                </div>
                            </h2>
                            <div class="comingSoon"><img :src=bonuses class="img-fluid" alt="bonuses-image"></div>
                        </div>
                    </div>
                    <!--End Icon Box -->

                    <div class="col-xl-3 col-md-6">
                        <div class="icon-box">
                            <h2 class="title">
                                <!-- <NuxtLink to="/games" class="stretched-link">Games</NuxtLink> -->
                                <div class="temp">
                                    <a class="comingSoonText" href="">Games</a>
                                    <a class="comingSoonText" href="">Coming soon</a>
                                </div>
                            </h2>
                            <div class="comingSoon"><img :src=games class="img-fluid" alt="games-image"></div>
                        </div>
                    </div>
                    <!--End Icon Box -->
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero Section -->
</template>


<style scoped>
.stretched-link {
    color: black;
}

.comingSoon {
    filter: grayscale(100%) brightness(30%) opacity(50%) sepia(0%);
}


.hero .icon-box:nth-of-type(1),
.hero .icon-box:nth-of-type(2) {
    background-color: black;
}
</style>
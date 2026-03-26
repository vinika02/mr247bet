<script setup>

</script>

<template>
    <!-- Casinos main category Hero Section  -->
    <section id="heroCasinos" class="hero">
        <div class="container position-relative">
            <div class="row gy-5">
                <div
                    class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h1>Online Casinos</h1>
                    <p>Hot Casino Categories</p>
                    <label for="exampleDataList" class="form-label">
                        <div class="input-group mb-12">
                            <input type="text" class="form-control" list="datalistOptions" id="exampleDataList"
                                placeholder="Search for the best casinos, sportsbooks, bonuses and games"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <a href="#" class="primary-btn"><i class="bi bi-search"></i></a>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </div>

        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">

                    <div class="col-xl-2 col-md-6">
                        <div class="icon-box">
                            <h4 class="title"><Nuxt-Link to="/casinos/newest" class="stretched-link">Newest
                                    Casinos</Nuxt-Link></h4>
                            <div class=""><img src="~/assets/img/newest-casinos.jpg" class="img-fluid" alt=""></div>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-2 col-md-6">
                        <div class="icon-box">
                            <h4 class="title"><Nuxt-Link to="/casinos/expert-rated"
                                    class="stretched-link">Expert-Rated</Nuxt-Link></h4>
                            <div class=""><img src="~/assets/img/expert-rated.jpg" class="img-fluid" alt=""></div>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-2 col-md-6">
                        <div class="icon-box">
                            <h4 class="title"><Nuxt-Link to="/casinos/crypto" class="stretched-link">Crypto
                                    Casinos</Nuxt-Link></h4>
                            <div class=""><img src="~/assets/img/crypto-casinos.jpg" class="img-fluid" alt=""></div>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-2 col-md-6">
                        <div class="icon-box">
                            <h4 class="title"><Nuxt-Link to="/casinos/mobile" class="stretched-link">Mobile
                                    Casinos</Nuxt-Link></h4>
                            <div class=""><img src="~/assets/img/mobile-casinos.jpg" class="img-fluid" alt=""></div>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-2 col-md-6">
                        <div class="icon-box">
                            <h4 class="title"><Nuxt-Link to="/casinos/instant-play" class="stretched-link">Instant Play
                                    Casinos</Nuxt-Link></h4>
                            <div class=""><img src="~/assets/img/instant-play-casinos.jpg" class="img-fluid" alt=""></div>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-2 col-md-6">
                        <div class="icon-box">
                            <h4 class="title"><Nuxt-Link to="/casinos/pay-n-play" class="stretched-link">Pay 'N' Play
                                    Casinos</Nuxt-Link></h4>
                            <div class=""><img src="~/assets/img/pay-n-play-casinos.jpg" class="img-fluid" alt=""></div>
                        </div>
                    </div><!--End Icon Box -->


                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>